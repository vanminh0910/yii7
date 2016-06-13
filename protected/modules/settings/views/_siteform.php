<div class="col-md-7">              
    <div class="widget" style="width:700px">
        <div class="widget-head">
            <div class="pull-left">Site Setting</div>
<!--            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
            </div>  -->
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <div class="padd">
                <div class="form quick-post">
                    <!-- Edit profile form (not working)-->

                    <div class="form-horizontal">

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'Title', array('class' => 'control-label col-lg-2', 'style'=>'width:21%')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->textField($model, 'site[title]', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Site name"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'site[title]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>   

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'Tag line', array('class' => 'control-label col-lg-2', 'style'=>'width:21%')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->textField($model, 'site[tag_line]', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Tag line"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'site[tag_line]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>                           
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'Maintenance mode', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->checkbox($model, 'site[maintenance_mode]'); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'site[maintenance_mode]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>

                        <!-- Buttons -->
                        
                    </div>

                </div>
            </div>
            <div class="widget-foot">
                <!-- Footer goes here -->
            </div>
        </div>
    </div>  
</div>

