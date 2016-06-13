<div class="col-md-7" >              
    <div class="widget" style="width:700px" >
        <div class="widget-head">
            <div class="pull-left">Date and Time Setting</div>
<!--            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
            </div>  -->
            <div class="clearfix"></div>
        </div>
        <div class="widget-content" style="width:700px; height:400px">
            <div class="padd" style="width:700px">
                <div class="form quick-post" style="width:700px">
                    <!-- Edit profile form (not working)-->

                    <div class="form-horizontal" style="width:700px">

                        <div class="form-group" style="width:700px">
                            <?php echo $form->labelEx($model, 'Server Time Zone', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                            <div class="col-lg-5">
                                <?php
                                echo $form->dropDownList($model, 'dateTime[server_time_zone]', SettingsForm::$list, array('empty' => '--Select timezone--'));
                                ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'dateTime[server_time_zone]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'Date Format', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                            <div class="col-md-6">
                                <?php
                                echo $form->radioButtonList($model, 'dateTime[date_format]', array(
                                    'F j\,Y' => 'October 7, 2014',
                                    'Y/m/d' => '2014/10/07',
                                    'm/d/Y' => '10/07/2014',
                                    'd/m/Y' => '07/10/2014'));
                                ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'dateTime[date_format]', array('style' => 'color:red; margin-left:125px')); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'Time Format', array('class' => 'control-label col-md-2', 'style'=>'width:21%; margin-top:-6px')); ?>
                            <div class="col-md-6">
                                <?php
                                echo $form->radioButtonList($model, 'dateTime[time_format]', array(
                                    'g:i a' => '8:10 am',
                                    'g:i A' => '8:10 AM',
                                    'g:i' => '08:10',
                                ));
                                ?>
                            </div>
                            <br><br>
                            <?php echo $form->error($model, 'dateTime[time_format]', array('style' => 'color:red; margin-left:125px')); ?>
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

