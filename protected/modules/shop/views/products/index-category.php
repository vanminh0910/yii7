<?php
$this->breadcrumbs = array(
    Shop::t('Products'),
);
Shop::renderFlash();
?>



<h2><?php echo Shop::t('All products'); ?></h2>

<div class="container">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
    ));
    ?>
</div>
