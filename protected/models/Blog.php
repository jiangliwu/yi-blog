<?php

/**
 * This is the model class for table "yi_blog".
 *
 * The followings are the available columns in table 'yi_blog':
 * @property integer $blog_id
 * @property string $blog_title
 * @property string $blog_text
 * @property string $blog_create_time
 * @property string $blog_modify_time
 * @property integer $blog_user_id
 * @property integer $blog_length
 * @property integer $blog_type
 * @property integer $catalog_id
 * @property string $tags
 * @property integer $blog_status
 */
class Blog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Blog the static model class
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
		return 'yi_blog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('blog_title, blog_text','required'),
			array('blog_user_id, blog_length, blog_type, catalog_id, blog_status', 'numerical', 'integerOnly'=>true),
			array('blog_title', 'length', 'max'=>255),
			array('tags', 'safe'),
			
			array('tags', 'match', 'pattern'=>'/^[\w\s,]+$/','message'=>'Tags can only contain word characters.'), //只能为字母和逗号
			array('blog_status', 'in', 'range'=>array(0,1,2,3)),		//只能为1,2,3
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('blog_id, blog_title, blog_text, blog_create_time, blog_modify_time, blog_user_id, blog_length, blog_type, catalog_id, tags, blog_status', 'safe', 'on'=>'search'),
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
			'blog_id' => 'Blog',
			'blog_title' => 'Blog Title',
			'blog_text' => 'Blog Text',
			'blog_create_time' => 'Blog Create Time',
			'blog_modify_time' => 'Blog Modify Time',
			'blog_user_id' => 'Blog User',
			'blog_length' => 'Blog Length',
			'blog_type' => 'Blog Type',
			'catalog_id' => 'Catalog',
			'tags' => 'Tags',
			'blog_status' => 'Blog Status',
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

		$criteria->compare('blog_id',$this->blog_id);
		$criteria->compare('blog_title',$this->blog_title,true);
		$criteria->compare('blog_text',$this->blog_text,true);
		$criteria->compare('blog_create_time',$this->blog_create_time,true);
		$criteria->compare('blog_modify_time',$this->blog_modify_time,true);
		$criteria->compare('blog_user_id',$this->blog_user_id);
		$criteria->compare('blog_length',$this->blog_length);
		$criteria->compare('blog_type',$this->blog_type);
		$criteria->compare('catalog_id',$this->catalog_id);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('blog_status',$this->blog_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}