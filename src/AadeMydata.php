<?php

namespace Gkalmoukis\AadeMydata;

use GuzzleHttp\Client;


class AadeMydata
{
    protected $client;

	public function __construct()
	{
		$this->client = new Client([
            "base_uri" => config('test.base_uri'),
            "timeout" => 3,
            "headers" => [
                "aade-user-id" => config('test.aade_user_id'),
                "Ocp-Apim-Subscription-Key" => config('test.ocp_apim_subscription_key')
            ]
        ]);
	}

    
    
    
    public function sendInvoices()
	{
		
	}
    public function SendIncomeClassification(){

    }

	public function requestDocs()
	{
        try {
            $response = $this->client->request('GET', '/RequestDocs', [
                'query' => [
                    "mark" => '{mark}',
                    "subscription-key" =>  config('test.ocp_apim_subscription_key')
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
            dump($response);
			return json_decode($response);
		}
		
		return [];
	}
}