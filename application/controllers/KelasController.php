<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelasController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KelasModel');
    }

    public function index()
    {
        $data['datamahasiswa'] = $this->KelasModel->getAll();
        $this->load->view('tampildata/v_home', $data);
    }

    public function tambahdata()
    {
        $this->load->view('tampildata/v_tambahdata');
    }

    public function project()
    {
        $this->load->view('tampildata/v_project');
    }
    public function info()
    {
        $this->load->view('tampildata/v_info');
    }
}
