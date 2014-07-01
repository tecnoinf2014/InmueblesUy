<?php

/**
 * This is the model class for table "direccion".
 *
 * The followings are the available columns in table 'direccion':
 * @property integer $id
 * @property string $barrio
 * @property string $calle
 * @property string $nro_puerta
 * @property integer $apto
 * @property string $coordenadas
 * @property integer $departamentos
 *
 * The followings are the available model relations:
 * @property Departamento $departamentos0
 * @property Inmueble[] $inmuebles
 */
class Direccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'direccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('apto, departamentos', 'numerical', 'integerOnly'=>true),
			array('barrio', 'length', 'max'=>45),
			array('calle, coordenadas', 'length', 'max'=>100),
			array('nro_puerta', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, barrio, calle, nro_puerta, apto, coordenadas, departamentos', 'safe', 'on'=>'search'),
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
			'departamentos0' => array(self::BELONGS_TO, 'Departamento', 'departamentos'),
			'inmuebles' => array(self::HAS_MANY, 'Inmueble', 'direccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'barrio' => 'Barrio',
			'calle' => 'Calle',
			'nro_puerta' => 'Nro Puerta',
			'apto' => 'Apto',
			'coordenadas' => 'Coordenadas',
			'departamentos' => 'Departamentos',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('nro_puerta',$this->nro_puerta,true);
		$criteria->compare('apto',$this->apto);
		$criteria->compare('coordenadas',$this->coordenadas,true);
		$criteria->compare('departamentos',$this->departamentos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
