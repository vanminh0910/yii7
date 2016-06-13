<?php $this->pageTitle = Yii::app()->name . ' - ' . AccountsModule::t("Create User");
?>

<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-user"></i>
        <?php
        echo $model->isNewRecord ? AccountsModule::t("Create User") :
                AccountsModule::t('Update User');
        ?>
    </h2>
    <div class="clearfix"></div>
</div>
<div class="container">
    <div class="form">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'create-form',
            'htmlOptions' => array('class' => 'form-horizontal')
        ));
        ?>

        <!--        <div class="col-lg-offset-2">
        <?php echo $form->errorSummary(array($model)); ?>
                </div>-->
        <div class="form-group">
            <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'password'); ?>

            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'verifyPassword', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->passwordField($model, 'verifyPassword', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'verifyPassword'); ?>

            </div>
        </div>



        <div class="form-group">
            <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'first_name', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'first_name'); ?>

            </div>
        </div>




        <div class="form-group">
            <?php echo $form->labelEx($model, 'last_name', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'last_name', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'last_name'); ?>

            </div>
        </div>




        <div class="form-group">
            <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'email'); ?>

            </div>
        </div>




        <div class="form-group">
            <?php echo $form->labelEx($model, 'status', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php
                $status = array(1 => AccountsModule::t('Active'), 0 => AccountsModule::t('In Active'), -1 => AccountsModule::t('Banned'));
                echo $form->dropDownList($model, 'status', $status, array('class' => 'form-control'));
                ?>
            </div>
        </div>

        <div class="row col-lg-offset-2">
            <?php
            echo CHtml::submitButton($model->isNewRecord ? AccountsModule::t("Create") : AccountsModule::t('Update'), array('class' => 'btn btn-sm btn-primary'));
            ?>
        </div>

        <?php $this->endWidget(); ?>
    </div>
</div>
