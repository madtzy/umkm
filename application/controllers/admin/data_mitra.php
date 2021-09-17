<?php
	class Data_mitra extends CI_Controller{
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
			$data['mitra'] = $this->model_mitra->tampil_data();
			$data['title'] = 'Data mitra';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/data_mitra', $data);
        }
        public function hapus($id_mitra)
		{
			$where = array('f_id_mitra' => $id_mitra);
			$this->model_mitra->hapus_data($where, 'tb_mitra');
			redirect('admin/data_mitra/index');
		}
	}
?>