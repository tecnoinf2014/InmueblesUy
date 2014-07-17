<?php
class ConsumerWS extends CApplicationComponent
{
	public $ws_url;
	private $client;
	
	private function createConsumerWS() 
	{
		if($this->client == null)
		{
			// para que reconozca nuevas funciones del WS
			ini_set (  'soap.wsdl_cache_enable'  ,  0  );
			ini_set (  'soap.wsdl_cache_ttl'  ,  0  );
			$this->client = new SoapClient($this->ws_url, array("trace" => true, "exception" => true));
		}
		return $this->client;
	}
	
	public function getLoanMonthlyPayment($LoanAmount, $InterestRate, $Months ) {
		return $this->createConsumerWS()->LoanMonthlyPayment( array("LoanAmount" => $LoanAmount, "InterestRate"=> $InterestRate, "Months"=> $Months) );
	}

	public function getLoanNumberOfPayment($loanAmount, $interestRate, $monthlyPayment ) {
		return $this->createConsumerWS()->LoanNumberOfPayment(array( "LoanAmount" => $loanAmount, "InterestRate"=> $interestRate, "MonthlyPayment"=> $monthlyPayment));
	}
	
	public function getLeaseMonthlyPayment($loanAmount, $residualValue, $interestRate, $months) {
		return $this->createConsumerWS()->LeaseMonthlyPayment( array ( "LoanAmount" => $loanAmount, "ResidualValue"=> $residualValue, "InterestRate" => $interestRate, "Months" => $months ) );
	}
	
	public function getAPR($loanAmount, $extraCost, $interestRate, $months){ 
		return $this->createConsumerWS()->APR( array ( "LoanAmount" => $loanAmount, "ExtraCost" => $extraCost, "InterestRate" => $interestRate, "Months" => $months ) );
	}
	
}