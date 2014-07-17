<div style=" margin-left:40px; margin-top:40px;">
<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Inmueble', 'url'=>array('index')),
	array('label'=>'Administrar Inmueble', 'url'=>array('admin')),
);
?>

<h1>Crear Inmueble</h1>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>