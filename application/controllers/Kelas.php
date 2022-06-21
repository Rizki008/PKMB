<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_program');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Kelas',
			'kelas' => $this->m_program->kelas(),

			'program' => $this->m_program->program_pkmb(),
			'isi' => 'layout/backend/kelas/v_kelas'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
}
