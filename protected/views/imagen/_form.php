<?php
/* @var $this ImagenController */
/* @var $model Imagen */
/* @var $form CActiveForm */
?>


<?php
$this->widget('bootstrap.widgets.TbCarousel', array(
'slide'=>true,
'displayPrevAndNext'=>true,
'items'=>array(
array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>1)), 'label'=>'First Thumbnail label', 'caption'=>'pelotaaaaaaaaaaaaaaaaa.',),
array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>2)), 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
array('image'=>Yii::app()->controller->createUrl('imagen/loadImage', array('id'=>3)), 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
),'htmlOptions'=>array('class'=>'slide','style'=>'height:300; width:100%; background-color:#FFD700;'),
)); 
?>





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

     

	<div class="row">
		<?php echo $form->labelEx($model,'inmueble'); ?>
		<?php echo $form->textField($model,'inmueble'); ?>
		<?php echo $form->error($model,'inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_preview'); ?>
		<?php echo $form->textField($model,'is_preview'); ?>
		<?php echo $form->error($model,'is_preview'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->