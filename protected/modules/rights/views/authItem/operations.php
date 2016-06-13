<div class="page-head">
    <h2 class="pull-left"><i class="fa"></i> Operations</h2>
    <div class="bread-crumb pull-right">
        <a href="#"><i class="fa fa-home"></i> Home</a>
        <span class="divider">/</span>
        <a class="bread-current" href="#">Rights</a>
        <span class="divider">/</span>
        <a class="bread-current" href="#">Operations</a>
    </div>
    <div class="clearfix"></div>
</div>

<div id="operations" class="container">

    <div class="widget">
        <div class="widget-head">
            <div class="pull-left">
                <button class="btn btn-sm btn-primary" type="button" onclick="window.open('<?php echo $this->createAbsoluteUrl('authItem/create', array('type' => CAuthItem::TYPE_OPERATION)) ?>', '_self');">
                    <?php
                    echo Rights::t('core', 'Create :type', array(
                        ':type' => Rights::t('core', 'Operations'),
                    ));
                    ?>
                </button>
            </div>
            <div class="widget-icons pull-right">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">


            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider' => $authItem->search(),
                'filter' => $authItem,
                'id' => 'data-table-paging',
                'itemsCssClass' => 'table table-striped table-bordered table-hover',
                'summaryText' => Yii::t('zii', 'Displaying {start}-{end} of 1 result.|Displaying {start}-{end} of {count} results.') . ' ' . Yii::t('common', 'Show') .
                CHtml::dropDownList(
                        'pageSize', $authItem->pageSize, array(10 => 10, 20 => 20, 50 => 50, 100 => 100), array('class' => 'change-pageSize', 'url' => Yii::app()->createAbsoluteUrl('rights/authItem/operations'))) .
                ' ' . Yii::t('common', 'rows per page'),
                'template' => '{items}{summary}{pager}',
                'columns' => array(
                    array(
                        'name' => 'name',
                        'header' => Rights::t('core', 'Name'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'name-column'),
                        'value' => '$data->getGridNameLink()',
                    ),
                    array(
                        'name' => 'description',
                        'header' => Rights::t('core', 'Description'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'description-column'),
                    ),
                    array(
                        'name' => 'bizrule',
                        'header' => Rights::t('core', 'Business rule'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'bizrule-column'),
                        'visible' => Rights::module()->enableBizRule === true,
                    ),
                    array(
                        'name' => 'data',
                        'header' => Rights::t('core', 'Data'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'data-column'),
                        'visible' => Rights::module()->enableBizRuleData === true,
                    ),
                    array(
                        'header' => 'Action',
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'actions-column'),
                        'value' => '$this->grid->controller->createDeleteButton($data)',
                    ),
                )
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