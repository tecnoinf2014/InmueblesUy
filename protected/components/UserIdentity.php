<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
public $_id;

const ERROR_NONE =0;	
const ERROR_PASSWORD_INVALID =1;
const ERROR_USERNAME_INVALID=2;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user = Usuario::model()->find("email = :email",array(":email"=>$this->username));
		
		if(!$user == null)
		{
			$contraseña =$this->password;
			if($user->password === $contraseña)
			{
				$this->_id = $user->id;
				$this->setState("email", $user->email);

				$this->errorCode = self::ERROR_NONE;
				return true;
				
			}
			else
			{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			
			}
			
		}
		else
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
			
		}
	}
	
}