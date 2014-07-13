<div style="margin-top:100px; margin-left:40px;">
<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */


$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Inmueble', 'url'=>array('index')),
	array('label'=>'Create Inmueble', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inmueble-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});

$('.item').click(function(){
  selectedImage = $(this).find('img');
url=$(selectedImage).attr('id');
window.location =url;
    });
");




?>
<div align="center" style="background-color:#1b1b1b">
<?php

	$auxInmuebles = Inmueble::model()->findAll();
	foreach ($auxInmuebles as $inm) {
	$auxImagens = $inm->imagens;
		foreach ($auxImagens as $imag) {
			if ($imag->is_preview == 1)
			$auxImage[] = $imag;//CHtml::image(Yii::app()->controller->createUrl('/imagen/loadImage', array('id'=>$imag->id)));	
		}
	}
$arrayloco=array();
$auxImageItem=array();
foreach ($auxImage as $auxImageItem) {
	
	$arrayloco[] =array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImageItem->id)), 'label'=>'Inmueble', 'caption'=>$auxImageItem->inmueble0->descripcion,'imageOptions' => array('id'=>$auxImageItem->inmueble));
	
}

/*$arrayloco =
array(
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[0]->id)), 'label'=>'Inmueble 1', 'caption'=>'Favorito 1.','imageOptions' => array('id'=>$auxImage[0]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[1]->id)), 'label'=>'Inmueble 2', 'caption'=>'Favorito 2','imageOptions' => array('id'=>$auxImage[1]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[2]->id)), 'label'=>'Inmueble 3', 'caption'=>'Favorito 3','imageOptions' => array('id'=>$auxImage[2]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[3]->id)), 'label'=>'Inmueble 4', 'caption'=>'Favorito 4','imageOptions' => array('id'=>$auxImage[3]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[4]->id)), 'label'=>'Inmueble 5', 'caption'=>'Favorito 5','imageOptions' => array('id'=>$auxImage[4]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[5]->id)), 'label'=>'Inmueble 6', 'caption'=>'Favorito 6','imageOptions' => array('id'=>$auxImage[5]->inmueble)),
	);*/

	$this->widget('bootstrap.widgets.TbCarousel', array(
	'slide'=>true,
	'displayPrevAndNext'=>true,
	'items'=>$arrayloco
	,'htmlOptions'=>array('class'=>'slide','style'=>'height:100%; max-width:65%; background-color:transparent;'),
	));

// echo var_dump($auxImage);exit(0);
?>
</div>

<h1>Busueda Inmuebles (IN WORKING)</h1>

<p>
Puede utilizar operadores opcionales de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) Al principio de sus valores de busqueda para especificar la comparacion a realizar.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'inmueble-grid',
	'type'=>'hover',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'estado0.nombre',
		'descripcion',
		'tipoInmueble.tipo',
		'direccion0.calle',
		'direccion0.nro_puerta',
		'tipoContrato.nombre',
		/*
		'precio',
		'mts2',
		'cant_banios',
		'cant_cuartos',
		'cochera',
		'plantas',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn', 'updateButtonIcon'=>'false', 'deleteButtonIcon'=>'false'
		),
	),
)); ?>
</div>