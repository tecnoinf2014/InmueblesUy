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

	<div class="form">
	
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
			
			<div>
				<?php echo $form->labelEx($model,'accion'); ?>
				<?php echo $form->radioButtonList($model, 'accion', array('c'=>'Consultar Inmueble','p'=>'Publicar Inmueble')); ?>
				<?php echo $form->error($model,'accion'); ?>
			</div>		
		</div>		
	
	<div class="span3">	
		<div class="well">		
			<h4>Datos Personales</h4>
			<hr>
			
			<div>
				<?php echo $form->labelEx($model,'ci'); ?>
				<?php echo $form->numberField($model,'ci'); ?>
				<?php echo $form->error($model,'ci'); ?>
			</div>
			
			<div>
				<?php echo $form->labelEx($model,'nombre'); ?>
				<?php echo $form->textField($model,'nombre'); ?>
				<?php echo $form->error($model,'nombre'); ?>
			</div>
			
			<div>
				<?php echo $form->labelEx($model,'apellido'); ?>
				<?php echo $form->textField($model,'apellido'); ?>
				<?php echo $form->error($model,'apellido'); ?>
			</div>
			
			<div>
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email'); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>		
		
			<div>
				<?php echo $form->labelEx($model,'telefono'); ?>
				<?php echo $form->numberField($model,'telefono'); ?>
				<?php echo $form->error($model,'telefono'); ?>
			</div>
		
			<div>
				<?php echo $form->labelEx($model,'comentario'); ?>
				<?php echo $form->textArea($model,'comentario'); ?>
				<?php echo $form->error($model,'comentario'); ?>
			</div>	
		</div>		
	</div>
	
	<?php $this->endWidget(); ?>

</div>