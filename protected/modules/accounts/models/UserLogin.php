<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'LoginController'.
 */
class UserLogin extends CFormModel {

    public $username;
    public $password;
    public $rememberMe;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and password are required
            array('username, password', 'required'),
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean'),
            // password needs to be authenticated
            array('password', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'rememberMe' => AccountsModule::t("Remember me next time"),
            'username' => AccountsModule::t("Username"),
            'password' => AccountsModule::t("Password"),
        );
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute, $params) {
        if (!$this->hasErrors()) {  // we only want to authenticate when no input errors
            $identity = new UserIdentity($this->username, $this->password);
            $identity->authenticate();
            switch ($identity->errorCode) {
                case UserIdentity::ERROR_NONE:
                    $duration = $this->rememberMe ? Yii::app()->controller->module->rememberMeTime : 0;
                    Yii::app()->user->login($identity, $duration);
                    break;
                case UserIdentity::ERROR_EMAIL_INVALID:
                    $this->addError("username", AccountsModule::t("Email is incorrect."));
                    break;
                case UserIdentity::ERROR_USERNAME_INVALID:
                    $this->addError("username", AccountsModule::t("Username is incorrect."));
                    break;
                case UserIdentity::ERROR_STATUS_NOTACTIV:
                    $this->addError("username", AccountsModule::t("You account is not activated. Please go to your registered email to activate your account"));
                    break;
                case UserIdentity::ERROR_STATUS_BAN:
                    $this->addError("username", AccountsModule::t("You account is blocked."));
                    break;
                case UserIdentity::ERROR_PASSWORD_INVALID:
                    $this->addError("password", AccountsModule::t("Password is incorrect."));
                    break;
            }
        }
    }

}