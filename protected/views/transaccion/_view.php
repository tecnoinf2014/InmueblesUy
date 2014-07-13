<?php
/* @var $this TransaccionController */
/* @var $data Transaccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_compra')); ?>:</b>
	<?php echo CHtml::encode($data->cli_compra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_venta')); ?>:</b>
	<?php echo CHtml::encode($data->cli_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inmueble')); ?>:</b>
	<?php echo CHtml::encode($data->inmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_contrato); ?>
	<br />


</div>