<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-envelope"></i> System Settings</h2>
    <div class="bread-crumb pull-right">
        
    </div>
    <div class="clearfix"></div>
</div>

<div class="container">
<div style="margin-left:50px" class="form form-small">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'setting-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>
    
    <?php $this->renderPartial('/_siteform', array('model' => $model, 'form'=>$form)); ?>
    <?php $this->renderPartial('/_mailform', array('model' => $model, 'form'=>$form)); ?>
    <?php $this->renderPartial('/_datetimeform', array('model' => $model, 'form'=>$form)); ?>
    <?php $this->renderPartial('/_currencyform', array('model' => $model, 'form'=>$form)); ?>
    <?php $this->renderPartial('/_firstlayerprotection', array('model' => $model, 'form'=>$form)); ?>

    
    <div class="form-group">
        <!-- Buttons -->
        <div class="col-lg-offset-2 col-lg-6">
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div></div>