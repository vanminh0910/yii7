<?php

/**
 * UserChangePassword class.
 * UserChangePassword is the data structure for keeping
 * user change password form data. It is used by the 'changepassword' action of 'UserController'.
 */
class UserChangePassword extends CFormModel {


    public $password;
    public $verifyPassword;

    public function rules() {
        return Yii::app()->controller->id == 'recovery' ? array(
            array('password, verifyPassword', 'required'),
            array('password, verifyPassword', 'length', 'max' => 128, 'min' => 4, 'message' => AccountsModule::t("Incorrect password (minimal length 4 symbols).")),
            array('verifyPassword', 'compare', 'compareAttribute' => 'password', 'message' => AccountsModule::t("Retype Password is incorrect.")),
                ) : array(
            array(' password, verifyPassword', 'length', 'max' => 128, 'min' => 4, 'message' => AccountsModule::t("Incorrect password (minimal length 4 symbols).")),
            array('verifyPassword', 'compare', 'compareAttribute' => 'password', 'message' => AccountsModule::t("Retype Password is incorrect.")),
     
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'password' => AccountsModule::t("Password"),
            'verifyPassword' => AccountsModule::t("Retype Password"),
        );
    }

    /**
     * Verify Old Password
     */
    public function verifyOldPassword($attribute, $params) {
        if (User::model()->notsafe()->findByPk(Yii::app()->user->id)->password != Yii::app()->getModule('user')->encrypting($this->$attribute))
            $this->addError($attribute, AccountsModule::t("Old Password is incorrect."));
    }

}
