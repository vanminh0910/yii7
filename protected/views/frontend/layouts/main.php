<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language; ?>" lang="<?php echo Yii::app()->language; ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <?php
            if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
                header('X-UA-Compatible: IE=edge,chrome=1');
            ?>
            <title><?php echo CHtml::encode($this->pageTitle); ?></title>
            <?php
            $clientScript = Yii::app()->clientScript;
            $baseUrl = Yii::app()->theme->baseUrl;
            $clientScript->registerCssFile($baseUrl . '/mackart/css/bootstrap.min.css');
            $clientScript->registerCssFile($baseUrl . '/mackart/css/flexslider.css');
            $clientScript->registerCssFile($baseUrl . '/mackart/css/owl.carousel.css');
            $clientScript->registerCssFile($baseUrl . '/mackart/css/font-awesome.min.css');
            $clientScript->registerCssFile($baseUrl . '/mackart/css/style.css');
            $clientScript->registerCssFile($baseUrl . '/mackart/css/red.css');
            ?>
    </head>
    <body>
        <?php
        $this->renderPartial('//layouts/modal');
        $this->renderPartial('//layouts/_header');
        ?>
        
        


        <div class="container" >


            <?php echo $content; ?>
        </div>
        <div class="clear"></div>
        <?php $this->renderPartial('//layouts/_footer') ?>
        
                <script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/owl.carousel.min.js"></script> 
		<script src="js/filter.js"></script> 
		<!-- Flex slider -->
		<script src="js/jquery.flexslider-min.js"></script> 
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
                
    </body>
</html>
<?php
$clientScript->registerScriptFile($baseUrl . '/mackart/js/jquery.js');
$clientScript->registerScriptFile($baseUrl . '/mackart/js/bootstrap.min.js');
$clientScript->registerScriptFile($baseUrl . '/mackart/js/owl.carousel.min.js');
$clientScript->registerScriptFile($baseUrl . '/mackart/js/filter.js');
$clientScript->registerScriptFile($baseUrl . '/mackart/js/jquery.flexslider-min.js');

$clientScript->registerScriptFile($baseUrl . '/mackart/js/respond.min.js');
$clientScript->registerScriptFile($baseUrl . '/mackart/js/html5shiv.js');
$clientScript->registerScriptFile($baseUrl . '/mackart/js/filter.js');
$clientScript->registerScriptFile($baseUrl . '/mackart/js/custom.js');
//$clientScript->registerScriptFile($baseUrl . '/mackart/js/register.js');
?>
