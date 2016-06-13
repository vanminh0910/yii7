<?php
$baseUrl = Yii::app()->getBaseUrl(true);
?>
<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-language"></i> Language</h2>
    <div class="bread-crumb pull-right">
        <a href="#"><i class="fa fa-home"></i> Home</a>
        <span class="divider">/</span>
        <a class="bread-current" href="#">Language</a>
    </div>
    <div class="clearfix"></div>
</div>

<div class="container">

    <?php if (Yii::app()->user->hasFlash('deleteSuccess')) { ?>
        <div class="alert alert-success">
            <?php echo Yii::app()->user->getFlash('deleteSuccess'); ?>
        </div>
    <?php } ?>
    <div class="widget">
        <div class="widget-head">
            <div class="pull-left">
                <button class="btn btn-sm btn-primary" type="button" onclick="window.open('<?php echo $baseUrl . '/backend/language/default/create' ?>', '_self');">Add Language</button>
            </div>
            <div class="widget-icons pull-right">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">

            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'data-table-paging',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'itemsCssClass' => 'table table-striped table-bordered table-hover',
                'summaryText' => 'Displaying {start}-{end} of {count} result(s).  Show ' .
                CHtml::dropDownList(
                        'pageSize', $model->pageSize, array(10 => 10, 20 => 20, 50 => 50, 100 => 100), array('class' => 'change-pageSize',
                    'url' => Yii::app()->createAbsoluteUrl('language'))) .
                ' rows per page',
                'template' => '{items}{summary}{pager}',
                'columns' => array(
                    array(
                        'name' => 'id',
                        'type' => 'raw',
                        'value' => 'CHtml::link($data->id, $this->grid->controller->createReturnableUrl("view",$data->id))',
                    ),
                    'code',
                    'name',
                    array(
                        'name' => 'id',
                        'header' => 'Action',
                        'filter' => false,
                        'type' => 'raw',
                        'value' => '$this->grid->controller->createButtons($data->id)',
                    ),
                ),
            ));
            ?>
        </div>
        <div class="widget-foot">
            <ul class="pull-left" id="display">
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
