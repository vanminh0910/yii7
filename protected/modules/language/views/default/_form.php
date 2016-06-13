<?php
/* @var $this LanguageController */
/* @var $model Language */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'language-form',
        'htmlOptions' => array('class' => 'form-horizontal')
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'code', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'code', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control')); ?>
        </div>
        <?php echo $form->error($model, 'code'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'name', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control')); ?>
        </div>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row col-lg-offset-2">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->