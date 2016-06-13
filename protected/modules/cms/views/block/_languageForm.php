
<script src="<?php echo Yii::app()->baseUrl.'/themes/backend/macadmin/js/ckeditor/ckeditor.js'; ?>"></script>

<div class="control-group">
    <?php echo $form->labelEx($model,'['.$model->locale.']body') ?>
    <div class="controls">
        
	    <?php echo $form->textArea($model, '['.$model->locale.']body', array('id'=>$id)); ?>
	    <?php echo $form->error($model,'['.$model->locale.']body') ?>

	    <?php $this->renderPartial('_tags'); ?>
    </div>
</div>
