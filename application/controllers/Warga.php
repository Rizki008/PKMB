<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_warga');
	}

	public function register()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('jenis_kel', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('usia', 'Usia', 'required', array('required' => '%s Mohon Untuk Diisi'));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Registrasi Warga',
				'isi' => 'layout/frontend/register/v_register'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'jenis_kel' => $this->input->post('jenis_kel'),
				'usia' => $this->input->post('usia'),
			);
			$this->m_warga->register($data);
			$this->session->set_flashdata('pesan', 'Registrasi berhasil silahkan untuk login');
			redirect('warga/login');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk Diisi'));


		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$passwrod = $this->input->post('password');
			$this->warga_login->login($username, $passwrod);
		} else {
			$data = array(
				'title' => 'Login Warga',
				'isi' => 'layout/frontend/login/v_login',
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		}
	}

	public function logout()
	{
		$this->warga_login->logout();
	}
}
