<div class="page-head">
    <h2 class="pull-left"><?php echo Shop::t('Order') ?> #<?php echo $model->order_id; ?></h2>
    <div class="clearfix"></div>
</div>

<div class="container">
    <div class="widget">
        <div class="widget-head">
            <div class="pull-left"><?php echo Shop::t('Ordering Info'); ?></div>
            <div class="widget-icons pull-right">
                <a class="wminimize" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <?php
            $this->widget('zii.widgets.CDetailView', array(
                'data' => $model,
                'htmlOptions' => array('class' => 'detail-view table table-striped table-bordered table-hover'),
                'itemTemplate' => "<tr class=\"{class}\"><th style='width:20%'>{label}</th><td>{value}</td></tr>\n",
                'attributes' => array(
                    'order_id',
                    'customer_id',
                    array('label' => Shop::t('Ordering Date'),
                        'value' => date('d. m. Y G:i', $model->ordering_date)
                    ),
                    'ordering_done',
                    'ordering_confirmed',
                ),
            ));
            ?>
        </div>
    </div>

    <div class="widget">
        <div class="widget-head">
            <div class="pull-left"><?php echo Shop::t('Customer Info'); ?></div>
            <div class="widget-icons pull-right">
                <a class="wminimize" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <?php
            $this->widget('zii.widgets.CDetailView', array(
                'data' => $model->customer,
                'htmlOptions' => array('class' => 'detail-view table table-striped table-bordered table-hover'),
                'itemTemplate' => "<tr class=\"{class}\"><th style='width:20%'>{label}</th><td>{value}</td></tr>\n",
                'attributes' => array(
                    'email',
                ),
            ));
            ?>
        </div>
    </div>
    <div class="widget">
        <div class="widget-head">
            <div class="pull-left"><?php echo Shop::t('Delivery address'); ?></div>
            <div class="widget-icons pull-right">
                <a class="wminimize" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <div class="summary_delivery_address">
                <?php
                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model->deliveryAddress,
                    'htmlOptions' => array('class' => 'detail-view table table-striped table-bordered table-hover'),
                    'itemTemplate' => "<tr class=\"{class}\"><th style='width:20%'>{label}</th><td>{value}</td></tr>\n",
                    'attributes' => array(
                        'firstname',
                        'lastname',
                        'street',
                        'zipcode',
                        'city',
                        'country'
                    ),
                ));
                ?>
            </div>
        </div>
    </div>


    <div class="widget">
        <div class="widget-head">
            <div class="pull-left"><?php echo Shop::t('Billing address'); ?></div>
            <div class="widget-icons pull-right">
                <a class="wminimize" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <div class="summary_billing_address">
                <?php
                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model->billingAddress,
                    'htmlOptions' => array('class' => 'detail-view table table-striped table-bordered table-hover'),
                    'itemTemplate' => "<tr class=\"{class}\"><th style='width:20%'>{label}</th><td>{value}</td></tr>\n",
                    'attributes' => array(
                        'firstname',
                        'lastname',
                        'street',
                        'zipcode',
                        'city',
                        'country'
                    ),
                ));
                ?>
            </div>
        </div>
    </div>

    <?php
    $this->renderPartial('/paymentMethod/view', array(
        'model' => $model->paymentMethod));
    $this->renderPartial('/shippingMethod/view', array(
        'model' => $model->shippingMethod));
    ?>


    <div class="widget">
        <div class="widget-head">
            <div class="pull-left"><?php echo Shop::t('Ordered Products'); ?></div>
            <div class="widget-icons pull-right">
                <a class="wminimize" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <?php
            foreach ($model->products as $product) {
                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $product,
                    'htmlOptions' => array('class' => 'detail-view table table-striped table-bordered table-hover'),
                    'itemTemplate' => "<tr class=\"{class}\"><th style='width:20%'>{label}</th><td>{value}</td></tr>\n",
                    'attributes' => array(
                        'product.title',
                        'amount',
                        array(
                            'label' => Shop::t('Specifications'),
                            'type' => 'raw',
                            'value' => $product->renderSpecifications())
                    )
                        )
                );
                echo '<br />';
                echo '<hr />';
            }
            ?>
        </div>
    </div>

    <div style="clear:both;"> </div>

    <div class="buttons">
        <?php
        echo CHtml::link(Shop::t('Delivery slip'), array(
            '//shop/order/slip', 'id' => $model->order_id)) . ' | ';

        echo CHtml::link(Shop::t('Invoice'), array(
            '//shop/order/invoice', 'id' => $model->order_id)) . ' | ';

        echo CHtml::link(Shop::t('Back to Orders'), array(
            '//shop/order/admin'));
        ?>
    </div>
</div>
