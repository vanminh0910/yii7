<div class="page-head">
    <h2 class="pull-left"> <?php echo Shop::t('Manage Orders') ?></h2>
    <div class="clearfix"></div>
</div>
<div class="container">
    <div class="widget">
        <div class="widget-head">
            <div class="pull-left">

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
                    'order_id',
                    'customer.address.firstname',
                    'customer.address.lastname',
                    array('name' => 'ordering_date',
                        'value' => 'date("M j, Y", $data->ordering_date)'),
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{view}',
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
