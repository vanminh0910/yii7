<?php

/**
 * This is the model class for table "language".
 *
 * The followings are the available columns in table 'language':
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string bizrule
 * @property string data
 */
class AuthItemChild extends CActiveRecord {

    public $pageSize = 10;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'authitemchild';
    }

    public function rules() {
        return array();
    }

    public function relations() {
        return array(
            'itemParent' => array(self::BELONGS_TO, 'AuthItem', 'parent'),
            'itemChild' => array(self::BELONGS_TO, 'AuthItem', 'child'),
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function isRoleInherited($roleName, $taskOrOperation) {
        $data = array();
        $command = Yii::app()->db->createCommand()
                ->select('atc.parent')
                ->from('authitemchild atc')
                ->join('authitemchild atc2', 'atc2.parent = atc.child')
                ->where('atc.parent=:childrole and atc2.child=:childto', array(':childrole' => $roleName, ':childto' => $taskOrOperation));
        $data = $command->queryAll();
        return count($data);
    }

}
