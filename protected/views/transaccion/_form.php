<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaccion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_compra'); ?>
		<?php echo $form->dropDownList($model, 'cli_compra', CHtml::listData(Cliente::model()->findAll(),'id','email'));?>
		<?php echo $form->error($model,'cli_compra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_venta'); ?>
		<?php echo $form->dropDownList($model, 'cli_venta', CHtml::listData(Cliente::model()->findAll(),'id','email'));?>
		<?php echo $form->error($model,'cli_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inmueble');  //with('estado0')->findAllByAttributes(array('estado'=>2))?>
		<?php echo $form->dropDownList($model, 'inmueble', CHtml::listData(Inmueble::model()->findAll(array('condition'=>'estado=:parm1 OR estado=:parm2','params'=>array(':parm1'=>1,':parm2'=>2))),'id','descripcion'));?>
		<?php echo $form->error($model,'inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_contrato'); ?>
		<?php echo $form->dropDownList($model, 'tipo_contrato', CHtml::listData(TipoContrato::model()->findAll(),'id','nombre'));?>
		<?php echo $form->error($model,'tipo_contrato'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->