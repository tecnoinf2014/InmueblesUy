<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id
 * @property string $nombres
 * @property string $apellido
 * @property string $ci
 * @property string $email
 * @property string $password
 * @property string $telefono
 *
 * The followings are the available model relations:
 * @property Evento[] $eventos
 */
class Usuario extends CActiveRecord
{
	
	public $id;
	public $nombres;
	public $apellido;
	public $ci;
	public $email;
	public $password;
	public $telefono;
	
	
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}


	public function safeAttributes()
	{
		return 'id, nombres, password, email, apellido,ci,telefono';
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ci', 'unique', 'attributeName'=> 'ci', 'className'=>'Cliente', 'message'=>'La cedula ya existe.'),
			array('email', 'unique', 'attributeName'=> 'email', 'className'=>'Cliente', 'message'=>'El email ya existe.'),				
			array('nombres, apellido,email,password', 'required'),
			array('nombres, apellido, email, password, telefono,telefono', 'length', 'max'=>45),
			array('ci', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			
			array('id, nombres, apellido, ci, email, password, telefono', 'safe', 'on'=>'search'),
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
			'eventos' => array(self::HAS_MANY, 'Evento', 'usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombres' => 'Nombres',
			'apellido' => 'Apellido',
			'ci' => 'Ci',
			'email' => 'Email',
			'password' => 'Password',
			'telefono' => 'Telefono',
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
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('ci',$this->ci,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('telefono',$this->telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	

	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
