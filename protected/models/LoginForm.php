<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $email;
	public $password;
	public $rememberMe;
	public $errormsg;
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that email and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// email and password are required
			array('email, password', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Recordarme',
			'email'=>'E-Mail',
			'password'=>'Contraseña',
				
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		
		if(!$this->hasErrors())
		{

			$this->_identity=new UserIdentity($this->email,$this->password);
			
			
			if(!$this->_identity->authenticate()){
				
				$this->addError('password','E-Mail o Contraseña Incorrecta!!!');
			
			}
			return true;
		}
		
		
	}

	/**
	 * Logs in the user using the given email and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		
		if($this->_identity === null)
		{
			$this->_identity = new UserIdentity($this->email,$this->password);
			
			$this->_identity->authenticate();
			
			
		}
		if($this->_identity->errorCode === UserIdentity::ERROR_NONE)
		{
			
			Yii::app()->user->login($this->_identity);
			
			return true;
		}
		else 
		{ 
			//control de errores
			if($this->_identity->errorCode === UserIdentity::ERROR_PASSWORD_INVALID)
			{
				$this->errormsg = "Contrasena Incorrecta!!!";
			}
			
			if($this->_identity->errorCode === UserIdentity::ERROR_USERNAME_INVALID)
			{
				$this->errormsg = "E-Mail Incorrecto!!!";
			}
			return false;
			
		}			
		
		
// 		$allusers = Usuario::model()->findAll();
// 		$existe=false;
// 		foreach ($allusers as $d){
// 			if($d->email === $this->email && $d->password === $this->password){
// 				$existe =true;
// 			}else{
// 				$existe=false;
// 			}
			
// 		}
// 		if($existe){
// 			return true;
// 		}else{
// 			return false;
// 		}
		
		
	}
}
