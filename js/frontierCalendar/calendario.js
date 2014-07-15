	$(function(){		
		
		/**
		 * Initialize with current year and date. Returns reference to plugin object.
		 */
			jfcalplugin = $("#calendar").jFrontierCal({
			
			 date: new Date(),
			 dayClickCallback: myDayClickHandler,
			 agendaClickCallback: myAgendaClickHandler,
			 agendaDropCallback: myAgendaDropHandler,
			 agendaMouseoverCallback: myAgendaMouseoverHandler,
			 applyAgendaTooltipCallback: myApplyTooltip,
			 agendaDragStartCallback : myAgendaDragStart,
			 agendaDragStopCallback : myAgendaDragStop,
			 dragAndDropEnabled: false			
			
		}).data("plugin");

		jfcalplugin.setAspectRatio("#calendar", 0.5);
		
		function procesarRespuesta (ajaxResponse){
			
			 if (typeof ajaxResponse == "string")
			        ajaxResponse = $.parseJSON(ajaxResponse);
			    return ajaxResponse;
		}
		
		function recuperarEventos_callback(ajaxResponse, textStatus){
			
			var eventos = procesarRespuesta(ajaxResponse);
		    if (!eventos)
		    {
		        // no se encontraron registros :(
		        return;
		    }
		    
		    for ( var eve in eventos ){
		    	evento = eventos[eve];
		    	
		    	var attr = evento.attributes;
		    	var rel = evento.relations;
		    	
		    	d1 = new Date ( new Date( attr.fecha_inicio.split(" ")[0] + "T" + attr.fecha_inicio.split(" ")[1] )); //'2011-04-11T11:51:00'
		    	d2 = new Date ( new Date( attr.fecha_fin.split(" ")[0] + "T" + attr.fecha_fin.split(" ")[1] ));
		    	jfcalplugin.addAgendaItem(
		    						"#calendar", 
		    						attr.descripcion, 
		    						d1,
		    						d2,
		    						false,
		    						{
		    							InmuebleRef: rel.inmueble0.id,
										Inmueble: rel.inmueble0.descripcion,
										Agente: rel.usuario0.email,
										Cliente: rel.cliente0.email,
		    						},
		    						{
										backgroundColor: "#A3F7AD",
										foregroundColor: "#000000"		    							
		    						}
		    		);
		    }
		}
		
		function cargarAgendaItemsToCalendar()
		{
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "http://localhost/InmueblesUy/index.php/calendario/getAgendaItemForMonth",
				data:{ 
					    dateCalendar : $("#dateSelect").val(),
					   },
				success: recuperarEventos_callback
				});		
		}		
		
		cargarAgendaItemsToCalendar();

		/**
		 * Obtiene el dia clickeado. Utilizado para editar y eliminar
		 */
		function myAgendaClickHandler (eventObj){
			var agendaId = eventObj.data.agendaId;
			var agendaItem = jfcalplugin.getAgendaItemById("#calendar", agendaId);
		};
		/**
		 * get the agenda item that was dropped. It's start and end dates will be updated.
		 */
		function myAgendaDropHandler(eventObj){
			var agendaId = eventObj.data.agendaId;
			var date = eventObj.data.calDayDate;		
			var agendaItem = jfcalplugin.getAgendaItemById("#calendar",agendaId);		
			alert("You dropped agenda item " + agendaItem.title + 
				" onto " + date.toString() + ". Here is where you can make an AJAX call to update your database.");
		};		
		
		function myDayClickHandler(eventObj){
			//obtiene el dia que fue clickeado.
			var date = eventObj.data.calDayDate;
			clickDate = date.getDate() + "/" + (date.getMonth() + 1) + "/" +  date.getFullYear();
		    $('#add-event-form').modal('show');				
		};
		
		function myAgendaMouseoverHandler(eventObj){
			var agendaId = eventObj.data.agendaId;
			var agendaItem = jfcalplugin.getAgendaItemById("#calendar", agendaId); 			
		}
		
		function myApplyTooltip(divElm, agendaItem){
			 // Destroy currrent tooltip if present
			if(divElm.data("qtip")){
				divElm.qtip("destroy");
			}
			var displayData = "";
			var title = agendaItem.title;
			var startDate = agendaItem.startDate;
			var endDate = agendaItem.endDate;
			var allDay = agendaItem.allDay;
			var data = agendaItem.data;
			displayData += "<b>" + title+ "</b><br>";
			displayData += "<br>";
			
			if(allDay){
				displayData += "<br>";
			}
			else{
				displayData += "<b>Comienzo:</b> " + startDate.format("HH:mm:ss")  + "<br>" + 
							   "<b>Fin:</b> " + endDate.format("HH:mm:ss") + "<br><br>";
			}
			
			for (var propertyName in data) {
				displayData += "<b>" + propertyName + ":</b> " + data[propertyName] + "<br>"
			}
			// use the user specified colors from the agenda item.
			var backgroundColor = agendaItem.displayProp.backgroundColor;
			var foregroundColor = agendaItem.displayProp.foregroundColor;
			var myStyle = {
					border: {
						width: 1,
						radius: 5
					},
					padding: 10,
					textAlign: "left",
					tip: true,
					name: "dark" // other style properties are inherited from dark theme
				};
			if(backgroundColor != null && backgroundColor != ""){
				myStyle["backgroundColor"] = backgroundColor;
			}
			
			if(foregroundColor != null && foregroundColor != ""){
				myStyle["color"] = foregroundColor;
			}
			
			// apply tooltip
			divElm.qtip({
				content: displayData,
				position: {
					corner: {
						tooltip: "bottomMiddle",
						target: "topMiddle"
					},
					adjust: {
						mouse: true,
						x: 0,
						y: -15
					},
					target: "mouse"
				},
				show: {
					when: {
						event: 'mouseover'
					}
				},
				style: myStyle
			}); 			
		}
		
		function myAgendaDragStart(eventObj){
			
		}
		
		function myAgendaDragStop(eventObj){
			
		}
	
	});