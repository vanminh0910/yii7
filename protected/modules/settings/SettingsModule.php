<?php

class SettingsModule extends CWebModule {

    public function init() {
        $this->setImport(array(
            'settings.models.*',
            'settings.components.*',
            'settings.views.*',
        ));
    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            // this method is called before any module controller action is performed
            // you may place customized code here
            return true;
        } else
            return false;
    }

}
