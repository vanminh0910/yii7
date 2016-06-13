<?php
$this->renderPartial('/order/waypoint', array('point' => 2));

if(!isset($customer))
	$customer = new Customer;

if(!isset($deliveryAddress))
	if(isset($customer->deliveryAddress))
		$deliveryAddress = $customer->deliveryAddress;
	else
		$deliveryAddress = new DeliveryAddress;

if(!isset($this->breadcrumbs))
	$this->breadcrumbs = array(
			Shop::t('Order'),
			Shop::t('Shipping method'));
			
$form=$this->beginWidget('CActiveForm', array(
			'id'=>'customer-form',
			'action' => array('//shop/order/create'),
			'enableAjaxValidation'=>false,
			)); 
?>

<h2> <?php echo Shop::t('Shipping options'); ?> </h2>

<h3> <?php echo Shop::t('Shipping address'); ?></h3>

<div class="current_address">
	<?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$customer->address,
                'htmlOptions' => array('class' => 'detail-view'),
                'attributes'=>array(
                    'firstname',
                    'lastname',
                    'street',
                    'zipcode',
                    'city',
                    'country'
                    ),
                )); ?>
</div>
<br/>
<?php
echo CHtml::checkBox('toggle_delivery',
			$customer->deliveryAddress !== NULL, array(
				'style' => 'float: left')); 
	echo CHtml::label(Shop::t('alternative delivery address'), 'toggle_delivery', array(
				'style' => 'cursor:pointer'));
	
?>

<div class="form">
	<fieldset id="delivery_information" style="display: none;">
	<div class="form-horizontal" style="margin-left:60px">

            <h3> <?php echo Shop::t('New shipping address'); ?> </h3>
            
            <div class="form-group" >
                <?php echo $form->labelEx($deliveryAddress,'firstname',array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($deliveryAddress,'firstname',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($deliveryAddress,'firstname'); ?>
            </div>
        
            <div class="form-group" >
                <?php echo $form->labelEx($deliveryAddress,'lastname', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($deliveryAddress,'lastname',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($deliveryAddress,'lastname'); ?>
            </div>
            
            <div class="form-group" >
                <?php echo $form->labelEx($deliveryAddress,'street', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($deliveryAddress,'street',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($deliveryAddress,'street'); ?>
            </div>

            <div class="form-group" >
                <?php echo $form->labelEx($deliveryAddress,'city', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($deliveryAddress,'city',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($deliveryAddress,'city'); ?>
            </div>   
            
            <div class="form-group" >
                <?php echo $form->labelEx($deliveryAddress,'zipcode', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($deliveryAddress,'zipcode',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($deliveryAddress,'zipcode'); ?>
            </div>
            
            <div class="form-group" >
                <?php echo $form->labelEx($deliveryAddress,'country', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($deliveryAddress,'country',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($deliveryAddress,'country'); ?>
            </div>
	</div>
	</fieldset>
<br />
<hr />  
<h3> <?php echo Shop::t('Shipping Method'); ?> </h3>
<p> <?php echo Shop::t('Choose your Shipping method'); ?> </p>

<div style="margin-left:60px">
    <?php
    $i = 0;
    foreach(ShippingMethod::model()->findAll() as $method) {
            echo '<div class="row">';
            echo CHtml::radioButton("ShippingMethod", $i == 0, array(
                                    'value' => $method->id, 'style'=>'float:left'));
            echo '<div class="float-left">';
            echo CHtml::label($method->title, 'ShippingMethod');
            echo CHtml::tag('p', array(), $method->description);
            echo CHtml::tag('p', array(), Shop::t('Price: ') . Shop::priceFormat($method->price));
            echo '</div>';
            echo '</div>';
            echo '<div class="clear"></div>';
            $i++;
    }
    ?>
</div>

	

<?php
 Yii::app()->clientScript->registerScript('toggle', "
	if($('#toggle_delivery').attr('checked'))
		$('#delivery_information').show();
	$('#toggle_delivery').click(function() { 
		$('#delivery_information').toggle(500);
	});
");
?>

    <div class="row buttons">
		<?php
        	echo CHtml::submitButton(Shop::t('Continue'),array('id'=>'next', 'class'=>'btn btn-sm btn-success',));
        ?>
	</div>
</div>
<?php $this->endWidget(); ?>