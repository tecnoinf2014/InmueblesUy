<?php
/* @var $this HipotecaController */

$this->breadcrumbs=array(
	'Hipoteca',
);

$this->pageTitle=Yii::app()->name . ' - Calculadora';
$this->breadcrumbs=array(
		'Calculadora',
);
?>

<h2>Servicio de Finanzas</h2>

<div class="form-horizontal">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'contact-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
<div class="span5">
	<div class="well">

		<h5>Pago de Arrendamiento Menusal</h5>
		<hr>
			<div class="control-group">
				<?php echo $form->labelEx($model,'loanAmount', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'loanAmount_pam', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'loanAmount_pam'); ?>
			</div>		
			
			<div class="control-group">
				<?php echo $form->labelEx($model,'residualValue', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'residualValue_pam'); ?>
				<?php echo $form->error($model,'residualValue_pam'); ?>
			</div>
			
			<div class="control-group">
				<?php echo $form->labelEx($model,'interesRate', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'interesRate_pam'); ?>
				<?php echo $form->error($model,'interesRate_pam'); ?>
			</div>
			
			<div class="control-group">
				<?php echo $form->labelEx($model,'months', array('class'=>'control-label label-form'))?>
				<?php echo $form->numberField($model,'months_pam'); ?>
				<?php echo $form->error($model,'months_pam'); ?>
			</div>				
			<div class="control-group">
				<div class="span5">
					<?php echo CHtml::button('Calcular',array ("id"=>"btn_pam", "class"=>"btn btn-primary")); ?>
				</div>
				<div class="control-group success">
					<input type="text" readonly="readonly" id="res_pam" class="" >
				</div>						
			</div>					
	</div>
</div>	

<div class="span5">
	<div class="well">
		<h5>Tasa de Porcentaje Anual</h5>
		<hr>
			<div class="control-group">
				<?php echo $form->labelEx($model,'loanAmount', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'loanAmount_tpa', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'loanAmount_tpa'); ?>
			</div>	
			<div class="control-group">
				<?php echo $form->labelEx($model,'extraCost', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'extraCost_tpa'); ?>
				<?php echo $form->error($model,'extraCost_tpa'); ?>
			</div>		
			<div class="control-group">
				<?php echo $form->labelEx($model,'interesRate', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'interesRate_tpa'); ?>
				<?php echo $form->error($model,'interesRate_tpa'); ?>
			</div>
			<div class="control-group">
				<?php echo $form->labelEx($model,'months', array('class'=>'control-label label-form'))?>
				<?php echo $form->numberField($model,'months_tpa'); ?>
				<?php echo $form->error($model,'months_tpa'); ?>
			</div>		
			<div class="control-group ">
				<div class="span5">
					<?php echo CHtml::button('Calcular',array("id" => "btn_tpa", "class"=>"btn btn-primary")); ?>	
				</div>
				<div class="control-group success">
					<input type="text" readonly="readonly" id="res_tpa" >
				</div>		
			</div>				
	</div>
</div>

<div class="span5" style="margin-left: 0px;">
	<div class="well">
		<h5>Prestamo de pago mensual</h5>
		<hr>	
			<div class="control-group">
				<?php echo $form->labelEx($model,'loanAmount', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'loanAmount_ppm', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'loanAmount_ppm'); ?>
			</div>	
			<div class="control-group">
				<?php echo $form->labelEx($model,'interesRate', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'interesRate_ppm'); ?>
				<?php echo $form->error($model,'interesRate_ppm'); ?>
			</div>	
			<div class="control-group">
				<?php echo $form->labelEx($model,'months', array('class'=>'control-label label-form'))?>
				<?php echo $form->numberField($model,'months_ppm'); ?>
				<?php echo $form->error($model,'months_ppm'); ?>
			</div>							
			<div class="control-group">
				<div class="span5">
					<?php echo CHtml::button('Calcular',array("id" => "btn_ppm" ,"class"=>"btn btn-primary")); ?>
				</div>
				<div class="control-group success">
					<input type="text" readonly="readonly" id="res_ppm" class="" >
				</div>						
			</div>		
	</div>
