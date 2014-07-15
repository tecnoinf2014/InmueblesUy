<div style="margin-top:100px; margin-left:40px;">

	<?php
	/* @var $this InmuebleController */
	/* @var $model Inmueble */

	$this->breadcrumbs=array(
		'Inmuebles'=>array('index'),
		$model->id,
	);

	$this->menu=array(
		array('label'=>'List Inmueble', 'url'=>array('index')),
		array('label'=>'Create Inmueble', 'url'=>array('create')),
		array('label'=>'Update Inmueble', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Delete Inmueble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Inmueble', 'url'=>array('admin')),
	);
	?>

	<h1>Ver Inmueble #<?php echo $model->id; ?></h1>

	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'estado0.nombre',
			'descripcion',
			'tipoInmueble.tipo',
			'direccion0.calle',
			'direccion0.nro_puerta',
			'tipoContrato.nombre',
			'precio',
			'mts2',
			'cant_banios',
			'cant_cuartos',
			array(
				'name'=>'cochera',
				'type'=>'raw',
				'value'=>CHtml::label($model->cochera == 1 ? "Si" : "No", "$model->cochera"),
				),

			'plantas',
		),
	)); ?>
	
	<div class="row buttons">
		<?php echo CHtml::button('Reservar',array('submit' => array('inmueble/comprar', 'id'=>$model->id))); ?>
	</div>
	
	
	

</div>