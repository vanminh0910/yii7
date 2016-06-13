<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo CHtml::encode(AccountsModule::t("Login")); ?></title>

        <!-- Bootstrap Core CSS -->
        <?php
        $url = Yii::app()->baseUrl;
        $clientScript = Yii::app()->clientScript;
        $baseUrl = Yii::app()->theme->baseUrl;

        $clientScript->registerCoreScript('jquery');

        $clientScript->registerCssFile($baseUrl . '/macadmin/css/bootstrap.min.css');
        $clientScript->registerCssFile($baseUrl . '/macadmin/css/font-awesome.min.css');
        $clientScript->registerCssFile($baseUrl . '/macadmin/css/style.css');
        ?>
    </head>
    <body>
        <div class="admin-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <!-- Widget starts -->
                        <div class="widget worange">
                            <!-- Widget head -->
                            <div class="widget-head">
                                <i class="fa fa-lock"></i> <?php echo AccountsModule::t('Login'); ?>
                            </div>
                            <div class="widget-content">
                                <div class="padd">
                                    <?php if (Yii::app()->user->hasFlash('changepassword')) { ?>
                                        <div class="alert alert-success">
                                            <?php echo Yii::app()->user->getFlash('changepassword'); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if (Yii::app()->user->hasFlash('linkfail')) { ?>
                                        <div class="alert alert-danger">
                                            <?php echo Yii::app()->user->getFlash('linkfail'); ?>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    $form = $this->beginWidget('CActiveForm', array(
                                        'id' => 'login-form',
                                        'enableClientValidation' => true,
                                        'clientOptions' => array('validateOnSubmit' => true,),
                                        'htmlOptions' => array('class' => "form-horizontal"),
                                        'action' => '/Yii7/backend/accounts/login'
                                    ));
                                    ?>
                                    <!-- Login form -->
                                    <form class="form-horizontal">
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="inputEmail"><?php echo AccountsModule::t("Username") ?></label>
                                            <div class="col-lg-9">
                                                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Username"))); ?>
                                                <?php echo $form->error($model, 'username'); ?> </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="inputPassword"> <?php echo AccountsModule::t("Password") ?></label>
                                            <div class="col-lg-9">
                                                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Password"))); ?>
                                                <?php echo $form->error($model, 'password'); ?>
                                            </div>
                                        </div>
                                        <!-- Remember me checkbox and sign in button -->
                                        <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <?php echo CHtml::activeCheckBox($model, 'rememberMe'); ?>
                                                        <?php echo CHtml::activeLabelEx($model, 'rememberMe'); ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <?php echo CHtml::submitButton(AccountsModule::t("Login"), array('class' => 'btn btn-info btn-sm')); ?>
                                            <a href="<?php echo $url . '/backend/accounts/recovery' ?>"> <?php echo AccountsModule::t("Forgot password") ?></a>

                                        </div>
                                        <br />
                                    </form>
                                    <?php $this->endWidget(); ?>

                                </div>
                            </div>

                            <div class="widget-foot">
                                <p class="legal">Copyright © 2014 TMA Solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery Version 1.11.0 -->
        <?php
        //$clientScript->registerScriptFile($baseUrl . '/macadmin/js/jquery.js');
        $clientScript->registerScriptFile($baseUrl . '/macadmin/js/bootstrap.min.js');
        $clientScript->registerScriptFile($baseUrl . '/macadmin/js/respond.min.js');
        ?>
    </body>
</html>
