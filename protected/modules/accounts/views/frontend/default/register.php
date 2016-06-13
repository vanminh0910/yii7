<?php
/* @var $this SiteController */
/* @var $model RegisterForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Register';
$this->breadcrumbs = array(
    'Register',
);
?>

<?php if (Yii::app()->user->hasFlash('Message')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('Message'); ?>
    </div>

<?php else: ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Some content -->
                    <h3 class="title">Register Today <span class="color">!!!</span></h3>
                    <h4 >Morbi tincidunt posuere turpis eu laoreet</h4>
                    <p>Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. </p>
                    <h5>Maecenas hendrerit neque id</h5>
                    <div class="lists">
                        <ul>
                            <li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
                            <li>Cras tincidunt mi non arcu hendrerit eleifend</li>
                            <li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
                            <li>Maecenas hendrerit neque id ante dictum mattis</li>
                            <li>Vivamus non neque lacus, et cursus tortor</li>
                        </ul>
                    </div>
                    <p>Nullam in est urna. In vitae adipiscing enim. In ut nulla est. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. </p>

                </div>

                <div class="col-md-6">
                    <div class="formy well">
                        <h4 class="title">Register for New Account</h4>
                        <div class="form">

                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'register-form',
                                'enableClientValidation' => true,
                                'clientOptions' => array(
                                    'validateOnSubmit' => true,
                                ),
                            ));
                            ?>

                            <div class="form-horizontal">
                                <!-- Name -->
                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model, 'first_name', array('class' => 'form-control', 'placeholder' => AccountsModule::t('First name'))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'first_name', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>

                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'last_name', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model, 'last_name', array('class' => 'form-control', 'placeholder' => AccountsModule::t('Last name'))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'last_name', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>
                                
                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'city', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model, 'city', array('class' => 'form-control', 'placeholder' => AccountsModule::t('City'))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'city', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>
                                
                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'street', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model, 'street', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Street"))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'street', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>
                                
                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'zip', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model, 'zip', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Zip"))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'zip', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>
                                <!-- Email -->
                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'phone', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model, 'phone', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Phone"))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'phone', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>
                                
                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Email"))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'email', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>
                                
                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => AccountsModule::t("First name"))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'username', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>

                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Password"))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'password', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <?php echo $form->labelEx($model, 'verifyPassword', array('class' => 'control-label col-md-3')); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->passwordField($model, 'verifyPassword', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Retype Password"))); ?>
                                    </div>
                                    <br><br>
                                    <?php echo $form->error($model, 'verifyPassword', array('style' => 'color:red; margin-left:125px')); ?>
                                </div>
                                <!-- Checkbox -->
                                <!--                            <div class="form-group">
                                                                <div class="col-md-8 col-md-offset-3">
                                                                    <label class="checkbox-inline">
                                                                        <input type="checkbox" id="inlineCheckbox3" value="agree"> Agree with Terms and Conditions
                                                                    </label>
                                                                </div>
                                                            </div> -->

                                <!-- Buttons -->
                                <div class="form-actions">
                                    <!-- Buttons -->
                                    <div class="col-md-8 col-md-offset-3">
                                        <!--                                    <button type="submit" class="btn btn-danger">Register</button>
                                                                            <button type="reset" class="btn btn-default">Reset</button>-->

                                        <?php echo CHtml::submitButton(AccountsModule::t("Register"), array('class' => 'btn btn-sm btn-success')); ?>
                                        <?php echo CHtml::resetButton(AccountsModule::t("Reset"), array('class' => 'btn btn-default')); ?>
                                    </div>
                                </div>
                            </div>
                            <?php $this->endWidget(); ?>
                            <div class="clearfix"></div>
                            <hr />
                            <p>Already have an Account? <a href="/Yii7/accounts/login">Login</a></p>
                            
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Page content ends -->


    <!-- Newsletter starts -->
    <div class="container newsletter">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <h5><i class="fa fa-envelope"></i> Hot Offers - Don't Miss Anything!!!</h5>
                    <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet.</p>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <input type="email" class="form-control" id="search" placeholder="Subscribe">
                        </div>
                        <button type="submit" class="btn btn-default">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Newsletter ends -->

<?php endif; ?>