<div class="container">
    <div class="form">
        <?php
        $baseUrl = Yii::app()->getBaseUrl(true);
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'active-form',
            'htmlOptions' => array('class' => 'form-horizontal')
        ));
        ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
            </div>
            <?php echo $form->error($model, 'name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'description', array('class' => 'form-control')); ?>
            </div>
            <?php echo $form->error($model, 'description'); ?>
        </div>


        <?php if (Rights::module()->enableBizRule === true): ?>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'bizRule', array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-5">
                    <?php echo $form->textField($model, 'bizRule', array('class' => 'form-control')); ?>
                </div>
                <?php echo $form->error($model, 'bizRule'); ?>
            </div>

        <?php endif; ?>

        <?php if (Rights::module()->enableBizRule === true && Rights::module()->enableBizRuleData): ?>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'data', array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-5">
                    <?php echo $form->textField($model, 'data', array('class' => 'form-control')); ?>
                </div>
                <?php echo $form->error($model, 'data'); ?>
            </div>

        <?php endif; ?>

        <div class="row col-lg-offset-2">
            <?php echo CHtml::submitButton(Rights::t('core', 'Save'), array('class' => 'btn btn-sm btn-primary')); ?> |
            <button class="btn btn-sm btn-danger" type="button" onclick="window.open('<?php echo $baseUrl . '/backend/rights/' . Rights::getAuthItemRoute($model->type)[0] ?>', '_self');"><?php echo Rights::t('core', 'Cancel') ?></button>

        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>