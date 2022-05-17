<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pendaftaran');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Pendaftar Baru',
			'pendaftaran' => $this->m_pendaftaran->pendaftaran(),
			'isi' => 'layout/backend/pendaftaran/v_pendaftaran'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	public function yayasan()
	{
		$data = array(
			'title' => 'Data Pendaftar Baru',
			'pendaftaran' => $this->m_pendaftaran->pendaftaran(),
			'isi' => 'layout/yayasan/pendaftaran/v_pendaftaran'
		);
		$this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
	}

	public function detail_pendaftaran($id_pendaftaran = NULL)
	{
		$data = array(
			'title' => 'Detail Data Warga',
			'pendaftaran' => $this->m_pendaftaran->detail($id_pendaftaran),
			'isi' => 'layout/backend/pendaftaran/v_detail'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function pendaftaran()
	{
		$this->warga_login->proteksi_halaman();
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('agama', 'Agama', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('desa', 'Desa', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('thn_lulus', 'Tahun Lulus', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Pendaftaran Peserta PKMB',
				'isi' => 'layout/frontend/pendaftaran/v_pendaftaran'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_warga' => $this->session->userdata('id_warga'),
				// 'nama_lengkap' => $this->session->userdata('nama_lengkap'),
				// 'no_tlpn' => $this->session->userdata('no_tlpn'),
				// 'jenis_kel' => $this->session->userdata('jenis_kel'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'agama' => $this->input->post('agama'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kabupaten' => $this->input->post('kabupaten'),
				'pindahan' => $this->input->post('pindahan'),
				'thn_lulus' => $this->input->post('thn_lulus'),
				'tgl_terima' => $this->input->post('tgl_terima'),
				'alasan_diterima' => $this->input->post('alasan_diterima'),
				'pindahan' => $this->input->post('pindahan'),
				'status' => 0,
			);
			$this->m_pendaftaran->add($data);

			$last_id = $this->db->insert_id();
			$data_kelas = array(
				'id_pendaftaran' => $last_id,
			);
			$this->db->insert('kelas', $data_kelas);
			$this->session->set_flashdata('pesan', 'Berhasil Daftar');
			redirect('home');
		}
	}

	public function diterima($id_pendaftaran = NULL)
	{
		$data = array(
			'id_pendaftaran' => $id_pendaftaran,
			'tgl_terima' => $this->input->post('tgl_terima'),
			'status' => 1,
			'alasan_diterima' => $this->input->post('alasan_diterima'),
		);
		$this->m_pendaftaran->diterima($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Update');
		redirect('pendaftaran');
	}
	public function kelas($id_kelas = null)
	{
		$data = array(
			'id_kelas' => $id_kelas,
			'kelas' => $this->input->post('kelas'),
		);
		$this->m_pendaftaran->kelas($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Update');
		redirect('pendaftaran/dataterima');
	}

	public function ditolak($id_pendaftaran = NULL)
	{
		$data = array(
			'id_pendaftaran' => $id_pendaftaran,
			'status' => 2,
			'alasan' => $this->input->post('alasan'),
		);
		$this->m_pendaftaran->diterima($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Update');
		redirect('pendaftaran');
	}

	public function dataterima()
	{
		$data = array(
			'title' => "Data Warga Diterima",
			'dataterima' => $this->m_pendaftaran->dataterima(),
			'isi' => 'layout/backend/dataterima/v_diterima'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function datatolak()
	{
		$data = array(
			'title' => "Data Warga Tidak Diterima",
			'dataterima' => $this->m_pendaftaran->datatolak(),
			'isi' => 'layout/backend/dataterima/v_diterima'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function dataterima_yayasan()
	{
		$data = array(
			'title' => "Data Warga Diterima",
			'dataterima' => $this->m_pendaftaran->dataterima(),
			'isi' => 'layout/yayasan/dataterima/v_diterima'
		);
		$this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
	}

	public function datatolak_yayasan()
	{
		$data = array(
			'title' => "Data Warga Tidak Diterima",
			'dataterima' => $this->m_pendaftaran->datatolak(),
			'isi' => 'layout/yayasan/dataterima/v_diterima'
		);
		$this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
	}

	public function notifstatus()
	{
		$data = array(
			'title' => "Data Warga Diterima",
			'pendaftaran' => $this->m_pendaftaran->pendaftaran(),
			'notifterima' => $this->m_pendaftaran->notifterima(),
			'notiftolak' => $this->m_pendaftaran->notiftolak(),
			'isi' => 'layout/frontend/pendaftaran/v_notif'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	// public function notiftolak()
	// {
	// 	$data = array(
	// 		'title' => "Data Warga Tidak Diterima",
	// 		'dataterima' => $this->m_pendaftaran->datatolak(),
	// 		'isi' => 'layout/frontend/dataterima/v_diterima'
	// 	);
	// 	$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	// }
}
