<?php $this->breadcrumbs=array(
	CmsModule::t('Cms')=>array('admin/index'),
	CmsModule::t('Menus')=>array('/cms/menu'),
	ucfirst($model->name),
) ?>

<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-envelope"></i> <?php echo CmsModule::t('{tên} menu', array('{name}'=>ucfirst($model->name))); ?></h2>
    <div class="bread-crumb pull-right">
       
    </div>
    <div class="clearfix"></div>
</div>

<div class="container">


		<?php /** @var TbActiveForm $form */
		$form = $this->beginWidget('bootstrap.widgets.TbActiveForm'); ?>

			<?php //echo $form->textFieldRow($model,'name'); ?>
                        <div class="form-horizontal">
                        <div class="form-group" style="margin-top:10px">
                            <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-8">
                                <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => CmsModule::t("System name"))); ?>
                            </div>
                        </div>

                        <div class="form-group" style="margin-left:20px">
                            <h2><?php echo CmsModule::t('Links'); ?></h2>
			<?php $this->widget('bootstrap.widgets.TbTabs',array(
				'type'=>'pills',
				'tabs'=>$this->getLanguageTabs($form, $model),
                                'htmlOptions'=>array('class'=>'cms-form-tabs'),
			)); ?>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
			<?php $this->renderPartial('cms.views.node._formActions'); ?>
                        </div>
                        </div>

		<?php $this->endWidget(); ?>

	
</div>
