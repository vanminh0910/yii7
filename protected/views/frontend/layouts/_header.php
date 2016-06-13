<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Logo. Use class "color" to add color to the text. -->
                <div class="logo">
                    <h1><a href="/Yii7">Yii7</span></a></h1>
                    <p class="meta">online shopping is fun!!!</p>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
                
                <div class="dropdown dropdown-small">
                    <?php
                    echo CHtml::dropDownList('language', Yii::app()->language, Yii::app()->params['languages'], array('class' => 'form-control', 'style' => 'margin-top:10px'));
                    ?>
                </div>

                <!-- Search form -->
<!--                <form role="form">
                    <div class="input-group">
                        <input type="email" placeholder="Search" id="search1" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Search</button>
                        </span>
                    </div>
                </form>-->

                <div class="hlinks">
<!--                    <span>
                         item details with price
                        <a data-toggle="modal" role="button" href="#cart">
                            3 Item(s) in your <i class="fa fa-shopping-cart"></i>
                        </a> -<span class="bold">$25</span>
                    </span>-->
                    <!-- Login and Register link -->
                    <?php
                    if (Yii::app()->user->isGuest) {
                        echo ' <span class="lr"><a data-toggle="modal" role="button" href="#login">Login</a>
                        or <a data-toggle="modal" role="button" href="#register">Register</a></span>';
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
</header>
<div role="banner" class="navbar bs-docs-nav">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
            <ul class="nav navbar-nav">
                
                        <?php
                            $categories = Category::model()->findAll('parent_id = :user_id ', array(':user_id' => 0));
                            foreach ($categories as $category){
                                echo '<li class="dropdown">';
                                echo '<a data-toggle="dropdown" class="dropdown-toggle" href="#">'.$category->title.'<b class="caret"></b></a>';
                                echo '<ul class="dropdown-menu">';
                                $subCategories = Category::model()->findAll('parent_id = :user_id ', array(':user_id' => $category->category_id));
                                foreach ($subCategories as $subCategory){
                                    echo '<li><a href="/Yii7/shop/products/category/id/'.$subCategory->category_id.'">'.$subCategory->title. '</a></li>';
                                };
                                echo '</ul>';
                                echo '</li>';
                            };
                        ?>
             
<!--                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Tablets <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="items.html">Samsung</a></li>
                        <li><a href="items.html">Micromax</a></li>
                        <li><a href="items.html">Apple</a></li>
                    </ul>
                </li>-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Account <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <?php
                        echo '<li><a href="/Yii7/accounts/profile">My Account</a></li>';
                        ?>
                        <?php
                        echo '<li><a href="/Yii7/shop/shoppingcart/view">View Cart</a></li>';
                        ?>
                        <?php
                        echo '<li><a href="/Yii7/shop/order/orderhistory">Order History</a></li>';
                        ?>


                        <?php
                        if (Yii::app()->user->isGuest) {

                        } else {
                            echo '<li><a href="/Yii7/accounts/logout">Logout</a></li>';
                            echo '<li><a href="/Yii7/accounts/profile">Profile</a></li>';
                        }
                        ?>


                    </ul>
                </li>
                
                <li><a href="/Yii7/site/contact">Contact</a></li>
                <li><a href="/Yii7/site/contact">About Us</a></li>

            </ul>
        </nav>
    </div>
</div>


<script>
    $("#language").change((function() {
        var oldURL = document.URL;
        var newURL = '';
        var lengthOldUrl = oldURL.length;
        var res = oldURL.substring(lengthOldUrl - 7, lengthOldUrl - 2);
        console.log(res);
        if(res == 'lang='){
            newURL = oldURL.substr(0, lengthOldUrl - 2)  + $(this).val();
            console.log(newURL);
        }else{
            newURL = oldURL + '?lang=' + $(this).val();
        }
        window.open(newURL, '_self');
    }));
</script>
