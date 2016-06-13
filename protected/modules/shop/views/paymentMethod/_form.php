
<div class="container">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'payment-method-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'form-horizontal'),
    ));
    ?>


    <div class="form-group">
        <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'title', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'title'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'price', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'price', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'price'); ?>
        </div>
    </div>


    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->textArea($model, 'description', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description'); ?>
        </div>
    </div>



    <div class="col-lg-offset-2 col-lg-6">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>


