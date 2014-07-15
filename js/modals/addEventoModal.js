

$(function(){
	
	function closeDialog () {
		
		$("#startDate").datepicker("destroy");
		$("#endDate").datepicker("destroy");
		$("#startDate").val("");
		$("#endDate").val("");
		$("#startHour option:eq(0)").attr("selected", "selected");
		$("#startMin option:eq(0)").attr("selected", "selected");
		$("#endHour option:eq(0)").attr("selected", "selected");
		$("#endMin option:eq(0)").attr("selected", "selected");
		$("#idInmueble").val("");		
		$("#nombreInmueble").val("");		
		$("#idUsuario").val("");
		$("#nombreUsuario").val("");
		$("#idCliente").val("");
		$("#nombreCliente").val("");
		$("#descripcion").val("");
		$('#add-event-form').modal('hide');
	}		
	
	$("#cerrarEvento").click(function(){
		closeDialog ();
	}); 	

	$("#salvarEvento").click(function(){
//		debugger;
		agregarEventoACalendario();
//		debugger;
		closeDialog();
//		var allItemsArray = jfcalplugin.getAllAgendaItems("#calendar");
//		allItemsArray;
	});
	
	
    $('#add-event-form').on('show', function (e) {
		$("#startDate").val(clickDate);
		$("#endDate").val(clickDate);
    	
     });		
	
	/**
	 * Inicializar evento dialog
	 */
	
	$("#add-event-form").modal({
		show: false,
		backdrop: false,
	});//dialog 
	
	function agregarEventoACalendario(){
		
		var descripcion = $.trim($("#descripcion").val());
		var idInmueble = $("#idInmueble").val();
		var idUsuario = $("#idUsuario").val();
		var idCliente = $("#idCliente").val();
		
		var nombreInmueble = $("#nombreInmueble").val();
		var nombreUsuario = $("#nombreUsuario").val();
		var nombreCliente = $("#nombreCliente").val();
		
		var startDate = $("#startDate").val();
		var startDtArray = startDate.split("/");
		var startYear = startDtArray[2];
		// jquery datepicker months start at 1 (1=January)
		var startMonth = startDtArray[1];
		var startDay = startDtArray[0];
		// strip any preceeding 0's
		startMonth = startMonth.replace(/^[0]+/g,"");
		startDay = startDay.replace(/^[0]+/g,"");
		var startHour = jQuery.trim($("#startHour").val());
		var startMin = jQuery.trim($("#startMin").val());
		startHour = parseInt(startHour.replace(/^[0]+/g,""));
		
		if (startMin == "0" || startMin == "00"){
			startMin = 0;
		}
		else{
			startMin = parseInt(startMin.replace(/^[0]+/g,""));
		}
		
		var endDate = $("#endDate").val();
		var endDtArray = endDate.split("/");
		var endYear = endDtArray[2];
		// jquery datepicker months start at 1 (1=January)
		var endMonth = endDtArray[1];
		var endDay = endDtArray[0];
		// strip any preceeding 0's
		endMonth = endMonth.replace(/^[0]+/g,"");
		endDay = endDay.replace(/^[0]+/g,"");
		var endHour = jQuery.trim($("#endHour").val());
		var endMin = jQuery.trim($("#endMin").val());
		endHour = parseInt(endHour.replace(/^[0]+/g,""));
		
		if(endMin == "0" || endMin == "00"){
			endMin = 0;
		}
		else{
			endMin = parseInt(endMin.replace(/^[0]+/g,""));
		}
		
		// Dates use integers
		var startDateObj = new Date(parseInt(startYear), parseInt(startMonth) - 1, parseInt(startDay), startHour, startMin,0,0);
		var endDateObj = new Date(parseInt(endYear), parseInt(endMonth) - 1, parseInt(endDay), endHour, endMin, 0, 0);

		salvarEvento(descripcion,
					 startDateObj, 
					 endDateObj,
					 idInmueble,
					 idUsuario,
					 idCliente,
					 nombreUsuario,
					 nombreInmueble,
					 nombreCliente
					 );
	}
	
	function salvarEvento(descripcion,
			 			  startDateObj, 
			 			  endDateObj,
			 			  idInmueble,
			 			  idUsuario,
			 			  idCliente,
			 			  nombreUsuario,
			 			  nombreInmueble,
			 			  nombreCliente
			 			  ){
			
		$.ajax({
			type: "POST",
			url: "http://localhost/InmueblesUy/index.php/calendario/create",
			data: { descripcion  : descripcion, 
				    startDateObj : startDateObj,
					endDateObj   : endDateObj,
					idInmueble   : idInmueble,
					idUsuario    : idUsuario,
					idCliente    : idCliente	
				   }
			})
			.done(function( msg ) {
				
				// add new event to the calendar
				jfcalplugin.addAgendaItem("#calendar", 
											descripcion,
											startDateObj,
											endDateObj,
											false,
											{
												InmuebleRef: idInmueble,
												Inmueble: nombreInmueble,
												Usuario: nombreUsuario,
												Cliente: nombreCliente,
											},
											
											{
												backgroundColor: "#A3F7AD",
												foregroundColor: "#000000"
											}
										);				
			
		})
		 .fail(function() {
			 alert( "error" );
		 });
	}
});