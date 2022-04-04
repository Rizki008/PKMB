<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pendaftaran');
	}

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'grafik' => $this->m_pendaftaran->grafik(),
			'grafik_usia' => $this->m_pendaftaran->grafik_usia(),
			'isi' => 'v_admin'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
}
