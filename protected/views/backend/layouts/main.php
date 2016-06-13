<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php
        $script = Yii::app()->clientScript;
        $baseUrl = Yii::app()->theme->baseUrl;


        $script->registerCoreScript('jquery');
        $script->registerCssFile($baseUrl . '/macadmin/css/bootstrap.min.css');
        $script->registerCssFile($baseUrl . '/font-awesome-4.1.0/css/font-awesome.min.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/font-awesome.min.css');

        $script->registerCssFile($baseUrl . '/macadmin/css/jquery-ui.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/fullcalendar.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/prettyPhoto.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/rateit.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/bootstrap-datetimepicker.min.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/jquery.cleditor.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/jquery.dataTables.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/jquery.onoff.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/style.css');
        $script->registerCssFile($baseUrl . '/macadmin/css/widgets.css');
        ?>
    </head>
    <body>
        <?php $this->renderPartial('//layouts/_header') ?>

        <div class="content">
            <?php $this->renderPartial('//layouts/menu') ?>
            <div class="mainbar" style="margin-top: 10px">
                <?php echo $content; ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <br>
        <?php $this->renderPartial('//layouts/_footer') ?>
        <!-- /#page-wrapper -->

        <?php
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.yii.js");

        //$script->registerScriptFile($baseUrl . "/macadmin/js/jquery.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/bootstrap.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery-ui.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/fullcalendar.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.rateit.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.prettyPhoto.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.slimscroll.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.dataTables.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/excanvas.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.flot.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.flot.resize.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.flot.pie.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.flot.stack.js");
//        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.noty.js");
//        $script->registerScriptFile($baseUrl . "/macadmin/js/themes/default.js");
//        $script->registerScriptFile($baseUrl . "/macadmin/js/layouts/bottom.js");
//        $script->registerScriptFile($baseUrl . "/macadmin/js/layouts/topRight.js");
//        $script->registerScriptFile($baseUrl . "/macadmin/js/layouts/top.js");
//        $script->registerScriptFile($baseUrl . "/macadmin/js/sparklines.js");
//        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.cleditor.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/bootstrap-datetimepicker.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/jquery.onoff.min.js");
//        $script->registerScriptFile($baseUrl . "/macadmin/js/filter.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/custom.js");
//        $script->registerScriptFile($baseUrl . "/macadmin/js/charts.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/respond.min.js");
        $script->registerScriptFile($baseUrl . "/macadmin/js/bootbox.min.js");
        
        ?>
    </body>
</html>
