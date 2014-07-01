<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contacto',
);
?>

<h1>Cont&aacute;ctenossssssssssssssssssssssssssssssssssssss</h1>

	<div class="form-horizontal">
	
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'contact-form',
		'enableClientValidation'=>false,
		'enableAjaxValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
		
		<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>
		
	<?php echo $form->errorSummary($model, null, null, array("class"=>"alert alert-error")); ?>
	
		<div class="well">
			<h4>Acci&oacute;n a Realizar</h4>
			<hr>
			
<!-- 			<div class="control-group"> -->
				<?php //echo $form->labelEx($model,'accionUsuario'); ?>
				<?php //echo $form->radioButtonList($model, 'accionUsuario', 
//  															array('c'=>'Consultar Inmueble 2','p'=>'Publicar Inmueble'),
//  															array('class' => 'radio')); ?>
<!-- 		  </div>	 -->
	
	<div >	
		<div class="well">		
			<h4>Datos Personales</h4>
			<hr>
			
			<div class="control-group">
				<?php echo $form->labelEx($model,'ci', array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'ci', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'ci'); ?>
			</div>
			
			<div class="control-group">
				<?php echo $form->labelEx($model,'nombre', array('class'=>'control-label label-form')); ?>
				<?php echo $form->textField($model,'nombre'); ?>
				<?php echo $form->error($model,'nombre'); ?>
			</div>
			
			<div class="control-group">
				<?php echo $form->labelEx($model,'apellido', array('class'=>'control-label label-form')); ?>
				<?php echo $form->textField($model,'apellido'); ?>
				<?php echo $form->error($model,'apellido'); ?>
			</div>
			
			<div class="control-group">
				<?php echo $form->labelEx($model,'email', array('class'=>'control-label label-form'))?>
				<?php echo $form->textField($model,'email'); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>		
		
			<div class="control-group">
				<?php echo $form->labelEx($model,'telefono',array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'telefono'); ?>
				<?php echo $form->error($model,'telefono'); ?>
			</div>
		
			<div class="control-group">
				<?php echo $form->labelEx($model,'comentario', array('class'=>'control-label label-form')); ?>
				<?php echo $form->textArea($model,'comentario', array('rows' => '5')); ?>
				<?php echo $form->error($model,'comentario'); ?>
			</div>	
		</div>		
	</div>
	
	<div id="divPublicar" class="well">
		<h4>Datos del Inmueble</h4>

			<div class="control-group">
				<?php echo $form->labelEx($model,'tipo', array('class'=>'control-label label-form')); ?>
				<?php echo $form->dropDownList($model, 'tipo', $this->getDisplayTipoInmuebles()); ?>
				<?php echo $form->error($model,'tipo'); ?>
			</div>		

			<div class="control-group">
				<?php echo $form->labelEx($model,'contrato', array('class'=>'control-label label-form')); ?>
				<?php echo $form->dropDownList($model, 'contrato', $this->getDisplayTipoContratoInmueble()); ?>
				<?php echo $form->error($model,'contrato'); ?>
			</div>			

			<div class="control-group">
				<?php echo $form->labelEx($model,'habitaciones', array('class'=>'control-label label-form')); ?>
				<?php echo $form->dropDownList($model, 'habitaciones', $this->getDisplayOptions(), array('empty'=>'')); ?>
				<?php echo $form->error($model,'habitaciones'); ?>
			</div>			

			<div class="control-group">
				<?php echo $form->labelEx($model,'banios', array('class'=>'control-label label-form')); ?>
				<?php echo $form->dropDownList($model, 'banios', $this->getDisplayOptions(), array('empty'=>'')); ?>
				<?php echo $form->error($model,'banios'); ?>
			</div>			

			<div class="control-group">
				<?php echo $form->labelEx($model,'plantas', array('class'=>'control-label label-form')); ?>
				<?php echo $form->dropDownList($model, 'plantas', $this->getDisplayOptions(), array('empty'=>'')); ?>
				<?php echo $form->error($model,'plantas'); ?>
			</div>			

			<div class="control-group">
				<?php echo $form->labelEx($model,'mtsCuadrados',array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'mtsCuadrados', array('class'=> 'span1')); ?>
				<?php echo $form->error($model,'mtsCuadrados'); ?>
			</div>			

			<div class="control-group">
				<?php echo $form->labelEx($model,'precio',array('class'=>'control-label label-form')); ?>
				<?php echo $form->numberField($model,'precio', array('class'=> 'span1')); ?>
				<?php echo $form->error($model,'precio'); ?>
			</div>			

			<div class="control-group">
				<?php echo $form->labelEx($model,'garage',array('class'=>'control-label label-form')); ?>
				<?php echo $form->checkBox($model,'garage'); ?>
				<?php echo $form->error($model,'garage'); ?>
			</div>			

			<div class="control-group">
				<?php echo $form->labelEx($model,'descripcionInmueble', array('class'=>'control-label label-form')); ?>
				<?php echo $form->textArea($model,'descripcionInmueble'); ?>
				<?php echo $form->error($model,'descripcionInmueble'); ?>
			</div>			
			
			<h5>Direcci&oacuten del Inmueble</h5>
				<div class="row">
					<div class="span9">
						<div class="control-group">
							<?php echo $form->labelEx($model,'calle', array('class'=>'control-label label-form'))?>
							<?php echo $form->textField($model,'calle'); ?>
							<?php echo $form->error($model,'calle'); ?>
						</div>		
			
						<div class="control-group">
							<?php echo $form->labelEx($model,'nroPuerta', array('class'=>'control-label label-form'))?>
							<?php echo $form->numberField($model,'nroPuerta', array('class'=> 'span1')); ?>
							<?php echo $form->error($model,'nroPuerta'); ?>
						</div>			
			
						<div class="control-group">
							<?php echo $form->labelEx($model,'apto', array('class'=>'control-label label-form'))?>
							<?php echo $form->numberField($model,'apto', array('class'=> 'span1')); ?>
							<?php echo $form->error($model,'apto'); ?>
						</div>
					</div>							
				</div>
			
				<div class="row">
					<div class="span9">
						<div class="control-group">
							<?php echo $form->labelEx($model,'depto', array('class'=>'control-label label-form')); ?>
							<?php echo $form->dropDownList($model, 'depto', $this->getDisplayDeptos()); ?>
							<?php echo $form->error($model,'depto'); ?>
						</div>		
						<div class="control-group">
							<?php echo $form->labelEx($model,'barrio', array('class'=>'control-label label-form'))?>
							<?php echo $form->textField($model,'barrio'); ?>
							<?php echo $form->error($model,'barrio'); ?>
						</div>			
					</div>
				</div>			
	</div>

		<div id="divConsultar" class="well">
			<h4>Seleccione el Inmueble</h4>				
		</div>		
		<?php echo CHtml::submitButton('Enviar',array("class"=>"btn btn-primary")); ?>
	</div>
	
<?php $this->endWidget(); ?>
</div>

<script type="text/javascript">
<!--
	var showTipoAccion = function(){
	
		$("#divPublicar").hide();
		$("#divConsultar").hide();	
		
		if ($('input[name=accion]:checked').val() == "p"){
			$("#divPublicar").show();
		}
		
		if ($('input[name=accion]:checked').val() == "c"){
			$("#divConsultar").show();
		}
	};

	
	$(function(){
		showTipoAccion();
		$("input[name=accion]").on("click", showTipoAccion);
	});
//-->
</script>
