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
	public $accionUsuario; 
	
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
				array('ci, nombre, apellido , telefono, email', 'required', "message"=> "El campo {attribute} es obligatorio."),
				// email has to be a valid email address
				array('email', 'email'),
				
				array('accionUsuario, comentario, contrato, tipo, habitaciones, banios, plantas, mtsCuadrados, precio, garage, descripcionInmueble,  barrio, apto , nroPuerta, calle, depto', 'safe'),
				
				array('calle', 'validacionPublicarInmueble'),
				// verifyCode needs to be entered correctly
				//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	public function attributeLabels()
	{
		return array(
			'precio'=>'Precio USD',
		);
	}
	
	public function  validacionPublicarInmueble($attribute, $params)
	{
		if ($this->accion == Constantes::getAccionPublicar() && empty($attribute)){
			$this->addError($attribute, "El campo {attribute} es obligatorio.");
		}
	}
	
}

?>