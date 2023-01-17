<?php

use GuzzleHttp\Client;

class Penerbangan_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/restfull_api/',
            'auth' => ['admin', '1234']
        ]);
    }

    public function getAllPenerbangan()
    {
        $response = $this->_client->request('GET', 'penerbangan', [
            'query' => [
                'deni-key' => 'deni123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getAllPenumpang()
    {
        $response = $this->_client->request('GET', 'penumpang', [
            'query' => [
                'deni-key' => 'deni123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
