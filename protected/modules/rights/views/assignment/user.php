<div class="page-head">
    <h2 class="pull-left"><i class="fa"></i> Assignment User</h2>
    <div class="bread-crumb pull-right">
        <a href="#"><i class="fa fa-home"></i> Home</a>
        <span class="divider">/</span>
        <a class="bread-current" href="#">Assignment User</a>
    </div>
    <div class="clearfix"></div>
</div>

<div id="userAssignments" class="container">


    <div class="widget">
        <div class="widget-head">
            <div class="pull-left">
                <?php
                echo Rights::t('core', 'Assignments for :username', array(
                    ':username' => $model->getName()
                ));
                ?>
            </div>
            <div class="widget-icons pull-right">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <div class="assignments span-12 first">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'dataProvider' => $dataProvider,
                    'template' => '{items}',
                    'hideHeader' => true,
                    'emptyText' => Rights::t('core', 'This user has not been assigned any items.'),
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'columns' => array(
                        array(
                            'name' => 'name',
                            'header' => Rights::t('core', 'Name'),
                            'type' => 'raw',
                            'htmlOptions' => array('class' => 'name-column'),
                            'value' => '$data->getNameText()',
                        ),
                        array(
                            'name' => 'type',
                            'header' => Rights::t('core', 'Type'),
                            'type' => 'raw',
                            'htmlOptions' => array('class' => 'type-column'),
                            'value' => '$data->getTypeText()',
                        ),
                        array(
                            'header' => '&nbsp;',
                            'type' => 'raw',
                            'htmlOptions' => array('class' => 'actions-column'),
                            'value' => '$data->getRevokeAssignmentLink()',
                        ),
                    )
                ));
                ?>

            </div>
        </div>

    </div>


    <h3><?php echo Rights::t('core', 'Assign item'); ?></h3>

    <div class="container">
        <?php if ($formModel !== null): ?>
            <div class="form">
                <?php
                $this->renderPartial('_form', array(
                    'model' => $formModel,
                    'itemnameSelectOptions' => $assignSelectOptions,
                ));
                ?>
            </div>
        <?php else: ?>
            <p class="info"><?php echo Rights::t('core', 'No assignments available to be assigned to this user.'); ?>
            <?php endif; ?>

    </div>
</div>
