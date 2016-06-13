<div id="cart" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Shopping Cart</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped tcart">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="single-item.html">HTC One</a></td>
                            <td>2</td>
                            <td>$250</td>
                        </tr>
                        <tr>
                            <td><a href="single-item.html">Apple iPhone</a></td>
                            <td>1</td>
                            <td>$502</td>
                        </tr>
                        <tr>
                            <td><a href="single-item.html">Galaxy Note</a></td>
                            <td>4</td>
                            <td>$1303</td>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Total</th>
                            <th>$2405</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a href="index.html" class="btn">Continue Shopping</a>
                <a href="checkout.html" class="btn btn-danger">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!--/ Cart modal ends -->

<!-- Login Modal starts -->
<div id="login" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Login</h4>
            </div>
            <div class="modal-body">
                <div class="form">
                    <?php
                    $model = new UserLogin;
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'login-form',
                        'enableAjaxValidation' => false,
                        'htmlOptions' => array(
                            'onsubmit' => "return false;", /* Disable normal form submit */
                            'onkeypress' => " if(event.keyCode == 13){ send_login(); } " /* Do ajax call when user presses enter key */
                        ),
                    ));
                    ?>
                    <div id="statuslogin" class="errorMessage" style="color:red; margin-left:145px;"></div>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Username"))); ?>
                            </div>
                            <br><br>
                            <div id="usernamelogin" class="errorMessage" style="color:red; margin-left:165px;"></div>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Password"))); ?>
                            </div>
                            <br><br>
                            <div id="passwordlogin" class="errorMessage" style="color:red; margin-left:165px;"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-3">
                                <div class="checkbox inline">
                                    <?php echo CHtml::activeCheckBox($model, 'rememberMe'); ?>
                                    <?php echo CHtml::activeLabelEx($model, 'rememberMe'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <?php echo CHtml::Button(AccountsModule::t("Login"), array('onclick' => 'send_login();', 'class' => 'btn btn-sm btn-success')); ?> 
                                <?php echo CHtml::resetButton(AccountsModule::t("Reset"), array('class' => 'btn btn-default')); ?>
                            </div>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
            <div class="modal-footer">
                <p>Dont have account? <a href="/Yii7/accounts/register">Register</a> here.</p>
                <p>Forgot your password? <a href="/Yii7/accounts/recovery">Recovery</a></p>
            </div>
        </div>
    </div>
</div>
<!--/ Login modal ends -->

<!-- Register Modal starts -->
<div id="register" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Register</h4>
            </div>
            <div class="modal-body">
                <div class="form">

                    <?php
                    $model = new User;

                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'register-form',
                        'enableAjaxValidation' => false,
                        'htmlOptions' => array(
                            'onsubmit' => "return false;", /* Disable normal form submit */
                            'onkeypress' => " if(event.keyCode == 13){ send(); } " /* Do ajax call when user presses enter key */
                        ),
                    ));
                    ?>

                    <div class="form-horizontal" >
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->textField($model, 'first_name', array('class' => 'form-control', 'placeholder' => AccountsModule::t("First name"))); ?>
                            </div>
                            <br><br>
                            <div id="first_name" class="errorMessage" style="color:red; margin-left:165px;"></div>

                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'last_name', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->textField($model, 'last_name', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Last name"))); ?>
                            </div>
                            <br><br>
                            <div id="last_name" class="errorMessage" style="color:red; margin-left:165px;"></div>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'city', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->textField($model, 'city', array('class' => 'form-control', 'placeholder' => AccountsModule::t("City"))); ?>
                            </div>
                            <?php echo $form->error($model, 'city'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'street', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->textField($model, 'street', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Street"))); ?>
                            </div>
                            <?php echo $form->error($model, 'street'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'zip', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->textField($model, 'zip', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Zip"))); ?>
                            </div>
                            <?php echo $form->error($model, 'zip'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'phone', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->textField($model, 'phone', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Phone"))); ?>
                            </div>
                            <?php echo $form->error($model, 'phone'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Email"))); ?>
                            </div>
                            <br><br>
                            <div id="email" class="errorMessage" style="color:red; margin-left:165px;"></div>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => AccountsModule::t("User name"))); ?>
                            </div>
                            <br><br>
                            <div id="username" class="errorMessage" style="color:red; margin-left:165px;"></div>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Password"))); ?>
                            </div>
                            <br><br>
                            <div id="password" class="errorMessage" style="color:red; margin-left:165px;"></div>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'verifyPassword', array('class' => 'control-label col-md-3')); ?>
                            <div class="col-md-7">
                                <?php echo $form->passwordField($model, 'verifyPassword', array('class' => 'form-control', 'placeholder' => AccountsModule::t("Retype password"))); ?>
                            </div>
                            <br><br>
                            <div id="verifyPassword" class="errorMessage" style="color:red; margin-left:165px;"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">

                                <?php echo CHtml::Button(AccountsModule::t("Register"), array('onclick' => 'send()', 'class' => 'btn btn-sm btn-success')); ?> 
                                <?php echo CHtml::resetButton(AccountsModule::t("Reset"), array('class' => 'btn btn-default')); ?>
                            </div>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
            <div class="modal-footer">
                <p>Already have account? <a href="/Yii7/accounts/login">Login</a> here.</p>
            </div>
        </div>
    </div>
</div>

<div id="notify" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Register successful</h4>
            </div>
            <div class="modal-body">
               
                <p style="color:red">Register successfully. Please go to your email to activate your account</p>
                
            </div>
            <div class="modal-footer">
                <p> <a href="/Yii7/accounts/">Back to home page</a> here.</p>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    
    function send_login() {
        var data = $("#login-form").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->baseUrl . '/accounts/login'; ?>',
            data: data,
            success: function(data) {
                var array = ["username", "password", "status"];
                var arrayLength = array.length;
                for (var i = 0; i < arrayLength; i++) {
                    if (data.hasOwnProperty(array[i])) {
                        document.getElementById(array[i]+'login').innerHTML = data[array[i]];
                    } else {
                        document.getElementById(array[i]+'login').innerHTML = '';
                    }
                }
                console.log(data);
                if(data.length ==0){
                    window.location.href = '<?php echo Yii::app()->baseUrl . '/accounts/profile'; ?>';
                }
            },
            error: function(data) { // if error occured
                alert("Error occured.please try again");
                alert(data);
            },
            dataType: 'json'
        });
    };

    function send() {
        var data = $("#register-form").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->baseUrl . '/accounts/register'; ?>',
            data: data,
            success: function(data) {
                console.log(data);
                if(data.hasOwnProperty("mailActivation")){
                    if(data.mailActivation){
                        $('#register').modal('hide');
                        $('#notify').modal('show');
                    }else{
                        window.location.href = '<?php echo Yii::app()->baseUrl . '/accounts/profile'; ?>';
                    }
                }else{
                    var array = ["first_name", "last_name", "username", "email", "password", "verifyPassword"];
                    var arrayLength = array.length;
                    for (var i = 0; i < arrayLength; i++) {
                        if (data.hasOwnProperty(array[i])) {
                            document.getElementById(array[i]).innerHTML = data[array[i]];
                        } else {
                            document.getElementById(array[i]).innerHTML = '';
                        }
                    }
                }
            },
            error: function(data) { // if error occured
                alert("Error occured.please try again");
                alert(data);
            },
            dataType: 'json'
        });
    };
</script>
