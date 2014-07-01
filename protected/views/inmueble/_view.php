<?php
/* @var $this InmuebleController */
/* @var $data Inmueble */
?>

<div class="view" style="margin-left:40px;">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_inmueble')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_inmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mts2')); ?>:</b>
	<?php echo CHtml::encode($data->mts2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cant_banios')); ?>:</b>
	<?php echo CHtml::encode($data->cant_banios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cant_cuartos')); ?>:</b>
	<?php echo CHtml::encode($data->cant_cuartos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cochera')); ?>:</b>
	<?php echo CHtml::encode($data->cochera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plantas')); ?>:</b>
	<?php echo CHtml::encode($data->plantas); ?>
	<br />

	*/ ?>

</div>