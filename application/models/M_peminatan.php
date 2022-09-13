<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_peminatan extends CI_Model
{

	public function peminatan_pkmb()
	{
		$this->db->select('*');
		$this->db->from('peminatan');
		$this->db->order_by('id_peminatan', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('peminatan', $data);
	}

	public function detail($id_peminatan)
	{
		$this->db->select('*');
		$this->db->from('peminatan');
		$this->db->where('id_peminatan', $id_peminatan);
		return $this->db->get()->row();
	}

	public function update($data)
	{
		$this->db->where('id_peminatan', $data['id_peminatan']);
		$this->db->update('peminatan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_peminatan', $data['id_peminatan']);
		$this->db->delete('peminatan', $data);
	}

	public function kelas()
	{
		return $this->db->query('SELECT COUNT(nama) AS total, siswa.kelas FROM `siswa` GROUP BY kelas;')->result();
	}
}