</div>

<div class="span5">
	<div class="well">
		<h5>Prestamo numero de pago</h5>
		<hr>	
			<div class="control-group">
				<?php echo $form->labelEx($model,'loanAmount', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'loanAmount_pnp', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'loanAmount_pnp'); ?>
			</div>	
			
			<div class="control-group">
				<?php echo $form->labelEx($model,'interesRate', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'interesRate_pnp'); ?>
				<?php echo $form->error($model,'interesRate_pnp'); ?>
			</div>
			<div class="control-group">
				<?php echo $form->labelEx($model,'monthlyPayment', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'monthlyPayment_pnp'); ?>
				<?php echo $form->error($model,'monthlyPayment_pnp'); ?>
			</div>							
			<div class="control-group">
				<div class="span5">
					<?php echo CHtml::button('Calcular',array("id" => "btn_pnp" ,"class"=>"btn btn-primary")); ?>
				</div>
				<div class="control-group success">
					<input type="text" readonly="readonly" id="res_pnp" class="" >
				</div>						
			</div>		
	</div>
</div>	
	<?php $this->endWidget(); ?>

</div>

<script>
	$(function(){

		$("#btn_pam").click(function(){
			var params =  {
					  monto: $("#HipotecaForm_loanAmount_pam").val(),
					  residual: $("#HipotecaForm_residualValue_pam").val(),
					  interest: $("#HipotecaForm_interesRate_pam").val(),
					  months: $("#HipotecaForm_months_pam").val()
			};
				
			ejecutarOperacion("calcularLeaseMonthlyPayment", params);
		});

		$("#btn_tpa").click(function(){
			var params =  {
					  monto: $("#HipotecaForm_loanAmount_tpa").val(),
					  extraCost: $("#HipotecaForm_extraCost_tpa").val(),
					  interest: $("#HipotecaForm_interesRate_tpa").val(),
					  months: $("#HipotecaForm_months_tpa").val()
			};
				
			ejecutarOperacion("calcularAPR", params);
		});

		$("#btn_ppm").click(function(){
			var params =  {
					  monto: $("#HipotecaForm_loanAmount_ppm").val(),
					  interest: $("#HipotecaForm_interesRate_ppm").val(),
					  months: $("#HipotecaForm_months_ppm").val()
			};
				
			ejecutarOperacion("calcularLoanMonthlyPayment", params);
		});


		$("#btn_pnp").click(function(){
			var params =  {
					  monto: $("#HipotecaForm_loanAmount_pnp").val(),
					  interest: $("#HipotecaForm_interesRate_pnp").val(),
					  monthlyPay: $("#HipotecaForm_monthlyPayment_pnp").val()
			};
				
			ejecutarOperacion("calcularLoanNumberOfPayment", params);
		});		
		
	});

	function datos_callback(ajaxResponse)
	{
		var tipo = ajaxResponse.split("_")[0];
		var val = ajaxResponse.split("_")[1];
		
		if (tipo == "pam"){
			$("#res_pam").val(val);
		}
		else if (tipo == "tpa"){
			$("#res_tpa").val(val);
		}
		else if (tipo == "ppm"){
			$("#res_ppm").val(val);
		}
		else if (tipo == "pnp"){
			$("#res_pnp").val(val);
		}
	}
	
	function ejecutarOperacion(op, params)
	{
		$.ajax({
			type: "POST",
			dataType: "text",
			url: "http://localhost/InmueblesUy/index.php/hipoteca/" + op,
			data:{ 
				    monto : params.monto,
				    interest : params.interest,
				    months : params.months,
				    extraCost: params.extraCost,
				    residualVal: params.residual,
				    monthlyPay: params.monthlyPay
				    
				   },
			success: datos_callback
			});		
	}	
	
</script>


