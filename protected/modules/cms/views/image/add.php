<?php $this->breadcrumbs=array(
	CmsModule::t('Cms')=>array('admin/index'),
	CmsModule::t('Pages')=>array('/cms/page'),
	ucfirst($page->name)=>array('/cms/page/update','id'=>$page->id),
	CmsModule::t('Add image')
) ?>

<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-envelope"></i> <?php echo CmsModule::t('Add image') ?></h2>
    <div class="bread-crumb pull-right">
        
    </div>
    <div class="clearfix"></div>
</div>

<div class="col-md-7" >              
    <div class="widget-content" style="width:700px">
        <div class="padd" style="width:700px">
            <div class="form quick-post" style="width:700px">
                
                <div class="form-horizontal" style="width:700px">
                    
		<?php /** @var TbActiveForm $form */
		$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'htmlOptions'=>array('enctype'=>'multipart/form-data'),
		)); ?>
                    
                <div class="form-horizontal">
                    
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'Name', array('class' => 'control-label col-md-3')); ?>
                         <div class="col-md-8">
                            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => CmsModule::t("Name"))); ?>
                            <?php //echo $form->textFieldRow($model,'name', array('class' => 'form-control')); ?>
                         </div>
                    </div>
                        
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'file', array('class' => 'control-label col-md-3')); ?>
                        <div class="col-md-8">
                             <?php echo $form->fileField($model, 'file'); ?>
                             <?php //echo $form->fileFieldRow($model,'file'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-6">

				<?php $this->widget('bootstrap.widgets.TbButton',array(
					'label'=>CmsModule::t('Save'),
					'buttonType'=>'submit',
					'type'=>'primary',
				)); ?>

				<?php $this->widget('bootstrap.widgets.TbButton',array(
					'label'=>CmsModule::t('Cancel'),
					'url'=>array('page/update','id'=>$page->id, 'tab'=>'attachments'),
					'htmlOptions'=>array('confirm'=>CmsModule::t('Are you sure you want to cancel? All changes will be lost.')),
				)); ?>
                    </div>
                    </div>
                </div>

		<?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
