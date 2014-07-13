<?php

class AdminController extends Controller
{
	public $layout='//layouts/layoutLarge';
	
	public function actionIndex()
	{
		$model=new LoginForm;
		$user = new Usuario();
		$this->render('index',array("model"=>$model,'user'=>$user));

	}
	
	public function actionLogin()
	{
		
		//creo el modelo para el login 
		$model=new LoginForm;
		// display the login form
		$user = new Usuario();
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		
		//si se cargo el formulario
		if(isset($_POST['LoginForm']))
		{
			//le paso los atributos del formulario al modelo
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			
			if( $model->login() && $model->validate()){  
				$user = Usuario::model()->find('email=?',array($model->email));
			}

		}
		
		$this->render('index',array('model'=>$model,'user'=>$user));
		
		
	}
		
	public function actionLogout()
	{		
		
		Yii::app()->user->setState('estadousuario', null);
		Yii::app()->user->logout();
		$this->actionIndex();
	}

	
	public function actionCalendario(){
		
		$this->render('calendarioindex');
		
	}
	
}
