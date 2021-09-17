<?php
	class Data_riwayat extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('f_username')){
				$this->session->set_flashdata('pesan','<div class="alert small alert-danger alert-dismissible" role="alert">
					  Anda Belum Login!
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
				redirect('admin/auth/login');
			}
		}
		public function index()
		{
			$data['riwayat'] = $this->model_riwayat->tampil_data();
			$data['title'] = 'Data riwayat';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/data_riwayat', $data);
		}
		public function detail($id_pembeli)
		{
			$data['riwayat'] = $this->model_riwayat->ambil_id_pembeli($id_pembeli);
			$data['detail_makanan'] = $this->model_riwayat->ambil_id_makanan($id_pembeli);
			$data['detail_minuman'] = $this->model_riwayat->ambil_id_minuman($id_pembeli);
			$data['title'] = 'Detail riwayat';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/detail_riwayat_makanan', $data);
			$this->load->view('admin/detail_riwayat_minuman', $data);
		}
	}
?>