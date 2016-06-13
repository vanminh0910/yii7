<script src="<?php echo Yii::app()->baseUrl.'/themes/backend/macadmin/js/ckeditor/ckeditor.js'; ?>"></script>

<?php //echo $form->textFieldRow($model,'['.$model->locale.']heading',array('class'=>'input-xxlarge')); ?>
<div class="form">
<div class="form-horizontal">
<div class="form-group" style="margin-top:10px">
        <?php echo $form->labelEx($model, '['.$model->locale.']heading', array('class' => 'control-label col-md-1')); ?>
        <div class="col-md-8">
            <?php echo $form->textField($model, '['.$model->locale.']heading', array('class' => 'form-control', 'placeholder' => CmsModule::t("Heading"))); ?>
        </div>
        <?php echo $form->error($model,'['.$model->locale.']heading'); ?>
</div>

<div class="form-group" >
    <?php echo $form->labelEx($model, '['.$model->locale.']body', array('class' => 'control-label col-md-1')); ?>   
</div>

    <?php //echo $form->labelEx($model,'['.$model->locale.']body'); ?>
    <?php echo $form->textArea($model, '['.$model->locale.']body', array('id'=>$id)); ?>
    <?php echo $form->error($model,'['.$model->locale.']body'); ?>
    <?php $this->renderPartial('_tags'); ?>

</div>
</div>


<h3><?php echo CmsModule::t('Properties'); ?></h3>

<div class="col-md-6">
<div class="formy well">                 
<div class="form">

<div class="form-horizontal">
    <div class="form-group">
        <?php echo $form->labelEx($model, '['.$model->locale.']url', array('class' => 'control-label col-md-3')); ?>
        <div class="col-md-8">
            <?php echo $form->textField($model, '['.$model->locale.']url', array('class' => 'form-control', 'placeholder' => CmsModule::t("URL Alias"))); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, '['.$model->locale.']pageTitle', array('class' => 'control-label col-md-3')); ?>
        <div class="col-md-8">
            <?php echo $form->textField($model, '['.$model->locale.']pageTitle', array('class' => 'form-control', 'placeholder' => CmsModule::t("Page Title"))); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, '['.$model->locale.']breadcrumb', array('class' => 'control-label col-md-3')); ?>
        <div class="col-md-8">
            <?php echo $form->textField($model, '['.$model->locale.']breadcrumb', array('class' => 'form-control', 'placeholder' => CmsModule::t("Breadcrumb"))); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, '['.$model->locale.']metaTitle', array('class' => 'control-label col-md-3')); ?>
        <div class="col-md-8">
            <?php echo $form->textField($model, '['.$model->locale.']metaTitle', array('class' => 'form-control', 'placeholder' => CmsModule::t("Meta Title"))); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, '['.$model->locale.']metaDescription', array('class' => 'control-label col-md-3')); ?>
        <div class="col-md-8">
            <?php echo $form->textField($model, '['.$model->locale.']metaDescription', array('class' => 'form-control', 'placeholder' => CmsModule::t("Meta Description"))); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, '['.$model->locale.']metaKeywords', array('class' => 'control-label col-md-3')); ?>
        <div class="col-md-8">
            <?php echo $form->textField($model, '['.$model->locale.']metaKeywords', array('class' => 'form-control', 'placeholder' => CmsModule::t("Meta Keywords"))); ?>
        </div>
    </div>
</div>
 </div>
     </div>
 </div>

<?php //echo $form->textFieldRow($model,'['.$model->locale.']url',array('class'=>'input-xxlarge')) ?>
<?php //echo $form->textFieldRow($model,'['.$model->locale.']pageTitle',array('class'=>'input-xxlarge')) ?>
<?php //echo $form->textFieldRow($model,'['.$model->locale.']breadcrumb',array('class'=>'input-xxlarge')) ?>
<?php //echo $form->textFieldRow($model,'['.$model->locale.']metaTitle',array('class'=>'input-xxlarge')) ?>
<?php //echo $form->textAreaRow($model,'['.$model->locale.']metaDescription',array('class'=>'input-xxlarge','rows'=>3)) ?>
<?php //echo $form->textFieldRow($model,'['.$model->locale.']metaKeywords',array('class'=>'input-xxlarge')) ?>


