<?php

/**
 * This is the model class for table "inmueble".
 *
 * The followings are the available columns in table 'inmueble':
 * @property integer $id
 * @property integer $estado
 * @property string $descripcion
 * @property integer $tipo_inmueble
 * @property integer $direccion
 * @property integer $tipo_contrato
 * @property double $precio
 * @property integer $mts2
 * @property integer $cant_banios
 * @property integer $cant_cuartos
 * @property integer $cochera
 * @property integer $plantas
 *
 * The followings are the available model relations:
 * @property Evento[] $eventos
 * @property Imagen[] $imagens
 * @property EstadoInmueble $estado0
 * @property TipoInmueble $tipoInmueble
 * @property Direccion $direccion0
 * @property TipoContrato $tipoContrato
 * @property Transaccion[] $transaccions
 */
class Inmueble extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inmueble';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, estado', 'required'),
			array('id, estado, tipo_inmueble, direccion, tipo_contrato, mts2, cant_banios, cant_cuartos, cochera, plantas', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('descripcion', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, estado, descripcion, tipo_inmueble, direccion, tipo_contrato, precio, mts2, cant_banios, cant_cuartos, cochera, plantas', 'safe', 'on'=>'search'),
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
			'eventos' => array(self::HAS_MANY, 'Evento', 'inmueble'),
			'imagens' => array(self::HAS_MANY, 'Imagen', 'inmueble'),
			'estado0' => array(self::BELONGS_TO, 'EstadoInmueble', 'estado'),
			'tipoInmueble' => array(self::BELONGS_TO, 'TipoInmueble', 'tipo_inmueble'),
			'direccion0' => array(self::BELONGS_TO, 'Direccion', 'direccion'),
			'tipoContrato' => array(self::BELONGS_TO, 'TipoContrato', 'tipo_contrato'),
			'transaccions' => array(self::HAS_MANY, 'Transaccion', 'inmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'estado' => 'Estado',
			'descripcion' => 'Descripcion',
			'tipo_inmueble' => 'Tipo Inmueble',
			'direccion' => 'Direccion',
			'tipo_contrato' => 'Tipo Contrato',
			'precio' => 'Precio',
			'mts2' => 'Mts2',
			'cant_banios' => 'Cant Banios',
			'cant_cuartos' => 'Cant Cuartos',
			'cochera' => 'Cochera',
			'plantas' => 'Plantas',
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
		$criteria->compare('estado',$this->estado);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipo_inmueble',$this->tipo_inmueble);
		$criteria->compare('direccion',$this->direccion);
		$criteria->compare('tipo_contrato',$this->tipo_contrato);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('mts2',$this->mts2);
		$criteria->compare('cant_banios',$this->cant_banios);
		$criteria->compare('cant_cuartos',$this->cant_cuartos);
		$criteria->compare('cochera',$this->cochera);
		$criteria->compare('plantas',$this->plantas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inmueble the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
