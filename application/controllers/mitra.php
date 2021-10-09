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
				date_default_timezone_set('Asia/Jakarta');
				$nama_mitra     = $this->input->post('f_nama_mitra');
				$nama_warung	= $this->input->post('f_nama_warung');
				$alamat_warung	= $this->input->post('f_alamat_warung');
				$no_telp_warung	= $this->input->post('f_no_telp_warung');
				$gambar 		= $_FILES['f_gambar']['name'];
				if ($gambar = ''){}else{
					$config ['upload_path'] = './uploads/mitra';
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
					'f_nama_mitra'      =>$nama_mitra,
					'f_nama_warung'	    =>$nama_warung,
					'f_alamat_warung'	=>$alamat_warung,
					'f_tanggal'			=>date('Y-m-d H:i:s'),
					'f_no_telp_warung'	=>$no_telp_warung,
					'f_gambar'			=>$gambar
				);
				$this->model_mitra->tambah_mitra($data, 'tb_mitra');
				redirect("https://wa.me/6289519876677?text=Nama%20%3A%20$nama_mitra%0ANama%20Warung%20%3A%20$nama_warung%0AAlamat%20Warung%20%3A%20$alamat_warung%0ANo.%20Telp%20Warung%20%3A%20$no_telp_warung");
		}
	}
?>