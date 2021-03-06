<?php
$baseUrl = Yii::app()->getBaseUrl(true);

$this->pageTitle = Yii::app()->name . ' - Profile';
$this->breadcrumbs = array(
    'Profile',
);
?>


<div class="items">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 hidden-xs">

                <!-- Sidebar navigation -->
                <h5 class="title">Pages</h5>
                <!-- Sidebar navigation -->
                <nav>
                    <ul id="navi">
                        <?php
                        echo '<li><a href="/Yii7/accounts/profile">My Account</a></li>';
                        ?> 
<!--                        <li><a href="wish-list.html">Wish Listaaaaa</a></li>
                        <li><a href="order-history.html">Order History</a></li>-->
                        <?php
                        echo '<li><a href="/Yii7/accounts/update">Edit Profile</a></li>';
                        ?> 
                    </ul>
                </nav>

            </div>

            <!-- Main content -->
            <div class="col-md-9 col-sm-9">

                <h5 class="title">My Account</h5>


                <div class="address">
                    <address>
                        <strong><?php echo $data->first_name; ?>
                        <?php echo $data->last_name; ?></strong>
                        <br>
                        <?php echo $data->street; ?>
                        <br>
                        <?php echo $data->city; ?>
                        <br>
                        <abbr title="Phone">P:</abbr>
                        <?php echo $data->phone; ?>
                        <br>
                        <a href="mailto:#"><?php echo $data->email; ?></a>
                    </address>
                </div>
                <h5 class="title">My Recent Purchases</h5>
                <table class="table table-striped tcart">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>25-08-12</td>
                            <td>4423</td>
                            <td>HTC One</td>
                            <td>$530</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>15-02-12</td>
                            <td>6643</td>
                            <td>Sony Xperia</td>
                            <td>$330</td>
                            <td>Shipped</td>
                        </tr>
                        <tr>
                            <td>14-08-12</td>
                            <td>1283</td>
                            <td>Nokia Asha</td>
                            <td>$230</td>
                            <td>Processing</td>
                        </tr>
                    </tbody>
                </table>
            </div>                                                                    
        </div>
    </div>
</div>








