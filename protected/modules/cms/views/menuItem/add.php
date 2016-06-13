<?php $this->breadcrumbs=array(
	CmsModule::t('Cms')=>array('admin/index'),
	CmsModule::t('Menus')=>array('/cms/menu'),
	ucfirst($menu->name)=>array('/cms/menu/update','id'=>$menu->id),
	CmsModule::t('Add link')
) ?>

<div class="col-md-7" >              
    <div class="widget" style="width:700px" >
         <div class="widget-head">
            <div class="pull-left"><?php echo CmsModule::t('Add link') ?></div>
            <div class="clearfix"></div>
        </div>
        
        <div class="widget-content" style="width:700px; ">
            <div class="padd" style="width:700px">
                <div class="form quick-post" style="width:700px">

		<?php $this->renderPartial('_form',array('model'=>$model,'menu'=>$menu)); ?>
                </div>
            </div>
        </div>

    </div>
</div>
