<?php

class OrderController extends Controller {

    public $_model;

//    public function filters() {
//        return array(
//            'accessControl',
//        );
//    }
    public function allowAction() {
        return array('view', 'create', 'confirm', 'success', 'failure', 'orderhistory', 'checkPaypal');
    }

    public function actionSlip($id) {
        if ($model = $this->loadModel($id))
            $this->render(Shop::module()->slipView, array('model' => $model));
    }

    public function actionInvoice($id) {
        if ($model = $this->loadModel($id))
            $this->render(Shop::module()->invoiceView, array('model' => $model));
    }

    public function beforeAction($action) {
        $this->layout = Shop::module()->layout;
        return parent::beforeAction($action);
    }

    public function actionView() {
        $this->render('view', array(
            'model' => $this->loadModel(),
        ));
    }

    /** Creation of a new Order
     * Before we create a new order, we need to gather Customer information.
     * If the user is logged in, we check if we already have customer information.
     * If so, we go directly to the Order confirmation page with the data passed
     * over. Otherwise we need the user to enter his data, and depending on
     * whether he is logged in into the system it is saved with his user
     * account or once just for this order.
     */
    public function actionCreate($customer = null, $payment_method = null, $shipping_method = null) {

        $user = User::model()->findByPk(Yii::app()->user->id);

        if (isset($_POST['ShippingMethod'])) {
            Yii::app()->user->setState('shipping_method', $_POST['ShippingMethod']);
        }
        if (isset($_POST['PaymentMethod'])) {
            Yii::app()->user->setState('payment_method', $_POST['PaymentMethod']);
            $payment_method = PaymentMethod::model()->findByPk($_POST['PaymentMethod']);
            if (strtolower($payment_method->title) == 'paypal') {
                $this->actionCheckPaypal();
            }
        }

        if (isset($_POST['DeliveryAddress'])) {
            if (Address::isEmpty($_POST['DeliveryAddress'])) {
                Shop::setFlash(Shop::t('Delivery address is not complete! Please fill in all fields to set the Delivery address'));
            } else {
                $deliveryAddress = new DeliveryAddress;
                $deliveryAddress->attributes = $_POST['DeliveryAddress'];
                if ($deliveryAddress->save()) {
                    $model = Shop::getCustomer();

                    if (isset($_POST['toggle_delivery'])) {
                        $model->delivery_address_id = $deliveryAddress->id;
                    } else {
                        $model->delivery_address_id = 0;
                    }
                    $model->save(false, array('delivery_address_id'));
                }
            }
        }

        if (isset($_POST['BillingAddress'])) {
            if (Address::isEmpty($_POST['BillingAddress'])) {
                Shop::setFlash(Shop::t('Billing address is not complete! Please fill in all fields to set the Billing address'));
            } else {
                $BillingAddress = new BillingAddress;
                $BillingAddress->attributes = $_POST['BillingAddress'];
                if ($BillingAddress->save()) {
                    $model = Shop::getCustomer();
                    if (isset($_POST['toggle_billing'])) {
                        $model->billing_address_id = $BillingAddress->id;
                    } else {
                        $model->billing_address_id = 0;
                    }
                    $model->save(false, array('billing_address_id'));
                }
            }
        }
        if (!$customer)
            $customer = Yii::app()->user->getState('customer_id');
        if (!Yii::app()->user->isGuest && !$customer)
            $customer = Customer::model()->find('user_id = :user_id ', array(
                ':user_id' => Yii::app()->user->id));
        if (!$payment_method)
            $payment_method = Yii::app()->user->getState('payment_method');
        if (!$shipping_method)
            $shipping_method = Yii::app()->user->getState('shipping_method');


        if (!$customer) {
            $this->render('/customer/create', array(
                'action' => array('//shop/customer/create'),
                'user' => $user,)
            );
            Yii::app()->end();
        }
        if (!$shipping_method) {
            $this->render('/shippingMethod/choose', array(
                'customer' => Shop::getCustomer()));
            Yii::app()->end();
        }
        if (!$payment_method) {
            $this->render('/paymentMethod/choose', array(
                'customer' => Shop::getCustomer()));
            Yii::app()->end();
        }

        if (isset($_GET['PayerID'])) {
            $_SESSION['payer_id'] = $_GET['PayerID'];
        }


        if ($customer && $payment_method && $shipping_method) {
            if (is_numeric($customer))
                $customer = Customer::model()->findByPk($customer);
            if (is_numeric($shipping_method))
                $shipping_method = ShippingMethod::model()->findByPk($shipping_method);
            if (is_numeric($payment_method))
                $payment_method = PaymentMethod::model()->findByPk($payment_method);

            $this->render('/order/create', array(
                'customer' => $customer,
                'shippingMethod' => $shipping_method,
                'paymentMethod' => $payment_method,
            ));
        }
    }

