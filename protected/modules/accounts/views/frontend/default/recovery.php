<?php
$this->pageTitle = Yii::app()->name . ' - ' . AccountsModule::t("Restore");
$this->breadcrumbs = array(
    AccountsModule::t("Login") => array('/user/login'),
    AccountsModule::t("Restore"),
);
?>

<h1><?php echo AccountsModule::t("Restore"); ?></h1>

<?php if (Yii::app()->user->hasFlash('recoveryMessage')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
    </div>
<?php else: ?>

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
                            <?php echo $form->labelEx($model, 'login_or_email', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-8">
                                <?php echo $form->textField($model, 'login_or_email', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Email or Username"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'login_or_email', array('style' => 'color:red; margin-left:125px')); ?>
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

<?php endif; ?>