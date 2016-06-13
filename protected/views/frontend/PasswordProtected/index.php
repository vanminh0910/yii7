<!DOCTYPE html>
<html lang="en">

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
        $baseUrl = Yii::app()->baseUrl;

        $baseUrl = $baseUrl . '/themes/backend';
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
                                <i class="fa fa-lock"></i> Login
                            </div>
                            <div class="widget-content">
                                <div class="padd">
                                    <?php
                                    $form = $this->beginWidget('CActiveForm', array(
                                        'id' => 'login-form',
                                        'htmlOptions' => array('class' => "form-horizontal"),
                                        'action' => Yii::app()->baseUrl . '/passwordprotected'
                                    ));
                                    ?>
                                    <!-- Login form -->
                                    <form class="form-horizontal">
                                        <!-- Email -->
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                <input name="password" type="password" class="form-control">
                                            </div>
                                            <!-- Password -->
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-5">
                                                <?php echo CHtml::submitButton(AccountsModule::t("Enter"), array('class' => 'btn btn-info btn-sm')); ?>
                                            </div>
                                        </div>
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
        $clientScript->registerScriptFile($baseUrl . '/macadmin/js/jquery.js');
        $clientScript->registerScriptFile($baseUrl . '/macadmin/js/bootstrap.min.js');
        $clientScript->registerScriptFile($baseUrl . '/macadmin/js/respond.min.js');
        ?>
    </body>
</html>
