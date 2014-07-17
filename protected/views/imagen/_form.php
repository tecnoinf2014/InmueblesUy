<?php
/* @var $this ImagenController */
/* @var $model Imagen */
/* @var $form CActiveForm */
?>
<div style="margin-top:100px; margin-left:40px;text-align: center;margin-bottom: 211px;">
<H2>Subir Foto para el Inmueble</H2>
<div class="form">

	<?php
     $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'imagen-form',
    'enableAjaxValidation'=>false,
    'method'=>'post',
    'type'=>'horizontal',
    'htmlOptions'=>array(
        'enctype'=>'multipart/form-data'
    )
     )); ?>  
 
     <?php echo $form->fileField($model,'img'); ?>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>
<h1><a href="javascript:history.back()">Volver Atrás</a></h1>