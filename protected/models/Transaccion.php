<?php

/**
 * This is the model class for table "transaccion".
 *
 * The followings are the available columns in table 'transaccion':
 * @property integer $id
 * @property integer $cli_compra
 * @property integer $cli_venta
 * @property integer $inmueble
 * @property integer $tipo_contrato
 *
 * The followings are the available model relations:
 * @property Cliente $cliCompra
 * @property Cliente $cliVenta
 * @property Inmueble $inmueble0
 * @property TipoContrato $tipoContrato
 */
class Transaccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cli_compra, cli_venta, inmueble, tipo_contrato', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cli_compra, cli_venta, inmueble, tipo_contrato', 'safe', 'on'=>'search'),
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
			'cliCompra' => array(self::BELONGS_TO, 'Cliente', 'cli_compra'),
			'cliVenta' => array(self::BELONGS_TO, 'Cliente', 'cli_venta'),
			'inmueble0' => array(self::BELONGS_TO, 'Inmueble', 'inmueble'),
			'tipoContrato' => array(self::BELONGS_TO, 'TipoContrato', 'tipo_contrato'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cli_compra' => 'Cli Compra',
			'cli_venta' => 'Cli Venta',
			'inmueble' => 'Inmueble',
			'tipo_contrato' => 'Tipo Contrato',
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
		$criteria->compare('cli_compra',$this->cli_compra);
		$criteria->compare('cli_venta',$this->cli_venta);
		$criteria->compare('inmueble',$this->inmueble);
		$criteria->compare('tipo_contrato',$this->tipo_contrato);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
