<?php

class PhpMessageSource extends CPhpMessageSource {

    protected function getMessageFile($category, $language) {
        if (strpos($category, ':') > 0) {
            $categories = explode(':', $category);
            $file = Yii::app()->getBasePath() . DIRECTORY_SEPARATOR
                    . 'modules' . DIRECTORY_SEPARATOR . $categories[0] .
                    DIRECTORY_SEPARATOR . 'messages' . DIRECTORY_SEPARATOR .
                    $language . DIRECTORY_SEPARATOR . $categories[1] . '.php';
            return $file;
        } else {
            return parent::getMessageFile($category, $language);
        }
    }

}
