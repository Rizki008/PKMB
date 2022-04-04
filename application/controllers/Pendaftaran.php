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
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('nama_pang', 'Nama Panggilan', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('jenis_kel', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('agama', 'Agama', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('warganegara', 'Kewarga Negaraan', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('rt_rw', 'Rt/Rw', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('desa', 'Desa', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Pendaftaran Peserta PKMB',
				'isi' => 'layout/frontend/pendaftaran/v_pendaftaran'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_warga' => $this->session->userdata('id_warga'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'nama_pang' => $this->input->post('nama_pang'),
				'jenis_kel' => $this->input->post('jenis_kel'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'agama' => $this->input->post('agama'),
				'warganegara' => $this->input->post('warganegara'),
				'anak_ke' => $this->input->post('anak_ke'),
				'jml_sdr' => $this->input->post('jml_sdr'),
				'jml_sdr_tiri' => $this->input->post('jml_sdr_tiri'),
				'jml_sdr_angkat' => $this->input->post('jml_sdr_angkat'),
				'bahasa' => $this->input->post('bahasa'),
				'berat_bd' => $this->input->post('berat_bd'),
				'tinggi_bd' => $this->input->post('tinggi_bd'),
				'gol_darah' => $this->input->post('gol_darah'),
				'penyakit' => $this->input->post('penyakit'),
				'rt_rw' => $this->input->post('rt_rw'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kabupaten' => $this->input->post('kabupaten'),
				'provinsi' => $this->input->post('provinsi'),
				'no_tlpn' => $this->input->post('no_tlpn'),
				'tempat_tinggal' => $this->input->post('tempat_tinggal'),
				'ayah' => $this->input->post('ayah'),
				'ibu' => $this->input->post('ibu'),
				'sklh_ayah' => $this->input->post('sklh_ayah'),
				'sklh_ibu' => $this->input->post('sklh_ibu'),
				'pkrj_ayah' => $this->input->post('pkrj_ayah'),
				'pkrj_ibu' => $this->input->post('pkrj_ibu'),
				'wali' => $this->input->post('wali'),
				'sklh_tinggi' => $this->input->post('sklh_tinggi'),
				'hub_peserta' => $this->input->post('hub_peserta'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'alamat_ortu' => $this->input->post('alamat_ortu'),
				'tlpn' => $this->input->post('tlpn'),
				'msk_sklh' => $this->input->post('msk_sklh'),
				'nama_sklh' => $this->input->post('nama_sklh'),
				'thn_lulus' => $this->input->post('thn_lulus'),
				'sklh_asal' => $this->input->post('sklh_asal'),
				'tgl_pindah' => $this->input->post('tgl_pindah'),
				'kelas_pindah' => $this->input->post('kelas_pindah'),
				'tgl_terima' => $this->input->post('tgl_terima'),
				'kelas_terima' => $this->input->post('kelas_terima'),
				'alasan' => $this->input->post('alasan'),
				'status' => 0,
			);
			$this->m_pendaftaran->add($data);
			$this->session->set_flashdata('pesan', 'Berhasil Daftar');
			redirect('home');
		}
	}

	public function diterima($id_pendaftaran = NULL)
	{
		$data = array(
			'id_pendaftaran' => $id_pendaftaran,
			'tgl_terima' => $this->input->post('tgl_terima'),
			'kelas_terima' => $this->input->post('kelas_terima'),
			'status' => 1,
			'alasan' => $this->input->post('alasan'),
		);
		$this->m_pendaftaran->diterima($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Update');
		redirect('pendaftaran');
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
}
