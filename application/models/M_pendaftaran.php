<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pendaftaran extends CI_Model
{
	public function total_pendaftar()
	{
		return $this->db->get('pendaftaran')->num_rows();
	}
	public function total_warga()
	{
		return $this->db->get('siswa')->num_rows();
	}
	public function total_kelas()
	{
		return $this->db->get('kelas')->num_rows();
	}
	public function total_program()
	{
		return $this->db->get('pro_pkmb')->num_rows();
	}
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
	public function gafik_genap()
	{
		return $this->db->query("SELECT COUNT(semester_genap)AS total_genap, siswa.semester_genap FROM `siswa` WHERE semester_genap='genap' GROUP BY semester_genap;")->result();
	}
	public function gafik_ganjil()
	{
		return $this->db->query("SELECT COUNT(semester_ganjil)AS total_ganjil, siswa.semester_ganjil FROM `siswa` WHERE semester_ganjil='ganjil' GROUP BY semester_ganjil;")->result();
	}
	public function gafik_ganjil_alamat()
	{
		return $this->db->query("SELECT tempat_lahir, 
		COUNT(semester_ganjil) as total_ganjil
FROM siswa WHERE semester_ganjil='ganjil'
GROUP BY tempat_lahir;")->result();
	}
	public function gafik_genap_alamat()
	{
		return $this->db->query("SELECT tempat_lahir, 
		COUNT(semester_genap) as total_genap
FROM siswa WHERE semester_genap='genap'
GROUP BY tempat_lahir;")->result();
	}
	public function gafik_genap_usia()
	{
		return $this->db->query("SELECT TIMESTAMPDIFF(YEAR, tgl_lahir, curdate()) AS umur  FROM siswa WHERE semester_genap='genap' GROUP BY umur ORDER BY umur;")->result();
	}
	public function gafik_ganjil_usia()
	{
		return $this->db->query("SELECT TIMESTAMPDIFF(YEAR, tgl_lahir, curdate()) AS umur  FROM siswa WHERE semester_ganjil='ganjil' GROUP BY umur ORDER BY umur;")->result();
	}
	public function grafik_usia()
	{
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

	public function lulus_tahunan($tahun)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('YEAR(tgl_lulus)', $tahun);
		$this->db->order_by('tgl_lulus', 'desc');
		return $this->db->get()->result();
	}
	public function alamat($tahun)
	{
		$this->db->select('COUNT(alamat)AS total_alamat, warga.alamat');
		$this->db->from('warga');
		$this->db->where('YEAR(tgl_daftar)', $tahun);
		$this->db->group_by('alamat');
		$this->db->order_by('tgl_daftar', 'desc');
		return $this->db->get()->result();
	}
	public function genap($tahun)
	{
		$this->db->select('COUNT(semester_genap)AS total_semester_genap, siswa.semester_genap');
		$this->db->from('siswa');
		$this->db->where("semester_genap='genap'");
		$this->db->where('YEAR(tgl_lulus)', $tahun);
		$this->db->group_by('semester_genap');
		$this->db->order_by('tgl_lulus', 'desc');
		return $this->db->get()->result();
	}
	public function ganjil($tahun)
	{
		$this->db->select('COUNT(semester_ganjil)AS total_semester_ganjil, siswa.semester_ganjil');
		$this->db->from('siswa');
		$this->db->where("semester_ganjil='ganjil'");
		$this->db->where('YEAR(tgl_lulus)', $tahun);
		$this->db->group_by('semester_ganjil');
		$this->db->order_by('tgl_lulus', 'desc');
		return $this->db->get()->result();
	}
	public function paket_genap($tahun)
	{
		$this->db->select('COUNT(paket)AS total_paket_genap, siswa.paket');
		$this->db->from('siswa');
		$this->db->where("semester='genap'");
		$this->db->where('YEAR(tgl_lulus)', $tahun);
		$this->db->group_by('paket');
		return $this->db->get()->result();

		// return $this->db->query("SELECT COUNT(paket)AS total_paket_genap, siswa.paket FROM `siswa` WHERE YEAR(tgl_lulus)=$tahun OR semester='genap' GROUP BY paket;")->result();
	}
	public function paket_ganjil($tahun)
	{
		// SELECT COUNT(paket)AS total_paket, siswa.paket FROM `siswa` WHERE semester_genap='genap' GROUP BY paket;
<<<<<<< HEAD
		$where = "semester='ganjil' OR YEAR(tgl_lulus)=$tahun";
		$this->db->where($where);
		$this->db->select('COUNT(paket)AS total_paket_ganjil, siswa.paket');
		$this->db->from('siswa');
		// $this->db->where("semester='ganjil'");
		// $this->db->where('YEAR(tgl_lulus)', $tahun);
=======

		// $where = "semester='ganjil' OR YEAR(tgl_lulus)=$tahun";
		// $this->db->where($where);
		$this->db->select('COUNT(paket)AS total_paket_ganjil, siswa.paket');
		$this->db->from('siswa');
		$this->db->where("semester='ganjil'");
		$this->db->where('YEAR(tgl_lulus)', $tahun);
>>>>>>> f85b372374011d4cfd461444ada7258a81d18268
		$this->db->group_by('paket');
		return $this->db->get()->result();
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
