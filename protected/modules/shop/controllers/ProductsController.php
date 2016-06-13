<?php

class ProductsController extends Controller {

    public $_model;

    public function allowAction() {
        return array('view', 'index', 'category');
    }

    public function beforeAction($action) {
        $this->layout = Shop::module()->layout;
        return parent::beforeAction($action);
    }

    public function actionView() {
       
            $this->render('view', array(
                'model' => $this->loadModel(),
            ));
       
    }

    public function actionCreate() {
        $model_product = new Products;
//        $model_image = new Image;

        $this->performAjaxValidation($model_product);

        if (isset($_POST['Products'])) {


            $model_product->attributes = $_POST['Products'];



//            $model_image->attributes = $_POST['Image'];
//            $model_image->filename = CUploadedFile::getInstance($model_image, 'filename');

            if (isset($_POST['Specifications']))
                $model_product->setSpecifications($_POST['Specifications']);

            if ($model_product->save()) {
//                $model_image->product_id = $model_product->product_id;
//                if ($model_image->save()){
//                    $folder = Yii::app()->controller->module->productImagesFolder;
//                    $model_image->filename->saveAs($folder . '/' . $model_image->filename);
                $this->redirect(array('admin'));
//                }
            }
        }

        $this->render('create', array(
            'model_product' => $model_product,
//            'model_image' => $model_image,
        ));
    }

    public function actionUpdate($id, $return = null) {
        $model = $this->loadModel();

        $this->performAjaxValidation($model);

        if (isset($_POST['Products'])) {
            $model->attributes = $_POST['Products'];
            if (isset($_POST['Specifications']))
                $model->setSpecifications($_POST['Specifications']);
            if (isset($_POST['Variations']))
                $model->setVariations($_POST['Variations']);

            if ($model->save())
                if ($return == 'product')
                    $this->redirect(array('products/update', 'id' => $model->product_id));
                else
                    $this->redirect(array('products/admin'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     */
    public function actionDelete() {
//        if (Yii::app()->request->isPostRequest) {
        // we only allow deletion via POST request
        $this->loadModel()->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//        if (!isset($_POST['ajax']))
        $this->actionAdmin();
//        } else
//            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        //$dataProvider = new CActiveDataProvider('Products');
        $items = Products::model()->with('images')->findAll();
        $this->render('index', array(
            'items' => $items,
        ));
    }

    public function actionCategory() {
//        if (isset($_GET['id'])){
//            $id = $_GET['id'];
//            $dataProvider = new CActiveDataProvider('Products', array(
//                'criteria'=>array(
//                    'condition'=>'category_id = ' .$id,
//
//                )
//             ));
//        }
        $items = Products::model()->findAll('category_id = :_id ', array(':_id' => $_GET['id']));
        $this->render('index', array(
            'items' => $items,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Products('search');
        if (isset($_GET['Products']))
            $model->attributes = $_GET['Products'];

        if (isset($_GET['pageSize'])) {
            $model->pageSize = $_GET['pageSize'];
        }

        $this->render('admin', array(
            'model' => $model,
        ));
        exit;
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     */
    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Products::model()->with('images')->findbyPk($_GET['id']);

            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'products-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function createButtons($id) {
        $result = $this->renderPartial('buttonAction', array('id' => $id), true);
        return $result;
    }

}
