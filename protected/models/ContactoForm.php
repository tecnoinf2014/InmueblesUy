<?php 

class ContactoForm extends CFormModel
{ 
	public $nombre;
	public $apellido;
	public $email;
	public $ci;
	public $telefono;
	public $comentario;
	//publicar - consultar
	public $accion; 
	
	//datos del inmueble a publicar
	public $tipo;
	public $contrato;
	public $habitaciones;
	public $banios;
	public $plantas;
	public $mtsCuadrados;
	public $precio;
	public $garage;
	public $descripcionInmueble;
	
	//direccion;
	public $calle;
	public $nroPuerta;
	public $apto;
	public $depto;
	public $barrio;


	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
				// name, email, subject and body are required
				array('ci, nombre, email', 'required'),
				// email has to be a valid email address
				array('email', 'email'),
				// verifyCode needs to be entered correctly
				//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}	
	
}

?>