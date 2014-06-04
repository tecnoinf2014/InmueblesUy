<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Error <?php  echo $error['code']; ?></h2>

<h3>Request <? echo $request; ?></h3>

<!-- <div class="error"> -->
 <?php //echo CHtml::encode($message); ?>
<!-- </div> -->