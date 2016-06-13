<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop', 'Shop')=>array('shop/index'),
	Yii::t('ShopModule.shop', 'Categories')=>array('index'),
	$model->title,
);
?>

<div class="page-head">
    <h2 class="pull-left"><?php echo $model->title; ?></h2>
    <div class="clearfix"></div>
</div>

<div class="container">
<div class="widget">


<?php
	foreach($model->Products as $product) {
		$this->renderPartial('/products/_view', array('data' => $product));
}
?>


<div class="clear"> </div>
</div>
</div>

