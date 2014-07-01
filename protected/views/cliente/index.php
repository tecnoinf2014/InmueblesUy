<?php
/* @var $this ClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes',
);

$this->menu=array(
	array('label'=>'Create Cliente', 'url'=>array('create')),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);
?>

<div style=" margin-left:40px; margin-top:40px;">

<h1>Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>