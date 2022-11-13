<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('m_laporan');
    }

    public function index()
    {
        $data = array(
            'title' => 'Laporan Analisis',
            'isi' => 'layout/yayasan/laporan/v_analisis'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }

    public function analisis_paket_genap()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Detail Paket Genap',
            'tahun' => $tahun,
            'genap' => $this->m_laporan->genap($tahun),
            'isi' => 'layout/yayasan/laporan/v_paket_genap'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
    public function analisis_paket_ganjil()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Detail Paket Ganjil',
            'tahun' => $tahun,
            'ganjil' => $this->m_laporan->ganjil($tahun),
            'isi' => 'layout/yayasan/laporan/v_paket_ganjil'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
    public function alamat_tahun()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Detail Alamat',
            'tahun' => $tahun,
            'alamat' => $this->m_laporan->alamat($tahun),
            'isi' => 'layout/yayasan/laporan/v_alamat'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
    public function peminatan_tahun()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Detail Peminatan',
            'tahun' => $tahun,
            'peminatan' => $this->m_laporan->peminatan($tahun),
            'isi' => 'layout/yayasan/laporan/v_peminatan'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
    public function analisis_usia()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Detail Usia',
            'tahun' => $tahun,
            'usia' => $this->m_laporan->usia($tahun),
            'isi' => 'layout/yayasan/laporan/v_usia'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
    public function analisis_lulusan()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Detail Kelulusan',
            'tahun' => $tahun,
            'lulusan' => $this->m_laporan->lulusan($tahun),
            'isi' => 'layout/yayasan/laporan/v_lulusan_tahunan'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
    public function analisis_paket()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Detail Kejar Paket',
            'tahun' => $tahun,
            'paket' => $this->m_laporan->paket($tahun),
            'isi' => 'layout/yayasan/laporan/v_kejar_paket'
        );
        $this->load->view('layout/yayasan/v_wrapper', $data, FALSE);
    }
}
