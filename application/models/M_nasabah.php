<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nasabah extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('mr_nasabah');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_all_pinjaman() {
		$sql = " SELECT mnp.id,mn.nik,mn.full_name,mjk.name AS jk,mn.pob,mn.dob,mn.full_address,
						mp.name AS provinsi,mko.name AS kota, mkec.name AS kecamatan, mkel.name AS kelurahan,
						mn.no_telepon,mn.email,mn.ibu_kandung,mpen.name AS pendidikan,mag.name agama,
						ms.name STATUS, mn.is_saving,mn.is_deposito,mn.is_loan,mnp.tanggal,
						mpp.name AS nama_produk,mnp.pengajuan,mn.id AS id_nasabah,
						IF(mnp.status=1,'Approved',IF(mnp.status=2,'Rejected','Inputed')) AS status_kredit,
						mnp.status_slik AS status_slik
				FROM mr_nasabah mn, mr_jenis_kelamin mjk,mr_provinsi mp,mr_kota mko,mr_kecamatan mkec,
					 mr_kelurahan mkel, mr_pendidikan mpen,mr_agama mag,mr_status ms, mr_nasabah_produk mnp,mr_produk mpp
				WHERE mn.id_jenis_kelamin=mjk.id AND mn.id_provinsi=mp.id AND mn.id_kota=mko.id 
					and mn.id_kecamatan=mkec.id AND mn.id_kelurahan=mkel.id AND mn.id_pendidikan=mpen.id AND
					mn.id_agama=mag.id and mn.id_status=ms.id AND mn.id=mnp.id_nasabah AND mnp.id_produk=mpp.id";

		$data = $this->db->query($sql);
		return $data->result();
	}

	

	public function select_by_id($id) {
		$sql = "SELECT * FROM mr_nasabah WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_pegawai($id) {
		$sql = " SELECT * FROM mr_nasabah WHERE id='{$id}'";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_detail_nasabah($id) {
		$sql = " SELECT mnp.id,mn.nik,mn.full_name,mjk.name AS jk,mn.pob,mn.dob,mn.full_address,
						mp.name AS provinsi,mko.name AS kota, mkec.name AS kecamatan, mkel.name AS kelurahan,
						mn.no_telepon,mn.email,mn.ibu_kandung,mpen.name AS pendidikan,mag.name agama,
						ms.name STATUS, mn.is_saving,mn.is_deposito,mn.is_loan,mn.id as idnasabah
				FROM mr_nasabah mn, mr_jenis_kelamin mjk,mr_provinsi mp,mr_kota mko,mr_kecamatan mkec,
					 mr_kelurahan mkel, mr_pendidikan mpen,mr_agama mag,mr_status ms,mr_nasabah_produk mnp
				WHERE mnp.id='{$id}' and mn.id_jenis_kelamin=mjk.id AND mn.id_provinsi=mp.id AND mn.id_kota=mko.id 
					and mn.id_kecamatan=mkec.id AND mn.id_kelurahan=mkel.id AND mn.id_pendidikan=mpen.id AND
					mn.id_agama=mag.id and mn.id_status=ms.id and mn.id=mnp.id_nasabah";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_dokumen_nasabah($id) {
		$sql = " SELECT * FROM 
		        mr_nasabah_dokumen mnb, mr_nasabah_produk mnp 
		        WHERE mnp.id='{$id}' and mnb.id_nasabah=mnp.id_nasabah";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_penjamin_nasabah($id) {
		$sql = " SELECT mp.name AS penjamin,np.nama,np.nohp,np.alamat,np.ktp 
				 FROM mr_nasabah_penjamin np, mr_penjamin mp, mr_nasabah_produk mnp
				 WHERE mnp.id={$id} and np.id_nasabah=mnp.id_nasabah and  np.id_penjamin=mp.id";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_job_nasabah($id) {
		$sql = " SELECT mp.name AS pekerjaan , nj.jabatan_bidang,nj.nama_perusahaan,
								nj.alamat_perusahaan,nj.no_telepon,nj.lama_bekerja
				 FROM mr_nasabah_job nj, mr_pekerjaan mp,mr_nasabah_produk mnp
				 WHERE mnp.id={$id} and nj.id_nasabah=mnp.id_nasabah and nj.id_pekerjaan=mp.id ";

		$data = $this->db->query($sql);

		return $data->result_array();
	}

	public function select_produk_nasabah($id) {
		$sql = " SELECT mnp.tanggal, mp.name AS produk, mnp.description, 
						mnp.pengajuan,mnp.status_slik
				 FROM mr_nasabah_produk mnp, mr_produk mp
				 WHERE mnp.id={$id} AND mnp.id_produk=mp.id ";

		$data = $this->db->query($sql);

		return $data->result_array();
	}

	public function insert($data) {
		$sql = "INSERT INTO mr_nasabah VALUES('','" .$data['nasabah'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('mr_nasabah', $data);
		
		return $this->db->affected_rows();
	}

	

	public function delete($id) {
		$sql = "DELETE FROM mr_nasabah WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('full_name', $nama);
		$data = $this->db->get('mr_nasabah');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('mr_nasabah');

		return $data->num_rows();
	}

	public function update($data) {
		// var_dump ($data);
		$sql = "INSERT INTO mr_nasabah_riwayat (id_nasabah,nama_bank,plafond,terbayar,sisa_plafond,col,id_pinjaman) 
				VALUES(".$data['idnasabah'].",'" .$data['bank'] ."','" .$data['plafond'] ."'," .$data['dibayar'] .",
				" .$data['sisa'] ."," .$data['kolek'] ."," .$data['id'] .");";

		// echo $sql;
		// exit;
		$this->db->query($sql);
		$this->update_slik_pinjaman($data);
		// return $this->db->affected_rows();
		
	}

	public function update_slik_pinjaman($data) {
		// var_dump ($data);
		$sql = "UPDATE mr_nasabah_produk SET status_slik=" .$data['kolek'] ."
				WHERE id=" .$data['id'];

		// echo $sql;
		// exit;
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function select_jumlah_pengajuan() {
		$month = date('m');
     	$year = date('Y');
		$sql = " SELECT SUM(Coalesce(pengajuan,0)) AS pengajuan
				 FROM mr_nasabah_produk
				 WHERE MONTH(tanggal)={$month} AND YEAR(tanggal)={$year}";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_jumlah_pencairan() {
		$month = date('m');
     	$year = date('Y');
		$sql = " SELECT SUM(Coalesce(pengajuan,0)) AS pencairan
				 FROM mr_nasabah_produk
				 WHERE status=1 AND MONTH(tanggal)={$month} AND YEAR(tanggal)={$year}";

		$data = $this->db->query($sql);

		return $data->row();
	}





}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */