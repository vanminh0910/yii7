<?php

/**
 * This is the model class for table "email_translation".
 *
 * The followings are the available columns in table 'email_translation':
 * @property integer $id
 * @property integer $email_temp_id
 * @property string $subject
 * @property string $content
 * @property string $attach_file
 *
 * The followings are the available model relations:
 * @property EmailTemplate $emailTemp
 * @property Language $lang
 */
class EmailTranslation extends CActiveRecord {

    public $attach_file;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'email_translation';
    }

    public function getLanguage() {
        $langList = Language::model()->findAll();
        $getLang = CHtml::listData($langList, 'id', 'name');
        return $getLang;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('updated_date', 'numerical', 'integerOnly'=>true),
            array('lang_code,subject,content', 'required'),
            array('subject, attach_file', 'length', 'max' => 255),
            array('id, email_temp_id, lang_code, subject, content,attach_file', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
            'emailTemp' => array(self::BELONGS_TO, 'EmailTemplate', 'email_temp_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => MailModule::t('Id'),
            'email_temp_id' => MailModule::t('Mail Template'),
            'lang_code' => MailModule::t('Language'),
            'subject' => MailModule::t('Subject'),
            'content' => MailModule::t('Content'),
            'attach_file' => MailModule::t('Attach File'),
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
        $criteria->compare('email_temp_id', $this->email_temp_id);
        $criteria->compare('lang_code', $this->lang_code);
        $criteria->compare('subject', $this->subject, true);
        $criteria->compare('content', $this->content, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return EmailTranslation the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
