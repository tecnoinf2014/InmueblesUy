<div style=" margin-left:40px; margin-top:40px;">
<?php
/* @var $this DireccionController */
/* @var $model Direccion */

$this->breadcrumbs=array(
	'Direccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Direccion', 'url'=>array('index')),
	array('label'=>'Manage Direccion', 'url'=>array('admin')),
);
?>

<h1>Ingreso Direccion del Inmueble</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>