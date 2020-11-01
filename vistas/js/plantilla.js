/*=============================================
SideBar Menu
=============================================*/

$('.sidebar-menu').tree()

/*=============================================
Data Table
=============================================*/

$(".tablas").DataTable({

	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Showing _MENU_ fields",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Showing fields from _START_ to _END_ out of a total of _TOTAL_",
		"sInfoEmpty":      "Showing fields from 0 to 0 out of a total of 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Search:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Next",
		"sPrevious": "Previous"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}

});

/*=============================================
 //iCheck for checkbox and radio inputs
=============================================*/

$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
  checkboxClass: 'icheckbox_minimal-blue',
  radioClass   : 'iradio_minimal-blue'
})

/*=============================================
 //input Mask
=============================================*/

//Datemask dd/mm/yyyy
$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
//Datemask2 mm/dd/yyyy
$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
//Money Euro
$('[data-mask]').inputmask()

/*=============================================
CORRECCIÓN BOTONERAS OCULTAS BACKEND	
=============================================*/

if(window.matchMedia("(max-width:767px)").matches){
	
	$("body").removeClass('sidebar-collapse');

}else{

	$("body").addClass('sidebar-collapse');
}
