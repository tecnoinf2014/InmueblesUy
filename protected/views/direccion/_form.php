<?php
/* @var $this DireccionController */
/* @var $model Direccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'direccion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calle'); ?>
		<?php echo $form->textField($model,'calle',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'calle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_puerta'); ?>
		<?php echo $form->textField($model,'nro_puerta',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'nro_puerta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apto'); ?>
		<?php echo $form->textField($model,'apto'); ?>
		<?php echo $form->error($model,'apto'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'coordenadas'); ?>
		<?php echo $form->textField($model,'coordenadas',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'coordenadas'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'departamentos'); ?>
		<?php echo $form->dropDownList($model,'departamentos',CHtml::listData(Departamento::model()->findAll(), 'id', 'nombre'),array ('prompt'=>'Seleccione...'));?>
		<?php echo $form->error($model,'departamentos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
