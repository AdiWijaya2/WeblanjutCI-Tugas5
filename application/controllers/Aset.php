<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AsetModel');
    }

    public function index()
    {
        $data['dataaset'] = $this->AsetModel->getAll();
        $this->load->view('crud/index', $data);
    }

    public function tambahaset()
    {
        $this->load->view('crud/tambahaset');
    }
    public function prosestambah()
    {
        $nama_aset = $this->input->post('txtnama');
        $jenis = $this->input->post('txtjenis');
        $lokasi = $this->input->post('txtlokasi');
        $jumlah = $this->input->post('txtjumlah');

        $data_input = [
            'nama_aset' => $nama_aset,
            'jenis' => $jenis,
            'lokasi' => $lokasi,
            'jumlah' => $jumlah,

        ];

        $simpan = $this->AsetModel->tambah($data_input);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat</strong> Data berhasil di tambahkan !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('Aset/index');
    }

    public function hapus_data($id)
    {
        $where = array('id' => $id);
        $this->AsetModel->hapus($where, 'tabel_aset');
        redirect('Aset/index');
    }

    public function project()
    {
        $this->load->view('crud/v_project');
    }
    public function info()
    {
        $this->load->view('crud/v_info');
    }
}
