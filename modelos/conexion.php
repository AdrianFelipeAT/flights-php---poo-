<?php

class Conexion{

	static public function conectar(){


		$link = new PDO("mysql:host=localhost;dbname=bd_premios_ce",
			            "susuerte_new",
			            "database_p0rt4l");
		

		$link->exec("set names utf8");

		return $link;

	}

}