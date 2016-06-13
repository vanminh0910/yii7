<?php

/**
 * This is the model class for table "language".
 *
 * The followings are the available columns in table 'language':
 * @property integer $id
 * @property string $title
 * @property string $code
 */
class Language extends CActiveRecord {

    public $pageSize = 10;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'language';
    }

    public function rules() {
        return array(array('code,name', 'required'));
    }

    public function getLangByCode($code = null) {
        if ($code == null) {
            $code = 'en';
        }
        $lang = $this->findByAttributes(['code' => $code]);
        return $lang;
    }

    public function attributeLabels() {
        return array(
            'id' => LanguageModule::t("Id"),
            'code' => LanguageModule::t("Code"),
            'name' => LanguageModule::t("Name"));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Language the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id, true);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('name', $this->name, true);
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => $this->pageSize,
            ),
        ));
    }

    public function behaviors() {
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'create_at',
                'updateAttribute' => 'update_at',
            )
        );
    }

}
