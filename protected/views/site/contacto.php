<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contacto',
);
?>

<h1>Cont&aacute;ctenos</h1>

	<div class="form-horizontal">
	
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'contact-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
		
		<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>
		
	<?php echo $form->errorSummary($model, null, null, array("class"=>"alert alert-error")); ?>
	
		<div class="well">
			<h4>Acci&oacute;n a Realizar</h4>
			<hr>
			
			<div class="control-group">
				<?php //echo $form->labelEx($model,'accion'); ?>
				<?php //echo $form->radioButtonList($model, 'accion', 
// 															array('c'=>'Consultar Inmueble','p'=>'Publicar Inmueble'),
// 															array('class' => 'radio')); ?>
				<div class="radio">
				  <label>
				    <input type="radio" name="accion" id="optionsRadios2" value="p" checked>
				    	Publicar Inmueble
				  </label>				
				</div>				
				<div class="radio">
				  <label>
				    <input type="radio" name="accion" id="optionsRadios1" value="c" >
				    	Consultar Inmueble
				  </label>
				</div>
		 </div>	
	
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
				<?php echo $form->textArea($model,'comentario'); ?>
				<?php echo $form->error($model,'comentario'); ?>
			</div>	
		</div>		
	</div>
	
	<?php $this->endWidget(); ?>
	
	<div id="divPublicar" class="well">
		<h4>Datos del Inmueble</h4>

			<div class="control-group">
				<?php //echo $form->labelEx($model,'tipo', array('class'=>'control-label label-form')); ?>
				<?php //echo $form->dropDownList($model, 'tipo', $data); ?>
				<?php //echo $form->error($model,'tipo'); ?>
			</div>		
		
		
	</div>

	<div id="consultar" class="well">
		<h4>Seleccione el inmueble</h4>
	</div>
	
	
</div>

</div>