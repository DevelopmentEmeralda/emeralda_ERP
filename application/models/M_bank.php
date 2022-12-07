<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bank extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('mr_bank');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM mr_bank WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}


}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */