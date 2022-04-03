<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Warga_login
{
	protected $ci;
	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($username, $password)
	{
		$cek = $this->ci->m_auth->warga_login($username, $password);
		if ($cek) {
			$username = $cek->username;
			$password = $cek->password;
			$jenis_kel = $cek->jenis_kel;
			$usia = $cek->usia;

			$this->ci->session->set_userdata('username', $username);
			$this->ci->session->set_userdata('password', $password);
			$this->ci->session->set_userdata('jenis_kel', $jenis_kel);
			$this->ci->session->set_userdata('usia', $usia);

			redirect('home');
		} else {
			$this->session->set_flashdata('pesan', 'Username atau Password Salah');
			redirect('warga/login');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('username') == '') {
			$this->ci->session->set_flashdata('pesan', 'Maaf Anda Belum Login / Register');
			redirect('warga/login');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('password');
		$this->ci->session->unset_userdata('jenis_kl');
		$this->ci->session->unset_userdata('usia');

		$this->ci->session->set_flashdata('pesan', 'Berhasil Logout');
		redirect('warga/login');
	}
}
