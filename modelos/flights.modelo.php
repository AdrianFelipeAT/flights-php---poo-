<?php

require_once "conexion.php";

class FlightsModel{

	/*=============================================
	SAVE FLIGHT
	=============================================*/

	static public function mdlSaveFlights($table, $DepartureDate, $DepartureStation, $ArrivalStation){

		try{
			$stmt = Conexion::conectar()->prepare("INSERT INTO $table (departureDate, departureStation, arrivalStation) VALUES (:DepartureDate, :DepartureStation, :ArrivalStation)");

			$stmt->bindParam(":DepartureDate", $DepartureDate, PDO::PARAM_STR);
			$stmt->bindParam(":DepartureStation", $DepartureStation, PDO::PARAM_STR);
			$stmt->bindParam(":ArrivalStation", $ArrivalStation, PDO::PARAM_STR);

			if($stmt->execute()){

				return "ok";

			}
			return $stmt->execute();

			$stmt->close();
			$stmt = null;
		} catch (PDOException $e){
			echo "At this moment it is not possible to access";
		}




		

	}

	/*=============================================
	Search Flights
	=============================================*/

	static public function mdlSearchFlights($departure, $arrival, $dateFlight){


		try{
			// The data to send to the API
			$postData = array(
			        "Origin" => $departure,
					"Destination" => $arrival,
					"From" => $dateFlight
			);

			// Setup cURL
			$ch = curl_init('http://testapi.vivaair.com/otatest/api/values');
			curl_setopt_array($ch, array(
			       CURLOPT_POST => TRUE,
			       CURLOPT_RETURNTRANSFER => TRUE,
			       CURLOPT_HTTPHEADER => array(
			           'Content-Type: application/json'
			       ),
			       CURLOPT_POSTFIELDS => json_encode($postData)
			));

			// Send the request
			$response = curl_exec($ch);
			// Check for errors
			if($response === FALSE){
			       die(curl_error($ch));
			}
			else{
				return $response;
			}
		} catch (PDOException $e){
			echo "At this moment it is not possible to access";
		}


		

	}

}
