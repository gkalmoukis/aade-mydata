<?php

namespace Gkalmoukis\AadeMydata;

use GuzzleHttp\Client;


class AadeMydata
{
    protected $client;

	public function __construct()
	{
		$this->client = new Client([
            "base_uri" => config('mydata.base_uri'),
            "timeout" => 3,
            "headers" => [
                "aade-user-id" => config('mydata.aade_user_id'),
                "Ocp-Apim-Subscription-Key" => config('mydata.ocp_apim_subscription_key')
            ]
        ]);
	}

    
    
    
    public function sendInvoices()
	{
		
	}
    public function SendIncomeClassification(){

    }

	public function requestDocs($query)
	{
        try {
            $response = $this->client->request('GET', '/RequestDocs', [
                'query' => [
                    "mark" => '{mark}',
                    "subscription-key" =>  config('mydata.ocp_apim_subscription_key')
                    ]
                ]);
		} catch (\Exception $e) {
            return [];
		}


		return $this->response_handler($response->getBody()->getContents());		
    }
    
    public function SendExpensesClassification(){

    }

    public function CancelInvoice(){

    
    }

    public function RequestTransmittedDocs(){

    }

	public function response_handler($response)
	{
		if ($response) {
			return json_decode($response);
		}
		
		return [];
	}
}