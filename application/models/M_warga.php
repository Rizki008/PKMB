<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_warga extends CI_Model
{

	public function register($data)
	{
		$this->db->insert('warga', $data);
	}
}
