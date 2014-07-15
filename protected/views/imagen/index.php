<?php
/* @var $this ImagenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imagens',
);

$this->menu=array(
	array('label'=>'Create Imagen', 'url'=>array('create')),
	array('label'=>'Manage Imagen', 'url'=>array('admin')),
);
?>

<h1>Imagens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
