<?php

/**
 * This is the model class for table "lugar_caracteristica".
 *
 * The followings are the available columns in table 'lugar_caracteristica':
 * @property integer $lugarid
 * @property integer $caracteristicaid
 */
class LugarCaracteristica extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return LugarCaracteristica the static model class
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
		return 'lugar_caracteristica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lugarid, caracteristicaid', 'required'),
			array('lugarid, caracteristicaid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('lugarid, caracteristicaid', 'safe', 'on'=>'search'),
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
			'lugarid' => 'Lugarid',
			'caracteristicaid' => 'Caracteristicaid',
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

		$criteria->compare('lugarid',$this->lugarid);
		$criteria->compare('caracteristicaid',$this->caracteristicaid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}