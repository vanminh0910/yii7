<?php
$baseUrl = Yii::app()->getBaseUrl(true) . '/backend/';
?>
<div class = "sidebar">
    <div class = "sidebar-dropdown"><a href = "#">Navigation</a></div>

    <ul id = "nav">
        <!--Main menu with font awesome icon -->
        <li ><a href = "<?php echo $baseUrl . 'site/index' ?>"><i class = "fa fa-home"></i><?php echo Yii::t('menu', 'Home') ?></a>
        </li>
        
        <li ><a href = "<?php echo $baseUrl . 'accounts/index' ?>"><i class = "fa fa-users"></i> <?php echo Yii::t('menu', 'Users') ?> </a>
        </li>
        
        <li ><a href="<?php echo $baseUrl . 'mail' ?>"><i class="fa fa-envelope"></i> <?php echo Yii::t('menu', 'Mail') ?> </a>
        </li>
<!--        <li><a href="<?php // echo $baseUrl . 'language'                              ?>"><i class="fa fa-font"></i> Language </a>-->
       
        <li><a href="<?php echo $baseUrl . 'settings/settings' ?>"><i class="fa fa-magic"></i> <?php echo Yii::t('menu', 'System Setting') ?></a></li>

        <li class="has_sub" id="cms"><a href="#"><i class="fa fa-magic"></i> CMS <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><a href="<?php echo $baseUrl . 'cms/page' ?>"><?php echo Yii::t('menu', 'Pages') ?> </a></li>
                <li><a href="<?php echo $baseUrl . 'cms/block' ?>"><?php echo Yii::t('menu', 'Block') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'cms/menu' ?>"><?php echo Yii::t('menu', 'Menu') ?></a></li>
            </ul>
        </li>


        <li class="has_sub" id="rights"><a href="#"><i class="fa fa-cogs"></i> <?php echo Yii::t('menu', 'Permission') ?> <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><a href="<?php echo $baseUrl . 'rights' ?>"><?php echo Yii::t('menu', 'Assignment') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'rights/authItem' ?>"><?php echo Yii::t('menu', 'Items') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'rights/authItem/roles' ?>"><?php echo Yii::t('menu', 'Roles') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'rights/authItem/tasks' ?>"><?php echo Yii::t('menu', 'Tasks') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'rights/authItem/operations' ?>"><?php echo Yii::t('menu', 'Operations') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'rights/authItem/generate' ?>"><?php echo Yii::t('menu', 'Generate') ?> </a></li>
            </ul>
        </li>

        <li class="has_sub" id="shop"><a href="#"><i class="fa fa-shopping-cart"></i> <?php echo Yii::t('menu', 'Shop') ?> <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><a href="<?php echo $baseUrl . 'shop/category/admin' ?>"><?php echo Yii::t('menu', 'Category') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'shop/products/admin' ?>"><?php echo Yii::t('menu', 'Product') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'shop/order/admin' ?>"><?php echo Yii::t('menu', 'Order') ?> </a></li>
                <li><a href="<?php echo $baseUrl . 'shop/tax/admin' ?>"><?php echo Yii::t('menu', 'Tax') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'shop/paymentMethod/admin' ?>"><?php echo Yii::t('menu', 'Payment Method') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'shop/shippingMethod/admin' ?>"><?php echo Yii::t('menu', 'Shipping Method') ?></a></li>
                <li><a href="<?php echo $baseUrl . 'shop/productSpecification/admin' ?>"><?php echo Yii::t('menu', 'Product Specification') ?></a></li>
            </ul>
        </li>
    </ul>
</div>