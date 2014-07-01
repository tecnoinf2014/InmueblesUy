<?php
/* @var $this DireccionController */
/* @var $model Direccion */

$this->breadcrumbs=array(
	'Direccions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Direccion', 'url'=>array('index')),
	array('label'=>'Create Direccion', 'url'=>array('create')),
	array('label'=>'View Direccion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Direccion', 'url'=>array('admin')),
);
?>

<h1>Update Direccion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>