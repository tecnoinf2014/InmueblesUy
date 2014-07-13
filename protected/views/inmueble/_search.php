<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<div class="wide form" style="margin-left:40px;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_inmueble'); ?>
		<?php echo $form->textField($model,'tipo_inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_contrato'); ?>
		<?php echo $form->textField($model,'tipo_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mts2'); ?>
		<?php echo $form->textField($model,'mts2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cant_banios'); ?>
		<?php echo $form->textField($model,'cant_banios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cant_cuartos'); ?>
		<?php echo $form->textField($model,'cant_cuartos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cochera'); ?>
		<?php echo $form->textField($model,'cochera'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plantas'); ?>
		<?php echo $form->textField($model,'plantas'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->