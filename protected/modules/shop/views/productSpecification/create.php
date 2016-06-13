<div class="page-head">
    <h2 class="pull-left"> <?php echo Yii::t('ShopModule.shop', 'Create ProductSpecification'); ?></h2>
    <div class="clearfix"></div>
</div>

<div class="container">
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</div>