
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
'htmlOptions'=>array('class'=>'slide','style'=>' max-width:90%; background-color:transparent;'),
));

 ?>

 </div>
<div class="search-form" >
<?php



// $inmMOdel= new Imagen;
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'inmueble-grid',
	'dataProvider'=>$DataProvider,
	/*'filter'=>$inmMOdel,*/
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
		array(
			'name'=>'foto.Foto',
			'type'=>'html',
			'value'=>'"<div style=\"width:160px;\">" . CHtml::image(Yii::app()->controller->createUrl("imagen/loadImage", array("id"=>$data->id, "style" => "width : 20px ;height  10px;"))

								. "</div>");',
		),
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

		
	),
));

// $this->renderPartial('../inmueble/_search',array('model'=>$model));

 ?>
</div> 
</div>