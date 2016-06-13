<?php ?>
<div class="view">
    <h3>
        <?php
        echo CHtml::link($data->title, array('products/view', 'id' => $data->product_id));
        ?>
    </h3>

    <div class="product-overview-image">
        <?php
        if ($data->images) {
            $this->renderPartial('/image/view', array('thumb' => true, 'model' => $data->images[0]));
        } else {
            echo CHtml::image(Shop::register('no-pic.jpg'));
        }
        ?>
    </div>
    <div class="container">
        <p> <?php echo CHtml::encode($data->description); ?> </p>
        <p><strong> <?php echo Shop::priceFormat($data->price); ?></strong> <br />
        <p><?php echo Shop::pricingInfo(); ?></p>
    </div>

    <div class="clear"></div>
</div>
<div class="view-bottom"></div>
