<?php

class ImagenController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/mainAdmin';

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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create','loadImage' and 'update' actions
				'actions'=>array('create','update','loadImage','getPortada','changeIsPreview'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Imagen;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		 if(isset($_POST['Imagen']))
        {
            $model->attributes=$_POST['Imagen'];
 
            if(!empty($_FILES['Imagen']['tmp_name']['img']))
            {	
            	// echo var_dump('entre');exit(0);
                $file = CUploadedFile::getInstance($model,'img');
                $model->name = $file->name;
                $model->type = $file->type;


                $fp = fopen($file->tempName, 'r');
                $content = fread($fp, filesize($file->tempName));
                fclose($fp);
                $model->img = $content;
                //echo var_dump($content);exit(0);
            }
 
            
            if($model->save()){
                $this->redirect(array('view','id'=>$model->id));
                //echo var_dump('Salvo');
            }
        }
 
        $this->render('create',array(
            'model'=>$model,
            'types'=>Imagen::model()->findAll()
        ));
    }

		/*if(isset($_POST['Imagen']))
		{
			$model->attributes=$_POST['Imagen'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}*/

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imagen']))
		{
			$model->attributes=$_POST['Imagen'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Imagen');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Imagen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Imagen']))
			$model->attributes=$_GET['Imagen'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Imagen the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Imagen::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Imagen $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='imagen-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionloadImage($id)
    {
        $model=$this->loadModel($id);
        $this->renderPartial('loadimage', array(
            'model'=>$model
        ));
    }

    public function actiongetPortada()
    {
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
		foreach ($auxImage as $auxImageItem) 
		{
			//$this->loadImage(array('id'=>$auxImageItem->id))
			$arrayloco[] =array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImageItem->id)), 'label'=>'Inmueble', 'caption'=>$auxImageItem->inmueble0->descripcion,'imageOptions' => array('id'=>$auxImageItem->inmueble));		
		}

		$InmuebleDataProvider= new CActiveDataProvider('Imagen',array(
            'sort'=>array(
                    'defaultOrder'=>'inmueble DESC',
                ),
            'pagination'=>array(
                'pageSize'=>30,
            ),
		));



		$this->render('getPortada', array('arrayloco'=>$arrayloco,'imagenesPreview'=>$auxImage, 'DataProvider'=>$InmuebleDataProvider));
	}

	public function actionchangeIsPreview($id)
	{
		
		$model = new Imagen;		

		
			// $todasLasImagenes = Imagen::model()->findAll();

			$model=$this->loadModel($id);

			$isPortada = true;

			$criteria = new CDbCriteria();
			$criteria->condition='is_preview=1';
			$count = Imagen::model()->count($criteria);

			 // echo var_dump($count); exit(0);
			if ($model->is_preview == 1) {
			// echo 'entra al if' . $id; exit(0);			
				// $model->is_preview = 0;
				// echo var_dump($model);exit(0);
				// $model->save();
				$model->saveAttributes(array('is_preview'=>0));
				$isPortada = false; 
			}

			if ($count < 6 && $isPortada == true)
			{
				$model->saveAttributes(array('is_preview'=>1));
			} 
			else
			{	
				 //Hacer mensajes de salida algun dia 
				// $ShowError =  'Error, no se permiten mas de 6 Portadas.' . $id;
			}
			$this->redirect('../getPortada');
	}
}
