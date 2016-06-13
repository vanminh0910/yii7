<?php

class User extends CActiveRecord {

    const STATUS_NOACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_BANNED = -1;

    public $verifyPassword;
    public $pageSize = 10;

    /**
     * The followings are the available columns in table 'users':
     * @var integer $id
     * @var string $username
     * @var string $password
     * @var string $email
     * @var string $first_name
     * @var string $last_name
     * @var string $activation_key
     * @var integer $create_at
     * @var integer $last_visit
     * @var integer $status
     */

    /**
     * Returns the static model of the specified AR class.
     * @return CActiveRecord the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return Yii::app()->getModule('accounts')->tableUsers;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {

        return (array(
            array('username, ', 'length', 'max' => 20, 'min' => 3,),
            array('password', 'length', 'max' => 128, 'min' => 4,),
            array('first_name, last_name, city, street, phone, zip', 'length', 'max' => 128, 'min' => 1,),
            array('email', 'email'),
            array('username', 'unique',),
            array('email', 'unique',),
            array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u',),
            array('status', 'in', 'range' => array(self::STATUS_NOACTIVE, self::STATUS_ACTIVE, self::STATUS_BANNED)),
            array('create_at', 'default', 'value' => date('Y-m-d H:i:s'), 'setOnEmpty' => true, 'on' => 'insert'),
            array('last_visit', 'default', 'value' => '0000-00-00 00:00:00', 'setOnEmpty' => true, 'on' => 'insert'),
            array('username, email, first_name, last_name', 'required'),
            array('verifyPassword, password', 'required', 'on' => 'insert'),
            array('status', 'numerical', 'integerOnly' => true),
            array('id, username, password, email, first_name, last_name, activation_key, create_at, last_visit, status, city', 'safe', 'on' => 'search'),
            array('verifyPassword', 'compare', 'compareAttribute' => 'password',)
        ));
    }

    /**
     * @return array relational rules.
     */
    //public function relations()
    //{
    //}

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => AccountsModule::t("Id"),
            'username' => AccountsModule::t("Username"),
            'password' => AccountsModule::t("Password"),
            'verifyPassword' => AccountsModule::t("Retype Password"),
            'email' => AccountsModule::t("Email"),
            'first_name' => AccountsModule::t("First Name"),
            'last_name' => AccountsModule::t("Last Name"),
            'verifyCode' => AccountsModule::t("Verification Code"),
            'activation_key' => AccountsModule::t("Activation key"),
            'create_at' => AccountsModule::t("Registration date"),
            'last_visit' => AccountsModule::t("Last visit"),
            'status' => AccountsModule::t("Status"),
            'city' => AccountsModule::t("City"),
            'street' => AccountsModule::t("Street"),
            'zip' => AccountsModule::t("Zip"),
            'phone' => AccountsModule::t("Phone"),
            'phone_type' => AccountsModule::t("Phone Type"),
        );
    }

    public function behaviors() {
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'create_at',
                'updateAttribute' => 'update_at',
            )
        );
    }

    public function scopes() {
        return array(
            'active' => array(
                'condition' => 'status=' . self::STATUS_ACTIVE,
            ),
            'notactive' => array(
                'condition' => 'status=' . self::STATUS_NOACTIVE,
            ),
            'banned' => array(
                'condition' => 'status=' . self::STATUS_BANNED,
            ),
            'notsafe' => array(
                'select' => 'id, username, password, email, first_name, last_name, activation_key, create_at, last_visit, status',
            ),
        );
    }

    /**
     *
     * @param type $type
     * @param type $code
     * @return type
     */
    public static function itemAlias($type, $code = NULL) {
        $_items = array(
            'UserStatus' => array(
                self::STATUS_NOACTIVE => AccountsModule::t('In Active'),
                self::STATUS_ACTIVE => AccountsModule::t('Active'),
                self::STATUS_BANNED => AccountsModule::t('Banned'),
            ),
        );
        if (isset($code))
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        else
            return isset($_items[$type]) ? $_items[$type] : false;
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('activation_key', $this->activation_key);
        $criteria->compare('create_at', $this->create_at);
        $criteria->compare('last_visit', $this->last_visit);
        $criteria->compare('status', $this->status);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => $this->pageSize,
            ),
        ));
    }

    public function getCreateAt() {
        return strtotime($this->create_at);
    }

    public function setCreateAt($value) {
        $this->create_at = date('Y-m-d H:i:s', $value);
    }

    public function getLastVisit() {
        return strtotime($this->last_visit);
    }

    public function setLastVisit($value) {
        $this->last_visit = date('Y-m-d H:i:s', $value);
    }

}
