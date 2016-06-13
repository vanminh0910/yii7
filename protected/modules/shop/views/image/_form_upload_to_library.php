<div class="container" style="margin-left: 10px">

 <div class="form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'image-form',
	'htmlOptions'=>array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'title', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'title'); ?>
            </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'filename', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
		<?php echo $form->fileField($model,'filename',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'filename'); ?>
            </div>
	</div>

		<!--?php echo $form->hiddenField($model,'product_id', array('value' => $_GET['product_id'])); ?>-->

	<div class="form-actions">
            <div class="col-md-8 col-md-offset-3">
            <?php echo CHtml::submitButton($model->isNewRecord 
                            ? Shop::t('Upload') 
                            : Shop::t('Save'), array('class' => 'btn btn-sm btn-success')); ?>
            </div>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>

