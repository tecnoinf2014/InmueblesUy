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
							array('label'=>'Imuebles', 'url'=>array('/inmueble/index')
								,
                        'linkOptions'=> array(
                            'class' => 'dropdown-toggle',
                            'data-toggle' => 'dropdown',
                            ),
                        'itemOptions' => array('class'=>'dropdown user'),
                        'items' => array(
                        	array(
                                'label' => '<i class="icon-plus-sign"></i> Crear Inmueble',
                                'url' => array('/direccion/create')
                            ),
                            array(
                                'label' => '<i class="icon-briefcase"></i> Administrar Inmuebles',
                                'url' => array('/inmueble/admin')
                            ),
                            /*array(
                                'label' => '<i class="icon-user"></i> My Profile',
                                'url' => '#'
                            ),
                            array(
                                'label' => '<i class="icon-calendar"></i> My Calendar',
                                'url' => '#',
                            ),
                            array(
                                'label' => '<i class="icon-tasks"></i> My Tasks</a>',
                                'url' => '#',
                            ),
                            array(
                                'label' => '',
                                array(
                                    'class' => 'divider',
                                )
                            ),
                            array(
                                'label' => '<i class="icon-key"></i> Log Out',
                                'url' => array('site/logout'),
                            ),*/
                        )
                    
								),
							array('label'=>'Clientes', 'url'=>array('/cliente/index')),
							array('label'=>'Empleados', 'url'=>array('/usuario/index')),
							array('label'=>'Portada', 'url'=>array('/admin/portada')),
							array('label'=>'Portada', 'url'=>array('/admin/calendario')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
// 							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest), solo para /admin
// 							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest) /admin
						),
							
'encodeLabel' => false,
                'htmlOptions' => array('class'=> 'nav navbar-nav'),
                'submenuHtmlOptions' => array(
                    'class' => 'dropdown-menu',
                )
            ));


				//		'htmlOptions' => array('class'=> 'nav navbar-nav'),
					//));
					 ?>
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
