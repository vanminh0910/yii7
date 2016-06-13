<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo CHtml::encode(AccountsModule::t("Recover Password")); ?></title>

        <!-- Bootstrap Core CSS -->
        <?php
        $url = Yii::app()->getBaseUrl();
        $clientScript = Yii::app()->clientScript;
        $baseUrl = Yii::app()->theme->baseUrl;

        $clientScript->registerCssFile($baseUrl . '/macadmin/css/bootstrap.min.css');
        $clientScript->registerCssFile($baseUrl . '/macadmin/css/font-awesome.min.css');
        $clientScript->registerCssFile($baseUrl . '/macadmin/css/style.css');
        ?>
        <?php
        $clientScript->registerScriptFile($baseUrl . '/macadmin/js/jquery.js');
        $clientScript->registerScriptFile($baseUrl . '/macadmin/js/bootstrap.min.js');
        $clientScript->registerScriptFile($baseUrl . '/macadmin/js/respond.min.js');
        ?>

    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 50px">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo AccountsModule::t('Recover your account password?') ?></h3>
                        </div>
                        <div class="panel-body">
                            <?php if (Yii::app()->user->hasFlash('recoveryMessage')) { ?>
                                <div class="alert alert-success">
                                    <?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
                                </div>
                            <?php } ?>
                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'recovery-form',
                                'enableClientValidation' => true,
                                'clientOptions' => array('validateOnSubmit' => true,),
                            ));
                            ?>
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <?php echo $form->textField($model, 'login_or_email', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Username or email"))); ?>
                                        <?php echo $form->error($model, 'login_or_email'); ?>
                                    </div>
                                    <div class="form-buttons">
                                        <a href="<?php echo $url . '/backend/accounts/login' ?>"> <?php echo AccountsModule::t("Back to login") ?></a>
                                        <?php echo CHtml::submitButton(AccountsModule::t("Recover Password"), array('class' => 'btn btn-info btn-sm')); ?>
                                    </div>
                                </fieldset>
                                <!--<p class="legal">Copyright © 2014 TMA Solutions.</p>-->
                            </form>
                            <?php $this->endWidget(); ?>
                            <!-- form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
