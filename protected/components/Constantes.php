<?php

class Constantes
{
	const ACCION_CONSULTAR = "c";     
  	const ACCION_PUBLICAR = "p";  
  	const PASSWORD_ADMIN_EMAIL = "codeforfood2014";  
  	
  	const DIRECTOR = "Director";
  	const AGENTE = "Agente";
  	const ADMINISTRATIVO = "Administrativo";

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
	
	public static function getRolDirector(){
		return self::DIRECTOR;
	}
	
	public static function getRolAgente(){
		return self::AGENTE;
	}
	
	public static function getRolAdministrativo(){
		return self::AGENTE;
	}
}

?>