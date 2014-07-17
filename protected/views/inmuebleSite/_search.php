<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<div class="wide form" style="margin-left:256px;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!-- <div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div> -->
<TABLE BORDER="1"> 
<TR> 
   <TH><?php echo $form->label($model,'tipo_inmueble'); ?></TH> 
   <TH><?php echo $form->label($model,'tipo_contrato'); ?></TH> 
   <TH><?php echo $form->label($model,'cant_banios'); ?></TH> 
</TR> 
<TR> 
   <TD><?php echo $form->dropDownList($model,'tipo_inmueble',CHtml::listData(TipoInmueble::model()->findAll(), 'id', 'tipo'),array ('prompt'=>'Seleccione...'));?></TD> 
   <TD><?php echo $form->dropDownList($model,'tipo_contrato',CHtml::listData(TipoContrato::model()->findAll(), 'id', 'nombre'),array ('prompt'=>'Seleccione...'));?></TD> 
   <TD><?php echo $form->textField($model,'cant_banios'); ?></TD> 
</TR> 
<TR> 
   <TH><?php echo $form->label($model,'cant_cuartos'); ?></TH>
   <TH><?php echo $form->label($model,'cochera'); ?></TH> 
   <TH><?php echo $form->label($model,'plantas'); ?></TH>
</TR>
<TR> 
   <TD><?php echo $form->textField($model,'cant_cuartos'); ?></TD>
   <TD><?php echo $form->textField($model,'cochera'); ?></TD>
   <TD><?php echo $form->textField($model,'plantas'); ?></TD>
</TR>
</TABLE> 
	<!-- <div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_inmueble'); ?>
		<?php echo $form->textField($model,'tipo_inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_contrato'); ?>
		<?php echo $form->textField($model,'tipo_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mts2'); ?>
		<?php echo $form->textField($model,'mts2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cant_banios'); ?>
		<?php echo $form->textField($model,'cant_banios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cant_cuartos'); ?>
		<?php echo $form->textField($model,'cant_cuartos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cochera'); ?>
		<?php echo $form->textField($model,'cochera'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plantas'); ?>
		<?php echo $form->textField($model,'plantas'); ?>
	</div>
 -->
	<div class="big buttons" style="margin-left: 293px;margin-top: 20px;">
		<?php echo CHtml::submitButton('BUSCAR'); ?>
	</div>

<?php $this->endWidget(); ?>

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
		array(
	        'header' => 'Ver Imagenes',
	        'type'=>'raw',
         	'value' => '"<a href=/InmueblesUy/index.php/InmuebleSite/cargarimg/$data->id><img src=/InmueblesUy/images/camera.png></img></a>"',
    	),
		array(
		
		'class'=>'bootstrap.widgets.TbButtonColumn', 'updateButtonIcon'=>'false', 'deleteButtonIcon'=>'false'
		),
	),
)); ?>
