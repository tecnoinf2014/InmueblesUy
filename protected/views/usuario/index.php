<?php
/* @var $this UsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Usuarios</h1>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
		'dataProvider'=>$dataProvider,
));

?>
