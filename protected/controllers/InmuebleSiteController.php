<?php

class InmuebleSiteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/mainClient';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','cargarimg','admin'),
				'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
					'actions'=>array('index','view','cargarimg','admin','delete','create','update'),
					'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Inmueble;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inmueble']))
		{
			$model->attributes=$_POST['Inmueble'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$modelDir=new Direccion;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inmueble']))
		{
			$model->attributes=$_POST['Inmueble'];
			if($model->save()){

				$modelDir->id = $model->direccion;
							
				$this->redirect(array('Direccion/update','id'=>$modelDir->id));
		}

				/*$this->redirect(array('view','id'=>$model->id));*/
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Inmueble');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Inmueble('search');
		$model->unsetAttributes();  // clear any default values
		

		$auxInmuebles = Inmueble::model()->findAll();
		foreach ($auxInmuebles as $inm) {
			$auxImagens = $inm->imagens;
			foreach ($auxImagens as $imag) {
				if ($imag->is_preview == 1)
					$auxImage[] = $imag;
			}
		}
		$arrayloco=array();
		$auxImageItem=array();
		foreach ($auxImage as $auxImageItem) {
		
			$arrayloco[] =array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImageItem->id)), 'label'=>'Inmueble', 'caption'=>$auxImageItem->inmueble0->descripcion,'imageOptions' => array('id'=>$auxImageItem->inmueble));
		
		}
	
		if(isset($_GET['Inmueble']))
			$model->attributes=$_GET['Inmueble'];
		$this->render('admin',array(
			'model'=>$model,
			'arrayloco'=>$arrayloco,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Inmueble the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Inmueble::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Inmueble $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='inmueble-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionCargarimg($id){
		
		$imgenes = Imagen::model()->findAllByAttributes(array('inmueble'=>$id));
		
		$arrayimg=array();
		$auxImageItem=array();
		foreach ($imgenes as $auxImageItem) {
		
			$arrayimg[] =array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImageItem->id)));
		
		}
		
		
		$this->render('_verimginmueble',array(
				'arrayimg'=>$arrayimg,
				'id'=>$id,
		));
		
	}
}
