<?php
/* @var $this TransaccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaccions',
);

$this->menu=array(
	array('label'=>'Create Transaccion', 'url'=>array('create')),
	array('label'=>'Manage Transaccion', 'url'=>array('admin')),
);
?>

<h1>Transaccions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
