<?php

/**
 * This is the model class for table "atencion".
 *
 * The followings are the available columns in table 'atencion':
 * @property integer $atencionid
 * @property integer $lugarid
 * @property integer $profesionalid
 * @property integer $evaluacioncosteada
 *
 * The followings are the available model relations:
 * @property Lugaratencion $lugar
 * @property Profesional $profesional
 * @property Convenio[] $convenios
 * @property Horarioatencion[] $horarioatencions
 */
class Atencion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Atencion the static model class
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
		return 'atencion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lugarid, profesionalid, evaluacioncosteada', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('atencionid, lugarid, profesionalid, evaluacioncosteada', 'safe', 'on'=>'search'),
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
			'lugar' => array(self::BELONGS_TO, 'Lugaratencion', 'lugarid'),
			'profesional' => array(self::BELONGS_TO, 'Profesional', 'profesionalid'),
			'convenios' => array(self::MANY_MANY, 'Convenio', 'atencion_convenio(atencionid, id)'),
			'horarioatencions' => array(self::HAS_MANY, 'Horarioatencion', 'atencionid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'atencionid' => 'Atencionid',
			'lugarid' => 'Lugarid',
			'profesionalid' => 'Profesionalid',
			'evaluacioncosteada' => 'Evaluacioncosteada',
			'convenios' => 'Convenios',
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

		$criteria->compare('atencionid',$this->atencionid);
		$criteria->compare('lugarid',$this->lugarid);
		$criteria->compare('profesionalid',$this->profesionalid);
		$criteria->compare('evaluacioncosteada',$this->evaluacioncosteada);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getOptions()
    	{
		$arr = array(); 
		foreach($this->findall() as $p)
			$arr[$p->atencionid] = $p->lugar->Nombre . ' - ' . $p->profesional->Nombre; 
//			echo $p->Nombre;
        	return $arr;
    	}
}
