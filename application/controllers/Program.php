<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
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
			'title' => 'Data Program Kerja',
			'program' => $this->m_program->program_pkmb(),
			'isi' => 'layout/backend/program/v_program'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function program()
	{
		$data = array(
			'title' => 'Program Kerja Kami',
			'program' => $this->m_program->program_pkmb(),
			'isi' => 'layout/frontend/program/v_program'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('nama_program', 'Nama Program', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array('required' => '%s Mohon Untuk Diiis!!',));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Tambah Data Program',
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'layout/backend/program/v_add'
				);
				$this->load->view('layout/backend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'nama_program' => $this->input->post('nama_program'),
					'deskripsi' => $this->input->post('deskripsi'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_program->add($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
				redirect('program');
			}
		}

		$data = array(
			'title' => 'Tambah Data Program',
			'isi' => 'layout/backend/program/v_add'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function update($id_program = NULL)
	{
		$this->form_validation->set_rules('nama_program', 'Nama Program', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array('required' => '%s Mohon Untuk Diiis!!',));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Edit program',
					'program' => $this->m_program->detail($id_program),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'layout/backend/program/v_edit'
				);
				$this->load->view('layout/backend/v_wrapper', $data, FALSE);
			} else {
				//hapus gambar di folder
				$program = $this->m_program->detail($id_program);
				if ($program->gambar !== "") {
					unlink('./assets/gambar/' . $program->gambar);
				}
				//end
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_program' => $id_program,
					'nama_program' => $this->input->post('nama_program'),
					'deskripsi' => $this->input->post('deskripsi'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_program->update($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
				redirect('program');
			} //tanpa ganti gambar
			$data = array(
				'id_program' => $id_program,
				'nama_program' => $this->input->post('nama_program'),
				'deskripsi' => $this->input->post('deskripsi'),
			);
			$this->m_program->update($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
			redirect('program');
		}

		$data = array(
			'title' => 'Edit program',
			'program' => $this->m_program->detail($id_program),
			'isi' => 'layout/backend/program/v_edit'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id_program = NULL)
	{
		//hapus gambar
		$program = $this->m_program->detail($id_program);
		if ($program->gambar !== "") {
			unlink('./assets/gambar/' . $program->gambar);
		}

		$data = array(
			'id_program' => $id_program
		);
		$this->m_program->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('program');
	}
}

/* End of file Program.php */
