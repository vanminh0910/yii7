<?php

class IndexController extends BackendController {

    public $defaultAction = 'index';

    public function actionIndex() {
        $model = new User('search');
        $model->unsetAttributes();
        if (isset($_GET['User'])) {
            $model->attributes = $_GET['User'];
        }
        if (isset($_GET['pageSize'])) {
            $model->pageSize = $_GET['pageSize'];
        }

        $this->render('/user/index', array('model' => $model));
    }

    public function actionDelete($id) {
        $user = User::model()->findByPk($id);
        if ($user != NULL) {
            $user->delete();
            Yii::app()->user->setFlash('deleteSuccess', AccountsModule::t("Delete User Successfully!"));
        }
        $model = new User('search');
        $model->unsetAttributes();
        $this->render('/user/index', array('model' => $model));
    }

    public function actionView($id) {
        $user = User::model()->findByPk($id);
        $this->render('/user/view', array('model' => $user));
    }

    public function createReturnableUrl($type, $id) {
        $result = Yii::app()->request->baseUrl . '/backend/accounts/index/' . $type . '?id=' . $id;
        return $result;
    }

    public function createStatus($status) {
        $result = '';
        if ($status == User::STATUS_ACTIVE) {
            $result = '<span class="label label-success">' . AccountsModule::t('Active') . '</span>';
        } else if ($status == User::STATUS_NOACTIVE) {
            $result = '<span class="label label-danger">' . AccountsModule::t('In Active') . '</span>';
        } else {
            $result = '<span class="label label-warning">' . AccountsModule::t('Banned') . '</span>';
        }
        return $result;
    }

    public function actionCreate() {
        $model = new User();
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $model->validate();
            if ($model->validate()) {
                $model->activation_key = AccountsModule::encrypting(microtime() . $model->password);
                $model->password = AccountsModule::encrypting($model->password);
                $model->verifyPassword = $model->password;
                $model->status = User::STATUS_ACTIVE;
                $model->save();
                $this->actionView($model->id);
                return;
            }
        }
        $this->render('/user/create', array('model' => $model));
    }

    public function actionUpdate($id) {
//
        $model = User::model()->findByPk($id);
        unset($model->password);
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->validate()) {
                if ($model->password == null || strlen($model->password) == 0) {
                    $model->password = User::model()->findByPk($id)->password;
                } else {
                    $model->password = AccountsModule::encrypting($model->password);
                }
                $model->update(false);
                $this->actionView($model->id);
                return;
            }
        }
        $this->render('/user/create', array('model' => $model));
    }

    public function createButtons($id) {
        $result = $this->renderPartial('/user/buttonAction', array('id' => $id), true);
        return $result;
    }

}
