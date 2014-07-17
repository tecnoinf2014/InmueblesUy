<?php

class HipotecaController extends Controller
{
	public $layout='//layouts/layoutClient';

	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
				array('allow',  // allow all users to perform 'index' and 'view' actions
						'actions'=>array('index','view'),
						'users'=>array('*'),
				),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions'=>array('calcularLoanMonthlyPayment','calcularLeaseMonthlyPayment','calcularLoanNumberOfPayment','calcularAPR'),
						'users'=>array('*'),
				),
				array('deny',
						'users'=>array('*'),
				),
	
		);
	}	
	
	public function actionIndex()
	{
		$model=new HipotecaForm();

		$this->render('index', array('model'=>$model));
	}
	
	public function actionCalcularLoanMonthlyPayment(){
		
		$amount = $_POST["monto"];
		$interest = $_POST["interest"];
		$months = $_POST["months"];
		
		$res = Yii::app()->consumer->getLoanMonthlyPayment($amount, $interest, $months);
		$loanMonthPay = $res->LoanMonthlyPaymentResult;
		
		echo "ppm_" . $loanMonthPay;
	}
	
	public function actionCalcularLoanNumberOfPayment(){
		
		$amount = $_POST["monto"];
		$interest = $_POST["interest"];
		$months = $_POST["monthlyPay"];
		
		$res = Yii::app()->consumer->getLoanNumberOfPayment($amount, $interest, $months);
		$loanNumber = $res->LoanNumberOfPaymentResult;
		
		echo "pnp_" . $loanNumber;
	}
	
	public function actionCalcularLeaseMonthlyPayment(){
		
		$amount = $_POST["monto"];
		$res_value = $_POST["residualVal"];
		$interest = $_POST["interest"];
		$months = $_POST["months"];
		
		$res = Yii::app()->consumer->getLeaseMonthlyPayment($amount, $res_value, $interest, $months);
		$leaseMonthly = $res->LeaseMonthlyPaymentResult;
		
		echo "pam_" . $leaseMonthly;
	}
	
	public function actionCalcularAPR(){
		
		$amount = $_POST["monto"];
		$extraCost = $_POST["extraCost"];
		$interest = $_POST["interest"];
		$months = $_POST["months"];
		
		$res = Yii::app()->consumer->getAPR($amount, $extraCost, $interest, $months);
		$apr = $res->APRResult;
		
		echo "tpa_" . $apr;
	}
}