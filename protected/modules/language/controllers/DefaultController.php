<?php

class DefaultController extends BackendController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
//            'accessControl', // perform access control for CRUD operations
//            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
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
        $model = new Language;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Language'])) {
            $model->attributes = $_POST['Language'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        if (isset($_POST['Language'])) {
            $model->attributes = $_POST['Language'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }
        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        Yii::app()->user->setFlash('deleteSuccess', LanguageModule::t('Delete language successfully!'));
        $this->actionIndex();
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new Language('search');
        if (!empty($_GET['Language'])) {
            $model->attributes = $_GET['Language'];
            $model->id = $_GET['Language']['id'];
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
     * @return Language the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Language::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
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

}
