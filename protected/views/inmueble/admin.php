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

	$auxInmuebles = Inmueble::model()->findAll();
	foreach ($auxInmuebles as $inm) {
	$auxImagens = $inm->imagens;
		foreach ($auxImagens as $imag) 
		{
			if ($imag->is_preview == 1)
			$auxImage[] = $imag;//CHtml::image(Yii::app()->controller->createUrl('/imagen/loadImage', array('id'=>$imag->id)));	
		}
	}

foreach ($auxImage as $auxImageItem) {
	$index = 0;
	$arrayloco[] =array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[0]->id)), 'label'=>'Inmueble 1', 'caption'=>'Favorito 1.','imageOptions' => array('id'=>$auxImage[0]->inmueble));
	$index = $index+1;
}
/*$arrayloco =
array(
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[0]->id)), 'label'=>'Inmueble 1', 'caption'=>'Favorito 1.','imageOptions' => array('id'=>$auxImage[0]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[1]->id)), 'label'=>'Inmueble 2', 'caption'=>'Favorito 2','imageOptions' => array('id'=>$auxImage[1]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[2]->id)), 'label'=>'Inmueble 3', 'caption'=>'Favorito 3','imageOptions' => array('id'=>$auxImage[2]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[3]->id)), 'label'=>'Inmueble 4', 'caption'=>'Favorito 4','imageOptions' => array('id'=>$auxImage[3]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[4]->id)), 'label'=>'Inmueble 5', 'caption'=>'Favorito 5','imageOptions' => array('id'=>$auxImage[4]->inmueble)),
	array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>$auxImage[5]->id)), 'label'=>'Inmueble 6', 'caption'=>'Favorito 6','imageOptions' => array('id'=>$auxImage[5]->inmueble)),
	);
*/
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
			// 'htmlOptions'=>array('style'=>'width: 220px',),
		),
		'id',
		'estado0.nombre',
		'descripcion',
		'tipoInmueble.tipo',
		'direccion0.calle',
		'direccion0.nro_puerta',
		'tipoContrato.nombre',
		array(
		 'name'=>'imagens.Imagen',
            'type'=>'raw',
            //'value'=>'CHtml::image(Yii::app()->controller->createUrl(\'imagen/loadImage\', array(\'id\'=>4)),"",array(\'width\'=>100, \'height\'=>100))',
            //$auxImagens = $data->imagens 
            
			'value'=> "Yii::app()->controller->widget('bootstrap.widgets.TbCarousel', array(
				'slide'=>true,
				'displayPrevAndNext'=>true,
				'items'=>array(

					array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>11)), 'label'=>'Casa', 'caption'=>'casa.',),
					array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>12)), 'label'=>'Casa', 'caption'=>'casita.',)
					,
					
				),'htmlOptions'=>array('class'=>'slide','style'=>'height:40%; width:40%;'),
				),true) ",
			
            //'value'=>'$data->id',
 		),
       
		/*
		'precio',
		'mts2',
		'cant_banios',
		'cant_cuartos',
		'cochera',
		'plantas',
		*/
		
	),
)); ?>
</div>
<?php 

//foreach ($auxImagens as $imag) {
//echo var_dump($imagens);//exit(0);
//	echo CHtml::image(Yii::app()->controller->createUrl('/imagen/loadImage', array('id'=>$imag->id)));	
//}
/*$modelI= new Imagen;
$modelI=Imagen::model()->loadModel($id=3);
//echo var_dump($modelI);exit(0);
//echo CHtml::image(Yii::app()->controller->createUrl('../imagen/loadImage', array('id'=>$modelI->id))); 
echo CHtml::image(Yii::app()->controller->createUrl('/imagen/loadImage', array('id'=>$modelI->id)));

$imagens=Imagen::model()->with('inmueble0')->findByAttributes( array('inmueble'=>17));
//echo var_dump($imagens);exit(0);


$auxInmueble = Inmueble::model()->findByPk(18);
$auxImagens = $auxInmueble->imagens;
//echo var_dump($auxImagens);//exit(0);
foreach ($auxImagens as $imag) {
//echo var_dump($imagens);//exit(0);
	echo CHtml::image(Yii::app()->controller->createUrl('/imagen/loadImage', array('id'=>$imag->id)));	
}*/
$auxImage = array();
$auxInmueble = Inmueble::model()->findByPk(18);
$auxImagens = $auxInmueble->imagens;
foreach ($auxImagens as $imag) {
	$auxImage[] = CHtml::image(Yii::app()->controller->createUrl('/imagen/loadImage', array('id'=>$imag->id)));	
}
  
// $this->widget('bootstrap.widgets.TbCarousel',

  
  
//     $auxImage
//   );

?>

