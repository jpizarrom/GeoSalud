<?php

/**
 * This is the model class for table "horarioatencion".
 *
 * The followings are the available columns in table 'horarioatencion':
 * @property integer $id
 * @property integer $atencionid
 * @property integer $dia
 * @property string $horainicio
 * @property string $horafin
 */
class Horarioatencion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Horarioatencion the static model class
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
		return 'horarioatencion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('atencionid, dia', 'numerical', 'integerOnly'=>true),
			array('horainicio, horafin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, atencionid, dia, horainicio, horafin', 'safe', 'on'=>'search'),
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
			'atencion' => array(self::BELONGS_TO, 'Atencion', 'atencionid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'atencionid' => 'Atencionid',
			'dia' => 'Dia',
			'horainicio' => 'Horainicio',
			'horafin' => 'Horafin',
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

		$criteria->compare('atencionid',$this->atencionid);

		$criteria->compare('dia',$this->dia);

		$criteria->compare('horainicio',$this->horainicio,true);

		$criteria->compare('horafin',$this->horafin,true);

		return new CActiveDataProvider('Horarioatencion', array(
			'criteria'=>$criteria,
		));
	}
}