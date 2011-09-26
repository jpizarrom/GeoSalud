<?php

/**
 * This is the model class for table "especialidad".
 *
 * The followings are the available columns in table 'especialidad':
 * @property integer $especialidadid
 * @property string $Nombre
 */
class Especialidad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Especialidad the static model class
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
		return 'especialidad';
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
			array('especialidadid, Nombre', 'safe', 'on'=>'search'),
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
			'profesionals' => array(self::MANY_MANY, 'Profesional', 'profesional_especialidad(id, especialidadid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'especialidadid' => 'Especialidadid',
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

		$criteria->compare('especialidadid',$this->especialidadid);

		$criteria->compare('Nombre',$this->Nombre,true);

		return new CActiveDataProvider('Especialidad', array(
			'criteria'=>$criteria,
		));
	}
}