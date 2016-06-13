<div class="page-head">
    <h2 class="pull-left"><i class="fa"></i> <?php echo Rights::getAuthItemTypeNamePlural($model->type) ?></h2>
    <div class="clearfix"></div>
</div>

<div class="container">
    <div id="updatedAuthItem" >

        <h2><?php
            echo Rights::t('core', 'Update :name', array(
                ':name' => $model->name,
                ':type' => Rights::getAuthItemTypeName($model->type),
            ));
            ?></h2>

        <?php $this->renderPartial('_form', array('model' => $formModel)); ?>

        <div class="relations span-11 last">

            <h3><?php echo Rights::t('core', 'Relations'); ?></h3>

            <?php if ($model->name !== Rights::module()->superuserName): ?>

                <div class="col-lg-offset-1">

                    <h4><?php echo Rights::t('core', 'Parents'); ?></h4>

                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'dataProvider' => $parentDataProvider,
                        'template' => '{items}',
                        'itemsCssClass' => 'table table-striped table-bordered table-hover',
                        'hideHeader' => true,
                        'emptyText' => Rights::t('core', 'This item has no parents.'),
                        'columns' => array(
                            array(
                                'name' => 'name',
                                'header' => Rights::t('core', 'Name'),
                                'type' => 'raw',
                                'htmlOptions' => array('class' => 'name-column'),
                                'value' => '$data->getNameLink()',
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
                                'value' => '',
                            ),
                        )
                    ));
                    ?>

                </div>

                <div class="col-lg-offset-1">

                    <h4><?php echo Rights::t('core', 'Children'); ?></h4>

                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'dataProvider' => $childDataProvider,
                        'template' => '{items}',
                        'hideHeader' => true,
                        'emptyText' => Rights::t('core', 'This item has no children.'),
                        'itemsCssClass' => 'table table-striped table-bordered table-hover',
                        'columns' => array(
                            array(
                                'name' => 'name',
                                'header' => Rights::t('core', 'Name'),
                                'type' => 'raw',
                                'htmlOptions' => array('class' => 'name-column'),
                                'value' => '$data->getNameLink()',
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
                                'value' => '$data->getRemoveChildLink()',
                            ),
                        )
                    ));
                    ?>

                </div>

                <div class="col-lg-offset-1">

                    <h5><?php echo Rights::t('core', 'Add Child'); ?></h5>

                    <?php if ($childFormModel !== null): ?>

                        <?php
                        $this->renderPartial('_childForm', array(
                            'model' => $childFormModel,
                            'itemnameSelectOptions' => $childSelectOptions,
                        ));
                        ?>

                    <?php else: ?>

                        <p class="info"><?php echo Rights::t('core', 'No children available to be added to this item.'); ?>

                        <?php endif; ?>

                </div>

            <?php else: ?>

                <p class="info">
                    <?php echo Rights::t('core', 'No relations need to be set for the superuser role.'); ?><br />
                    <?php echo Rights::t('core', 'Super users are always granted access implicitly.'); ?>
                </p>

            <?php endif; ?>

        </div>

    </div>
</div>