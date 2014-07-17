<div style=" margin-left:40px; margin-top:40px;text-align: center;">
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
<h1>1° PASO</h1>
<h2>Ingreso Direccion del Inmueble</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>