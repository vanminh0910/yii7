<?php $this->breadcrumbs = array(
	CmsModule::t('Cms')=>array('admin/index'),
	CmsModule::t('Pages')=>array('/cms/page'),
	CmsModule::t('Create')
) ?>

<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-envelope"></i> <?php echo CmsModule::t('Create page') ?></h2>
    <div class="bread-crumb pull-right">
        
    </div>
    <div class="clearfix"></div>
</div>


<div style="margin-left:50px" class="form form-small">

		<?php /** @var TbActiveForm $form */
		$form = $this->beginWidget('bootstrap.widgets.TbActiveForm'); ?>

			<?php $this->renderPartial('_form',array('form'=>$form,'model'=>$model)); ?>
                        
                        <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
			<?php $this->renderPartial('cms.views.node._formActions'); ?>
                        </div>
                        </div>

		<?php $this->endWidget(); ?>


</div>
