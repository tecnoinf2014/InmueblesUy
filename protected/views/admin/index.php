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
			 
			  </div>
			</div>
			</div><!-- /.span4 fdsafds-->
		</div><!-- /.row -->		
	</div>
</section>

<script type="text/javascript">

<?php if(Yii::app()->user->isGuest){?>

		
		 $(document).ready(function(){
			
			 $('#logindiv').show();
			 
		});

<?php }else{?>
		 
	$(document).ready(function(){
		 $('#logindiv').hide();
	});
	
		 
<?php }?>
</script>

