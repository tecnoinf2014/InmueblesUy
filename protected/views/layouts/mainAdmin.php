<?php /* @var $this Controller */ ?>
<!DOCTYPE">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<?php 
		echo Yii::app()->bootstrap->registerAllCss();
		echo Yii::app()->bootstrap->registerCoreScripts();
		
	?>
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="brand" href="<?php echo "admin"?>">
					<?php echo CHtml::encode(Yii::app()->name); ?>
				</a>
				
				<div class="nav-collapse collapse">
					<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/admin/index')),
							array('label'=>'Imuebles', 'url'=>array('/admin/inmuebles')),
							array('label'=>'Clientes', 'url'=>array('/admin/clientes')),
							array('label'=>'Empleados', 'url'=>array('/admin/empleados')),
							array('label'=>'Portada', 'url'=>array('/admin/portada')),
							array('label'=>'Portada', 'url'=>array('/admin/calendario')),
							array('label'=>'Cerrar Sesion', 'url'=>array('/admin/logout'),'visible'=>!Yii::app()->user->getState('estadousuario')==NULL),
						),

						'htmlOptions' => array('class'=> 'nav navbar-nav'),
					)); ?>
				</div>	
			</div>	
		</div>			
	</div><!-- mainmenu -->
	
	<?php echo $content; ?>	
	
	<footer>
			Copyright &copy; <?php echo date('Y'); ?> by codeforfood.uy<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>	
	</footer>
	
</body>
</html>
