<?php

/**
 * This is the model class for table "yi_user".
 *
 * The followings are the available columns in table 'yi_user':
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_password
 * @property string $user_mail
 * @property string $user_nickname
 * @property string $user_motto
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'yi_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name, user_password, user_mail, user_nickname, user_motto', 'required'),
			array('user_name, user_password', 'length', 'max'=>255),
			array('user_mail, user_nickname', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_name, user_password, user_mail, user_nickname, user_motto', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'user_name' => 'User Name',
			'user_password' => 'User Password',
			'user_mail' => 'User Mail',
			'user_nickname' => 'User Nickname',
			'user_motto' => 'User Motto',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_mail',$this->user_mail,true);
		$criteria->compare('user_nickname',$this->user_nickname,true);
		$criteria->compare('user_motto',$this->user_motto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}