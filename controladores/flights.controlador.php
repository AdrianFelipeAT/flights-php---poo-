<?php

class FlightController{

	/*=============================================
	Search Flights
	=============================================*/

	static public function ctrFlightSearch(){

		if(isset($_POST["departure"]) and isset($_POST["arrival"]) and isset($_POST["dateFlight"])){
			$departure = $_POST["departure"];
			$arrival = $_POST["arrival"];
			$dateFlight = $_POST["dateFlight"];

			$response = FlightsModel::mdlSearchFlights($departure, $arrival, $dateFlight);

			return $response;
		}

	}

}


class FlightControllerBD{

	static $departure;
	static $arrival;
	static $dateFlight;

	public function __construct($DepartureDate, $DepartureStation, $ArrivalStation) {

		self::$departure = $DepartureDate;
		self::$arrival = $DepartureStation;
		self::$dateFlight = $ArrivalStation;
		
    }

	/*=============================================
	Save Flights
	=============================================*/

	static public function ctrFlightSave(){

		$table = "flight";

		$response = FlightsModel::mdlSaveFlights($table, self::$departure, self::$arrival, self::$dateFlight);
		return $response;

	}

}


