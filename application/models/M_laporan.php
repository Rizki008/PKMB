<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{

    public function genap($tahun)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('YEAR(tgl_lulus)', $tahun);
        $this->db->where('semester=', 'genap');
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result();
    }
    public function ganjil($tahun)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('YEAR(tgl_lulus)', $tahun);
        $this->db->where('semester=', 'ganjil');
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result();
    }
    public function alamat($tahun)
    {
        $this->db->select('*');
        $this->db->from('warga');
        $this->db->where('YEAR(tgl_daftar)', $tahun);
        $this->db->order_by('id_warga', 'desc');
        return $this->db->get()->result();
    }
    public function peminatan($tahun)
    {
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->join('warga', 'pendaftaran.id_warga = warga.id_warga', 'left');
        $this->db->join('peminatan', 'pendaftaran.id_peminatan = peminatan.id_peminatan', 'left');
        $this->db->where('YEAR(pendaftaran.tgl_daftar)', $tahun);
        $this->db->order_by('id_pendaftaran', 'desc');
        return $this->db->get()->result();
    }
    public function lulusan($tahun)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('YEAR(tgl_lulus)', $tahun);
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result();
    }
    public function usia($tahun)
    {
        $this->db->select('*');
        $this->db->from('warga');
        $this->db->where('YEAR(tgl_daftar)', $tahun);
        $this->db->order_by('id_warga', 'desc');
        return $this->db->get()->result();
    }
    public function paket($tahun)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('YEAR(tgl_lulus)', $tahun);
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result();
    }
}
