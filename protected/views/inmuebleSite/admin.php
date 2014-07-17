
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
		
$(function(){
	$('.search-form').hide();
});		
		
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
<div align="center" style="background-color:#1b1b1b height:100%; width:100%;" >
<?php
	$this->widget('bootstrap.widgets.TbCarousel', array(
	'slide'=>true,
	'displayPrevAndNext'=>true,
	'items'=>$arrayloco
	,'htmlOptions'=>array('class'=>'slide','style'=>'height:100%; max-width:100%; background-color: #1b1b1b;'),
	));
?>
</div>

<h1 style="text-align: center;"><?php echo CHtml::link('BUSCADOR DE INMUEBLES','#',array('class'=>'search-button')); ?></h1>

<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

</div>

