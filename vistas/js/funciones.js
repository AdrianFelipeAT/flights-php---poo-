function consultagenerado(){
  $.ajax({type: "POST",
      url: "consultagenerado.php",
      dataType: 'html'
  })
  .done(function(respuesta){
    if (respuesta == 73832112){
        $('#myModalCodigo').modal('show');
        $('#myModalPremio').modal('hide');
    }else{
      $('#myModalCodigo').modal('hide');
      $('#myModalPremio').modal('show');
    }
    //alert(maximo);
  });
        
}