<div class="col-md-7">              
    <div class="widget" style="width:700px">
        <div class="widget-head">
            <div class="pull-left">Currency Setting</div>
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
                            <?php echo $form->labelEx($model, 'Base Currency', array('class' => 'control-label col-lg-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                            <div class="col-lg-5">
                                <?php
                                echo $form->dropDownList($model, 'currency[base_currency]', SettingsForm::$currencyUnit, array('empty' => '--Select currency--'), array('style'=>'width:50px'));
                                ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'currency[base_currency]', array('style' => 'color:red; margin-left:125px')); ?>
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

