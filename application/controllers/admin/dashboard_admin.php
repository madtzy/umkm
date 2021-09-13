<?php 
	class Dashboard_admin extends CI_Controller {
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
			$data['data_makanan'] = $this->model_dashboard->data_makanan();
			$data['data_warung'] = $this->model_dashboard->data_warung();
			$data['data_history'] = $this->model_dashboard->data_history();
			$data['data_join'] = $this->model_dashboard->data_join();
			$data['title'] = 'Dashboard Admin';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/dashboard');
		}
		
	}
?>