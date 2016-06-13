<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-envelope"></i> <?php echo MailModule::t('Mail Template') ?></h2>
    <div class="clearfix"></div>

</div>
<div class="container" style="margin-top: 10px">

    <div class="form">
        <?php
        $script = Yii::app()->clientScript;
        $baseUrl = Yii::app()->theme->baseUrl;
        $script->registerScriptFile($baseUrl . '/macadmin/js/ckeditor/ckeditor.js');


        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'emailtemplate-form',
            'htmlOptions' => array('class' => 'form-horizontal', 'enctype' => "multipart/form-data")
        ));
        ?>


        <div class="form-group">
            <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'name', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control')); ?>
            </div>
        </div>
        <div class="col-lg-offset-2" style="padding-left: 5px">
            <?php echo $form->error($model, 'name'); ?>
        </div>
        <?php
        $tabs = array();
        foreach ($langs as $code => $lang) {
            $tabs[] = array('label' => $lang,
                'active' => $code == 'en',
                'content' =>
                $this->renderPartial('form', array('i' => $code,
                    'emailTrans' => $emailTrans[$code],
                    'form' => $form), true),
            );
        }
        $this->widget("bootstrap.widgets.TbTabs", array(
            "id" => "tabs",
            "type" => "tabs",
            "tabs" => $tabs,
        ));
        ?>


        <div class="row col-lg-offset-2">
            <?php echo CHtml::submitButton($model->isNewRecord ? MailModule::t('Create') : MailModule::t('Save'), array('class' => 'btn btn-sm btn-primary')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>

<script type="text/javascript">
    $(document).ready(function() {
<?php
foreach ($langs as $code => $lang) {
    $name = "EmailTranslation_" . $code . "_content";
    ?>
            CKEDITOR.replace("<?php echo $name ?>",
                    {
                        filebrowserUploadUrl: "/Yii7/backend/mail/default/upload"
                    });
<?php } ?>
    });
</script>