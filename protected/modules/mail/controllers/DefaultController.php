<?php

class DefaultController extends BackendController {

    public function allowAction() {
        return array('upload');
    }

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new EmailTemplate;
        $emailTrans = array();
        $langs = Yii::app()->params['languages'];
        foreach ($langs as $code => $lang) {
            $emailTrans[$code] = new EmailTranslation();
        }
        if (isset($_POST['EmailTemplate'])) {
            $model->attributes = $_POST['EmailTemplate'];
            $isValid = $model->validate();
            foreach ($langs as $code => $lang) {
                $emailTran = $emailTrans[$code];
                $emailTran->attributes = $_POST['EmailTranslation'][$code];
                if ($emailTran->content == '<br>') {
                    $emailTran->content = NULL;
                }
                $emailTran->lang_code = $code;
                $emailTran->attach_file = '';
                $isValid = $emailTran->validate() && $isValid;
            }

            if ($isValid == true) {
                $model->save();
                $filesDir = dirname(Yii::app()->getBasePath()) . '/files/mail/' . $model->id;
                if (!file_exists($filesDir)) {
                    mkdir($filesDir);
                }
                foreach ($langs as $code => $lang) {
                    $emailTran = $emailTrans[$code];
                    $emailTran->email_temp_id = $model->id;
                    $names = $this->uploadFile($code, $filesDir);
                    $emailTran->attach_file = $names;
                    $emailTran->save();
                }
                $this->actionView($model->id);
                return;
            }
        }

        $this->render('create', array(
            'model' => $model,
            'emailTrans' => $emailTrans,
            'langs' => $langs
        ));
    }

    private function uploadFile($i, $filesDir) {
        $names = '';
        if (isset($_FILES[$i . '_files'])) {
            if ($_FILES[$i . '_files']['name'][0] === '') {
                return '';
            }
            $newDir = $filesDir . '/' . $i;
            if (file_exists($newDir)) {
                $this->delete_directory($newDir);
            }
            mkdir($newDir);
            $newDir = $newDir . '/';

            foreach ($_FILES[$i . '_files']['name'] as $f => $name) {
                if ($_FILES[$i . '_files']['error'][$f] == 4) {
                    continue;
                }
                if ($_FILES[$i . '_files']['error'][$f] === 0) {
                    move_uploaded_file($_FILES[$i . '_files']["tmp_name"][$f], $newDir . $name);
                    $names = $names . $name . ';';
                }
            }
        }
        return $names;
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $emailTrans = $model->emailTranslations;

        if (isset($_POST['EmailTemplate'])) {
            $model->attributes = $_POST['EmailTemplate'];
            $isValid = $model->validate();
            foreach ($emailTrans as $emailTran) {
                $emailTran->attributes = $_POST['EmailTranslation'][$emailTran->lang_code];
                if ($emailTran->content == '<br>') {
                    $emailTran->content = NULL;
                }
                $isValid = $emailTran->validate() && $isValid;
            }

            if ($isValid == true) {
                $model->save();

                $filesDir = dirname(Yii::app()->getBasePath()) . '/files/mail/' . $model->id;
                if (!file_exists($filesDir)) {
                    mkdir($filesDir);
                }

                foreach ($emailTrans as $emailTran) {
                    $names = $this->uploadFile($emailTran->lang_code, $filesDir);
                    if ($names != '') {
                        $emailTran->attach_file = $names;
                    }
                    $emailTran->save();
                }
                $this->actionView($model->id);
                return;
            }
        }
        $this->render('update', array(
            'model' => $model,
            'emailTrans' => $emailTrans,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $temp = $this->loadModel($id);
        foreach ($temp->emailTranslations as $trans) {
            $trans->delete();
        }
        $temp->delete();
        $filesDir = dirname(Yii::app()->getBasePath()) . '/files/mail/' . $id;
        $this->delete_directory($filesDir);
        Yii::app()->user->setFlash('deleteSuccess', MailModule::t('Delete email template successfully!'));
        $this->actionIndex();
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new EmailTemplate('search');
        $model->unsetAttributes();
        if (isset($_GET['EmailTemplate'])) {
            $model->attributes = $_GET['EmailTemplate'];
        }
        if (isset($_GET['pageSize'])) {
            $model->pageSize = $_GET['pageSize'];
        }

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return EmailTemplate the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = EmailTemplate::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, Yii::t('common', 'The requested page does not exist.'));
        return $model;
    }

    public function createButtons($id) {
        $result = $this->renderPartial('buttonAction', array('id' => $id), true);
        return $result;
    }

    public function createReturnableUrl($type, $id) {
        $result = $this->createAbsoluteUrl('view', array('id' => $id));
        return $result;
    }

    public function createLinkFile($fileAttach, $emailName) {
        $result = '';
        $files = explode(";", $fileAttach);
        foreach ($files as $i => $file) {
            $result = $result . CHtml::link($file, Yii::app()->getBaseUrl(true) . '/files/mail/' . $emailName . '/' . $file) . '<hr>';
        }
        return $result;
    }

    public function delete_directory($dirname) {
        if (is_dir($dirname))
            $dir_handle = opendir($dirname);
        if (!$dir_handle)
            return false;
        while ($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                if (!is_dir($dirname . "/" . $file))
                    unlink($dirname . "/" . $file);
                else
                    $this->delete_directory($dirname . '/' . $file);
            }
        }
        closedir($dir_handle);
        rmdir($dirname);
        return true;
    }

    public function actionUpload() {

        $filesDir = dirname(Yii::app()->getBasePath()) . '/files/images/';
        if (file_exists($filesDir . $_FILES["upload"]["name"])) {
            echo $_FILES["upload"]["name"] . " already exists please choose another image. ";
        } else {
            move_uploaded_file($_FILES["upload"]["tmp_name"], $filesDir . $_FILES["upload"]["name"]);
            echo "Stored in: " . $filesDir . $_FILES["upload"]["name"];
        }
    }

}
