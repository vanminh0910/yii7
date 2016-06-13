<?php $this->breadcrumbs=array(
	CmsModule::t('Cms')=>array('/cms'),
	CmsModule::t('Pages')=>array('/cms/page'),
	ucfirst($model->name),
); ?>

<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-envelope"></i> <?php echo CmsModule::t('{name} page', array('{name}'=>ucfirst($model->name))); ?></h2>
    <div class="bread-crumb pull-right">
       
    </div>
    <div class="clearfix"></div>
</div>

<div class="container">

        	<?php /** @var TbActiveForm $form */
		$form = $this->beginWidget('bootstrap.widgets.TbActiveForm'); ?>

			<?php $this->widget('bootstrap.widgets.TbTabs',array(
				'tabs'=>$this->getFormTabs($form,$model),
				'htmlOptions'=>array('class'=>'cms-form-tabs'),
			)); ?>
    
                        <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
			<?php $this->renderPartial('cms.views.node._formActions'); ?>
                        </div>
                        </div>

		<?php $this->endWidget(); ?>


</div>

<?php
$translations = $this->getTranslations($model);
$langs = array();
foreach ($translations as $locale => $item) {
       array_push($langs, $locale);
}

?>

<script type="text/javascript">
    $(document).ready(function() {
        var jsArray = $.parseJSON('<?php echo json_encode($langs); ?>');
        console.log(jsArray);
        for (var i = 0; i < jsArray.length; i++) {
            CKEDITOR.replace(jsArray[i]);
        }
    });
</script>
