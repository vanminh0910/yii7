<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public function __construct($id, $module = null) {
        parent::__construct($id, $module);
        // If there is a post-request, redirect the application to the provided url of the selected language
        if (isset($_POST['lang'])) {
            $lang = $_POST['lang'];
            $MultilangReturnUrl = $_POST[$lang];
            $this->redirect($MultilangReturnUrl);
        }
        // Set the application language if provided by GET, session or cookie
        if (isset($_GET['lang'])) {
            Yii::app()->language = $_GET['lang'];
            Yii::app()->user->setState('lang', $_GET['lang']);
            Yii::app()->user->setState('__locale', $_GET['lang']);
            $cookie = new CHttpCookie('lang', $_GET['lang']);
            $cookie->expire = time() + (60 * 60 * 24 * 365); // (1 year)
            Yii::app()->request->cookies['lang'] = $cookie;
        } else if (Yii::app()->user->hasState('lang')) {
            Yii::app()->language = Yii::app()->user->getState('lang');
        } else if (isset(Yii::app()->request->cookies['lang'])) {
            Yii::app()->language = Yii::app()->request->cookies['lang']->value;
        }
    }

    public function filters() {
        return array('rightFilter' =>
            array('application.modules.rights.components.RightsFilter'
            )
        );
    }

    public function accessDenied($message = null) {
        if ($message === null)
            $message = Rights::t('core', 'You are not authorized to perform this action.');

        $user = Yii::app()->getUser();
        if ($user->isGuest === true) {
            $user->loginRequired();
        } else
            throw new CHttpException(403, $message);
    }

    protected function beforeAction($action) {
        //read protected password setting

        if (strpos($_SERVER['REQUEST_URI'], 'backend') > 0) {
            return true;
        }
        $settings = Yii::app()->settings;
        $protected_status = $settings->get("firstLayerProtection", "enable");
        if ($protected_status == "1") {
            $url = $_SERVER['REQUEST_URI'];
            if (!isset($_COOKIE["in"])) {
                if (strpos($url, 'passwordprotected') === false) {
                    $this->redirect($this->createAbsoluteUrl('/passwordprotected'));
                }
            }
        }
        return true;
    }

}
