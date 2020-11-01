<?php

require_once "../controladores/flights.controlador.php";
require_once "../modelos/flights.modelo.php";

class AjaxFlights{

	/*=============================================
	Save Flight
	=============================================*/	

	public $DepartureDate;
	public $DepartureStation;
	public $ArrivalStation;

	public function ajaxSaveFlight(){

		$DepartureDate = $this->DepartureDate;
		$DepartureStation = $this->DepartureStation;
		$ArrivalStation = $this->ArrivalStation;

		$flights = new FlightControllerBD($DepartureDate, $DepartureStation, $ArrivalStation);
		$response = $flights->ctrFlightSave();

		echo json_encode($response);


	}

}

if(isset($_POST["DepartureDate"]) and isset($_POST["DepartureStation"]) and isset($_POST["ArrivalStation"])){

	$flight = new AjaxFlights();
	$flight -> DepartureDate = $_POST["DepartureDate"];
	$flight -> DepartureStation = $_POST["DepartureStation"];
	$flight -> ArrivalStation = $_POST["ArrivalStation"];
	$flight -> ajaxSaveFlight();

}