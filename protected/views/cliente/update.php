<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Ver Cliente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cliente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>