<?php
	class Mitra extends CI_Controller{
		public function tampil_mitra()
		{
			$data['title'] = 'Form Mitra Warung';
			$this->load->view('templates/header', $data);
			$this->load->view('mitra');
		}
		public function tambah_mitra()
		{
			$this->form_validation->set_rules('f_nama_mitra','Nama Mitra','required', array('required' => 'Nama Mitra Wajib diisi'));
			$this->form_validation->set_rules('f_nama_warung','Nama Warung','required', array('required' => 'Nama Warung Wajib diisi'));
			$this->form_validation->set_rules('f_alamat_warung','Alamat Warung','required', array('required' => 'Alamat Warung wajib diisi'));
			$this->form_validation->set_rules('f_no_telp_warung','No. Telp Warung','required', array('required' => 'No. Telp Warung wajib diisi'));
			if ($this->form_validation->run() == FALSE)
			{
				$data['title'] = 'Form Mitra Warung';
				$this->load->view('templates/header', $data);
				$this->load->view('mitra');
			}else{

				$nama_mitra     = $this->input->post('f_nama_mitra');
				$nama_warung	= $this->input->post('f_nama_warung');
				$alamat_warung	= $this->input->post('f_alamat_warung');
				$no_telp_warung	= $this->input->post('f_no_telp_warung');
		
				$data = array (
					'f_nama_mitra'      =>$nama_mitra,
					'f_nama_warung'	    =>$nama_warung,
					'f_alamat_warung'	=>$alamat_warung,
					'f_no_telp_warung'	=>$no_telp_warung
	
				);
				$this->model_mitra->tambah_mitra($data, 'tb_mitra');
				redirect("https://wa.me/6289519876677?text=Nama%20%3A%20$nama_mitra%0ANama%20Warung%20%3A%20$nama_warung%0AAlamat%20Warung%20%3A%20$alamat_warung%0ANo.%20Telp%20Warung%20%3A%20$no_telp_warung");
			}
		}
	}
?>