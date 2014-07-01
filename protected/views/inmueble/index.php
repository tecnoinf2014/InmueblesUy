<div style="margin-top:100px; margin-left:40px;">
<?php
/* @var $this InmuebleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inmuebles',
);

$this->menu=array(
	array('label'=>'Create Inmueble', 'url'=>array('create')),
	array('label'=>'Manage Inmueble', 'url'=>array('admin')),
);
?>

<h1>Inmuebles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>