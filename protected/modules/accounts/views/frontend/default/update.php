<?php
/* @var $this SiteController */
/* @var $model RegisterForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Update';
$this->breadcrumbs = array(
    'Update',
);
?>

<div class="items">
    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-3 col-sm-3 hidden-xs">

                <h5 class="title">Pages</h5>
                <!-- Sidebar navigation -->
                <nav>
                    <ul id="navi">
                        <?php
                        echo '<li><a href="/Yii7/accounts/profile">My Account</a></li>';
                        ?> 
                        <li><a href="wish-list.html">Wish List</a></li>
                        <li><a href="order-history.html">Order History</a></li>
                        <?php
                        echo '<li><a href="/Yii7/accounts/update">Edit Profile</a></li>';
                        ?> 
                    </ul>
                </nav>

            </div>

            <!-- Main bar -->
            <div class="col-md-9 col-sm-9">
                <!-- Title -->
                <h5 class="title">Edit Profile</h5>

                <div class="form form-small">


                    <!-- Edit profile form (not working)-->
                    <div class="form-horizontal">

                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'update-form',
                            'enableClientValidation' => true,
                            'clientOptions' => array(
                                'validateOnSubmit' => true,
                            ),
                        ));
                        ?>
                        <!-- Name -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-6">
                                <?php echo $form->textField($model, 'first_name', array('class' => 'form-control', 'placeholder' => AccountsModule::t("First name"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'first_name', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'last_name', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-6">
                                <?php echo $form->textField($model, 'last_name', array('class' => 'form-control', 'placeholder' => AccountsModule::t("First name"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'last_name', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>
                        
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'city', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-6">
                                <?php echo $form->textField($model, 'city', array('class' => 'form-control', 'placeholder' => AccountsModule::t("City"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'city', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>
                        
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'street', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-6">
                                <?php echo $form->textField($model, 'street', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Street"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'street', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>
                        
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'zip', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-6">
                                <?php echo $form->textField($model, 'zip', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Zip"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'zip', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>
                        
                         <div class="form-group">
                            <?php echo $form->labelEx($model, 'phone', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-6">
                                <?php echo $form->textField($model, 'phone', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Phone"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'phone', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-6">
                                <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => AccountsModule::t("First name"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'email', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-6">
                                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Password"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'password', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'verifyPassword', array('class' => 'control-label col-md-2')); ?>
                            <div class="col-md-6">
                                <?php echo $form->passwordField($model, 'verifyPassword', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Retype Password"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'verifyPassword', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>

                        <!-- Buttons -->
                        <div class="form-group">
                            <!-- Buttons -->
                            <div class="col-md-6 col-md-offset-2">
                                <?php echo CHtml::submitButton(AccountsModule::t("Update"), array('class' => 'btn btn-sm btn-success')); ?>
                                <?php echo CHtml::resetButton(AccountsModule::t("Reset"), array('class' => 'btn btn-default')); ?>
                            </div>
                        </div>
                        <?php $this->endWidget(); ?>
                    </div>
                </div>

            </div>                                                                    



        </div>
    </div>
</div>
