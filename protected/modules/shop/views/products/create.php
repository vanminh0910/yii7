<?php
$baseUrl = Yii::app()->getBaseUrl(true) . '/backend/';
?>
<script src="<?php echo Yii::app()->baseUrl.'/themes/backend/macadmin/js/ckeditor/ckeditor.js'; ?>"></script>

<?php
$this->breadcrumbs = array(
    Yii::t('shop', 'Product') => array('index'),
    Yii::t('shop', 'Create'),
);
?>

<div class="page-head">
    <h2 class="pull-left"> <?php echo Yii::t('ShopModule.shop', 'Create a new Product'); ?></h2>
    <div class="clearfix"></div>
</div>
<div id="shopcontent">
    
     <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'products-form',
       
        'htmlOptions'=>array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal'),
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo $this->renderPartial('_form', array('model' => $model_product, 'form'=>$form)); ?>
    <?php //echo $this->renderPartial('../image/_form_image', array('model'=>$model_image, 'form'=>$form)); ?>
    <?php echo $form->hiddenField($model_product,'image_id'); ?>
    
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
    
    <div class="row col-lg-offset-2">
        <?php
        echo CHtml::submitButton($model_product->isNewRecord ?
                        Yii::t('ShopModule.shop', 'Create') : Yii::t('ShopModule.shop', 'Save'), array('class' => 'btn btn-sm btn-primary'));
        ?>
    </div>

    <?php $this->endWidget(); ?>


</div>

<script type="text/javascript">
    CKEDITOR.replace( 'product-description' );
    $(document).ready(function() {
//        $('#choose_previous_image').click(function(e) {
        function loadLibraryImage() {   
            $.ajax({
                type: 'GET',
                url: '<?php echo Yii::app()->baseUrl . '/backend/shop/image'; ?>',
                success: function(data) {
                   
                   $( "#grid_of_image" ).empty();
                   var numberOfImage = data.length;
                   for(var i = numberOfImage-1; i >= 0; i--){
                       var imageSource = "/Yii7/files/shop/" + data[i].filename;
                       console.log(imageSource);
                       var imageTag = "<img width='100' alt='iphone' id='" + data[i].id + "'src='" + imageSource + "'>";
                       $('#grid_of_image').append(imageTag);
                      
                   }
                },
                error: function(data) { // if error occured
                    alert("Error occured.please try again");
                    alert(data);
                },
                dataType: 'json'
            });
        };
        
        loadLibraryImage();
         
        $( document ).on( "click", "#grid_of_image img", function() {
            $("#image_list" ).empty();
            $('#image_list').append($(this).context);
            $('#Products_image_id').val(this.id);
            console.log(this.id);
        });
        
        $( document ).on( "click", "#image_list img", function() {
            
            $('#grid_of_image').append($(this).context);
            
        });
        
        $( document ).on( "click", "#add_new_image", function() {
            bootbox.dialog({
            title: "That html",
            message:                             
                    '<form id="file_upload_form" method="post" enctype="multipart/form-data" action="<?php echo $baseUrl . 'shop/image/create' ?>">\n\
                        <input name="image" id="file" size="27" type="file" /><br /> \n\
                        <input type="submit" name="action" value="Upload Image" /><br /> \n\
                        <iframe id="upload_target" name="upload_target" src="" style="width:100px;height:100px;border:1px solid #ccc;"></iframe> \n\
                    </form>'
            });
        });
        
        $( document ).on( "submit", "#file_upload_form",function() {
//             console.log("aaa");
		document.getElementById("file_upload_form").target = "upload_target";
		document.getElementById("upload_target").onload = uploadDone; //This function should be called when the iframe has compleated loading
			// That will happen when the file is completely uploaded and the server has returned the data we need.
        });
        
        function uploadDone() { //Function will be called when iframe is loaded
           
            var ret = frames['upload_target'].document.getElementsByTagName("body")[0].innerHTML;
            
            var data = eval("("+ret+")"); //Parse JSON // Read the below explanations before passing judgment on me

            if(data.success) { //This part happens when the image gets uploaded.
                console.log(data.success);   
                //bootbox.hideAll(); 
                loadLibraryImage();
            }
            else if(data.failure) { //Upload failed - show user the reason.
                    alert("Upload Failed: " + data.failure);
            }	
        }
         

    });
</script>
