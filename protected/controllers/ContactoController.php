<?php

class ContactoController extends Controller
{
	public $layout='//layouts/layoutClient';
	
	public function actionIndex()
	{				
		$model=new ContactoForm;
		
		$this->performAjaxValidation($model);
		
		if(isset($_POST['ContactoForm']))
		{ 
			$model->attributes=$_POST['ContactoForm'];
			
			//despues de validar, enviar mail.
			
			$envio = new EmailSender();
			
			$from = array(Yii::app()->params['adminEmail'], Yii::app()->name);
			$to = array(Yii::app()->params['adminEmail'], Yii::app()->name);
			$subjet = $model->accion == "p" ? "Nueva publicacion de Inmueble" : "Nueva consulta inmueble";
			
// 			echo var_dump($model);exit();
			
			$message = Helper::crearMensajeHtml($model);  
			
			$envio->enviar($from, $to, $subjet, $message);	
		}
		
		$this->render('index', array('model'=>$model));
	}
	
	public function getDisplayOptions(){
		return Helper::getOptions();
	}
	
	public function getDisplayTipoInmuebles(){
		return CHtml::listData(TipoInmueble::model()->findAll(), 'id', 'tipo');
	}
	
	public function getDisplayTipoContratoInmueble(){
		return CHtml::listData(TipoContrato::model()->findAll(), 'id', 'nombre');
	}
	
	public function getDisplayDeptos(){
		return CHtml::listData(Departamento::model()->findAll(), 'id', 'nombre');
	}	

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'contact-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}