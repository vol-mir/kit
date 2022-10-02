<?php

namespace App\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HTTPERPService
{
    private $client;

    protected $erpHttp;
    protected $authBasic = [];

    public function __construct($erpIp, $erpPort, $erpUser, $erpPass, HttpClientInterface $client)
    {
        $this->client = $client;
        $this->erpIp = $erpIp;
        $this->authBasic = [
            $erpUser, $erpPass
        ];
        $this->erpHttp = 'http://' . $erpIp . ':' . $erpPort . '/erp/hs';

    }


    public function fetchListPlan()
    {
        $response = $this->client->request(
            'GET',
            $this->erpHttp. '/plans/get_plans',
            [
                'auth_basic' => $this->authBasic,
            ]
        );

        $content = $response->getContent();
        $array = json_decode($content, true);
        return $array;
    }


    public function fetchPlan($number)
    {
        $response = $this->client->request(
            'GET',
            $this->erpHttp . '/plans/get_plan/' . $number,
            [
                'auth_basic' => $this->authBasic,
            ]
        );

        $content = $response->getContent();
        $array = json_decode($content, true);
        return $array;
    }

    public function getRemains($date)
    {
        $response = $this->client->request(
            'GET',
            $this->erpHttp. '/remains/get_remains/' . $date,
            [
                'auth_basic' => $this->authBasic,
            ]
        );

        $content = $response->getContent();
        $array = json_decode($content, true);
        return $array;
    }
   
}
