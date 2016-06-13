<?php
$this->breadcrumbs = array(
    CmsModule::t('Cms') => array('admin/index'),
    CmsModule::t('Menus') => array('/cms/menu'),
    CmsModule::t( 'Create')
        )
?>

<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-envelope"></i> <?php echo CmsModule::t('Create menu') ?></h2>
    <div class="bread-crumb pull-right">

    </div>
    <div class="clearfix"></div>
</div>

<div style="margin-left:50px" class="form form-small">



<?php /** @var TbActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm');
?>

    <div class="col-md-7" >              
        <div class="widget" style="width:700px" >
            <div class="widget-head">
                <div class="pull-left"><?php echo CmsModule::t('Create menu') ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content" style="width:700px"; >
                <div class="padd" style="width:700px">
                    <div class="form quick-post" style="width:700px">
                        <!-- Edit profile form (not working)-->

                        <div class="form-horizontal" style="width:700px">

                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2', 'style' => 'width:21%')); ?>
                                <div class="col-lg-6">
                                <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => CmsModule::t("System name"))); ?>
                                </div>
                                <br><br>
                                <?php echo $form->error($model, 'name', array('style' => 'color:red; margin-left:125px')); ?>
                            </div>   

                            <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                            <?php $this->renderPartial('cms.views.node._formActions'); ?>
                            </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>  
    </div> 

<?php $this->endWidget(); ?>


</div>
