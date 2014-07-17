<?php
/* @var $this InmuebleController */
/* @var $model Transaccion */
/* @var $form CActiveForm */
?>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<div style="margin-top:100px; margin-left:40px; text-align:center;">
		<div class="form" style="margin-bottom: 40px; ">
		
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'transaccion-form',
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// There is a call to performAjaxValidation() commented in generated controller code.
			// See class documentation of CActiveForm for details on this.
			'enableAjaxValidation'=>false,
		)); ?>
		
			<h1>CONTRATO</h>
		
			<?php echo $form->errorSummary($model); ?>
		
			<div class="row">
				<h5>Comprador</h5>
				<?php echo $form->textField($model, 'cli_compra',array('id'=>'clicomprafield'));?>
				<?php echo CHtml::activeHiddenField($model,'cli_compra'); ?>
				<?php echo $form->error($model,'cli_compra'); ?>
			</div>
		
			<div class="row">
				<h5>Vendedor</h5>
				<?php echo $form->textField($model, 'cli_venta',array('id'=>'cliventafield'));?>
				<?php echo CHtml::activeHiddenField($model,'cli_venta'); ?>
				<?php echo $form->error($model,'cli_venta'); ?>
			</div>
			<div class="row">
				<h5>Contrato</h5>
				<?php echo $form->dropDownList($model, 'tipo_contrato', CHtml::listData(TipoContrato::model()->findAll(),'id','nombre'));?>
				<?php echo $form->error($model,'tipo_contrato'); ?>
			</div>
		
			<div class="row buttons">
				<?php echo CHtml::submitButton('Guardar'); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		
		</div><!-- form -->
</div>
<h1><a href="javascript:history.back()">Volver Atrás</a></h1>
<script type="text/javascript">


$('#clicomprafield').autocomplete({
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
		   //id del hidden
        $('#Transaccion_cli_compra').val(ui.item.idHidden);
    }			   

	});	



$('#cliventafield').autocomplete({
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
		   //id del hidden
           $('#Transaccion_cli_venta').val(ui.item.idHidden);
       }			   

	});	




</script>
