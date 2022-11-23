<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pendaftaran extends CI_Model
{
	public function total_pendaftar()
	{
		$this->db->where('pendaftaran.status=0');
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
			WHEN usia BETWEEN 20 and 25 THEN '20 - 25'
			WHEN usia BETWEEN 25 and 30 THEN '25 - 30'
			WHEN usia BETWEEN 30 and 40 THEN '30 - 40'
			WHEN usia >= 41 THEN '41 - ...'
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
	public function analisis_peminatan($tahun)
	{
		// $this->db->select('COUNT(nama_peminatan) AS total_peminatan, peminatan.nama_peminatan');
		// $this->db->from('pendaftaran');
		// $this->db->join('peminatan', 'pendaftaran.id_peminatan = peminatan.id_peminatan', 'left');
		// $this->db->where('YEAR(tgl_terima)', $tahun);
		// $this->db->group_by('pendaftaran.id_peminatan');
		// $this->db->order_by('tgl_terima', 'desc');
		return $this->db->query("SELECT COUNT(nama_peminatan) AS total_peminatan, `peminatan`.`nama_peminatan`
		FROM `pendaftaran`
		LEFT JOIN `peminatan` ON `pendaftaran`.`id_peminatan` = `peminatan`.`id_peminatan`
		WHERE YEAR(tgl_terima) ='" . $tahun . "'
		GROUP BY `pendaftaran`.`id_peminatan`
		ORDER BY `tgl_terima` DESC;")->result();
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
	public function paket_coy($tahun)
	{
		$this->db->select('COUNT(paket) AS total_paket, siswa.paket');
		$this->db->from('siswa');
		// $this->db->where("semester='genap'");
		$this->db->where('YEAR(tgl_lulus)', $tahun);
		$this->db->group_by('paket');
		return $this->db->get()->result();

		// return $this->db->query("SELECT COUNT(paket)AS total_paket_genap, siswa.paket FROM `siswa` WHERE YEAR(tgl_lulus)=$tahun OR semester='genap' GROUP BY paket;")->result();
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

		$where = "semester='ganjil' OR YEAR(tgl_lulus)=$tahun";
		$this->db->where($where);
		$this->db->select('COUNT(paket)AS total_paket_ganjil, siswa.paket');
		$this->db->from('siswa');
		// $this->db->where("semester='ganjil'");
		// $this->db->where('YEAR(tgl_lulus)', $tahun);

		// $where = "semester='ganjil' OR YEAR(tgl_lulus)=$tahun";
		// $this->db->where($where);
		// $this->db->select('COUNT(paket)AS total_paket_ganjil, siswa.paket');
		// $this->db->from('siswa');
		// $this->db->where("semester='ganjil'");
		// $this->db->where('YEAR(tgl_lulus)', $tahun);
		$this->db->group_by('paket');
		return $this->db->get()->result();
	}

	public function notif()
	{
		$id_warga = $this->session->userdata('id_warga');
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('pendaftaran.id_warga=', $id_warga);
		$this->db->where('status=1');
		$this->db->group_by('id_pendaftaran');
		return $this->db->get()->num_rows();
	}
	public function notiftolaka()
	{
		$id_warga = $this->session->userdata('id_warga');
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('pendaftaran.id_warga=', $id_warga);
		$this->db->where('status=2');
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

	function get_data()
	{
		$this->db->select('tgl_lulus,semester_ganjil,semester_genap,semester');
		$this->db->group_by('semester_ganjil');
		$this->db->group_by('semester_genap');

		$result = $this->db->get('siswa');
		return $result;
	}

	//semester
	public function analisis_semester()
	{
		return $this->db->query('SELECT
		SUM(siswa.semester="ganjil") AS ganjil,
		SUM(siswa.semester="genap") AS genap,
		YEAR(tgl_lulus) as tgl_lulus FROM `siswa` GROUP BY YEAR(tgl_lulus);')->result();
	}
	//alamat
	public function alamat()
	{
		return $this->db->query('SELECT
		SUM(warga.alamat="kuningan") AS kuningan,
		SUM(warga.alamat="ciawilor") AS ciawilor,
		SUM(warga.alamat="jalaksana") AS jalaksana,
		SUM(warga.alamat="sindang barang") AS sindang_barang,
		SUM(warga.alamat="bandung") AS bandung,
		SUM(warga.alamat="cicaheum") AS cicaheum,
		SUM(warga.alamat="majalengka") AS majalengka,
		SUM(warga.alamat="subang") AS subang,
		YEAR(tgl_daftar) as tgl_daftar FROM `warga` GROUP BY YEAR(tgl_daftar);')->result();
	}
}
