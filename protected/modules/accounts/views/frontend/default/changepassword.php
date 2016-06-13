<?php
$this->pageTitle = Yii::app()->name . ' - ' . AccountsModule::t("Change Password");
$this->breadcrumbs = array(
    AccountsModule::t("Login") => array('/user/login'),
    AccountsModule::t("Change Password"),
);
?>

<h1><?php echo AccountsModule::t("Change Password"); ?></h1>

<div class="col-md-9 col-sm-9">

                <div class="form form-small">

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
                                      

                        <!-- Email -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-8">
                                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Password"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'password', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>
                        
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'verifyPassword', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-8">
                                <?php echo $form->passwordField($model, 'verifyPassword', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Retype Password"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'verifyPassword', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>

                                            <!-- Buttons -->
                         <div class="form-actions">
                            <!-- Buttons -->
                            <div class="col-md-8 col-md-offset-3">
                                <?php echo CHtml::submitButton(AccountsModule::t("Restore"), array('class' => 'btn btn-sm btn-success')); ?>
                               
                            </div>
                        </div>
                        <?php $this->endWidget(); ?>
                    </div>
                </div>

            </div>                                                                    
