<?php

/**
 * This is the model class for table "email_template".
 *
 * The followings are the available columns in table 'email_template':
 * @property integer $id
 * @property string $name
 * @property integer $create_at
 * @property integer $update_at
 *
 * The followings are the available model relations:
 * @property BackendUser $createdBy
 * @property EmailTranslation[] $emailTranslations
 */
class EmailTemplate extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public $subject;
    public $username;
    public $pageSize = 10;

    public function tableName() {
        return 'email_template';
    }

    /**
     * get template with translation by name (key)
     * @param string $keyTemplate email template type
     * @param string $lang Yii lang code (vi, en_us, id, cn, ja) default system language
     * @return array $data template data with translation
     */
    public function getTemplageByKey($keyTemplate, $lang = 'en') {
        $data = null;
        $command = Yii::app()->db->createCommand()
                ->select('*')
                ->from('email_template e')
                ->join('email_translation t', 'e.id = t.email_temp_id')
                ->where('e.name like :name', array(':name' => $keyTemplate));
        $command->andWhere('t.lang_code=:lang', array(':lang' => $lang));
        $data = $command->queryAll();
        if ($data) {
            $data = $data[0];
        }
        return $data;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'length', 'max' => 100),
            array('name', 'unique'),
            array('name', 'required'),
            array('id,  name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'emailTranslations' => array(self::HAS_MANY, 'EmailTranslation', 'email_temp_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Id',
            'name' => MailModule::t('Mail Name'),
            'attach_file' => MailModule::t('Attach File'),
            'create_at' => MailModule::t('Create Date'),
            'update_at' => MailModule::t('Update Date'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id);
        $criteria->compare('subject', $this->subject, true);
        $criteria->compare('name', $this->name, true);
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => $this->pageSize,
            ),
        ));
    }

    /**
     * Get list of language
     * @return type
     */
    public function getLanguage() {
        $langList = Language::model()->findAll();
        $arrLang = CHtml::listData($langList, 'id', 'name');
        return $arrLang;
    }

    /**
     * Get English subject in EmailTranslation table according to email ID
     * @param type $email_id
     * @return string
     */
    public function getEnglishSubject($email_id) {
        $langs = Language::model()->findAllByAttributes(['code' => 'en']);
        $dataArr = EmailTranslation::model()->findByAttributes(
                array('email_temp_id' => $email_id,
                    'lang_id' => $langs[0]->id,));
        if ($dataArr == NULL)
            return "";
        return $dataArr->subject;
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return EmailTemplate the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
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
