<div style="margin-top:100px; margin-left:40px;text-align: center">
	<?php
	/* @var $this DireccionController */
	/* @var $model Direccion */

	$this->breadcrumbs=array(
		'Direccions'=>array('index'),
		$model->id=>array('view','id'=>$model->id),
		'Update',
	);

	$this->menu=array(
		array('label'=>'List Direccion', 'url'=>array('index')),
		array('label'=>'Create Direccion', 'url'=>array('create')),
		array('label'=>'View Direccion', 'url'=>array('view', 'id'=>$model->id)),
		array('label'=>'Manage Direccion', 'url'=>array('admin')),
	);
	?>
	<h1>3°PASO</h1>
	<h2>Verificar Direccion <?php echo $model->id; ?></h2>

	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	 
</div>
<h1><a href="javascript:history.back()">Volver Atrás</a></h1>