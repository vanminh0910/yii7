<?php
Shop::register('css/shop.css');
$this->renderPartial('/order/waypoint', array('point' => 3));

if(!isset($customer))
	$customer = new Customer;

	if(!isset($billingAddress))
		if(isset($customer->billingAddress))
			$billingAddress = $customer->billingAddress;
		else
			$billingAddress = new BillingAddress;

if(!isset($this->breadcrumbs))
	$this->breadcrumbs = array(
			Shop::t('Order'),
			Shop::t('Payment method'));
			
$form=$this->beginWidget('CActiveForm', array(
			'id'=>'customer-form',
			'action' => array('//shop/order/create'),
			'enableAjaxValidation'=>false,
			)); 
?>

<h2><?php echo Shop::t('Payment method'); ?></h2>
<h3><?php echo Shop::t('Billing address'); ?></h3>
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
echo CHtml::checkBox('toggle_billing',
			$customer->billingAddress !== NULL, array(
				'style' => 'float: left')); 
	echo CHtml::label(Shop::t('alternative billing address'), 'toggle_billing', array(
				'style' => 'cursor:pointer'));
?>
<div class="form" >
	<fieldset id="billing_information" style="display: none;" >
        <div class="form-horizontal" style="margin-left:60px">
        
            <h3> <?php echo Shop::t('New billing address'); ?> </h3>
        
          <div class="form-group" >
                <?php echo $form->labelEx($billingAddress,'firstname', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($billingAddress,'firstname',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($billingAddress,'firstname'); ?>
            </div>
        
            <div class="form-group">
                <?php echo $form->labelEx($billingAddress,'lastname', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($billingAddress,'lastname',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($billingAddress,'lastname'); ?>
            </div>
        
           <div class="form-group">
                <?php echo $form->labelEx($billingAddress,'street', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($billingAddress,'street',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($billingAddress,'street'); ?>
            </div>
        
            <div class="form-group">
                <?php echo $form->labelEx($billingAddress,'city', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($billingAddress,'city',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($billingAddress,'city'); ?>
            </div>
            
            <div class="form-group">
                <?php echo $form->labelEx($billingAddress,'zipcode', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($billingAddress,'zipcode',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($billingAddress,'zipcode'); ?>
            </div>
        
            <div class="form-group">
		<?php echo $form->labelEx($billingAddress,'country', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
                <?php echo $form->textField($billingAddress,'country',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
                <?php echo $form->error($billingAddress,'country'); ?>
            </div>
		</div>
     </fieldset>
<br />
<hr />  
<h3> <?php echo Shop::t('Payment method'); ?> </h3>
<p> <?php echo Shop::t('Choose your Payment method'); ?> </p>

<div style="margin-left:60px">
    <?php
    $i = 0;
    foreach(PaymentMethod::model()->findAll() as $method) {
            echo '<div class="form-group">';
                echo CHtml::radioButton("PaymentMethod", $i == 0, array('value' => $method->id, 'style'=>'float:left'));
                echo '<div class="float-left">';
                    echo CHtml::label($method->title, 'PaymentMethod');
                    echo CHtml::tag('p', array(), $method->description);
                echo '</div>';
            echo '</div>';
            echo '<div class="clear"></div>';
            $i++;
    }
    ?>
</div>


<div class="row buttons">
<?php
echo CHtml::submitButton(Shop::t('Continue'),array('id'=>'next', 'class'=>'btn btn-sm btn-success',));
?>
</div>

<?php
echo '</div>';
$this->endWidget(); 
?>

<?php
Yii::app()->clientScript->registerScript('toggle', "
	if($('#toggle_billing').attr('checked'))
		$('#billing_information').show();

	$('#toggle_billing').click(function() { 
		$('#billing_information').toggle(500);
	});
"); 