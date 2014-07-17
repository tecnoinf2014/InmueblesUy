<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ci'); ?>
		<?php echo $form->textField($model,'ci',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'rol'); ?>
		
		<?php echo $form->dropDownList($model,'rol', $this->getRolOptions()); ?>
		<?php echo $form->error($model,'rol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->