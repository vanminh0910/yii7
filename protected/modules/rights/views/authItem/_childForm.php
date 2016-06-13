<div class="container ">

    <?php $form = $this->beginWidget('CActiveForm'); ?>

    <div class="row">
        <?php echo $form->dropDownList($model, 'itemname', $itemnameSelectOptions, array('class' => 'form-control', 'style' => 'width:30%;margin-bottom:10px')); ?>
        <?php echo $form->error($model, 'itemname'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton(Rights::t('core', 'Add'), array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>