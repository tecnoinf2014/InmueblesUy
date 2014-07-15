<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Transaccion', 'url'=>array('admin')),
);
?>

<h1>Create Transaccion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>