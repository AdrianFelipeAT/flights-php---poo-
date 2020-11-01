<?php

require_once "functions/functions.php";
require_once "controladores/plantilla.controlador.php";
require_once "controladores/flights.controlador.php";
require_once "modelos/flights.modelo.php";


set_error_handler("on_error");
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
