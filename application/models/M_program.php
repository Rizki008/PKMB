<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_program extends CI_Model
{

	public function program_pkmb()
	{
		$this->db->select('*');
		$this->db->from('pro_pkmb');
		$this->db->order_by('id_program', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('pro_pkmb', $data);
	}

	public function detail($id_program)
	{
		$this->db->select('*');
		$this->db->from('pro_pkmb');
		$this->db->where('id_program', $id_program);
		return $this->db->get()->row();
	}

	public function update($data)
	{
		$this->db->where('id_program', $data['id_program']);
		$this->db->update('pro_pkmb', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_program', $data['id_program']);
		$this->db->delete('pro_pkmb', $data);
	}
}
