<?php 

	class Data_warung extends CI_Controller {
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
			$data['warung'] = $this->model_warung->tampil_data()->result();
			$data['title'] = 'Data Warung';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_warung', $data);
			$this->load->view('templates_admin/footer');
		}
		public function tambah_aksi ()
		{
			$this->form_validation->set_rules('f_nama_warung','Nama Warung','required', array('required' => 'Nama Warung Wajib diisi'));
			$this->form_validation->set_rules('f_alamat','Alamat','required', array('required' => 'Alamat wajib diisi'));
			$this->form_validation->set_rules('f_no_telp','No Telp','required', array('required' => 'No Telp wajib diisi'));
			if (empty($_FILES['f_gambar']['name'])){
			$this->form_validation->set_rules('f_gambar','Gambar','required', array('required' => 'Gambar wajib diisi'));
			}
			if ($this->form_validation->run() == FALSE)
			{
				$data['warung'] = $this->model_warung->tampil_data()->result();
				$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan</div>');
				$data['title'] = 'Data Warung';
				$this->load->view('templates_admin/header', $data);
				$this->load->view('templates_admin/sidebar');
				$this->load->view('admin/data_warung', $data);
				$this->load->view('templates_admin/footer');
			}else{
				$nama_warung 	= $this->input->post('f_nama_warung');
				$alamat 		= $this->input->post('f_alamat');
				$no_telp 	    = $this->input->post('f_no_telp');
				$gambar 		= $_FILES['f_gambar']['name'];
				if ($gambar = ''){}else{
					$config ['upload_path'] = './uploads/warung';
					$config ['allowed_types'] = 'jpg|jpeg|png|gif';

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
				$this->session->set_flashdata('berhasil','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
				redirect('admin/data_warung/index');
				}
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
			$this->form_validation->set_rules('f_nama_warung','Nama Warung','required', array('required' => 'Nama Warung Wajib diisi'));
			$this->form_validation->set_rules('f_alamat','Alamat','required', array('required' => 'Alamat wajib diisi'));
			$this->form_validation->set_rules('f_no_telp','No Telp','required', array('required' => 'No Telp wajib diisi'));
			if ($this->form_validation->run() == FALSE)
			{
				$data['warung'] = $this->model_warung->tampil_data()->result();
				$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert">Data Gagal Diupdate</div>');
				$data['title'] = 'Data Warung';
				$this->load->view('templates_admin/header', $data);
				$this->load->view('templates_admin/sidebar');
				$this->load->view('admin/data_warung', $data);
				$this->load->view('templates_admin/footer');	
			}else{
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
				$this->session->set_flashdata('berhasil_update','<div class="alert alert-success" role="alert">Data Berhasil Diupdate</div>');
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