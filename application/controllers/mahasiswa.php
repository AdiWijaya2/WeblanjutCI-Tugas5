<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{

	public function index()
	{
		$this->load->view('v_home');
	}

	public function tambahdata()
	{
		$this->load->view('v_tambahdata');
	}

	public function project()
	{
		$this->load->view('v_project');
	}
	public function info()
	{
		$this->load->view('v_info');
	}
}
