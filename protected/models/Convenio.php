<?php

/**
 * This is the model class for table "convenio".
 *
 * The followings are the available columns in table 'convenio':
 * @property integer $id
 * @property string $Nombre
 * @property string $Beneficio
 * @property string $Contacto
 */
class Convenio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Convenio the static model class
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
		return 'convenio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('Nombre, Beneficio, Contacto', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Nombre, Beneficio, Contacto', 'safe', 'on'=>'search'),
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
			'atencions' => array(self::MANY_MANY, 'Atencion', 'atencion_convenio(atencionid, id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'Nombre' => 'Nombre',
			'Beneficio' => 'Beneficio',
			'Contacto' => 'Contacto',
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

		$criteria->compare('id',$this->id);

		$criteria->compare('Nombre',$this->Nombre,true);

		$criteria->compare('Beneficio',$this->Beneficio,true);

		$criteria->compare('Contacto',$this->Contacto,true);

		return new CActiveDataProvider('Convenio', array(
			'criteria'=>$criteria,
		));
	}
}