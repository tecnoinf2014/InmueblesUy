<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Crear Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>