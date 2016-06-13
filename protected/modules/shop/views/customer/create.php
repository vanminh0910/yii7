<?php
$this->renderPartial('/order/waypoint', array('point' => 1));

if(!isset($customer)){
	$customer = new Customer;
        $customer->email = $user->email;
}

if(!isset($address)){
	$address = new Address;
        $address->firstname = $user->first_name;
        $address->lastname = $user->last_name;
        $address->city = $user->city;
        $address->zipcode = $user->zip;
       
}

$this->breadcrumbs=array(
		Yii::t('ShopModule.shop', 'Customers')=>array('index'),
		Yii::t('ShopModule.shop', 'Register as a new Customer'),
		);

?>

<div class="container">

<h2> <?php //echo Shop::t('Please enter your Customer information'); ?> </h2>

<h3> <?php //echo Shop::t('I am a registered customer'); ?></h3>

<p> <?php //echo Shop::t('Click {link} if you are already registered', array(
	//'{link}' =>  CHtml::link(Shop::t('here'), Shop::module()->loginUrl))); ?> 
</p>
<hr />
<h3><?php //echo Shop::t('I am a new customer'); ?></h3>
<p><?php echo Shop::t('Registration information'); ?></p>
<p><strong> <?php echo Shop::t('Please enter your Customer information'); ?></strong> </p>
	<?php

if($address === null)
	$address = new Address;

if(!isset($deliveryAddress) || $deliveryAddress === null)
	$deliveryAddress = new DeliveryAddress;

if(!isset($billingAddress) || $billingAddress === null)
	$billingAddress = new BillingAddress;

 echo $this->renderPartial('/customer/_form', array(
				'action' => isset($action) ? $action : null,
				'customer'=>$customer,
				'address' =>$address,
				'deliveryAddress' => $deliveryAddress,
				'billingAddress' => $billingAddress,
				)); ?>
</div>
