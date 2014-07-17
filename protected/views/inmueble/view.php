<div style="margin-top:100px; margin-left:40px;">

	<?php
	/* @var $this InmuebleController */
	/* @var $model Inmueble */

	$this->breadcrumbs=array(
		'Inmuebles'=>array('index'),
		$model->id,
	);
$bandera=false;
	$this->menu=array(
		array('label'=>'Lista de Inmueble', 'url'=>array('index')),
		array('label'=>'Crear Inmueble', 'url'=>array('create')),
		array('label'=>'Actualizar Inmueble', 'url'=>array('update', 'id'=>$model->id,'bandera'=>$bandera)),
		array('label'=>'Borrar Inmueble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro/a que deseas borrar este inmueble?')),
		array('label'=>'Admisitrar Inmuebles', 'url'=>array('admin')),
	);
	?>

	<h1>Inmueble #<?php echo $model->id; ?></h1>

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
	
	<div class="row buttons" style="text-align: center;">
		<?php echo "¿Desea reservar el Inmueble ? ";echo CHtml::button('Reservar',array('submit' => array('inmueble/comprar', 'id'=>$model->id))); ?>
	</div>
	
	
	

</div>