<div style=" margin-left:40px; margin-top:40px;">
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

<h1>Create Imagen</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>