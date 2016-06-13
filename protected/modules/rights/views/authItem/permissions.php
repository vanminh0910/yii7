<div class="page-head">
    <h2 class="pull-left"><i class="fa"></i> <?php echo Rights::t('core', 'Permissions') ?></h2>
    <div class="clearfix"></div>
</div>

<div id="permissions" class="container">

    <div class="widget">
        <div class="widget-head">
            <div class="pull-left">
                <div style="margin-top: 10px"></div>
            </div>
            <div class="widget-icons pull-right">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <?php
            $columns = array(array(
                    'name' => 'name',
                    'type' => 'raw',
                    'value' => '$data->getGridNameLink()',
            ));
            $roles = AuthItem::model()->findAllByAttributes(array('type' => CAuthItem::TYPE_ROLE));
            foreach ($roles as $role) {
                $columns[] = array(
                    'header' => $role->name,
                    'type' => 'raw',
                    'value' => '$this->grid->controller->generateLinkRole($data,$this->header)'
                );
            }

            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider' => $authItem->search(),
                'filter' => $authItem,
                'id' => 'data-table-paging',
                'itemsCssClass' => 'table table-striped table-bordered table-hover',
                'summaryText' => Yii::t('zii', 'Displaying {start}-{end} of 1 result.|Displaying {start}-{end} of {count} results.') . ' ' . Yii::t('common', 'Show') .
                CHtml::dropDownList(
                        'pageSize', $authItem->pageSize, array(10 => 10, 20 => 20, 50 => 50, 100 => 100), array('class' => 'change-pageSize', 'url' => Yii::app()->createAbsoluteUrl('rights/authItem'))) .
                ' ' . Yii::t('common', 'rows per page'),
                'template' => '{items}{summary}{pager}',
                'columns' => $columns,
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
