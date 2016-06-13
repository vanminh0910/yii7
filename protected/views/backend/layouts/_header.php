<?php
$baseUrl = Yii::app()->request->getBaseUrl(true);
?>

<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span>Menu</span>
            </button>
            <!-- Site name for smallar screens -->
            <a href="#" class="navbar-brand hidden-lg">Yii7</a>
        </div>



        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

            <ul class="nav navbar-nav">

                <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
                <li class="dropdown dropdown-big">
                    <?php
                    echo CHtml::dropDownList('language', Yii::app()->language, Yii::app()->params['languages'], array('class' => 'form-control', 'style' => 'margin-top:10px'));
                    ?>
                </li>

                <!--Sync to server link -->
                <!--                <li class = "dropdown dropdown-big">
                                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><span class = "label label-danger"><i class = "fa fa-refresh"></i></span> Sync with Server</a>
                                </li>-->

            </ul>

            <!--Search form -->
            <!--<form class = "navbar-form navbar-left" role = "search">
            <div class = "form-group">
            <input type = "text" class = "form-control" placeholder = "Search">
            </div>
            </form> -->
            <!--Links -->
            <ul class = "nav navbar-nav pull-right">
                <li class = "dropdown pull-right">
                    <a data-toggle = "dropdown" class = "dropdown-toggle" href = "#">
                        <i class = "fa fa-user"></i> <?php echo Yii::app()->user->name
                    ?> <b class="caret"></b>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                        <li><a href="<?php echo $baseUrl . '/backend/accounts/logout' ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</div>

<script>
    $("#language").change((function() {
        var url = "<?php echo $baseUrl . '/backend/site/index?lang=' ?>" + $(this).val();
        window.open(url, '_self');
    }));
</script>
