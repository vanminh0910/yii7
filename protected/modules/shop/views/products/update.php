<script src="<?php echo Yii::app()->baseUrl . '/themes/backend/macadmin/js/ckeditor/ckeditor.js'; ?>"></script>
<div class="page-head">
    <h2 class="pull-left"> <?php echo Yii::t('ShopModule.shop', 'Update'); ?></h2>
    <div class="clearfix"></div>
</div>


<div class="prepend-1" id="shopcontent">

    <h1><?php //echo Yii::t('ShopModule.shop', 'Update');  ?>
        <?php //echo $model->title; ?></h1>

    <?php echo $this->renderPartial('_form-update', array('model' => $model)); ?>

</div>
<script type="text/javascript">
    CKEDITOR.replace('product-description');
</script>