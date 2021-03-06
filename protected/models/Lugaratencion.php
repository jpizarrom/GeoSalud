<?php

/**
 * This is the model class for table "lugaratencion".
 *
 * The followings are the available columns in table 'lugaratencion':
 * @property integer $lugarid
 * @property string $Nombre
 * @property string $Direccion
 * @property string $Fono
 * @property string $email
 * @property string $lat
 * @property string $lon
 *
 * The followings are the available model relations:
 * @property Atencion[] $atencions
 * @property Caracteristicalugar[] $caracteristicalugars
 * @property Facilidadpago[] $facilidadpagos
 */
class Lugaratencion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Lugaratencion the static model class
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
		return 'lugaratencion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Direccion, Fono, email', 'length', 'max'=>150),
			array('lat, lon', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('lugarid, Nombre, Direccion, Fono, email, lat, lon', 'safe', 'on'=>'search'),
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
			'atencions' => array(self::HAS_MANY, 'Atencion', 'lugarid'),
			'atencions_count' => array(self::STAT, 'Atencion', 'lugarid'),
			'caracteristicalugars' => array(self::MANY_MANY, 'Caracteristicalugar', 'lugar_caracteristica(lugarid, caracteristicaid)'),
			'facilidadpagos' => array(self::MANY_MANY, 'Facilidadpago', 'lugar_facilidadpago(lugarid, id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'lugarid' => 'Lugarid',
			'Nombre' => 'Nombre',
			'Direccion' => 'Direccion',
			'Fono' => 'Fono',
			'email' => 'Email',
			'lat' => 'Lat',
			'lon' => 'Lon',
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
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Fono',$this->Fono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lon',$this->lon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getOptions()
    	{
		$arr = array(); 
		foreach($this->findall() as $p)
			$arr[$p->lugarid] = $p->Nombre; 
//			echo $p->Nombre;
        	return $arr;
    	}

	public function findTagWeights($limit=20)
	{
		$models=$this->findAll(array(
//			'order'=>'frequency DESC',
//			'limit'=>$limit,
		));

		$total=0;
		foreach($models as $model)
			$total+=$model->atencions_count;

		$tags=array();
//		if($total>0)
		{
			foreach($models as $model){
                $tag=array();
                $tag['name']=$model->Nombre;
                $tag['id']=$model->lugarid;
				$tag['weight']=12+(int)(16*$model->atencions_count/($total+10));
                $tags[]=$tag;
            }
			ksort($tags);
		}
		return $tags;
	}

}
