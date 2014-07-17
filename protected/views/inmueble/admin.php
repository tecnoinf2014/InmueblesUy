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
");
?>

<h1>Administrar Inmuebles</h1>

<p>
Puede utilizar operadores opcionales de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) Al principio de sus valores de busqueda para especificar la comparacion a realizar.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
));

 ?>
</div><!-- search-form -->




<?php 

// 	$auxInmuebles = Inmueble::model()->findAll();
// 	foreach ($auxInmuebles as $inm) {
// 	$auxImagens = $inm->imagens;
// 		foreach ($auxImagens as $imag) 
// 		{
// 			if ($imag->is_preview == 1)
// 			$auxImage[] = $imag;	
// 		}
// 	}

// foreach ($auxImage as $auxImageItem) {
// 	$index = 0;
// 	$arrayloco[] =array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[0]->id)), 'label'=>'Inmueble 1', 'caption'=>'Favorito 1.','imageOptions' => array('id'=>$auxImage[0]->inmueble));
// 	$index = $index+1;
// }
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'inmueble-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view} {update} {delete} {add_image}',
			'buttons'=>array(
				'add_image' => array(
					'label'=>'Subir Foto',
					'icon'=>'icon-picture',
					'url'=>'Yii::app()->createUrl("imagen/create", array("id"=>$data->id))',
				),
			),
		),
		'id',
		'estado0.nombre',
		'descripcion',
		'tipoInmueble.tipo',
		'direccion0.calle',
		'direccion0.nro_puerta',
		'tipoContrato.nombre',
		array(
	        'header' => 'Ver Imagenes',
	        'type'=>'raw',
         	'value' => '"<a href=/InmueblesUy/index.php/InmuebleSite/cargarimg/$data->id><img src=/InmueblesUy/images/camera.png></img></a>"',
    	),
		
	),
)); ?>
</div>


