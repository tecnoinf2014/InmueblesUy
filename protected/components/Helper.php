<?php

class Helper
{
	public static function getOptions(){
		
		return array('1'=>'Uno', '2'=>'Dos', '3'=>'Tres', 'n'=>'Mas de tres');
	}
	
	public static function crearMensajeHtml($model){
	
		$body = "<h2> Nuevo Contacto </h2>". 
				"<fieldset>" .
					"<p style='display: inline; font-weight: bold; '>CI: </p> " . $model->ci . "</br> " . 
					"<p style='display: inline; font-weight: bold; '>Nombre: </p> " .  $model->nombre . "</br> " . 
					"<p style='display: inline; font-weight: bold; '>Apellido: </p> " .  $model->apellido . "</br> " . 
					"<p style='display: inline; font-weight: bold; '>Email: </p> " .  $model->email . "</br> " . 
					"<p style='display: inline; font-weight: bold; '>Telefono: </p> " .  $model->telefono . "</br> " . 
					"<p style='display: inline; font-weight: bold; '>Comentario: </p> " .  $model->comentario . "</br> " . 
				"</fieldset> </br></br>";
				
				if ($model->accion == Constantes::getAccionConsultar()){ 
					$body += "";
				}
				
				if ($model->accion == Constantes::getAccionPublicar()){ 
					$body += "<h2> Datos del Inmueble a Publicar </h2>" . 
							 "<fieldset> ".
								 "<p style='display: inline; font-weight: bold; '>Tipo: </p> " . TipoContrato::model()->findByPk($model->tipo, 'nombre') . " </br> " . 
								 "<p style='display: inline; font-weight: bold; '>Contrato: </p> " . "" . "</br> " . 
								 "<p style='display: inline; font-weight: bold; '>Habitaciones: </p> " . "" . "</br> " . 
								 "<p style='display: inline; font-weight: bold; '>Ba&ntilde;ios: </p> " . "" . "</br> " . 
								 "<p style='display: inline; font-weight: bold; '>Plantas: </p> " . "" . "</br> " . 
								 "<p style='display: inline; font-weight: bold; '>Mts Cuadrados: </p> " . $model->mtsCuadrados . "</br> " . 
								 "<p style='display: inline; font-weight: bold; '>Garage: </p> " . $model->garage ? "Si" : "No" . "</br> " . 
								 "<p style='display: inline; font-weight: bold; '>Descripci&oacute;n: </p> " . $model->descripcionInmueble . "</br> " . 
							 "</fieldset> </br>";
					
					$body += "<h2> Direcci&oacuten del Inmueble </h2> " . 
							  "<fieldset> " .
								  "<p style='display: inline; font-weight: bold; '>Calle: </p> " . $model->calle . "</br> " . 
								  "<p style='display: inline; font-weight: bold; '>Nro Puerta: </p> " . $model->nroPuerta . "</br> " . 
								  "<p style='display: inline; font-weight: bold; '>Apto: </p> " . $model->apto . "</br> " . 
								  "<p style='display: inline; font-weight: bold; '>Departamento: </p> " . $model->depto . "</br> " . 
								  "<p style='display: inline; font-weight: bold; '>Barrio: </p> " . $model->barrio . "</br> " . 
							 "</fieldset></br>";
				}
				
		return $body;
	
	}	
	
}