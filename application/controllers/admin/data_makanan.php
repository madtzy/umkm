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
			$this->form_validation->set_rules('f_nama_makanan','Nama Makanan','required', array('required' => 'Nama Makanan Wajib diisi'));
			$this->form_validation->set_rules('f_harga','Harga','required', array('required' => 'Harga wajib diisi'));
			$this->form_validation->set_rules('f_nama_warung','Nama warung','required', array('required' => 'Nama Warung wajib diisi'));
			if (empty($_FILES['f_gambar']['name'])){
			$this->form_validation->set_rules('f_gambar','Gambar','required', array('required' => 'Gambar wajib diisi'));
			}
			if ($this->form_validation->run() == FALSE)
			{
				$data['makanan'] = $this->model_makanan->tampil_data()->result();
				$this->session->set_flashdata('gagal_tambah','<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan</div>');
				$data['title'] = 'Data Makanan';
				$this->load->view('templates_admin/header', $data);
				$this->load->view('templates_admin/sidebar');
				$this->load->view('admin/data_makanan', $data);
				$this->load->view('templates_admin/footer');
			}else{
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
					'f_nama_makanan'	=>$nama_makanan,
					'f_harga'			=>$harga,
					'f_nama_warung'		=>$nama_warung,
					'f_gambar'			=>$gambar
	
				);
	
				$this->model_makanan->tambah_makanan($data, 'tb_makanan');
				$this->session->set_flashdata('berhasil_tambah','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
				redirect('admin/data_makanan/index');
				}
		}

		public function edit($id_makanan)
		{
			$where = array('f_id_makanan' => $id_makanan);
			$data['makanan'] = $this->model_makanan->edit_makanan($where,'tb_makanan')->result();
			$data['title'] = 'Edit Makanan';

			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/edit_makanan', $data);

		}

		public function update()
		{
			$this->form_validation->set_rules('f_nama_makanan','Nama Makanan','required', array('required' => 'Nama Makanan Wajib diisi'));
			$this->form_validation->set_rules('f_harga','Harga','required', array('required' => 'Harga wajib diisi'));
			$this->form_validation->set_rules('f_nama_warung','Nama warung','required', array('required' => 'Nama Warung wajib diisi'));
			if ($this->form_validation->run() == FALSE)
			{
				$data['makanan'] = $this->model_makanan->tampil_data()->result();
				$this->session->set_flashdata('gagal_update','<div class="alert alert-danger" role="alert">Data Gagal Diupdate</div>');
				$data['title'] = 'Data Makanan';
				$this->load->view('templates_admin/header', $data);
				$this->load->view('templates_admin/sidebar');
				$this->load->view('admin/data_makanan', $data);
				$this->load->view('templates_admin/footer');
			}else{
				$id_makanan 	= $this->input->post('f_id_makanan');
				$nama_makanan 	= $this->input->post('f_nama_makanan');
				$harga			= $this->input->post('f_harga');
				$nama_warung    = $this->input->post('f_nama_warung');
				

				$data = array (
					'f_nama_makanan'	=>$nama_makanan,
					'f_harga'			=>$harga,
					'f_nama_warung'	    =>$nama_warung
				
				);

				$where = array (
					'f_id_makanan' => $id_makanan
				);

				$this->model_makanan->update_data($where,$data,'tb_makanan');
				$this->session->set_flashdata('berhasil_update','<div class="alert alert-success" role="alert">Data Berhasil Diupdate</div>');
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