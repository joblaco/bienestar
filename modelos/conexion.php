<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=bienestar_universitario",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}