<?php

class AccountsModule extends CWebModule {

    /**
     * @var int
     * @desc items on page
     */
    public $user_page_size = 10;

    /**
     * @var int
     * @desc items on page
     */
    public $fields_page_size = 10;

    /**
     * @var string
     * @desc hash method (md5,sha1 or algo hash function http://www.php.net/manual/en/function.hash.php)
     */
    public $hash = 'md5';

    /**
     * @var boolean
     * @desc use email for activation user account
     */
    static public $sendActivationMail = false;

    /**
     * @var boolean
     * @desc allow auth for is not active user
     */
    public $loginNotActiv = false;

    /**
     * @var boolean
     * @desc activate user on registration (only $sendActivationMail = false)
     */
    public $activeAfterRegister = false;

    /**
     * @var boolean
     * @desc login after registration (need loginNotActiv or activeAfterRegister = true)
     */
    public $autoLogin = true;
    public $registrationUrl = array("/accounts/registration");
    public $recoveryUrl = array("/accounts/recovery");
    public $activateUrl = array("/accounts/activation");
    public $loginUrl = array("/accounts/login");
    public $logoutUrl = array("/accounts/logout");
    public $profileUrl = array("/accounts/profile");
    public $returnUrl = ""; //array("/");
    public $returnLogoutUrl = array("/accounts/login");

    /**
     * @var int
     * @desc Remember Me Time (seconds), defalt = 2592000 (30 days)
     */
    public $rememberMeTime = 2592000; // 30 days
    public $fieldsMessage = '';

    /**
     * @var array
     * @desc User model relation from other models
     * @see http://www.yiiframework.com/doc/guide/database.arr
     */
    public $relations = array();

    /**
     * @var array
     * @desc Profile model relation from other models
     */
    public $profileRelations = array();

    /**
     * @var boolean
     */
    public $captcha = array('registration' => true);

    /**
     * @var boolean
     */
    //public $cacheEnable = false;

    public $tableUsers = 'tbl_account';
    public $defaultScope = array(
        'with' => array('index'),
    );
    static private $_user;
    static private $_users = array();
    static private $_userByName = array();
    static private $_admin;
    static public $_admins;

    public function init() {

        // this method is called when the module is being created
        // you may place code here to customize the module or the application
        // import the module-level models and components
        $this->setImport(array(
            'accounts.models.*',
            'accounts.components.*',
        ));
//        Yii::app()->setComponents(array(
//            'messages' => array(
//                'class' => 'application.components.PhpMessageSource',
////                'basePath' => Yii::getPathOfAlias('application.modules.accounts.messages'),
//            ),
//        ));
        // Raise onModuleCreate event.
        Yii::app()->onModuleCreate(new CEvent($this));
    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            // this method is called before any module controller action is performed
            // you may place customized code here
            return true;
        } else
            return false;
    }

    /**
     * @param $str
     * @param $params
     * @param $dic
     * @return string
     */
    public static function t($str = '') {
        return YiiBase::t("AccountsModule.user", $str);
    }

    /**
     * @return hash string.
     */
    public static function encrypting($string = "") {
        $hash = Yii::app()->getModule('accounts')->hash;
        if ($hash == "md5")
            return md5($string);
        if ($hash == "sha1")
            return sha1($string);
        else
            return hash($hash, $string);
    }

    /**
     * @param $place
     * @return boolean
     */
    public static function doCaptcha($place = '') {
        if (!extension_loaded('gd'))
            return false;
        if (in_array($place, Yii::app()->getModule('user')->captcha))
            return Yii::app()->getModule('user')->captcha[$place];
        return false;
    }

}
