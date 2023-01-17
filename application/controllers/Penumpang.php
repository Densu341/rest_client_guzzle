<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penumpang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penumpang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Penumpang';
        $data['penumpang'] = $this->Penumpang_model->getAllPenumpang();
        if ($this->input->post('keyword')) {
            $data['penumpang'] = $this->Penumpang_model->cariDataPenumpang();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('penumpang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Penumpang';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('negara', 'Negara', 'required');
        $this->form_validation->set_rules('passport', 'Passport', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penumpang/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Penumpang_model->tambahDataPenumpang();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('penumpang');
        }
    }

    public function hapus($id_penumpang)
    {
        $this->Penumpang_model->hapusDataPenumpang($id_penumpang);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('penumpang');
    }

    public function detail($id_penumpang)
    {
        $data['judul'] = 'Detail Data Penumpang';
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id_penumpang);
        $this->load->view('templates/header', $data);
        $this->load->view('penumpang/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_penumpang)
    {
        $data['judul'] = 'Form Ubah Data Penumpang';
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id_penumpang);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('negara', 'Negara', 'required');
        $this->form_validation->set_rules('passport', 'Passport', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Form Ubah Data Penumpang';
            $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id_penumpang);
            $this->load->view('templates/header', $data);
            $this->load->view('penumpang/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penumpang_model->ubahDataPenumpang();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('penumpang');
        }
    }

    // cari
    public function cari()
    {
        $data['judul'] = 'Daftar Penumpang';
        $data['penumpang'] = $this->Penumpang_model->cariDataPenumpang();
        $this->load->view('templates/header', $data);
        $this->load->view('penumpang/cari', $data);
        $this->load->view('templates/footer');
    }
}
