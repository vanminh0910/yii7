<div class="container">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'product-specification-form',
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
        <?php echo $form->labelEx($model, 'is_user_input', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->checkBox($model, 'is_user_input', array('style' => 'margin-top:10px')); ?>
            <?php echo $form->error($model, 'is_user_input'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'required', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->checkBox($model, 'required', array('style' => 'margin-top:10px')); ?>
            <?php echo $form->error($model, 'required'); ?>
        </div>
    </div>



    <div class="row col-lg-offset-2">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
