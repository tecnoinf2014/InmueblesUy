<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/mainAdmin'); ?>
<div class="container" style="margin-top:50px;">
	<div class="row-fluid">
		<div class="span12">
			<?php
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'nav nav-pills pull-right'),
				));
			?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $content; ?>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>