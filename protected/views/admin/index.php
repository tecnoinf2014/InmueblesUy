<?php
/* @var $this AdminController */
?>
<section class="bg-admin pd4">
	
	<div class="container center">
	  <div class="row-fluid">
			<div class="span10" style="margin-top: 5%;">
			<div id="error" style="color: red;">
			<?php echo $model->errormsg;?>
			</div>
			  
			  <div class="container-fluid">
			  <div class="row-fluid">
			   <div class="span3">
			  <div id="logindiv" class="well">
			  
				<?php $form=$this->beginWidget('CActiveForm', array(
				      'id'=>'login-form',
				      'action'=>$this->createUrl("admin/login"),
				      'htmlOptions'=>array("style"=>"text-align: left"),
				      'enableClientValidation'=>true,
				      'clientOptions'=>array(
			          'validateOnSubmit'=>true,
				      ),
				    )); ?>
				      
				     
				      
				    <?php echo $form->labelEx($model,'email'); ?>
				    <?php echo $form->textField($model,'email',array("class"=>"input-block-level","placeholder"=>"Email")); ?>
				    <?php echo $form->error($model,'email'); ?>
				
				    <?php echo $form->labelEx($model,'password'); ?>
				    <?php echo $form->passwordField($model,'password',array("class"=>"input-block-level","placeholder"=>"Password")); ?>
				    <?php echo $form->error($model,'password'); ?>
				  <br>
				    <?php echo $form->checkBox($model,'rememberMe'); ?>
				    <?php echo $form->label($model,'rememberMe'); ?>
				    <?php echo $form->error($model,'rememberMe'); ?>
				
				    <?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary pull-right")); ?>
				<?php $this->endWidget(); ?>			
			  </div>
			</div>
			 <div class="span5">
			  <div id="registrodiv"  class="well">
			  <?php $form2=$this->beginWidget('CActiveForm', array(
				      'id'=>'login-form2',
				      'action'=>$this->createUrl("admin/registro"),
				      'htmlOptions'=>array("style"=>"text-align: left"),
				      'enableClientValidation'=>true,
				      'clientOptions'=>array(
				        'validateOnSubmit'=>true,
				      ),
				    )); ?>
				      
				    <?php echo $form2->labelEx($user,'email'); ?>
				    <?php echo $form2->textField($user,'email',array("class"=>"input-block-level","placeholder"=>"Email")); ?>
				    <?php echo $form2->error($user,'email'); ?>
				
				    <?php echo $form2->labelEx($user,'password'); ?>
				    <?php echo $form2->passwordField($user,'password',array("class"=>"input-block-level","placeholder"=>"Password")); ?>
				    <?php echo $form2->error($user,'password'); ?>
				    
				    <?php echo $form2->labelEx($user,'nombres'); ?>
				    <?php echo $form2->textField($user,'nombres',array("class"=>"input-block-level","placeholder"=>"Nombres")); ?>
				    <?php echo $form2->error($user,'nombres'); ?>
				    
				    <?php echo $form2->labelEx($user,'apellido'); ?>
				    <?php echo $form2->textField($user,'apellido',array("class"=>"input-block-level","placeholder"=>"Apellidos")); ?>
				    <?php echo $form2->error($user,'apellido'); ?>
				    
				    <?php echo $form2->labelEx($user,'ci'); ?>
				    <?php echo $form2->textField($user,'ci',array("class"=>"input-block-level","placeholder"=>"CI")); ?>
				    <?php echo $form2->error($user,'ci'); ?>
				    
				    <?php echo $form2->labelEx($user,'telefono'); ?>
				    <?php echo $form2->textField($user,'telefono',array("class"=>"input-block-level","placeholder"=>"Telefono")); ?>
				    <?php echo $form2->error($user,'telefono'); ?>
				    
				  
				  <br>
				   
				
				    <?php echo CHtml::submitButton('Registro',array("class"=>"btn btn-primary pull-right")); ?>
				<?php $this->endWidget(); ?>

			  </div>
			  </div>
			  </div>
			</div>
			</div><!-- /.span4 fdsafds-->
		</div><!-- /.row -->		
	</div>
</section>

<section class="inverse-bg">
	<div class="container">
		  <div class="row-fluid">
			    <div class="span4">
			      <h4><a href="#contribute">Contribute Icons</a></h4>
			      <p>
			        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodt non
			        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			      </p>
			    </div>
			    <div class="span4">
			      <h4><a href="#" target="_blank">Help me buy an iMac</a></h4>
			      <p>
			      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo.
			      </p>
			    </div>
			    <div class="span4">
			      <h4><a href="#" target="_blank">My Amazon Wish List</a></h4>
			      <p>
			        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			      </p>
			    </div>
		  </div>
	</div>
</section>
<script type="text/javascript">

<?php if(Yii::app()->user->getState('estadousuario')==NULL){?>

		
		 $(document).ready(function(){
			 $('#registrodiv').show();
			 $('#logindiv').show();
			 
		});

<?php }else{?>
		 
	$(document).ready(function(){
		 $('#registrodiv').hide();
		 $('#logindiv').hide();
	});
	
		 
<?php }?>
</script>

