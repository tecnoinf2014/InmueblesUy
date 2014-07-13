
<div style="margin-top:100px; margin-left:40px;">



<?php 
//Script para el onclick en las imagenes

Yii::app()->clientScript->registerScript('search', "
$('.item').click(function(){
  selectedImage = $(this).find('img');
url=$(selectedImage).attr('id');
window.location =url;
    });
");
?>

<div align="center" style="background-color:#1b1b1b">
<?php
$this->widget('bootstrap.widgets.TbCarousel', array(
'slide'=>true,
'displayPrevAndNext'=>true,
'items'=>$arrayloco,
'htmlOptions'=>array('class'=>'slide','style'=>'height:100%; max-width:62%; background-color:transparent;'),
));

 // $model = new Inmueble;
echo $imagenesPreview[0]->inmueble0->descripcion;
foreach ($imagenesPreview as $imagen) {
	$model[] = Inmueble::model()->findByPk($imagen->inmueble0->id);
}
// echo var_dump($model);exit(0);



 ?>

 </div>
<div class="search-form" >
<?php
$model = new Inmueble;
$model=Inmueble::model()->findByPk(15);


$inmMOdel= new Imagen;
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'inmueble-grid',
	'dataProvider'=>$DataProvider,
	'filter'=>$inmMOdel,
	'columns'=>array(
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
		'id',
		'inmueble0.descripcion',
		'inmueble0.direccion0.calle',
		'inmueble0.direccion0.nro_puerta',
		'inmueble0.tipoInmueble.tipo',
		array(
			'name'=>'is_preview', 
			'type'=>'raw',
			'value'=>'CHtml::label($data->is_preview == 1 ? "Es Portada" : "No es Portada", "$data->is_preview");',
		),
		/*array(
			'name'=>'foto.Foto', 
			'type'=>'raw',
			'value'=>'CHtml::image(Yii::app()->controller->createUrl("imagen/loadImage", array("id"=>$data->id, "style" => "width : 20px ;height  10px;"))

								);',
		),*/
		array(
			'name'=>'boton.PortadaManager',
			'type'=>'raw',
			'value'=>'CHtml::button("Agregar/Quitar",
    array(
        "submit"=>array("imagen/changeIsPreview","id"=>$data->id),
        "confirm" => "Esta seguro?"
        )
);',
		),

		/*'descripcion',
		'tipoInmueble.tipo',
		'direccion0.calle',
		'direccion0.nro_puerta',
		'tipoContrato.nombre',*/
		/*
		'precio',
		'mts2',
		'cant_banios',
		'cant_cuartos';,
		'cochera',
		'plantas',
		*/
		
	),
));

// $this->renderPartial('../inmueble/_search',array('model'=>$model));

 ?>
</div> 
</div>