<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

	public function warga()
	{
		$this->db->select('*');
		$this->db->from('warga');
		$this->db->order_by('id_warga', 'desc');
		return $this->db->get()->result();
	}
}
