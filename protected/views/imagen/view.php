<div style="margin-top:100px; margin-left:40px;">
<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Imagen', 'url'=>array('index')),
	array('label'=>'Create Imagen', 'url'=>array('create')),
	array('label'=>'Update Imagen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Imagen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Imagen', 'url'=>array('admin')),
);
?>

<h1>View Imagen #<?php echo $model->id; ?></h1>

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