<div style="margin-top:100px; margin-left:40px;text-align: center;">

	<?php
	/* @var $this InmuebleController */
	/* @var $model Inmueble */

	$this->breadcrumbs=array(
		'Inmuebles'=>array('index'),
		$model->id=>array('view','id'=>$model->id),
		'Update',
	);

	$this->menu=array(
// 		array('label'=>'Lista Inmueble', 'url'=>array('index')),
		array('label'=>'Crear Inmueble', 'url'=>array('create')),
		array('label'=>'Ver Inmueble', 'url'=>array('view', 'id'=>$model->id)),
		array('label'=>'Adminstrar Inmuebles', 'url'=>array('admin')),
	);
	?>

	<h1>Inmueble #<?php echo $model->id; ?></h1>

	<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>