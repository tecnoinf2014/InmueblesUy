<?php

class ErrorController extends Controller
{	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$request = Yii::app()->request->url;
		
		if (strpos($request,'admin') !== false){
			$this->layout = "layoutAdmin";
		}
		if (strpos($request,'site') !== false){
			$this->layout = "layoutClient";
		}
		
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('index', array('error' => $error, 
											 'request' => $request));
		}
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
}