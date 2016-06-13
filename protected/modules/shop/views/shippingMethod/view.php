<?php
if (!isset($this->breadcrumbs))
    $this->breadcrumbs = array(
        'Shipping Methods' => array('index'),
        $model->title,
    );

if (!isset($this->menu))
    $this->menu = array(
        array('label' => 'List ShippingMethod', 'url' => array('index')),
        array('label' => 'Create ShippingMethod', 'url' => array('create')),
        array('label' => 'Update ShippingMethod', 'url' => array('update', 'id' => $model->id)),
        array('label' => 'Delete ShippingMethod', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage ShippingMethod', 'url' => array('admin')),
    );
?>

<div class="widget">
    <div class="widget-head">
        <div class="pull-left"><?php echo Shop::t('Shipping method'); ?></div>
        <div class="widget-icons pull-right">
            <a class="wminimize" href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="widget-content">
        <?php
        if ($model)
            $this->widget('zii.widgets.CDetailView', array(
                'data' => $model,
                'htmlOptions' => array('class' => 'detail-view table table-striped table-bordered table-hover'),
                'itemTemplate' => "<tr class=\"{class}\"><th style='width:20%'>{label}</th><td>{value}</td></tr>\n",
                'attributes' => array(
                    'title',
                    'description',
                    'price',
                ),
            ));
        ?>
    </div>
</div>
