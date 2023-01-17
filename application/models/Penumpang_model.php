<?php

use GuzzleHttp\Client;

class Penumpang_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/restfull_api/',
            'auth' => ['admin', '1234']
        ]);
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

    public function getPenumpangById($id_penumpang)
    {
        $response = $this->_client->request('GET', 'penumpang', [
            'query' => [
                'deni-key' => 'deni123',
                'id_penumpang' => $id_penumpang
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function tambahDataPenumpang()
    {
        $data = [
            'deni-key' => 'deni123',
            'nama' => $this->input->post('nama', true),
            'negara' => $this->input->post('negara', true),
            'passport' => $this->input->post('passport', true)
        ];
        $response = $this->_client->request('POST', 'penumpang', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataPenumpang($id_penumpang)
    {
        $response = $this->_client->request('DELETE', 'penumpang', [
            'form_params' => [
                'deni-key' => 'deni123',
                'id_penumpang' => $id_penumpang
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataPenumpang()
    {
        $data = [
            'deni-key' => 'deni123',
            'id_penumpang' => $this->input->post('id_penumpang', true),
            'nama' => $this->input->post('nama', true),
            'negara' => $this->input->post('negara', true),
            'passport' => $this->input->post('passport', true)
        ];
        $response = $this->_client->request('PUT', 'penumpang', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
