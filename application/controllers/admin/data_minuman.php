<?php 

	class Data_minuman extends CI_Controller {

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
			$data['minuman'] = $this->model_minuman->tampil_data()->result();
			$data['title'] = 'Data Menu Minuman';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_minuman', $data);
			$this->load->view('templates_admin/footer');
		}
		public function tambah_aksi ()
		{
			$this->form_validation->set_rules('f_nama_minuman','Nama Minuman','required', array('required' => 'Nama Minuman Wajib diisi'));
			$this->form_validation->set_rules('f_harga','Harga','required', array('required' => 'Harga wajib diisi'));
			$this->form_validation->set_rules('f_nama_warung','Nama warung','required', array('required' => 'Nama Warung wajib diisi'));
			if (empty($_FILES['f_gambar']['name'])){
			$this->form_validation->set_rules('f_gambar','Gambar','required', array('required' => 'Gambar wajib diisi'));
			}
			if ($this->form_validation->run() == FALSE)
			{
				$data['minuman'] = $this->model_minuman->tampil_data()->result();
				$this->session->set_flashdata('gagal_tambah','<div class="alert alert-danger alert-dismissible" role="alert">
				Data Gagal Ditambahkan 
				<button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				$data['title'] = 'Data Menu Makanan';
				$this->load->view('templates_admin/header', $data);
				$this->load->view('templates_admin/sidebar');
				$this->load->view('admin/data_minuman', $data);
				$this->load->view('templates_admin/footer');
			}else{
				$nama_minuman 	= $this->input->post('f_nama_minuman');
				$harga 			= $this->input->post('f_harga');
				$nama_warung 	= $this->input->post('f_nama_warung');
				$gambar 		= $_FILES['f_gambar']['name'];
				if ($gambar = ''){}else{
					$config ['upload_path'] = './uploads/minuman';
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
					'f_nama_minuman'	=>$nama_minuman,
					'f_harga'			=>$harga,
					'f_nama_warung'		=>$nama_warung,
					'f_gambar'			=>$gambar
	
				);
	
				$this->model_minuman->tambah_data($data, 'tb_minuman');
				$this->session->set_flashdata('berhasil_tambah','<div class="alert alert-success alert-dismissible" role="alert">
				Data Berhasil Ditambahkan 
				<button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('admin/data_minuman/index');
				}
		}

		public function edit($id_minuman)
		{
			$where = array('f_id_minuman' => $id_minuman);
			$data['minuman'] = $this->model_minuman->edit_data($where,'tb_minuman')->result();
			$data['title'] = 'Edit Menu Minuman';

			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/edit_minuman', $data);

		}

		public function update()
		{
			$this->form_validation->set_rules('f_nama_minuman','Nama Minuman','required', array('required' => 'Nama Minuman Wajib diisi'));
			$this->form_validation->set_rules('f_harga','Harga','required', array('required' => 'Harga wajib diisi'));
			$this->form_validation->set_rules('f_nama_warung','Nama warung','required', array('required' => 'Nama Warung wajib diisi'));
			if ($this->form_validation->run() == FALSE)
			{
				$data['minuman'] = $this->model_minuman->tampil_data()->result();
				$this->session->set_flashdata('gagal_update','<div class="alert alert-danger alert-dismissible" role="alert">
				Data Gagal Diupdate
				<button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				$data['title'] = 'Edit Menu Makanan';
				$this->load->view('templates_admin/header', $data);
				$this->load->view('templates_admin/sidebar');
				$this->load->view('admin/data_minuman', $data);
				$this->load->view('templates_admin/footer');
			}else{
				$config ['upload_path'] = './uploads/minuman';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['remove_spaces'] = TRUE;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('f_gambar')){
					$id_minuman 	= $this->input->post('f_id_minuman');
					$nama_minuman 	= $this->input->post('f_nama_minuman');
					$harga			= $this->input->post('f_harga');
					$nama_warung    = $this->input->post('f_nama_warung');
					
					
					$data = array (
						'f_nama_minuman'	=>$nama_minuman,
						'f_harga'			=>$harga,
						'f_nama_warung'	    =>$nama_warung
					
					);
	
					$where = array (
						'f_id_minuman' => $id_minuman
					);
	
					$this->model_minuman->update_data($where,$data,'tb_minuman');
					$this->session->set_flashdata('gagal_update','<div class="alert alert-danger alert-dismissible" role="alert">
					Data Gagal Diupdate 
					<button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
					redirect('admin/data_minuman/index');
				}else{
					$id_minuman 	= $this->input->post('f_id_minuman');
					$nama_minuman 	= $this->input->post('f_nama_minuman');
					$harga			= $this->input->post('f_harga');
					$nama_warung    = $this->input->post('f_nama_warung');
					$gambar			= $this->upload->data('file_name');
					
					$data = array (
						'f_nama_minuman'	=>$nama_minuman,
						'f_harga'			=>$harga,
						'f_nama_warung'	    =>$nama_warung,
						'f_gambar'			=>$gambar
					);
	
					$where = array (
						'f_id_minuman' => $id_minuman
					);
	
					$this->model_minuman->update_data($where,$data,'tb_minuman');
					$this->session->set_flashdata('berhasil_update','<div class="alert alert-success alert-dismissible" role="alert">
					Data Berhasil Diupdate 
					<button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
					redirect('admin/data_minuman/index');
				}
			}
		}

		public function hapus($id_minuman)
		{
			$where = array('f_id_minuman' => $id_minuman);
			$this->model_minuman->hapus_data($where, 'tb_minuman');
			redirect('admin/data_minuman/index');
		}
		public function detail_minuman_admin($id_minuman)
		{
			$data['minuman'] = $this->model_minuman->detail_minuman_admin($id_minuman);
			$data['title'] = 'Detail Menu Makanan';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/detail_minuman_admin', $data);
		}

	}

?>