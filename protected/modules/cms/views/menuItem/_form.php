<?php /** @var BootActiveForm $form */
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm'); ?>

	<?php //echo $form->textFieldRow($model,'label'); ?>
	<?php //echo $form->textFieldRow($model,'url'); ?>
	<?php //echo $form->checkBoxRow($model,'visible'); ?>

        <div class="form-horizontal" style="width:700px">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'label', array('class' => 'control-label col-lg-2 required', 'style' => 'width:21%')); ?>
            <div class="col-lg-6">
                <?php echo $form->textField($model, 'label', array('class' => 'form-control', 'placeholder' => CmsModule::t("Label"))); ?>
            </div>
            <br><br>
            <?php echo $form->error($model, 'label', array('style' => 'color:red; margin-left:170px')); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'url', array('class' => 'control-label col-lg-2', 'style' => 'width:21%')); ?>
            <div class="col-lg-6">
                <?php echo $form->textField($model, 'url', array('class' => 'form-control', 'placeholder' => CmsModule::t("Url"))); ?>
            </div>
            <br><br>
            <?php echo $form->error($model, 'url', array('style' => 'color:red; margin-left:175px')); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'visible', array('class' => 'control-label col-md-2', 'style' => 'width:21%; margin-top:-6px')); ?>
            <div class="col-lg-6">
                <?php echo $form->checkbox($model, 'visible'); ?>
            </div>
        </div>
      

	<div class="form-group">
        <div class="col-lg-offset-3 col-lg-6">

		<?php $this->widget('bootstrap.widgets.TbButton',array(
			'label'=>  CmsModule::t('Save'),
			'buttonType'=>'submit',
			'type'=>'primary',
		)); ?>

		<?php $this->widget('bootstrap.widgets.TbButton',array(
			'label'=>  CmsModule::t('Cancel'),
			'url'=>array('menu/update','id'=>$menu->id),
			'htmlOptions'=>array('confirm'=>  CmsModule::t('Are you sure you want to cancel? All changes will be lost.')),
		)); ?>

	</div>
        </div>
</div>

<?php $this->endWidget(); ?>