    public function actionConfirm() {
        $captureOrder = array();
        $captureOrder['products'] = array();
        $captureOrder['shipping'] = array();
        $captureOrder['payment'] = array();

        Yii::app()->user->setState('order_comment', @$_POST['Order']['Comment']);
        if (isset($_POST['accept_terms']) && $_POST['accept_terms'] == 1) {
            $order = new Order();
            $customer = Shop::getCustomer();
            $cart = Shop::getCartContent();
            $temp = array();
            foreach ($cart as $product) {
                $temp['amount'] = $product['amount'];
                $myProduct = Products::model()->findByPk($product['product_id']);

                $temp['name'] = $myProduct['title'];
                $temp['price'] = $myProduct->price;
                $temp['id'] = $product['product_id'];
                $myTax0 = Tax::model()->findByPk($myProduct->tax_id);
                $temp['tax_name'] = $myTax0->title;
                $temp['tax_value'] = $myTax0->percent;


                $temp['variations'] = [];
                if (array_key_exists('Variations', $product)) {
                    foreach ($product['Variations'] as $key => $variation) {
                        $mySpec = ProductSpecification::model()->findByPk($key);
                        $variTemp['spec_name'] = $mySpec->title;
                        $myVari = ProductVariation::model()->findByPk($variation[0]);
                        $variTemp['variation_name'] = $myVari->title;
                        $variTemp['variation_adjust'] = $myVari->price_adjustion;
                        array_push($temp['variations'], $variTemp);
                    }
                }
                array_push($captureOrder['products'], $temp);
            }



            $order->customer_id = $customer->customer_id;

            $address = new DeliveryAddress();
            if ($customer->deliveryAddress)
                $address->attributes = $customer->deliveryAddress->attributes;
            else
                $address->attributes = $customer->address->attributes;
            $address->save();
            $order->delivery_address_id = $address->id;

            $address = new BillingAddress();
            if ($customer->billingAddress)
                $address->attributes = $customer->billingAddress->attributes;
            else
                $address->attributes = $customer->address->attributes;
            $address->save();
            $order->billing_address_id = $address->id;
            $order->ordering_date = time();

            $order->payment_method = Yii::app()->user->getState('payment_method');
            $myPay = PaymentMethod::model()->findByPk($order->payment_method);
            $captureOrder['payment']['method'] = $myPay->title;
            $myTax1 = Tax::model()->findByPk($myPay->tax_id);
            $captureOrder['payment']['tax_name'] = $myTax1->title;
            $captureOrder['payment']['tax_value'] = $myTax1->percent;

            $order->shipping_method = Yii::app()->user->getState('shipping_method');
            $myShip = ShippingMethod::model()->findByPk($order->shipping_method);
            $captureOrder['shipping']['method'] = $myShip->title;
            $myTax2 = Tax::model()->findByPk($myPay->tax_id);
            $captureOrder['shipping']['tax_name'] = $myTax2->title;
            $captureOrder['shipping']['tax_value'] = $myTax2->percent;



            $order->comment = Yii::app()->user->getState('order_comment');



            //paypal
            if (strtolower($myPay->title) == 'paypal') {
                $paypal = new PayPal();
                $total = round(Shop::getTotalPriceNumber());
                $resArray = $paypal->ConfirmPayment($total);
                $ack = strtoupper($resArray["ACK"]);

                if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING") {

                } else {
                    $ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
                    $ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
                    $ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
                    $ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);

                    $error = "SetExpressCheckout API call failed.";
                    $error = $error . "<br>Detailed Error Message: " . $ErrorLongMsg;
                    $error = $error . "<br>Short Error Message: " . $ErrorShortMsg;
                    $error = $error . "<br>Error Code: " . $ErrorCode;
                    $error = $error . "<br>Error Severity Code: " . $ErrorSeverityCode;
                    Shop::setFlash($error);
                    $this->redirect(Shop::module()->failureAction);
                }
            }
            if ($order->save()) {

                $captureOrders = new CaptureOrders();
                $captureOrders->order_id = $order->order_id;
                $captureOrders->order_day = date('Y-m-d H:i:s');
                $captureOrders->products = @json_encode($captureOrder['products']);
                $captureOrders->shipping = @json_encode($captureOrder['shipping']);
                $captureOrders->payment = @json_encode($captureOrder['payment']);
                $captureOrders->save();

                foreach ($cart as $position => $product) {
                    $position = new OrderPosition;
                    $position->order_id = $order->order_id;
                    $position->product_id = $product['product_id'];
                    $position->amount = $product['amount'];
                    $position->specifications = @json_encode($product['Variations']);
                    $position->save();
                    Yii::app()->user->setState('cart', array());
                    Yii::app()->user->setState('shipping_method', null);
                    Yii::app()->user->setState('payment_method', null);
                    Yii::app()->user->setState('order_comment', null);
                }
                Shop::mailNotification($order);
                $this->redirect(Shop::module()->successAction);
            } else
                $this->redirect(Shop::module()->failureAction);
        } else {
            Shop::setFlash(
                    Shop::t(
                            'Please accept our Terms and Conditions to continue'));
            $this->redirect(array('//shop/order/create'));
        }
    }

    public function actionSuccess() {
        $this->render('/order/success');
    }

    public function actionFailure() {
        $this->render('/order/failure');
    }

    public function actionAdmin() {
        $model = new Order('search');
        if (isset($_GET['Order']))
            $model->attributes = $_GET['Order'];
        if (isset($_GET['pageSize'])) {
            $model->pageSize = $_GET['pageSize'];
        }
        $this->render('admin', array(
            'model' => $model,
        ));
        exit;
    }

    public function actionOrderhistory() {
        if (Yii::app()->user->isGuest) {
            $this->redirect("/Yii7/accounts/login");
        } else {
            $customer = Customer::model()->find('user_id = :user_id ', array(':user_id' => Yii::app()->user->id));
            $orders = Order::model()->findAll('customer_id = :customer_id ', array(':customer_id' => $customer->customer_id));
            $this->render('order_history', array('orders' => $orders,));
        }
    }

    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Order::model()->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionCheckPaypal() {
        $currencyCodeType = "USD";
        $paymentType = "Sale";
        $returnURL = $this->createAbsoluteUrl('create');
        $cancelURL = $this->createAbsoluteUrl('confirm');

        $paymentAmount = round(Shop::getTotalPriceNumber());

        $paypal = new PayPal();

        $resArray = $paypal->CallShortcutExpressCheckout($paymentAmount, $currencyCodeType, $paymentType, $returnURL, $cancelURL);

        $ack = strtoupper($resArray["ACK"]);
        if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING") {
            $paypal->RedirectToPayPal($resArray["TOKEN"]);
        } else {
            $ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
            $ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
            $ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
            $ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);

            $error = "SetExpressCheckout API call failed.";
            $error = $error . "<br>Detailed Error Message: " . $ErrorLongMsg;
            $error = $error . "<br>Short Error Message: " . $ErrorShortMsg;
            $error = $error . "<br>Error Code: " . $ErrorCode;
            $error = $error . "<br>Error Severity Code: " . $ErrorSeverityCode;
            Shop::setFlash($error);
        }
    }

}
