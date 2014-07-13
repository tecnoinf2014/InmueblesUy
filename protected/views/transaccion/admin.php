<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */

$this->breadcrumbs=array(
	'Transacción'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Crear Transacción', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#transaccion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Transacciones</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transaccion-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		array('name'=>'cliCompra',
		'header'=>'Comprador',
		'value'=>'$data->cliCompra->nombre',
		),
		array('name'=>'cliVenta',
				'header'=>'Vendedor',
				'value'=>'$data->cliVenta->nombre',
		),
		'inmueble0.descripcion',
		'tipoContrato.nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

