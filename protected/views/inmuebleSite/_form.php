<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<div class="form" style="margin-left:40px;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inmueble-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model,'estado',CHtml::listData(EstadoInmueble::model()->findAll(), 'id', 'nombre'),array ('prompt'=>'Seleccione...'));?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_inmueble'); ?>
		<?php echo $form->dropDownList($model,'tipo_inmueble',CHtml::listData(TipoInmueble::model()->findAll(), 'id', 'tipo'),array ('prompt'=>'Seleccione...'));?>
		<?php echo $form->error($model,'tipo_inmueble'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion'); ?> Aca un boton que llame iframe, popup
		o algo por el estilo con create direccion, al retornar devolver el id de la direccion,
		
		<?php echo $form->error($model,'direccion'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_contrato'); ?>
		<?php echo $form->dropDownList($model,'tipo_contrato',CHtml::listData(TipoContrato::model()->findAll(), 'id', 'nombre'),array ('prompt'=>'Seleccione...'));?>
		<?php echo $form->error($model,'tipo_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mts2'); ?>
		<?php echo $form->textField($model,'mts2'); ?>
		<?php echo $form->error($model,'mts2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cant_banios'); ?>
		<?php echo $form->textField($model,'cant_banios'); ?>
		<?php echo $form->error($model,'cant_banios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cant_cuartos'); ?>
		<?php echo $form->textField($model,'cant_cuartos'); ?>
		<?php echo $form->error($model,'cant_cuartos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cochera'); ?>
		<?php echo $form->textField($model,'cochera'); ?>
		<?php echo $form->error($model,'cochera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plantas'); ?>
		<?php echo $form->textField($model,'plantas'); ?>
		<?php echo $form->error($model,'plantas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Siguiente'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<!-- <div class="row">
		<?php
		$idDir=new Direccion; 
		$aux = $model->direccion;
		?>

	<?php echo CHtml::button('Modificar Direccion',  array(
	        'submit'=>array('./direccion/update', 'id'=>intval($aux)))); ?>
	</div> -->