<?php

/**
 * This is the model class for table "book".
 *
 * The followings are the available columns in table 'book':
 * @property integer $id
 * @property string $book_name
 * @property string $book_description
 * @property integer $book_page_number
 * @property string $book_price
 * @property string $book_author
 * @property string $book_publisher
 * @property string $book_image
 * @property string $create_time
 * @property string $update_time
 */
class Book extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'book';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array( 'book_image', 'required'),
			array('book_page_number', 'numerical', 'integerOnly'=>true),
			array('book_name, book_description, book_price, book_author, book_publisher, book_image', 'length', 'max'=>255),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, book_name, book_description, book_page_number, book_price, book_author, book_publisher, book_image, create_time, update_time', 'safe', 'on'=>'search'),
			array('book_image', 'file', 'types'=>'jpg, gif, png'),
				
		);
	}
	/**
	 * @return array relational rules.
	 */
	public function beforeSave()
	{
		if($file=CUploadedFile::getInstance($this,'uploadedFile'))
		{
			$this->file_name=$file->name;
			$this->file_type=$file->type;
			$this->file_size=$file->size;
			$this->file_content=file_get_contents($file->tempName);
		}
	
		return parent::beforeSave();
	}
	
	
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
			'id' => 'ไอดี',
			'book_name' => 'ชื่อหนังสือ',
			'book_description' => 'รายละเอียดหนังสือ',
			'book_page_number' => 'จำนวนหน้า',
			'book_price' => 'ราคาหนังสือ',
			'book_author' => 'ชื่อผู้แต่ง',
			'book_publisher' => 'ชื่อสำนักพิมพ์',
			'book_image' => 'รูปหนังสือ',
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
		$criteria->compare('book_name',$this->book_name,true);
		$criteria->compare('book_description',$this->book_description,true);
		$criteria->compare('book_page_number',$this->book_page_number);
		$criteria->compare('book_price',$this->book_price,true);
		$criteria->compare('book_author',$this->book_author,true);
		$criteria->compare('book_publisher',$this->book_publisher,true);
		$criteria->compare('book_image',$this->book_image,true);
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
	 * @return Book the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
