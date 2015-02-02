<?php

/**
 * This is the model class for table "vocabulary".
 *
 * The followings are the available columns in table 'vocabulary':
 * @property integer $id
 * @property string $voc_name
 * @property string $voc_des
 * @property integer $video_id
 * @property integer $category_id
 * @property integer $type_id
 * @property integer $example_id
 * @property integer $image_id
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
			array('video_id, category_id, type_id, example_id, image_id', 'numerical', 'integerOnly'=>true),
			array('voc_name', 'length', 'max'=>56),
			array('voc_des', 'length', 'max'=>402),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, voc_name, voc_des, video_id, category_id, type_id, example_id, image_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'voc_name' => 'Voc Name',
			'voc_des' => 'Voc Des',
			'video_id' => 'Video',
			'category_id' => 'Category',
			'type_id' => 'Type',
			'example_id' => 'Example',
			'image_id' => 'Image',
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
		$criteria->compare('voc_des',$this->voc_des,true);
		$criteria->compare('video_id',$this->video_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('example_id',$this->example_id);
		$criteria->compare('image_id',$this->image_id);

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
