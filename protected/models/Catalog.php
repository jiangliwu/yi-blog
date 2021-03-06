<?php

/**
 * This is the model class for table "yi_catalog".
 *
 * The followings are the available columns in table 'yi_catalog':
 * @property integer $catalog_id
 * @property integer $catalog_father_id
 * @property string $catalog_name
 * @property string $catalog_title
 */
class Catalog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Catalog the static model class
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
		return 'yi_catalog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('catalog_father_id, catalog_name, catalog_title', 'required'),
			array('catalog_father_id', 'numerical', 'integerOnly'=>true),
			array('catalog_name, catalog_title', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('catalog_id, catalog_father_id, catalog_name, catalog_title', 'safe', 'on'=>'search'),
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
			'catalog_id' => 'Catalog',
			'catalog_father_id' => 'Catalog Father',
			'catalog_name' => 'Catalog Name',
			'catalog_title' => 'Catalog Title',
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

		$criteria->compare('catalog_id',$this->catalog_id);
		$criteria->compare('catalog_father_id',$this->catalog_father_id);
		$criteria->compare('catalog_name',$this->catalog_name,true);
		$criteria->compare('catalog_title',$this->catalog_title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}