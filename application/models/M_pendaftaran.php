<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pendaftaran extends CI_Model
{
	public function pendaftaran()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->order_by('id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}

	public function data_penerimaan()
	{
		$id_warga = $this->session->userdata('id_warga');
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->join('warga', 'pendaftaran.id_warga = warga.id_warga', 'left');
		$this->db->where('pendaftaran.id_warga=', $id_warga);
		return $this->db->get()->result();
	}

	public function dataterima()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('status=1');
		$this->db->order_by('id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}

	public function datatolak()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('status=2');
		$this->db->order_by('id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_pendaftaran)
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('id_pendaftaran', $id_pendaftaran);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('pendaftaran', $data);
	}

	public function diterima($data)
	{
		$this->db->where('id_pendaftaran', $data['id_pendaftaran']);
		$this->db->update('pendaftaran', $data);
	}

	public function grafik()
	{
		return $this->db->query('SELECT COUNT(kecamatan)AS total, pendaftaran.kecamatan FROM `pendaftaran` GROUP BY kecamatan;')->result();
	}
	public function grafik_usia()
	{
		$this->db->select('*');
		$this->db->from('warga');
		$this->db->order_by('usia', 'desc');
		return $this->db->get()->result();
	}

	public function notif()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->group_by('id_pendaftaran');
		return $this->db->get()->num_rows();
	}

	public function notifterima()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status=1');
		$this->db->group_by('id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}
	public function notiftolak()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status=2');
		$this->db->group_by('id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}
}
