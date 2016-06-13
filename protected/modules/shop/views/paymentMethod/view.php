<?php
if (!isset($this->breadcrumbs))
    $this->breadcrumbs = array(
        Shop::t('Payment Methods') => array('index'),
        $model->title,
    );

if (!isset($this->menu))
    $this->menu = array(
        array('label' => 'Create PaymentMethod', 'url' => array('create')),
        array('label' => 'Update PaymentMethod', 'url' => array('update', 'id' => $model->id)),
        array('label' => 'Delete PaymentMethod', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage PaymentMethod', 'url' => array('admin')),
    );
?>


<div class="widget">
    <div class="widget-head">
        <div class="pull-left"><?php echo Shop::t('Payment method') ?></div>
        <div class="widget-icons pull-right">
            <a class="wminimize" href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="widget-content">
        <?php
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
