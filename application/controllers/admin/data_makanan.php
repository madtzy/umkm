<?php 

	class Data_makanan extends CI_Controller {

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
			$data['makanan'] = $this->model_makanan->tampil_data()->result();
			$data['title'] = 'Data Makanan';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_makanan', $data);
			$this->load->view('templates_admin/footer');
		}
		public function tambah_aksi ()
		{
				$id_warung		= $this->input->post('f_id_warung');
				$nama_makanan 	= $this->input->post('f_nama_makanan');
				$harga 			= $this->input->post('f_harga');
				$nama_warung 	= $this->input->post('f_nama_warung');
				$gambar 		= $_FILES['f_gambar']['name'];
				if ($gambar = ''){}else{
					$config ['upload_path'] = './uploads/makanan';
					$config ['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['remove_spaces'] = TRUE;

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('f_gambar')){
						echo "Gambar Gagal di Upload";
					}else {
						$gambar = $this->upload->data('file_name');
					}
				}
				$data = array (
					'f_id_warung'		=>$id_warung,
					'f_nama_makanan'	=>$nama_makanan,
					'f_harga'			=>$harga,
					'f_nama_warung'		=>$nama_warung,
					'f_gambar'			=>$gambar
	
				);
	
				$this->model_makanan->tambah_data($data, 'tb_makanan');
				$this->session->set_flashdata('berhasil_tambah','<div class="alert alert-success alert-dismissible" role="alert">
				Data Berhasil Ditambahkan 
				<button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('admin/data_makanan/index');
		}

		public function edit($id_makanan)
		{
			$where = array('f_id_makanan' => $id_makanan);
			$data['makanan'] = $this->model_makanan->edit_data($where,'tb_makanan')->result();
			$data['title'] = 'Edit makanan';

			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/edit_makanan', $data);

		}

		public function update()
		{
				$config ['upload_path'] = './uploads/makanan';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['remove_spaces'] = TRUE;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('f_gambar')){
					$id_makanan 	= $this->input->post('f_id_makanan');
					$id_warung 		= $this->input->post('f_id_warung');
					$nama_makanan 	= $this->input->post('f_nama_makanan');
					$harga			= $this->input->post('f_harga');
					$nama_warung    = $this->input->post('f_nama_warung');
					
					
					$data = array (
						'f_id_warung'		=>$id_warung,
						'f_nama_makanan'	=>$nama_makanan,
						'f_harga'			=>$harga,
						'f_nama_warung'	    =>$nama_warung
					
					);
	
					$where = array (
						'f_id_makanan' => $id_makanan
					);
	
					$this->model_makanan->update_data($where,$data,'tb_makanan');
					$this->session->set_flashdata('gagal_update','<div class="alert alert-danger alert-dismissible" role="alert">
					Data Gagal Diupdate 
					<button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
					redirect('admin/data_makanan/index');
				}else{
					$id_makanan 	= $this->input->post('f_id_makanan');
					$id_warung 		= $this->input->post('f_id_warung');
					$nama_makanan 	= $this->input->post('f_nama_makanan');
					$harga			= $this->input->post('f_harga');
					$nama_warung    = $this->input->post('f_nama_warung');
					$gambar			= $this->upload->data('file_name');

					$data = array (
						'f_id_warung'		=>$id_warung,
						'f_nama_makanan'	=>$nama_makanan,
						'f_harga'			=>$harga,
						'f_nama_warung'	    =>$nama_warung,
						'f_gambar'			=>$gambar
					
					);
	
					$where = array (
						'f_id_makanan' => $id_makanan
					);
	
					$this->model_makanan->update_data($where,$data,'tb_makanan');
					$this->session->set_flashdata('berhasil_update','<div class="alert alert-success alert-dismissible" role="alert">
					Data Berhasil Diupdate 
					<button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
					redirect('admin/data_makanan/index');
				}
		}

		public function hapus($id_makanan)
		{
			$where = array('f_id_makanan' => $id_makanan);
			$this->model_makanan->hapus_data($where, 'tb_makanan');
			redirect('admin/data_makanan/index');
		}
		public function detail_makanan_admin($id_makanan)
		{
			$data['makanan'] = $this->model_makanan->detail_makanan_admin($id_makanan);
			$data['title'] = 'Detail Makanan';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/detail_makanan_admin', $data);
		}

	}

?>