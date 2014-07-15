<?php
Yii::import('application.extensions.json.CArJSON');

class CalendarioController extends Controller
{
	public $layout='//layouts/layoutAdmin';
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	/**
	 * NO MODIFICAR! funcion ejecutada por ajax.
	 * */
	public function actionCreate()
	{
		$model = new Evento;

		$model->descripcion = $_POST['descripcion'];
		$model->fecha_inicio = Helper::stringToDateModel($_POST['startDateObj']); // date ('Y-m-d H:i:s' , strtotime($_POST['startDateObj']));
		$model->fecha_fin = Helper::stringToDateModel($_POST['endDateObj']);//date ('Y-m-d H:i:s', strtotime($_POST['endDateObj']));
		$model->inmueble = $_POST['idInmueble'];
		$model->usuario = $_POST['idUsuario'];
		$model->cliente = $_POST['idCliente'];
		
		if ($model->save()){
			echo "OKKKK: FECHA INICIO: " . $model->fecha_inicio . " " . "FECHA FIN " . $model->fecha_fin .  " ";
		}
		else{
			echo "errrorrrrrrrrr";
		}	
	}	
	
	public function actionGetAgendaItemForMonth()
	{
		$criteria = new CDbCriteria();
				
		$model = Evento::model()->findAll();
		
		$json = new CArJSON();

		$relations = array('inmueble0', 'cliente0', 'usuario0');

		$attributes = array(
				'root' => array('id', 'descripcion', 'fecha_inicio', 'fecha_fin'),
				'inmueble0' => array( 'id', 'descripcion' ),
				'cliente0' => array( 'id', 'email' ),
				'usuario0' => array( 'id', 'email' ), 
		);
		echo $json->toJSON($model, $relations, $attributes);			
	}
	


}