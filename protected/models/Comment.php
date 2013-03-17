<?php

/**
 * This is the model class for table "yi_comment".
 *
 * The followings are the available columns in table 'yi_comment':
 * @property integer $comment_id
 * @property integer $comment_status
 * @property string $comment_create_time
 * @property string $comment_author
 * @property string $comment_email
 * @property string $comment_url
 * @property integer $comment_blog_id
 * @property string $comment_text
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'yi_comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comment_status, comment_create_time, comment_author, comment_email, comment_blog_id', 'required'),
			array('comment_status, comment_blog_id', 'numerical', 'integerOnly'=>true),
			array('comment_author, comment_email, comment_url', 'length', 'max'=>45),
			array('comment_text', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('comment_id, comment_status, comment_create_time, comment_author, comment_email, comment_url, comment_blog_id, comment_text', 'safe', 'on'=>'search'),
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
			'comment_id' => 'Comment',
			'comment_status' => 'Comment Status',
			'comment_create_time' => 'Comment Create Time',
			'comment_author' => 'Comment Author',
			'comment_email' => 'Comment Email',
			'comment_url' => 'Comment Url',
			'comment_blog_id' => 'Comment Blog',
			'comment_text' => 'Comment Text',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('comment_id',$this->comment_id);
		$criteria->compare('comment_status',$this->comment_status);
		$criteria->compare('comment_create_time',$this->comment_create_time,true);
		$criteria->compare('comment_author',$this->comment_author,true);
		$criteria->compare('comment_email',$this->comment_email,true);
		$criteria->compare('comment_url',$this->comment_url,true);
		$criteria->compare('comment_blog_id',$this->comment_blog_id);
		$criteria->compare('comment_text',$this->comment_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}