<?php
$langs = Yii::app()->params['languages'];
?>

<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-envelope"></i> <?php echo MailModule::t('View') . ' ' . MailModule::t('Mail Template') ?></h2>
    <div class="clearfix"></div>
</div>

<div class="container" >
    <h1> <?php echo MailModule::t('Mail Name') . ':  ' . $model->name ?></h1>


    <?php foreach ($model->emailTranslations as $trans) {
        ?>
        <div class="widget">
            <div class="widget-head">
                <div class="pull-left"><?php echo $langs[$trans->lang_code] ?></div>
                <div class="widget-icons pull-right">
                    <a class="wminimize" href="#"><i class="fa fa-chevron-up"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <table class="table table-striped table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td style="width: 20%"><strong><?php echo $trans->attributeLabels()['subject'] ?></strong></td>
                            <td><?php echo $trans->subject ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><strong><?php echo $trans->attributeLabels()['content'] ?></strong></td>
                            <td><?php echo $trans->content ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
    }
    $urlEdit = $this->createAbsoluteUrl('update', array('id' => $model->id));
    $urlAddTranslation = $this->createAbsoluteUrl('createTranslation', array('id' => $model->id));
    ?>
    <?php
    echo CHtml::button(MailModule::t('Edit'), array('class' => 'btn btn-sm btn-primary',
        'onclick' => 'window.open("' . $urlEdit . '","_self")'));
    ?>
    <?php
//    if (count($model->emailTranslations) < Language::model()->count()) {
//        echo CHtml::button(AccountsModule::t('Add Translation'), array('class' => 'btn btn-sm btn-primary',
//            'onclick' => 'window.open("' . $urlAddTranslation . '","_self")'));
//    }
    ?>
</div>

<script>
    function confirmDelete(url) {
        bootbox.confirm("Are you sure?", function(result) {
            if (result === true) {
                window.open(url, "_self");
            }
        });
    }
</script>
