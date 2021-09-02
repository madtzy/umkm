<?php
	class Data_join extends CI_Controller{
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
			$data['join'] = $this->model_join->tampil_data();
			$data['title'] = 'Data Join';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/data_join', $data);
        }
        public function hapus($id_join)
		{
			$where = array('f_id_join' => $id_join);
			$this->model_join->hapus_data($where, 'tb_join');
			redirect('admin/data_join/index');
		}
	}
?>