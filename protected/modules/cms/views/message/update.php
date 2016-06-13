<?php $this->breadcrumbs=array(
	Yii::t('CmsModule.core','Cms')=>array('/cms'),
	Yii::t('CmsModule.core','Message')=>array('/cms/message'),
	ucfirst($model->message),
); ?>

<div class="cms-page-update">
	<div class="inner">

	    <h2><?php echo Yii::t('CmsModule.core','Message: {message}', array('{message}'=>ucfirst($model->message))); ?></h2>

		<?php /** @var TbActiveForm $form */
		$form = $this->beginWidget('bootstrap.widgets.TbActiveForm'); ?>

			<?php $this->widget('bootstrap.widgets.TbTabs',array(
				'tabs'=>$this->getFormTabs($form, $model),
				'htmlOptions'=>array('class'=>'cms-form-tabs'),
			)); ?>
                        
                        <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
			<?php $this->renderPartial('cms.views.node._formActions'); ?>
                        <div
                        </div>

		<?php $this->endWidget(); ?>

	</div>
</div>
