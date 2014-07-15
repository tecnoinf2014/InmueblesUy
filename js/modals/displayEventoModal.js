
/**
 * Initialize display event form.
 */
$("#display-event-form").dialog({					
					autoOpen : false,
					height : 400,
					width : 400,
					modal : true,
					buttons: {
						Cancel : function() {
							$(this).dialog('close');
						},
						'Edit' : function() {
							alert("Make your own edit screen or dialog!");
						},
						'Delete' : function() {
							if (confirm("Are you sure you want to delete this agenda item?")) {
								if (clickAgendaItem != null) {
									jfcalplugin.deleteAgendaItemById("#mycal",
											clickAgendaItem.agendaId);
									// jfcalplugin.deleteAgendaItemByDataAttr("#mycal","myNum",42);
								}
								$(this).dialog('close');
							}
						}
					},
					open : function(event, ui) {
						if (clickAgendaItem != null) {
							var title = clickAgendaItem.title;
							var startDate = clickAgendaItem.startDate;
							var endDate = clickAgendaItem.endDate;
							var allDay = clickAgendaItem.allDay;
							var data = clickAgendaItem.data;
							// in our example add agenda modal form we put some
							// fake data in the agenda data. we can retrieve it
							// here.
							$("#display-event-form").append(
									"<br><b>" + title + "</b><br><br>");
							if (allDay) {
								$("#display-event-form").append(
										"(All day event)<br><br>");
							} else {
								$("#display-event-form").append(
										"<b>Starts:</b> " + startDate + "<br>"
												+ "<b>Ends:</b> " + endDate
												+ "<br><br>");
							}
							for ( var propertyName in data) {
								$("#display-event-form").append(
										"<b>" + propertyName + ":</b> "
												+ data[propertyName] + "<br>");
							}
						}
					},
					close : function() {
						// clear agenda data
						$("#display-event-form").html("");
					}
				});
