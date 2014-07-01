<?php

class Constantes
{
	const ACCION_CONSULTAR = "c";     
  	const ACCION_PUBLICAR = "p";  
  	const PASSWORD_ADMIN_EMAIL = "codeforfood2014";    

	public static function getAccionConsultar()
	{
	    return self::ACCION_CONSULTAR;
	}
	
	public static function getAccionPublicar()
	{
	    return self::ACCION_PUBLICAR;
	}

	public static function getPasswordAdminEmail()
	{
		return self::PASSWORD_ADMIN_EMAIL;
	}
}

?>