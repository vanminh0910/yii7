<div class="col-md-7">              
    <div class="widget" style="width:700px">
        <div class="widget-head">
            <div class="pull-left">Mail setting</div>
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
                            <?php echo $form->labelEx($model, 'Admin Email', array('class' => 'control-label col-md-2', 'style'=>'width:21%')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->emailField($model, 'email[admin_email]', array('class' => 'form-control', 'placeholder' => AccountsModule::t("SMTP Admin Email"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'email[admin_email]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'email[smtp_server]', array('class' => 'control-label col-md-2', 'style'=>'width:21%')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->textField($model, 'email[smtp_server]', array('class' => 'form-control', 'placeholder' => AccountsModule::t("SMTP Server"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'email[smtp_server]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'email[smtp_username]', array('class' => 'control-label col-md-2', 'style'=>'width:21%')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->textField($model, 'email[smtp_username]', array('class' => 'form-control', 'placeholder' => AccountsModule::t("SMTP Username"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'email[smtp_username]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'email[smtp_password]', array('class' => 'control-label col-md-2', 'style'=>'width:21%')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->passwordField($model, 'email[smtp_password]', array('class' => 'form-control', 'style'=>'width:21%', 'placeholder' => AccountsModule::t("SMTP Password"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'email[smtp_password]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>


                    </div>
    

                </div>
            </div>
            <div class="widget-foot">
                <!-- Footer goes here -->
            </div>
        </div>  
    </div>
</div>
