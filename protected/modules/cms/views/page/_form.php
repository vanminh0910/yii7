<?php // echo $form->textFieldRow($model,'name');  ?>
<?php //echo $form->dropDownListRow($model,'parentId',$model->getParentOptionTree());  ?>
<?php //echo $form->dropDownListRow($model,'type',$model->getTypeOptions());  ?>
<?php //echo $form->checkBoxRow($model,'published')  ?>

<div class="col-md-7" >              
<!--    <div class="widget" style="width:700px" >-->

        <div class="widget-content" style="width:700px">
            <div class="padd" style="width:700px">
                <div class="form quick-post" style="width:700px">
                    <!-- Edit profile form (not working)-->

                    <div class="form-horizontal" style="width:700px">

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2', 'style' => 'width:21%')); ?>
                            <div class="col-lg-6">
                                <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => CmsModule::t("System name"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'name', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>   

                        <div class="form-group" >
                            <?php echo $form->labelEx($model, 'parentId', array('class' => 'control-label col-md-2', 'style' => 'width:21%; margin-top:-6px')); ?>
                            <div class="col-lg-6">
                                <?php
                                echo $form->dropDownList($model, 'parentId', $model->getParentOptionTree());
                                ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'type', array('class' => 'control-label col-md-2', 'style' => 'width:21%; margin-top:-6px')); ?>
                            <div class="col-md-6">
                                <?php
                                echo $form->dropDownList($model, 'type', $model->getTypeOptions());
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'published', array('class' => 'control-label col-md-2', 'style' => 'width:21%; margin-top:-6px')); ?>
                            <div class="col-lg-6">
                                <?php echo $form->checkbox($model, 'published'); ?>
                            </div>
                        </div>

<!--                        <div class="form-group" style="margin-top: 20px; margin-left:20px">
                             Buttons 
                            <div class="col-lg-offset-2 col-lg-6">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>-->
                        
                    </div>

                </div>
            </div>
        </div>
<!--    </div>  -->
</div> 

