<?php
$baseUrl = Yii::app()->getBaseUrl(true) . '/backend/';
?>

<div class="container" style="margin-left: 10px">
    <fieldset>

<?php //$form=$this->beginWidget('CActiveForm', array(
	//'id'=>'image-form',
	//'htmlOptions'=>array('enctype' => 'multipart/form-data'),
	//'enableAjaxValidation'=>false,)); ?>
         <legend> <?php echo Shop::t('Article Images'); ?> </legend>

<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->
	<?php echo $form->errorSummary($model); ?>


		<?php //echo $form->labelEx($model,'title', array('class' => 'control-label col-lg-2')); ?>
          
		<?php //echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45, 'class' => 'form-control')); ?>
		<?php //echo $form->error($model,'title'); ?>
             
	

	
		<?php //echo $form->labelEx($model,'filename', array('class' => 'control-label col-lg-2')); ?>
       
		<?php //echo $form->fileField($model,'filename',array('size'=>45,'maxlength'=>45, )); ?>
		<?php //echo $form->error($model,'filename'); ?>
   

		<?php //echo $form->hiddenField($model,'product_id', array('value' => $_GET['product_id'])); ?>

	
	<?php //echo CHtml::submitButton($model->isNewRecord 
			//? Shop::t('Upload') 
			//: Shop::t('Save')); ?>
        <div class="form-group">
         
            <div id="choose_previous_image" class ="control-label col-lg-2" >Choose image for your product</div>

            <div  class="col-lg-5" style="border: 1px solid #ccc; border-radius: 4px; margin-left:15px; min-height:100px">Image library
                <div id="grid_of_image" style="min-height:100px"></div>
                <a id="add_new_image">Add more image to your library</a>
                
            </div>
            
            <div class="col-lg-5" style="border: 1px solid #ccc; border-radius: 4px; margin-left:183px; margin-top: 20px">Added images (click any image to remove)
                <div id="image_list" > </div>
            </div>

        </div>
            
        
        
        
        
	

<?php //$this->endWidget(); ?>
        </fieldset>

</div><!-- form -->


