<?php
$this->breadcrumbs = array(
    CmsModule::t('Cms') => array('admin/index'),
    CmsModule::t('Menus'),
);
?>
<?php
$baseUrl = Yii::app()->getBaseUrl(true);
?>

<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-users"></i><?php echo CmsModule::t('Menus'); ?></h2>

    <div class="clearfix"></div>
</div>

<div class="container">
    <div class="widget">

        <div class="widget-head">
            <div class="pull-left">
                <button class="btn btn-sm btn-primary" type="button" onclick="window.open('<?php echo $baseUrl . '/backend/cms/menu/create' ?>', '_self');"><?php echo '+'.' '.CmsModule::t('Create'); ?></button>
            </div>
            <div class="widget-icons pull-right">
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
//			'type'=>array('striped','condensed'),
                'id' => 'data-table-paging',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'itemsCssClass' => 'table table-striped table-bordered table-hover',
                 'summaryText' => Yii::t('zii', 'Displaying {start}-{end} of 1 result.|Displaying {start}-{end} of {count} results.') . ' ' . Yii::t('common', 'Show') .
                CHtml::dropDownList(
                    'pageSize', $model->pageSize, array(10 => 10, 20 => 20, 50 => 50, 100 => 100), array('class' => 'change-pageSize',
                    'url' => Yii::app()->createAbsoluteUrl('cms/page'))) .
                ' ' . Yii::t('common', 'rows per page'),
                'template' => '{items}{summary}{pager}',
//                              'showTableOnEmpty'=>false,
                'columns' => array(
                    'id',
                    array(
                        'name' => 'name',
                        'type' => 'raw',
                        'value' => 'CHtml::link(CHtml::encode(ucfirst($data->name)),array("update","id"=>$data->id))',
                    ),
                    array(
                        'class' => 'bootstrap.widgets.TbButtonColumn',
                        'template' => '{update} {delete}',
                    ),
                    array(
                        'name' => 'id',
                        'header' => Yii::t('common', 'Action'),
                        'type' => 'raw',
                        'filter' => false,
                        'value' => '$this->grid->controller->createButtons($data->id)',
                    ),
                ),
            ))
            ?>
        </div>

        <div class="widget-foot">
            <ul class="pull-left" id="display">
            </ul>
            <div class="clearfix"></div>
        </div>

    </div>
</div>

<script>
    function onDelete(id) {
        bootbox.confirm("Are you sure?", function(result) {
            if (result === true) {
                //window.open(id, '_self');
                window.location.href = '<?php echo Yii::app()->getBaseUrl() . '/backend/cms/menu/delete/id/'; ?>' + id;
            }
        });

    }
</script>
