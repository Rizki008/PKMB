<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Analisis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('m_pendaftaran');
    }

    public function alamat()
    {
        $data = array(
            'title' => 'Analisis Data Alamat',
            'isi' => 'layout/yayasan/analisis_alamat/v_alamat'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }

    public function alamat_tahun()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Data Alamat Pertahun',
            'tahun' => $tahun,
            'analisis_alamat' => $this->m_pendaftaran->alamat($tahun),
            'isi' => 'layout/yayasan/analisis_alamat/v_tahun'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }

    //lulusan
    public function lulusan()
    {
        $data = array(
            'title' => 'Analisis Data lulusan',
            'isi' => 'layout/yayasan/analisis_lulusan/v_lulusan'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }

    public function lulusan_tahun()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Data lulusan Pertahun',
            'tahun' => $tahun,
            'analisis_lulusan' => $this->m_pendaftaran->lulus_tahunan($tahun),
            'isi' => 'layout/yayasan/analisis_lulusan/v_tahun'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
    //Semester
    public function semester()
    {
        $data = array(
            'title' => 'Analisis Data Semester genap dan ganjil',
            'isi' => 'layout/yayasan/analisis/v_semester'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }

    public function genap()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Data Semester Genap',
            'tahun' => $tahun,
            'genap' => $this->m_pendaftaran->genap($tahun),
            'isi' => 'layout/yayasan/analisis/v_analisis_genap'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
    public function ganjil()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Data Semester Ganjil',
            'tahun' => $tahun,
            'ganjil' => $this->m_pendaftaran->ganjil($tahun),
            'isi' => 'layout/yayasan/analisis/v_analisis_ganjil'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }

    //usia
    public function usia()
    {
        $data = array(
            'title' => 'Analisis Data Usia',
            'isi' => 'layout/yayasan/analisis_usia/v_analisis'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }

    public function analisis_usia()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Data Usia',
            'tahun' => $tahun,
            'analisis_usia' => $this->m_pendaftaran->grafik_usia($tahun),
            'isi' => 'layout/yayasan/analisis_usia/v_usia'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }

    //paket
    public function paket()
    {
        $data = array(
            'title' => 'Analisis Data Kejar Paket',
            'isi' => 'layout/yayasan/analisis_paket/v_analisis'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }

    public function analisis_paket_genap()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Data Kejar Paket Semster Genap',
            'tahun' => $tahun,
            'analisis_paket' => $this->m_pendaftaran->paket_genap($tahun),
            'isi' => 'layout/yayasan/analisis_paket/v_paket_genap'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
    public function analisis_paket_ganjil()
    {
        $tahun = $this->input->post('tahun');
        // $semester = $this->input->post('semester');

        $data = array(
            'title' => 'Data Kejar Paket Semester Ganjil',
            'tahun' => $tahun,
            // 'semester' => $semester,
            'analisis_paket' => $this->m_pendaftaran->paket_ganjil($tahun),
            // 'analisis_paket' => $this->m_pendaftaran->paket_ganjil($semester),
            'isi' => 'layout/yayasan/analisis_paket/v_paket_ganjil'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
}

/* End of file Analisis.php */
