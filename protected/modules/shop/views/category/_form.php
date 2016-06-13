<div class="container">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'category-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'form-horizontal'),
    ));
    ?>


    <div class="form-group">
        <?php echo $form->labelEx($model, 'parent_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php
            $this->widget('application.modules.shop.components.Relation', array(
                'model' => $model,
                'relation' => 'parent',
                'fields' => 'title',
                'showAddButton' => false,
                'allowEmpty' => Shop::t('Root level'),
                'htmlOptions' => array('class' => 'form-control'),
            ));
            ?>
            <?php echo $form->error($model, 'parent_id'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'title', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'title'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->textArea($model, 'description', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description'); ?>
        </div>
    </div>


    <div class="row col-lg-offset-2">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('ShopModule.shop', 'Create') : Yii::t('ShopModule.shop', 'Save'), array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
