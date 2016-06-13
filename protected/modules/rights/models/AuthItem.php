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
class AuthItem extends CActiveRecord {

    public $pageSize = 10;
    private $types;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'authitem';
    }

    public function rules() {
        return array();
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function search() {
        $criteria = new CDbCriteria;
        if (is_array($this->types)) {
            $criteria->addInCondition('type', $this->types);
        } else if (isset($this->types)) {
            $criteria->compare('type', $this->types, true);
        }
        $criteria->compare('name', $this->name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('description', $this->bizrule, true);
        $criteria->order = 'type ASC';
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => $this->pageSize,
            ),
        ));
    }

    public function setTypes($type) {
        $this->types = $type;
    }

    public function getGridNameLink() {
        $markup = CHtml::link($this->name, array(
                    'authItem/update',
                    'name' => urlencode($this->name),
        ));
        return $markup;
    }

}
