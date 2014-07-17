<div style="margin-top:100px; margin-left:40px;text-align: center;">

	<?php
	/* @var $this InmuebleController */
	/* @var $model Inmueble */
	?>
	<h1>2°PASO</h1>
	<h2>Inmueble #<?php echo $model->id; ?></h2>

	<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
<h1><a href="javascript:history.back()">Volver Atrás</a></h1>