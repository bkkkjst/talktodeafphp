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
			array('book_publisher, book_image', 'required'),
			array('book_page_number', 'numerical', 'integerOnly'=>true),
			array('book_name, book_description, book_author, book_publisher, book_image', 'length', 'max'=>255),
			array('book_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, book_name, book_description, book_page_number, book_price, book_author, book_publisher, book_image', 'safe', 'on'=>'search'),
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
			'book_name' => 'Book Name',
			'book_description' => 'Book Description',
			'book_page_number' => 'Book Page Number',
			'book_price' => 'Book Price',
			'book_author' => 'Book Author',
			'book_publisher' => 'Book Publisher',
			'book_image' => 'Book Image',
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
