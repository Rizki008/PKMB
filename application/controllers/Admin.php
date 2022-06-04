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
			'total_pendaftar' => $this->m_pendaftaran->total_pendaftar(),
			'total_warga' => $this->m_pendaftaran->total_warga(),
			'total_kelas' => $this->m_pendaftaran->total_kelas(),
			'total_program' => $this->m_pendaftaran->total_program(),
			'grafik_usia' => $this->m_pendaftaran->grafik_usia(),
			'gafik_genap' => $this->m_pendaftaran->gafik_genap(),
			'gafik_ganjil' => $this->m_pendaftaran->gafik_ganjil(),
			'isi' => 'v_admin'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	public function yayasan()
	{
		$data = array(
			'title' => 'Dashboard',
			'total_pendaftar' => $this->m_pendaftaran->total_pendaftar(),
			'total_warga' => $this->m_pendaftaran->total_warga(),
			'total_kelas' => $this->m_pendaftaran->total_kelas(),
			'total_program' => $this->m_pendaftaran->total_program(),
			'grafik' => $this->m_pendaftaran->grafik(),
			'grafik_usia' => $this->m_pendaftaran->grafik_usia(),
			'gafik_genap' => $this->m_pendaftaran->gafik_genap(),
			'gafik_ganjil' => $this->m_pendaftaran->gafik_ganjil(),
			'isi' => 'v_yayasan'
		);
		$this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
	}
}
