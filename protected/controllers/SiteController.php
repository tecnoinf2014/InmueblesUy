<?php

class SiteController extends Controller
{
	public $layout='//layouts/layoutClient';
	
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	/**
	 * Displays the contact page
	 */
	public function actionContacto()
	{
		$model=new ContactoForm;
		if(isset($_POST['ContactoForm']))
		{
			$model->attributes=$_POST['ContactoForm'];
			if($model->validate())
			{
				/*
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
				*/
			}
		}
		$this->render('contacto',array('model'=>$model));
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
}