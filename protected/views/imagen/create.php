<div style=" margin-left:40px; margin-top:40px; text-align: center;">
<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Imagen', 'url'=>array('index')),
	array('label'=>'Manage Imagen', 'url'=>array('admin')),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>