<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{

	public function index()
	{
		$this->load->view('desaintemplate/v_home');
	}
	public function project()
	{
		$this->load->view('desaintemplate/v_project');
	}
	public function info()
	{
		$this->load->view('desaintemplate/v_info');
	}
}
