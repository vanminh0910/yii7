<?php $this->breadcrumbs=array(
	CmsModule::t('Cms')=>array('admin/index'),
	CmsModule::t('Menus')=>array('/cms/menu'),
	ucfirst($model->menu->name)=>array('menu/update','id'=>$model->menu->id),
	ucfirst($model->label),
) ?>

<div class="cms-menu-update">
	<div class="inner">

		<h1><?php echo CmsModule::t('{label} link', array('{label}'=>ucfirst($model->label))); ?></h1>

		<?php $this->renderPartial('_form',array('model'=>$model,'menu'=>$menu)); ?>

	</div>
</div>
