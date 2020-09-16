<?php

require_once "constantes.php";
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/asignar.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/asignar.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();