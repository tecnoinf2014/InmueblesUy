<?php
/* @var $this DireccionController */
/* @var $data Direccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrio')); ?>:</b>
	<?php echo CHtml::encode($data->barrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calle')); ?>:</b>
	<?php echo CHtml::encode($data->calle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_puerta')); ?>:</b>
	<?php echo CHtml::encode($data->nro_puerta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apto')); ?>:</b>
	<?php echo CHtml::encode($data->apto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coordenadas')); ?>:</b>
	<?php echo CHtml::encode($data->coordenadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departamentos')); ?>:</b>
	<?php echo CHtml::encode($data->departamentos); ?>
	<br />


</div>