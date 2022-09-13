<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Peminatan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_peminatan');
		$this->load->model('m_pendaftaran');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Peminatan Siswa',
			'peminatan' => $this->m_peminatan->peminatan_pkmb(),
			'isi' => 'layout/backend/peminatan/v_peminatan'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function peminatan()
	{
		$data = array(
			'title' => 'peminatan Kerja Kami',
			'peminatan' => $this->m_peminatan->peminatan_pkmb(),
			'isi' => 'layout/frontend/peminatan/v_peminatan'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('nama_peminatan', 'Nama peminatan', 'required', array('required' => '%s Mohon Untuk Diiis!!',));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Tambah Data peminatan',
				'isi' => 'layout/backend/peminatan/v_add'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama_peminatan' => $this->input->post('nama_peminatan'),
			);
			$this->m_peminatan->add($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
			redirect('peminatan');
		}


		$data = array(
			'title' => 'Tambah Data peminatan',
			'isi' => 'layout/backend/peminatan/v_add'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function update($id_peminatan = NULL)
	{
		$this->form_validation->set_rules('nama_peminatan', 'Nama peminatan', 'required', array('required' => '%s Mohon Untuk Diiis!!',));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Edit peminatan',
				'peminatan' => $this->m_peminatan->detail($id_peminatan),
				'isi' => 'layout/backend/peminatan/v_edit'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_peminatan' => $id_peminatan,
				'nama_peminatan' => $this->input->post('nama_peminatan'),
			);
			$this->m_peminatan->update($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
			redirect('peminatan');
		}
		$data = array(
			'title' => 'Edit peminatan',
			'peminatan' => $this->m_peminatan->detail($id_peminatan),
			'isi' => 'layout/backend/peminatan/v_edit'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id_peminatan = NULL)
	{
		//hapus gambar
		$peminatan = $this->m_peminatan->detail($id_peminatan);
		if ($peminatan->gambar !== "") {
			unlink('./assets/gambar/' . $peminatan->gambar);
		}

		$data = array(
			'id_peminatan' => $id_peminatan
		);
		$this->m_peminatan->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('peminatan');
	}
}

/* End of file peminatan.php */
