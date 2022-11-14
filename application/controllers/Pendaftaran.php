<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pendaftaran');
		$this->load->model('m_peminatan');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Pendaftar Baru',
			'pendaftaran' => $this->m_pendaftaran->pendaftaran(),
			'total_pendaftar' => $this->m_pendaftaran->total_pendaftar(),
			'isi' => 'layout/backend/pendaftaran/v_pendaftaran'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	public function yayasan()
	{
		$data = array(
			'title' => 'Data Pendaftar Baru',
			'pendaftaran' => $this->m_pendaftaran->pendaftaran_yayasan(),
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
		$this->form_validation->set_rules('paket', 'Kejar Paket', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('pendidikan', 'Pendidikan Sebelumnya', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/syarat';
			$config['allowed_types'] = 'pdf';
			$config['max_size']  = '5000';
			$this->upload->initialize($config);
			$field_name = "ijazah";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Pendaftaran Peserta PKBM',
					'peminatan' => $this->m_peminatan->peminatan_pkmb(),
					'isi' => 'layout/frontend/pendaftaran/v_pendaftaran'
				);
				$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/syarat/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_warga' => $this->session->userdata('id_warga'),
					'id_peminatan' => $this->input->post('id_peminatan'),
					'tempat_lahir' => $this->input->post('tempat_lahir'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'tgl_daftar' => date('Y-m-d'),
					'agama' => $this->input->post('agama'),
					'desa' => $this->input->post('desa'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kabupaten' => $this->input->post('kabupaten'),
					'pindahan' => $this->input->post('pindahan'),
					'thn_lulus' => $this->input->post('thn_lulus'),
					'paket' => $this->input->post('paket'),
					'pendidikan' => $this->input->post('pendidikan'),
					'tgl_terima' => $this->input->post('tgl_terima'),
					'alasan_diterima' => $this->input->post('alasan_diterima'),
					'ijazah' => $upload_data['uploads']['file_name'],
					'akteu' => $upload_data['uploads']['file_name'],
					'nilai_raport' => $upload_data['uploads']['file_name'],
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
		$data = array(
			'title' => 'Pendaftaran Peserta PKBM',
			'peminatan' => $this->m_peminatan->peminatan_pkmb(),
			'isi' => 'layout/frontend/pendaftaran/v_pendaftaran'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
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
			'alasan_diterima' => $this->input->post('alasan_diterima'),
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
			'isi' => 'layout/backend/dataterima/v_ditolak'
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
			'isi' => 'layout/yayasan/dataterima/v_ditolak'
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
}
