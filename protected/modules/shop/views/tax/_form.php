<div class="container">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tax-form',
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
        <?php echo $form->labelEx($model, 'percent', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'percent', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'percent'); ?>

        </div>
    </div>


    <div class="row col-lg-offset-2">
        <?php
        echo CHtml::submitButton($model->isNewRecord ? Shop::t('Create') : Shop::t('Save'), array('class' => 'btn btn-sm btn-primary'));
        ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
