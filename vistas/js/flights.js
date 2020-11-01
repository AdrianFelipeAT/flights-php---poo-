/*=============================================
EDITAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnEditarCliente", function(){

	var idCliente = $(this).attr("idCliente");

	var datos = new FormData();
    datos.append("idCliente", idCliente);

    $.ajax({

      url:"functions/clientes.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	   $("#idCliente").val(respuesta["id"]);
	       $("#editarCliente").val(respuesta["nombre"]);
	       $("#editarDocumentoId").val(respuesta["documento"]);
	       $("#editarEmail").val(respuesta["email"]);
	       $("#editarTelefono").val(respuesta["telefono"]);
	       $("#editarDireccion").val(respuesta["direccion"]);
           $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
	  }

  	})

})

/*=============================================
ELIMINAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnSaveFlight", function(){

	var DepartureDate = $(this).attr("DepartureDate");
  var DepartureStation = $(this).attr("DepartureStation");
  var ArrivalStation = $(this).attr("ArrivalStation");
  var datos = new FormData();
    datos.append("DepartureDate", DepartureDate);
    datos.append("DepartureStation", DepartureStation);
    datos.append("ArrivalStation", ArrivalStation);
    $.ajax({

      url:"functions/flights.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
        swal({
          type: "success",
          title: "The flight has been saved successfully",
          showConfirmButton: false,
          confirmButtonText: "Cerrar"
          })
    }

    })

})


