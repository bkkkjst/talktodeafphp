<?php

/**
 * This is the model class for table "vocabulary".
 *
 * The followings are the available columns in table 'vocabulary':
 * @property integer $id
 * @property string $voc_name
 * @property string $voc_engname
 * @property integer $des_id
 * @property integer $action_video_id
 * @property integer $speak_video_id
 * @property integer $category_id
 * @property integer $type_id
 * @property integer $example_id
 * @property integer $img_id
 * @property string $create_time
 * @property string $update_time
 */
class Vocabulary extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vocabulary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id,type_id', 'required'),
			array('action_video_id, speak_video_id', 'required'),
			//array('des_id, action_video_id, speak_video_id, category_id, type_id, example_id, img_id', 'numerical', 'integerOnly'=>true),
			array('voc_name, voc_engname', 'length', 'max'=>56),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, voc_name, voc_engname, des_id, action_video_id, speak_video_id, category_id, type_id, example_id, img_id, create_time, update_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'description' => array(self::BELONGS_TO, 'Description', 'des_id'),
				'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
                'type' => array(self::BELONGS_TO, 'Type', 'type_id'),
                'example' => array(self::BELONGS_TO, 'Example', 'example_id'),
                'actionvideo' => array(self::BELONGS_TO, 'ActionVideo', 'action_video_id'),
                'speakvideo' => array(self::BELONGS_TO, 'SpeakVideo', 'speak_video_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ลำดับ',
			'voc_name' => 'คำศัพท์',
			'voc_engname' => 'คำศัพท์ภาษาอังกฤษ',
			'des_id' => 'ความหมาย',
			'action_video_id' => 'วิดีโอท่าทาง',
			'speak_video_id' => 'วิดีโอพูด',
			'category_id' => 'หมวด',
			'type_id' => 'ประเภท',
			'example_id' => 'ประโยคตัวอย่าง',
			'img_id' => 'รูปภาพ',
			'create_time' => 'เวลาสร้าง',
			'update_time' => 'เวลาอัพเดท',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('voc_name',$this->voc_name,true);
		$criteria->compare('voc_engname',$this->voc_engname,true);
		$criteria->compare('des_id',$this->des_id);
		$criteria->compare('action_video_id',$this->action_video_id);
		$criteria->compare('speak_video_id',$this->speak_video_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('example_id',$this->example_id);
		$criteria->compare('img_id',$this->img_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vocabulary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
