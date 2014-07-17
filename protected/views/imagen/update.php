<div style="margin-top:100px; margin-left:40px; text-align: center; margin-bottom: 170px;">
<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Imagen', 'url'=>array('index')),
	array('label'=>'Create Imagen', 'url'=>array('create')),
	array('label'=>'View Imagen', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Imagen', 'url'=>array('admin')),
);
?>

<h1>Imagen #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
<h1><a href="javascript:history.back()">Volver Atrás</a></h1>