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
		$tahun = $this->input->post('tahun');
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
			'tahun' => $tahun,
			'kelulusan' => $this->m_pendaftaran->lulus_tahunan($tahun),
			'isi' => 'v_admin'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	public function yayasan()
	{
		$tahun = $this->input->post('tahun');
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
			'tahun' => $tahun,
			'kelulusan' => $this->m_pendaftaran->lulus_tahunan($tahun),
			'isi' => 'v_yayasan'
		);
		$this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
	}

	public function lulus_tahunan()
	{
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Data Kelulusan Pertahun',
			'tahun' => $tahun,
			'kelulusan' => $this->m_pendaftaran->lulus_tahunan($tahun),
			'isi' => 'layout/backend/kelulusan/v_lulusan_tahunan'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	public function lulus_tahunan_yayasan()
	{
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Data Kelulusan Pertahun',
			'tahun' => $tahun,
			'kelulusan' => $this->m_pendaftaran->lulus_tahunan($tahun),
			'isi' => 'layout/yayasan/kelulusan/v_lulusan_tahunan'
		);
		$this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
	}
}
