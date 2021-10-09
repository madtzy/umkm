<?php 

	class Data_warung extends CI_Controller {
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
			$data['warung'] = $this->model_warung->tampil_data()->result();
			$data['title'] = 'Data Warung';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_warung', $data);
			$this->load->view('templates_admin/footer');
		}
		public function tambah_aksi ()
		{
				$nama_warung 	= $this->input->post('f_nama_warung');
				$alamat 		= $this->input->post('f_alamat');
				$no_telp 	    = $this->input->post('f_no_telp');
				$gambar 		= $_FILES['f_gambar']['name'];
				if ($gambar = ''){}else{
					$config ['upload_path'] = './uploads/warung';
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
					'f_nama_warung'	=>$nama_warung,
					'f_alamat'		=>$alamat,
					'f_no_telp'		=>$no_telp,
					'f_gambar'		=>$gambar

				);
				$this->model_warung->tambah_warung($data, 'tb_warung');
				$this->session->set_flashdata('berhasil','<div class="alert alert-success alert-dismissible" role="alert">
				Data Berhasil Ditambahkan 
				<button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('admin/data_warung/index');
		}

		public function edit($id_warung)
		{
			$where = array('f_id_warung' => $id_warung);
			$data['warung'] = $this->model_warung->edit_warung($where,'tb_warung')->result();
			$data['title'] = 'Edit Warung';

			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/edit_warung', $data);

		}

		public function update()
		{	
				$config ['upload_path'] = './uploads/warung';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['remove_spaces'] = TRUE;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('f_gambar')){
					$id_warung 		= $this->input->post('f_id_warung');
					$nama_warung 	= $this->input->post('f_nama_warung');
					$alamat			= $this->input->post('f_alamat');
					$no_telp    	= $this->input->post('f_no_telp');
					
	
					$data = array (
						'f_nama_warung'		=>$nama_warung,
						'f_alamat'			=>$alamat,
						'f_no_telp'	        =>$no_telp
					
					);
	
					$where = array (
						'f_id_warung' => $id_warung
					);
	
					$this->model_warung->update_data($where,$data,'tb_warung');
					$this->session->set_flashdata('gagal_update','<div class="alert alert-danger alert-dismissible" role="alert">
					Data Gagal Diupdate 
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
					redirect('admin/data_warung/index');
				}else{
					$id_warung 		= $this->input->post('f_id_warung');
					$nama_warung 	= $this->input->post('f_nama_warung');
					$alamat			= $this->input->post('f_alamat');
					$no_telp    	= $this->input->post('f_no_telp');
					$gambar			= $this->upload->data('file_name');
					
					$data = array (
						'f_nama_warung'		=>$nama_warung,
						'f_alamat'			=>$alamat,
						'f_no_telp'	        =>$no_telp,
						'f_gambar'			=>$gambar
					
					);
	
					$where = array (
						'f_id_warung' => $id_warung
					);
	
					$this->model_warung->update_data($where,$data,'tb_warung');
					$this->session->set_flashdata('berhasil_update','<div class="alert alert-success alert-dismissible" role="alert">
					Data Berhasil Diupdate 
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
					redirect('admin/data_warung/index');
				}
		}

		public function hapus($id_warung)
		{
			$where = array('f_id_warung' => $id_warung);
			$this->model_warung->hapus_data($where, 'tb_warung');
			redirect('admin/data_warung/index');
		}
		public function detail_warung_admin($id_warung)
		{
			$data['warung'] = $this->model_warung->detail_warung_admin($id_warung);
			$data['title'] = 'Detail Warung';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/detail_warung_admin', $data);
		}

	}

?>