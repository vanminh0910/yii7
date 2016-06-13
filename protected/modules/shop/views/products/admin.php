


<div class="page-head">
    <h2 class="pull-left"> <?php echo Shop::t('Products') ?></h2>
    <div class="clearfix"></div>
</div>
<div class="container">
    <div class="widget">
        <div class="widget-head">
            <div class="pull-left">
                <button class="btn btn-sm btn-primary" type="button" onclick="window.open('<?php echo $this->createAbsoluteUrl('create') ?>', '_self');"><?php echo '+'.' '.Shop::t('Create') ?></button>
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
                'summaryText' => Yii::t('zii', 'Displaying {start}-{end} of 1 result.|Displaying {start}-{end} of {count} results.', 2) . ' ' . Yii::t('common', 'Show') .
                CHtml::dropDownList(
                        'pageSize', $model->pageSize, array(10 => 10, 20 => 20, 50 => 50, 100 => 100), array('class' => 'change-pageSize',
                    'url' => $this->createAbsoluteUrl('admin'))) .
                ' ' . Yii::t('common', 'rows per page'),
                'template' => '{items}{summary}{pager}',
                'columns' => array(
                    'title',
                    'price',
                    array(
                        'name' => 'title',
                        'header' => Yii::t('common', 'Action'),
                        'type' => 'raw',
                        'filter' => false,
                        'value' => '$this->grid->controller->createButtons($data->product_id)',
                    ),
                )
                    )
            );
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
    function onDelete(url) {
        bootbox.dialog({
            message: "<?php echo Yii::t('common', 'Are you sure to delete this item?') ?>",
            buttons: {
                main: {
                    label: "<?php echo Yii::t('common', 'Ok') ?>",
                    className: "btn-primary",
                    callback: function() {
                        window.open(url, '_self');
                    }
                },
                danger: {
                    label: "<?php echo Yii::t('common', 'Cancel') ?>",
                    className: "btn-default",
                    callback: function() {
                    }
                },
            }
        });

    }
</script>