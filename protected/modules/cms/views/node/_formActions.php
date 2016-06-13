<div class="form-actions">

	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'label'=>  CmsModule::t('Save'),
		'buttonType'=>'submit',
		'type'=>'primary',
	)); ?>

	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'label'=>  CmsModule::t('Cancel'),
		'url'=>array('index'),
		'htmlOptions'=>array('confirm'=> CmsModule::t('Are you sure you want to cancel? All changes will be lost.')),
	)); ?>

</div>
