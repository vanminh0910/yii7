<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Assignments'),
);
?>

<div class="page-head">
    <h2 class="pull-left"><i class="fa"></i> <?php echo Rights::t('core', 'Assignments') ?></h2>
    <div class="clearfix"></div>
</div>

<div id="assignments" class="container">


    <div class="widget">
        <div class="widget-head">
            <div class="pull-left">
                <!--<button class="btn btn-sm btn-primary" type="button" onclick="window.open('<?php // echo $baseUrl . '/backend/mail/default/create'                                          ?>', '_self');">Add MailTemplate</button>-->
            </div>
            <div class="widget-icons pull-right">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">

            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider' => $dataProvider,
                'filter' => new User(),
                'emptyText' => Rights::t('core', 'No users found.'),
                'id' => 'data-table-paging',
                'itemsCssClass' => 'table table-striped table-bordered table-hover',
                'summaryText' => Yii::t('zii', 'Displaying {start}-{end} of 1 result.|Displaying {start}-{end} of {count} results.') . ' ' . Yii::t('common', 'Show') .
                CHtml::dropDownList(
                        'pageSize', $pageSize, array(10 => 10, 20 => 20, 50 => 50, 100 => 100), array('class' => 'change-pageSize', 'url' => Yii::app()->createAbsoluteUrl('rights'))) .
                ' ' . Yii::t('common', 'rows per page'),
                'template' => '{items}{summary}{pager}',
                'columns' => array(
                    array(
                        'name' => 'username',
                        'header' => Rights::t('core', 'Name'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'name-column'),
                        'value' => '$data->getAssignmentNameLink()',
                    ),
                    array(
//                        'name' => 'assignments',
                        'header' => Rights::t('core', 'Roles'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'role-column'),
                        'value' => '$data->getAssignmentsText(CAuthItem::TYPE_ROLE)',
                    ),
                    array(
//                        'name' => 'assignments',
                        'header' => Rights::t('core', 'Tasks'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'task-column'),
                        'value' => '$data->getAssignmentsText(CAuthItem::TYPE_TASK)',
                    ),
                    array(
//                        'name' => 'assignments',
                        'header' => Rights::t('core', 'Operations'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'operation-column'),
                        'value' => '$data->getAssignmentsText(CAuthItem::TYPE_OPERATION)',
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

