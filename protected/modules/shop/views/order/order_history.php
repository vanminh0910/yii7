<?php

Shop::register('css/shop.css');

echo '<div class="container" style="margin-top:3%">';
if ($orders) {
    echo '<table cellpadding="0" cellspacing="0" class="shopping_cart">';
    printf('<tr><th style="width:30%%;">%s</th><th style="width:30%%;">%s</th><th style="width:30%%;">%s</th><th>%s</th></tr>', Shop::t('Image'), Shop::t('Order day'), Shop::t('Products'), Shop::t('Price & Tax')
            //Shop::t('Price Single'),
            //Shop::t('Sum'),
            //Shop::t('Actions')
    );

    foreach ($orders as $order) {
        $history = CaptureOrders::model()->find('order_id = :order_id ', array(':order_id' => $order->order_id));
        $products = json_decode($history->products, $assoc = true);
        $shippng = json_decode($history->shipping, $assoc = true);
        $payment = json_decode($history->payment, $assoc = true);
        $total_price = 0;
        $products_name = '';

        foreach ($products as $product) {
            $total_price += $product['price'] * $product['amount'] * (1 + $product['tax_value'] / 100);
            if (array_key_exists('Variations', $product)) {
                foreach ($product['variations'] as $variation) {
                    $total_price += $variation['variation_adjust'];
                }
            }
            $products_name .= '<p>' . $product['name'] . '</p>';
            $model = Products::model()->findByPk($product['id']);

            printf('<tr><td style="width:width:30%%;">%s</td><td style="width:width:30%%;">%s</td><td style="width:30%%;">%s</td><td>%s</td></tr>', $model->getImage(0, true), $history->order_day, $products_name, $total_price
            );
        };
    };
};
echo '</table>';
echo '</div>';
?>

