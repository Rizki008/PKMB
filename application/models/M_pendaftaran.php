<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pendaftaran extends CI_Model
{
	public function pendaftaran()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->join('warga', 'pendaftaran.id_warga = warga.id_warga', 'left');
		$this->db->join('kelas', 'pendaftaran.id_pendaftaran = kelas.id_pendaftaran', 'left');
		$this->db->order_by('pendaftaran.id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}
	public function pendaftaran_yayasan()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->join('warga', 'pendaftaran.id_warga = warga.id_warga', 'left');
		$this->db->join('kelas', 'pendaftaran.id_pendaftaran = kelas.id_pendaftaran', 'left');
		$this->db->order_by('pendaftaran.id_pendaftaran', 'desc');
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
		$this->db->from('kelas');
		$this->db->join('pendaftaran', 'kelas.id_pendaftaran = pendaftaran.id_pendaftaran', 'left');
		$this->db->join('warga', 'pendaftaran.id_warga = warga.id_warga', 'left');
		$this->db->where('status=1');
		$this->db->order_by('pendaftaran.id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}

	public function datatolak()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->join('warga', 'pendaftaran.id_warga = warga.id_warga', 'left');
		$this->db->join('kelas', 'pendaftaran.id_pendaftaran = kelas.id_pendaftaran', 'left');
		$this->db->where('status=2');
		$this->db->order_by('pendaftaran.id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_pendaftaran)
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->join('warga', 'pendaftaran.id_warga = warga.id_warga', 'left');
		$this->db->where('id_pendaftaran', $id_pendaftaran);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('pendaftaran', $data);
	}
	public function kelas($data)
	{
		$this->db->where('id_kelas', $data['id_kelas']);
		$this->db->update('kelas', $data);
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
		// $this->db->select('*');
		// $this->db->from('warga');
		// $this->db->order_by('usia', 'desc');
		// return $this->db->get()->result();
		return $this->db->query("SELECT
		CASE
			WHEN usia < 20 THEN '... - 20'
			WHEN usia BETWEEN 20 and 24 THEN '20 - 24'
			WHEN usia BETWEEN 25 and 29 THEN '25 - 29'
			WHEN usia >= 30 THEN '30 - ...'
			WHEN usia IS NULL THEN '(NULL)'
		END as range_umur,
		COUNT(*) AS jumlah
	
	FROM (select * from warga)  as dummy_table
	GROUP BY range_umur
	ORDER BY range_umur")->result();
	}

	public function notif()
	{
		$id_warga = $this->session->userdata('id_warga');
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('pendaftaran.id_warga=', $id_warga);
		$this->db->group_by('id_pendaftaran');
		return $this->db->get()->num_rows();
	}

	public function notifterima()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->join('kelas', 'pendaftaran.id_pendaftaran = kelas.id_pendaftaran', 'left');
		$this->db->where('status=1');
		$this->db->group_by('pendaftaran.id_pendaftaran', 'desc');
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
