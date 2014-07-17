<?php

class HipotecaForm extends CFormModel
{
	public $loanAmount_pam;
	public $residualValue_pam;
	public $interesRate_pam;
	public $months_pam;
	
	public $loanAmount_ppm;
	public $interesRate_ppm;
	public $months_ppm;
	
	public $loanAmount_tpa;
	public $extraCost_tpa;
	public $interesRate_tpa;
	public $months_tpa;
	
	public $loanAmount_pnp;
	public $interesRate_pnp;
	public $monthlyPayment_pnp;
	
	
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{ 
		return array();
	}
	
	public function attributeLabels()
	{ 
		return array(
				'loanAmount'=>'Monto del Prestamo',
				'extraCost'=>'Costo Extra',
				'interesRate' => 'Tasa de Interes',
				'months' => 'Meses',
				'residualValue' => 'Valor Residual',
				'monthlyPayment' => 'Pago Mensual'
		);
	}
	
	
	
}