<div class="col-md-7">
    <div class="widget" style="width:700px">
        <div class="widget-head">
            <div class="pull-left">First Layer Protection</div>
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
                            <?php echo $form->labelEx($model, 'Enable', array('class' => 'control-label col-md-2', 'style' => 'width:21%; margin-top:-6px')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->checkbox($model, 'firstLayerProtection[enable]'); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'firstLayerProtection[enable]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'Password', array('class' => 'control-label col-lg-2', 'style' => 'width:21%')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->textField($model, 'firstLayerProtection[password]', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Password"))); ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'firstLayerProtection[password]', array('style' => 'color:red; margin-left:125px')); ?>
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

