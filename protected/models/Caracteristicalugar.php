<?php

/**
 * This is the model class for table "caracteristicalugar".
 *
 * The followings are the available columns in table 'caracteristicalugar':
 * @property integer $caracteristicaid
 * @property string $Nombre
 *
 * The followings are the available model relations:
 * @property Lugaratencion[] $lugaratencions
 */
class Caracteristicalugar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Caracteristicalugar the static model class
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
		return 'caracteristicalugar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('caracteristicaid, Nombre', 'safe', 'on'=>'search'),
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
			'lugaratencions' => array(self::MANY_MANY, 'Lugaratencion', 'lugar_caracteristica(caracteristicaid, lugarid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'caracteristicaid' => 'Caracteristicaid',
			'Nombre' => 'Nombre',
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

		$criteria->compare('caracteristicaid',$this->caracteristicaid);
		$criteria->compare('Nombre',$this->Nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}