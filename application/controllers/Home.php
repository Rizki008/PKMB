<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_program');
		$this->load->model('m_pendaftaran');
	}

	public function index()
	{
		$data = array(
			'title' => 'Beranda',
			'program' => $this->m_program->program_pkmb(),
			'isi' => 'v_home'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}
}
