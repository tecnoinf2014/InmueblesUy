<?php
/* @var $this CalendarioController */
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery-ui-1.11.0.custom/jquery-ui.js');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/js/jquery-ui-1.11.0.custom/jquery-ui.min.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/frontierCalendar/jquery-frontier-cal-1.3.2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery-qtip/jquery.qtip-1.0.min.js');

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jshashtable/jshashtable-2.1.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/frontierCalendar/jquery-frontier-cal-1.3.2.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/frontierCalendar/calendario.js');
// Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/modals/displayEventoModal.js');

$this->breadcrumbs=array(
	'Calendario',
);
?>
<h1><?php echo 'Calendario' ?></h1>

<div id="toolbar" class="ui-widget-header ui-corner-all" style="padding: 3px; vertical-align: middle; white-space: nowrap; overflow: hidden;">
	<button class="btn btn-small btn-primary" id="BtnPreviousMonth">Anterior</button>
	<button class="btn btn-small btn-primary" id="BtnNextMonth">Siguiente</button>
	&nbsp;&nbsp;&nbsp; Fecha: <input class="datepicker span2" type="text" id="dateSelect" size="20" />
							<span class="add-on"><i class="icon-calendar"></i></span>
	&nbsp;&nbsp;&nbsp;
</div>

<!-- ver calendario.js -->
<div id='calendar'></div>

<br />
<br />

<?php include 'addEvento.php';?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/modals/addEventoModal.js');?>


<script type="text/javascript">
	$(function(){


		$('.datepicker').datepicker({
			 format: 'dd/mm/yyyy'
		});
		
		/**
		* Set datepicker to current date
		*/
		$("#dateSelect").datepicker('setDate', new Date());
			/**
			* Use reference to plugin object to a specific year/month
			*/
		$("#dateSelect").bind('change', function() {
			var selectedDate = $("#dateSelect").val();
			var dtArray = selectedDate.split("/");
			var year = dtArray[2];
			// jquery datepicker months start at 1 (1=January)
			var month = dtArray[1];
			// strip any preceeding 0's
			month = month.replace(/^[0]+/g,"")
			var day = dtArray[0];
			// plugin uses 0-based months so we subtrac 1
			jfcalplugin.showMonth("#calendar", year, parseInt(month - 1).toString());
		});
			
		/**
		* Initialize previous month button
		*/
		$("#BtnPreviousMonth").click(function() {
			jfcalplugin.showPreviousMonth("#calendar");
			// update the jqeury datepicker value
			var calDate = jfcalplugin.getCurrentDate("#calendar"); // returns Date object
			var cyear = calDate.getFullYear();
			// Date month 0-based (0=January)
			var cmonth = calDate.getMonth();
			var cday = calDate.getDate();
			// jquery datepicker month starts at 1 (1=January) so we add 1
			$("#dateSelect").datepicker("setDate", cday + "/" + (cmonth + 1) + "/" + cyear);
			return false;
		});
		
		/**
		* Initialize next month button
		*/
		$("#BtnNextMonth").click(function() {
			jfcalplugin.showNextMonth("#calendar");
			// update the jqeury datepicker value
			var calDate = jfcalplugin.getCurrentDate("#calendar"); // returns Date object
			var cyear = calDate.getFullYear();
			// Date month 0-based (0=January)
			var cmonth = calDate.getMonth();
			var cday = calDate.getDate();
			// jquery datepicker month starts at 1 (1=January) so we add 1
			$("#dateSelect").datepicker("setDate", cday + "/" + (cmonth + 1 ) + "/" + cyear);
			return false;
		}); 
	});
</script>