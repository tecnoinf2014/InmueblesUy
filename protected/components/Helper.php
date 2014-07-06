<?php

class Helper
{
	public static function getOptions(){
		
		return array('1'=>'Uno', '2'=>'Dos', '3'=>'Tres', 'n'=>'Mas de tres');
	}
	
	
	
	public static function getRoles(){
		$roles = AuthItem::model()->findAll();
		$arr = array();
		foreach ($roles as &$rol) {
	     $arr[$rol->name] = $rol->name;
		}
		
		return $arr;
	}
	
	
	public static function crearMensajeHtml($model){
	
		$body = "<h2> Nuevo Contacto </h2>". 
				"<fieldset>" .  "<legend>Contacto</legend>" .
					"<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>CI: </div> <div style='display: table-cell;'>" . $model->ci . "</div> </div> " . 
					"<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Nombre: </div> <div style='display: table-cell;'>" .  $model->nombre . "</div> </div> " . 
					"<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Apellido: </div> <div style='display: table-cell;'>" .  $model->apellido . " </div></div> " . 
					"<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Email: </div> <div style='display: table-cell;'>" .  $model->email . "</div> </div> " . 
					"<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Telefono: </div> <div style='display: table-cell;'>" .  $model->telefono . "</div> </div> " . 
					"<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Comentario: </div> <div style='display: table-cell;'>" .  $model->comentario . "</div> </div> " . 
				"</fieldset> </br></br>";
				
				if ($model->accion == Constantes::getAccionConsultar()){ 
					$body .= "";
				}
				
				if ($model->accion == Constantes::getAccionPublicar()){ 

					$tipoInmueble = TipoInmueble::model()->findByPk($model->tipo)->tipo;
 					$tipoContrato =  TipoContrato::model()->findByPk($model->contrato)->nombre;
 					
					$garage = $model->garage == 1 ? "Si" : "No";
					
					$body .= "<h2> Datos del Inmueble a Publicar </h2>" . 
							 "<fieldset> <legend> Inmueble</legend>" .
								 "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Tipo: </div> <div style='display: table-cell;'>" . $tipoInmueble . "</div> </div> " .
								 "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Contrato: </div> <div style='display: table-cell;'>" .  $tipoContrato . "</div> </div> " .
								 "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Habitaciones: </div> <div style='display: table-cell;'>" .  $model->habitaciones . " </div></div> " .
								 "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Banios: </div> <div style='display: table-cell;'>" .  $model->banios . "</div> </div> " .
								 "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Plantas: </div> <div style='display: table-cell;'>" .  $model->plantas . "</div> </div> " .
								 "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Mts Cuadrados: </div> <div style='display: table-cell;'>" .  $model->mtsCuadrados . "</div> </div> " .								 
								 "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Garage: </div> <div style='display: table-cell;'>" .  $garage . "</div> </div> " .
								 "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Descripcion: </div> <div style='display: table-cell;'>" .  $model->descripcionInmueble. "</div> </div> " .								 
								 
							 "</fieldset> </br>".
						 	"<h2> Direccion del Inmueble </h2> " . 
							  "<fieldset> " . "<legend>Direccion</legend>" .								  
								  "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Calle: </div> <div style='display: table-cell;'>" . $model->calle . "</div> </div> " .
								  "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Nro. Puerta: </div> <div style='display: table-cell;'>" .  $model->nroPuerta . "</div> </div> " .
								  "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Apto: </div> <div style='display: table-cell;'>" .  $model->apto . " </div></div> " .
								  "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Departamento: </div> <div style='display: table-cell;'>" .  $model->depto . "</div> </div> " .
								  "<div style='display:block;'> <div style='display: table-cell; font-weight: bold; width: 120px;'>Barrio: </div> <div style='display: table-cell;'>" .  $model->barrio . "</div> </div> " .
								  
							 "</fieldset></br>";
				}
				
		return $body;
	
	}	
	
}