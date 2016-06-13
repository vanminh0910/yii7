<?php
$this->breadcrumbs = array(
    Shop::t('Products'),
);
Shop::renderFlash();
?>

<!--<div class="container flex-main">
		  <div class="row">
			<div class="col-md-12">
					
					<div class="flex-image flexslider">
					  <ul class="slides">
						   Each slide should be enclosed inside li tag. 
						  
						   Slide #1 
						<li>
						   Image 
						  <img src="/Yii7/protected/views/frontend/layouts/img/photos/slider1.jpg" alt=""/>
						   Caption 
						  <div class="flex-caption">
							  Title 
							 <h3>Levi's T-Shirt - <span class="color">Just $49</span></h3>
							  Para 
							 <p>Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. </p>
							 <div class="button">
							  <a href="single-item.html">Buy Now</a>
							 </div>
						  </div>
						</li>
						
						   Slide #2 
						<li>
						  <img src="/Yii7/protected/views/frontend/layouts/img/photos/slider2.jpg" alt=""/>
						  <div class="flex-caption">
							  Title 
							 <h3>Denim Jeans - <span class="color">Just $149</span></h3>
							  Para 
							 <p>Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. </p>
							 <div class="button">
							  <a href="single-item.html">Buy Now</a>
							 </div>
						  </div>                  
						</li>
						
						<li>
						  <img src="/Yii7/protected/views/frontend/layouts/img/photos/slider3.jpg" alt=""/>
						  <div class="flex-caption">
							  Title 
							 <h3>Polo Shirts - <span class="color">Just $79</span></h3>
							  Para 
							 <p>Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. </p>
							 <div class="button">
							  <a href="single-item.html">Buy Now</a>
							 </div>
						  </div>                  
						</li>
						
						<li>
						  <img src="/Yii7/protected/views/frontend/layouts/img/photos/slider4.jpg" alt=""/>
						  <div class="flex-caption">
							  Title 
							 <h3>Raymonds Suitings - <span class="color">Just $449</span></h3>
							  Para 
							 <p>Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. </p>
							 <div class="button">
							  <a href="single-item.html">Buy Now</a>
							 </div>
						  </div>                  
						</li>
						
					  </ul>
					</div>

			</div>
		  </div>
		</div>-->

<h2><?php echo Shop::t('All products'); ?></h2>

<div class="items">
<div class="container">
    <div class="row">
    <?php
//    $this->widget('zii.widgets.CListView', array(
//        'dataProvider' => $dataProvider,
//        'itemView' => '_view',
//    ));
    
    
    foreach($items as $item){
        echo '<div class="col-md-3 col-sm-4">';
            echo '<div class="item">';
                echo '<div class="item-image">';
                    echo '<a href="single-item.html">';
                        if(isset($item->images)){
                            echo '<a href="/Yii7/shop/products/view/id/'.$item->product_id.'"><img alt="" src="/Yii7/files/shop/'.$item->images->filename.'"></a>';
                        }
                    echo '</a>';
                echo '</div>';
                
                echo '<div class="item-details">';
                    echo '<h5>';
                        echo CHtml::link($item->title, array('products/view', 'id' => $item->product_id));
                        //echo '<a href="single-item.html">'.$item->title.'</a>';
                    echo '</h5>';
                    
                    echo '<div class="clearfix"></div>';
                    //echo '<p>Something about the product goes here. Not More than 2 lines.</p>';
                    echo '<hr>';
                    echo '<div class="item-price pull-left">'.$item->price.'</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
    
    ?>
    
</div>
</div>
    </div>
