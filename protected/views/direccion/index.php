<?php
/* @var $this DireccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Direccions',
);

$this->menu=array(
	array('label'=>'Create Direccion', 'url'=>array('create')),
	array('label'=>'Manage Direccion', 'url'=>array('admin')),
);
?>

<h1>Direccions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
