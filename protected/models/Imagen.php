<?php

/**
 * This is the model class for table "imagen".
 *
 * The followings are the available columns in table 'imagen':
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property string $img
 * @property integer $inmueble
 * @property integer $is_preview
 *
 * The followings are the available model relations:
 * @property Inmueble $inmueble0
 */
class Imagen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imagen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('img', 'file', 
        		'types'=>'jpg, gif, png, bmp, jpeg',
            	'maxSize'=>1024 * 1024 * 10, // 10MB
                'tooLarge'=>'La imagen es mas grande que 10mb. Por favor suba una foto menor a 10 mb.',
            	'allowEmpty' => false,
            	'safe' =>true,
         	),
			array('type, name, img', 'required'),
			array('inmueble, is_preview', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>50),
			array('name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, name, img, inmueble, is_preview', 'safe', 'on'=>'search'),
			array('is_preview', 'safe'),
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
			'inmueble0' => array(self::BELONGS_TO, 'Inmueble', 'inmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => 'Type',
			'name' => 'Name',
			'img' => 'Img',
			'inmueble' => 'Inmueble',
			'is_preview' => 'Is Preview',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('inmueble',$this->inmueble);
		$criteria->compare('is_preview',$this->is_preview);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Imagen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function loadModel($id)
	{
		$model=Imagen::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
