<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_siswa');
    }

    // List all your items
    public function paketa()
    {
        $data = array(
            'title' => 'Data Program Kerja',
            'siswa' => $this->m_siswa->siswaa(),
            'isi' => 'layout/backend/siswa/v_paket_a'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }
    public function paketb()
    {
        $data = array(
            'title' => 'Data Program Kerja',
            'siswa' => $this->m_siswa->siswab(),
            'isi' => 'layout/backend/siswa/v_paket_b'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }
    public function paketc()
    {
        $data = array(
            'title' => 'Data Program Kerja',
            'siswa' => $this->m_siswa->siswac(),
            'isi' => 'layout/backend/siswa/v_paket_c'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }


    // Add a 
    public function adda()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('jenis_kl', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tempat_lahir', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('kelas', 'Kelas siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('paket', 'paket siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));


        if ($this->form_validation->run() ==  FALSE) {
            $data = array(
                'title' => 'Tambah data siswa ',
                'isi' => 'layout/backend/siswa/crud_a/v_add'
            );
            $this->load->view('layout/backend/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis_kl' => $this->input->post('jenis_kl'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kelas' => $this->input->post('kelas'),
                'paket' => $this->input->post('paket'),
                'semester_genap' => $this->input->post('semester_genap'),
                'semester_ganjil' => $this->input->post('semester_ganjil'),
            );
            $this->m_siswa->adda($data);
            $this->session->set_flashdata('pesan', 'data berhasil di tambah');
            redirect('siswa/paketa');
        }
        $data = array(
            'title' => 'Tambah data siswa ',
            'isi' => 'layout/backend/siswa/crud_a/v_add'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Update one item
    public function updatea($id_siswa = NULL)
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('jenis_kl', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tempat_lahir', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('kelas', 'Kelas siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('paket', 'paket siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));


        if ($this->form_validation->run() ==  FALSE) {
            $data = array(
                'title' => 'Update data siswa',
                'siswa' => $this->m_siswa->detail($id_siswa),
                'isi' => 'layout/backend/siswa/crud_a/v_edit'
            );
            $this->load->view('layout/backend/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_siswa' => $id_siswa,
                'nama' => $this->input->post('nama'),
                'jenis_kl' => $this->input->post('jenis_kl'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kelas' => $this->input->post('kelas'),
                'paket' => $this->input->post('paket'),
                'semester_genap' => $this->input->post('semester_genap'),
                'semester_ganjil' => $this->input->post('semester_ganjil'),
            );
            $this->m_siswa->update($data);
            $this->session->set_flashdata('pesan', 'data berhasil di Update');
            redirect('siswa/paketa');
        }
        $data = array(
            'title' => 'Update data siswa',
            'siswa' => $this->m_siswa->detail($id_siswa),
            'isi' => 'layout/backend/siswa/crud_a/v_edit'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Delete one item
    public function deletea($id_siswa = NULL)
    {

        $data = array(
            'id_siswa' => $id_siswa
        );
        $this->m_siswa->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('siswa/paketa');
    }
    public function addb()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('jenis_kl', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tempat_lahir', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('kelas', 'Kelas siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('paket', 'paket siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));


        if ($this->form_validation->run() ==  FALSE) {
            $data = array(
                'title' => 'Tambah data siswa ',
                'isi' => 'layout/backend/siswa/crud_b/v_add'
            );
            $this->load->view('layout/backend/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis_kl' => $this->input->post('jenis_kl'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kelas' => $this->input->post('kelas'),
                'paket' => $this->input->post('paket'),
                'semester_genap' => $this->input->post('semester_genap'),
                'semester_ganjil' => $this->input->post('semester_ganjil'),
            );
            $this->m_siswa->adda($data);
            $this->session->set_flashdata('pesan', 'data berhasil di tambah');
            redirect('siswa/paketb');
        }
        $data = array(
            'title' => 'Tambah data siswa ',
            'isi' => 'layout/backend/siswa/crud_b/v_add'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Update one item
    public function updateb($id_siswa = NULL)
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('jenis_kl', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tempat_lahir', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('kelas', 'Kelas siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('paket', 'paket siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));


        if ($this->form_validation->run() ==  FALSE) {
            $data = array(
                'title' => 'Update data siswa',
                'siswa' => $this->m_siswa->detail($id_siswa),
                'isi' => 'layout/backend/siswa/crud_b/v_edit'
            );
            $this->load->view('layout/backend/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_siswa' => $id_siswa,
                'nama' => $this->input->post('nama'),
                'jenis_kl' => $this->input->post('jenis_kl'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kelas' => $this->input->post('kelas'),
                'paket' => $this->input->post('paket'),
                'semester_genap' => $this->input->post('semester_genap'),
                'semester_ganjil' => $this->input->post('semester_ganjil'),
            );
            $this->m_siswa->update($data);
            $this->session->set_flashdata('pesan', 'data berhasil di Update');
            redirect('siswa/paketb');
        }
        $data = array(
            'title' => 'Update data siswa',
            'siswa' => $this->m_siswa->detail($id_siswa),
            'isi' => 'layout/backend/siswa/crud_b/v_edit'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Delete one item
    public function deleteb($id_siswa = NULL)
    {

        $data = array(
            'id_siswa' => $id_siswa
        );
        $this->m_siswa->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('siswa/paketb');
    }
    public function addc()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('jenis_kl', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tempat_lahir', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('kelas', 'Kelas siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('paket', 'paket siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));


        if ($this->form_validation->run() ==  FALSE) {
            $data = array(
                'title' => 'Tambah data siswa ',
                'isi' => 'layout/backend/siswa/crud_c/v_add'
            );
            $this->load->view('layout/backend/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis_kl' => $this->input->post('jenis_kl'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kelas' => $this->input->post('kelas'),
                'paket' => $this->input->post('paket'),
                'semester_genap' => $this->input->post('semester_genap'),
                'semester_ganjil' => $this->input->post('semester_ganjil'),
            );
            $this->m_siswa->adda($data);
            $this->session->set_flashdata('pesan', 'data berhasil di tambah');
            redirect('siswa/paketc');
        }
        $data = array(
            'title' => 'Tambah data siswa ',
            'isi' => 'layout/backend/siswa/crud_c/v_add'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Update one item
    public function updatec($id_siswa = NULL)
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('jenis_kl', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tempat_lahir', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('kelas', 'Kelas siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));
        $this->form_validation->set_rules('paket', 'paket siswa', 'required', array('required' => '%s Mohon Untuk Diiis!!',));


        if ($this->form_validation->run() ==  FALSE) {
            $data = array(
                'title' => 'Update data siswa',
                'siswa' => $this->m_siswa->detail($id_siswa),
                'isi' => 'layout/backend/siswa/crud_c/v_edit'
            );
            $this->load->view('layout/backend/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_siswa' => $id_siswa,
                'nama' => $this->input->post('nama'),
                'jenis_kl' => $this->input->post('jenis_kl'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kelas' => $this->input->post('kelas'),
                'paket' => $this->input->post('paket'),
                'semester_genap' => $this->input->post('semester_genap'),
                'semester_ganjil' => $this->input->post('semester_ganjil'),
            );
            $this->m_siswa->update($data);
            $this->session->set_flashdata('pesan', 'data berhasil di Update');
            redirect('siswa/paketc');
        }
        $data = array(
            'title' => 'Update data siswa',
            'siswa' => $this->m_siswa->detail($id_siswa),
            'isi' => 'layout/backend/siswa/crud_c/v_edit'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Delete one item
    public function deletec($id_siswa = NULL)
    {

        $data = array(
            'id_siswa' => $id_siswa
        );
        $this->m_siswa->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('siswa/paketc');
    }
}

/* End of file Program.php */
