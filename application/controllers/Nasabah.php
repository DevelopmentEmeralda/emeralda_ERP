<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_nasabah');
		$this->load->model('M_bank');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataNasabah'] 	= $this->M_nasabah->select_all();

		$data['page'] 		= "nasabah";
		$data['judul'] 		= "Data Nasabah";
		$data['deskripsi'] 	= "Manage Data Nasabah";

		$data['modal_tambah_nasabah'] = show_my_modal('modals/modal_tambah_nasabah', 'tambah-nasabah', $data);

		$this->template->views('nasabah/home', $data);
	}

	public function tampil() {
		$data['dataNasabah'] = $this->M_nasabah->select_all_pinjaman();
		$this->load->view('nasabah/list_data', $data);
	}


	public function detail() {
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($_POST['id']);
		$data['nasabah'] = $this->M_nasabah->select_detail_nasabah($id);
		$data['nasabah_dokumen'] = $this->M_nasabah->select_dokumen_nasabah($id);
		$data['nasabah_job'] = $this->M_nasabah->select_job_nasabah($id);
		$data['nasabah_penjamin'] = $this->M_nasabah->select_penjamin_nasabah($id);
		
		$data['nasabah_produk'] = $this->M_nasabah->select_produk_nasabah($id);
		$data['jumlahNasabah'] = $this->M_nasabah->total_rows();
		$data['dataNasabah'] = $this->M_nasabah->select_by_pegawai($id);

		echo show_my_modal('modals/modal_detail_nasabah', 'detail-nasabah', $data, 'lg');
	}

	public function detail_SLIK() {
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($_POST['id']);
		// $idloan 			= trim($_POST['idpinjaman']);
		// echo $idloan;
		$data['nasabah'] = $this->M_nasabah->select_detail_nasabah($id);
		$data['nasabah_dokumen'] = $this->M_nasabah->select_dokumen_nasabah($id);
		$data['nasabah_job'] = $this->M_nasabah->select_job_nasabah($id);
		$data['nasabah_penjamin'] = $this->M_nasabah->select_penjamin_nasabah($id);
		$data['jumlahNasabah'] = $this->M_nasabah->total_rows();
		$data['dataNasabah'] = $this->M_nasabah->select_by_pegawai($id);

		echo show_my_modal('modals/modal_detail_nasabah_slik', 'detail-nasabahslik', $data, 'lg');
	}


	public function update() {
		$id					= trim($_POST['id']);
		// $idloan 			= trim($_POST['id_pinjaman']);
		$data['nasabah'] = $this->M_nasabah->select_detail_nasabah($id);
		$data['bank'] = $this->M_bank->select_all();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_nasabah', 'update-nasabah', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('bank', 'Bank', 'trim|required');
		$this->form_validation->set_rules('plafond', 'Plafond', 'trim|required');
		$this->form_validation->set_rules('dibayar', 'Dibayar', 'trim|required');
		$this->form_validation->set_rules('sisa', 'Sisa', 'trim|required');
		$this->form_validation->set_rules('kolek', 'Kolektabilitas', 'trim|required');
		// $id = trim($_POST['id']);
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_nasabah->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Riwayat SLIK Nasabah Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Riwayat SLIK Nasabah Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}



	

}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */