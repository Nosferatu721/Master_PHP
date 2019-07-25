<?php

class Database{
	public static function connect(){
		// Crear coneccion a base de datos con sus datos
		$db = new mysqli('localhost', 'root', '', 'cuisinesoft');
		// UTF8 para que no tenga problemas con ( ñ, tildes etc)
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}
