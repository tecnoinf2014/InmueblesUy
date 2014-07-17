<div style="margin-top:100px; margin-left:40px;">
<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->breadcrumbs=array(
	'Imagenes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Lista de Imagenes', 'url'=>array('index')),
	array('label'=>'Crear Imagen', 'url'=>array('create')),
	array('label'=>'Actualizar Imagen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Imagen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de borrar esta Imagen?')),
	array('label'=>'Administrar Imagenes', 'url'=>array('admin')),
);
?>

<h1>Imagen #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'name',
		'img',
		'inmueble',
		'is_preview',
	),
)); ?>
<?php echo CHtml::image(Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$model->id))); ?>
</div>
<h1><a href="javascript:history.back()">Volver Atrás</a></h1>