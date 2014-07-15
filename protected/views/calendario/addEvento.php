
<div id="add-event-form" class="modal hide fade" style="z-index: 1;">
	<input type="hidden" name="soloLectura"  />
	
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"
			aria-hidden="true">&times;</button>
		<h3>Nuevo Evento</h3>
	</div>
	<div class="modal-body">
		<p class="validateTips">* Todos los campo son obligatorios.</p>
		<form class="form-horizontal">

			<div class="control-group">
				<label class="control-label" for="nombreInmueble">Desc. Inmueble</label>
				<div class="controls">
					<input type="hidden" name="idInmueble" id="idInmueble" />
					<input type="text" name="nombreInmueble" id="nombreInmueble" class="required span7"  />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="idUsuario">Email Agente</label>
				<div class="controls">
					<input type="hidden" name="idUsuario" id="idUsuario" />
					<input type="text" name="nombreUsuario" id="nombreUsuario" class="required span7" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="idCliente">Email Cliente</label>
				<div class="controls">
					<input type="hidden" name="idCliente" id="idCliente" />
					<input type="text" name="nombreCliente" id="nombreCliente" class="required span7" />
				</div>
			</div>			
			<div class="control-group">
				<label class="control-label" for="descripcion">Descripci&oacute;n</label>
				<div class="controls">
					<textarea rows="3" name="descripcion" id="descripcion"> </textarea>
				</div>
			</div>

			<div class="span4">
				<label for="startDate">Fecha Inicio</label> 
				<input readonly="readonly" type="text" name="startDate" id="startDate" value="" class="datepicker span10" />
				<span class="add-on"><i class="icon-calendar"></i></span>
			</div>
			
			<div class="span3" >
				<label for="startHour">Hora</label> 
				<select id="startHour" class="span10">
					<option value="8" SELECTED>8</option>
<!-- 					<option value="1">1</option> -->
<!-- 					<option value="2">2</option> -->
<!-- 					<option value="3">3</option> -->
<!-- 					<option value="4">4</option> -->
<!-- 					<option value="5">5</option> -->
<!-- 					<option value="6">6</option> -->
<!-- 					<option value="7">7</option> -->
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
<!-- 					<option value="21">22</option> -->
<!-- 					<option value="23">23</option> -->
				</select>
			</div>

			<div class="span3">
				<label for="startMin">Min.</label> 
				<select id="startMin" class="span10">
					<option value="00" SELECTED>00</option>
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
				</select>
			</div>
			
			<div class="span4">
				<label for="endDate">Fecha Fin</label> 
				<input readonly="readonly" type="text" name="endDate" id="endDate" value="" class="datepicker span10" />
				<span class="add-on"><i class="icon-calendar"></i></span>
			</div>
			<div class="span3">
				<label for="endHour">Hora</label> 
				<select id="endHour" class="span10">
					<option value="8" SELECTED>8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select>
			</div>
			<div class="span3">
				<label for="endMin">Min.</label> 
				<select id="endMin" class="span10">
					<option value="00" SELECTED>00</option>
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
				</select>
			</div>	
		</form>
	</div>

	<div class="modal-footer">
		<a href="#" id="cerrarEvento" class="btn">Cerrar</a> 
		<a href="#" id="salvarEvento" class="btn btn-primary">Salvar</a>
	</div>
</div>

<script type="text/javascript">

$(function(){

	$('#nombreInmueble').autocomplete({
	   source: function( request, response ) {
	       $.ajax({
	           url : 'http://localhost/InmueblesUy/index.php/inmueble/autocomplete',
	           type: "POST",
	           dataType: "json",
		         data: {
		            name_startsWith: request.term,
		         },
		          success: function( data ) {
		              response( $.map( data, function( item ) {
		                 return {
		                     label: item.descripcion,
		                     value: item.descripcion,
		                     idHidden: item.id
		                     
		                 }
		             }));
		           }
	       });
	   },

	   select: function (event, ui) {
		   this.value = ui.item.label;
           $('#idInmueble').val(ui.item.idHidden);
       }	   
        
	});

	$('#nombreUsuario').autocomplete({
		   source: function( request, response ) {
		       $.ajax({
		           url : 'http://localhost/InmueblesUy/index.php/usuario/autocomplete',
		           type: "POST",
		           dataType: "json",
			         data: {
			            name_startsWith: request.term,
			         },
			          success: function( data ) {
			              response( $.map( data, function( item ) {
			                 return {
			                     label: item.email,
			                     value: item.email,
			                     idHidden: item.id
			                 }
			             }));
			           }
		       });
		   },

		   select: function (event, ui) {
			   this.value = ui.item.label;
	           $('#idUsuario').val(ui.item.idHidden);
	       }			   
     
		});	


	$('#nombreCliente').autocomplete({
		   source: function( request, response ) {
		       $.ajax({
		           url : 'http://localhost/InmueblesUy/index.php/cliente/autocomplete',
		           type: "POST",
		           dataType: "json",
			         data: {
			            name_startsWith: request.term,
			         },
			          success: function( data ) {
			              response( $.map( data, function( item ) {
			                 return {
			                     label: item.email,
			                     value: item.email,
			                     idHidden: item.id
			                 }
			             }));
			           }
		       });
		   },

		   select: function (event, ui) {
			   this.value = ui.item.label;
	           $('#idCliente').val(ui.item.idHidden);
	       }			   
  
		});		
});
</script>


