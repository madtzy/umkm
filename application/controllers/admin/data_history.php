<?php
	class Data_history extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('f_username')){
				$this->session->set_flashdata('pesan','<div class="alert small alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
				redirect('admin/auth/login');
			}
		}
		public function index()
		{
			$data['history'] = $this->model_history->tampil_data();
			$data['title'] = 'Data History';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/data_history', $data);
		}
		public function detail($id_pembeli)
		{
			$data['history'] = $this->model_history->ambil_id_pembeli($id_pembeli);
			$data['pesanan'] = $this->model_history->ambil_id_pesanan($id_pembeli);
			$data['title'] = 'Detail History';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/detail_history', $data);
		}
	}
?>