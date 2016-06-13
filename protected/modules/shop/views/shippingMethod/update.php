<div class="page-head">
    <h2 class="pull-left"> <?php echo Yii::t('ShopModule.shop', 'Update') . ' ' . $model->title; ?></h2>
    <div class="clearfix"></div>
</div>


<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
