<script>

function generar(){
    
    $.ajax({type: "POST",
        url: "vistas/modulos/generarcode.php",
        dataType: 'html'
    })
    .done(function(respuesta){
        //alert(respuesta);
        //$("#codigoasignado").text('Texto de sustitución');
        $("#codigoasignado").val(respuesta);
    });
        
}
</script>