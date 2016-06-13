<?php $this->breadcrumbs=array(
	Yii::t('CmsModule.core','Cms'),
);
//echo $this->module->pageLayout;
?>
<div class="container">
<div class="cms-admin-index">
	<div class="inner">

            <h1><?php echo CmsModule::t('Cms'); ?></h1>

		<div class="row">

			<div class="span4">
				<div class="pages">
					<h2><?php echo CHtml::link(CmsModule::t('Pages'),array('page/index')); ?></h2>
					<p><?php echo CmsModule::t('Administer pages.'); ?></p>
				</div>
			</div>

			<div class="span4">
				<div class="blocks">
					<h2><?php echo CHtml::link(CmsModule::t('Blocks'),array('block/index')); ?></h2>
					<p><?php echo CmsModule::t('Administer blocks.'); ?></p>
				</div>
			</div>

			<div class="span4">
				<div class="menus">
					<h2><?php echo CHtml::link(CmsModule::t('Menus'),array('menu/index')); ?></h2>
					<p><?php echo CmsModule::t('Administer menus.'); ?></p>
				</div>
			</div>

		</div>

		<!--
		<div class="messages">
			<h2><?php echo CHtml::link(CmsModule::t('Messages'),array('message/index')); ?></h2>
			<p><?php echo CmsModule::t('Administer messages.'); ?></p>
		</div>
		-->

	</div>
</div>
</div>
