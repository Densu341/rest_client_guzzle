<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penerbangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penerbangan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Penerbangan';
        $data['penerbangan'] = $this->Penerbangan_model->getAllPenerbangan();
        $data['penumpang'] = $this->Penerbangan_model->getAllPenumpang();
        $this->load->view('templates/header', $data);
        $this->load->view('penerbangan/index', $data);
        $this->load->view('templates/footer');
    }
}
