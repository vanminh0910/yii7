<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="language" content="en" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap Core CSS -->
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap.min.css'); ?> 
    <?php //Yii::app()->bootstrap->register(); ?>
    <!-- MetisMenu CSS -->
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/plugins/metisMenu/metisMenu.min.css'); ?> 

    <!-- Custom CSS -->
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/sb-admin-2.css'); ?> 

    <!-- Custom Fonts -->
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/font-awesome-4.1.0/css/font-awesome.min.css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In. <?php echo Yii::t('app', 'Fields with') ?><span class="required">*</span> <?php echo Yii::t('app', 'are required') ?>.</h3>
                    </div>
                    <div class="panel-body">
                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'login-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array('validateOnSubmit'=>true,),
                        )); ?>
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <?php echo $form->textField($model,'username',
                                            array('class'=>'form-control',
                                                'placeholder'=>'E-mail')); ?>
                                    <?php echo $form->error($model,'username'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $form->passwordField($model,'password',
                                            array('class'=>'form-control',
                                                'placeholder'=>'Password')); ?>
                                    <?php echo $form->error($model,'password'); ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo CHtml::submitButton('Login', array('class'=>'btn btn-lg btn-success btn-block')); ?>
                            </fieldset>
                        </form>
                        <?php $this->endWidget(); ?>
                        <!-- form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery Version 1.11.0 -->
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery-1.11.0.js'); ?>

    <!-- Bootstrap Core JavaScript -->
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/bootstrap.min.js'); ?>

    <!-- Metis Menu Plugin JavaScript -->
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/plugins/metisMenu/metisMenu.min.js'); ?>

    <!-- Custom Theme JavaScript -->
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/sb-admin-2.js'); ?>
</body>
</html>
