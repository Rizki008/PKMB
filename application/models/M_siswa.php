<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model
{

    public function siswaa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where("paket='A'");
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result();
    }
    public function siswab()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where("paket='B'");
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result();
    }
    public function siswac()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where("paket='C'");
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result();
    }

    public function adda($data)
    {
        $this->db->insert('siswa', $data);
    }

    public function detail($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get()->row();
    }

    public function update($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->update('siswa', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->delete('siswa', $data);
    }
}
