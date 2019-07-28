<?php

class DataBase{
	public static function Conectar(){
		$conexion = new mysqli("localhost", "root", "", "notas_master");
		$conexion->query("SET NAMES 'utf8'");
		
		return $conexion;
	}
}
