<div class="form form-small">

<?php
if(isset($action) && $action !== null) 
	$form=$this->beginWidget('CActiveForm', array(
				'id'=>'customer-form',
				'action' => $action,
				'enableAjaxValidation'=>false,
				)); 
else
$form=$this->beginWidget('CActiveForm', array(
			'id'=>'customer-form',
			'enableAjaxValidation'=>false,
			)); ?>
    <div class="form-horizontal" style="margin-left:60px">

        <?php echo $form->errorSummary(array($customer, $address)); ?>

        <?php echo $form->hiddenField($customer, 'user_id', array('value'=> Yii::app()->user->id)); ?>

	<div class="form-group" >
		<?php echo $form->labelEx($address,'firstname', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
		<?php echo $form->textField($address,'firstname',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
		<?php echo $form->error($address,'firstname'); ?>
	</div>

	<div class="form-group" >
		<?php echo $form->labelEx($address,'lastname',array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
		<?php echo $form->textField($address,'lastname',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
		<?php echo $form->error($address,'lastname'); ?>
	</div>

	<div class="form-group" >
		<?php echo $form->labelEx($customer,'email', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
		<?php echo $form->textField($customer,'email',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
		<?php echo $form->error($customer,'email'); ?>
	</div>

	<div class="form-group" >
		<?php echo $form->labelEx($address,'street', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
		<?php echo $form->textField($address,'street',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
		<?php echo $form->error($address,'street'); ?>
	</div>

	<div class="form-group" >
		<?php echo $form->labelEx($address,'city', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
		<?php echo $form->textField($address,'city',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
		<?php echo $form->error($address,'city'); ?>
        </div>
        <div class="form-group" >
                <?php echo $form->labelEx($address,'zipcode', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                <div class="col-lg-5">
		<?php echo $form->textField($address,'zipcode',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
		<?php echo $form->error($address,'zipcode'); ?>
	</div>

	<div class="form-group" >
		<?php echo $form->labelEx($address,'country', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
            `   <div class="col-lg-5">
		<?php echo $form->textField($address,'country',array('size'=>45,'maxlength'=>45, 'class' => 'form-control',)); ?>
                </div>
		<?php echo $form->error($address,'country'); ?>
	</div>

	

	<div class="form-group">
        <!-- Buttons -->
        <div class="col-lg-offset-2 col-lg-6" >
	<?php echo CHtml::submitButton($customer->isNewRecord 
			? Yii::t('ShopModule.shop', 'Register') 
			: Yii::t('ShopModule.shop', 'Save')
			,array('id'=>'next', 'class'=>'btn btn-sm btn-success ', )
			); ?>
	</div>
        </div>
        <div style="clear: both;"> </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
