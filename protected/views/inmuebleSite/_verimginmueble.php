
<div align="center" style="background-color:#1b1b1b">
<h1 style="color: #D7DBD9;">Imágenes del Inmueble #<?php echo $id;?></h1>
<?php
	$this->widget('bootstrap.widgets.TbCarousel', array(
	'slide'=>true,
	'displayPrevAndNext'=>true,
	'items'=>$arrayimg,
	'htmlOptions'=>array('class'=>'slide','style'=>'height:100%; max-width:100%; background-color:transparent;margin-bottom: 95px;
    margin-top: 60px;'),
	));
?>
</div>
<h1><a href="javascript:history.back()">Volver Atrás</a></h1> 