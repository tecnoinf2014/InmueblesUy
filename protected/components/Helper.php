<?php
class Helper
{

	public static function getOptions(){
		
		return array('1'=>'Uno', '2'=>'Dos', '3'=>'Tres', 'n'=>'Mas de tres');
	}
	
	public static function crearMensajeHtml($model){
	
		$body = "<h1>Nuevo Contacto</h1>
				 <p>CI: </p> " . $model->ci .
					 "<p>Nombre: </p> " .  $model->nombre;
	
		return $body;
	
	}	
	
}