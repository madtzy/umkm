<?php
	class Makanan extends CI_Controller{
		public function lihat_makanan()
		{
			$data ['makanan'] = $this->model_kategori_makanan->tampil_data()->result();
			$data['title'] = 'Makanan';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('makanan', $data);
			$this->load->view('templates/footer');
		}
		public function pembelian($id_makanan)
		{
			$where = array('f_id_makanan' => $id_makanan);
			$data['makanan'] = $this->model_kategori_makanan->ambil_data($where,'tb_makanan')->result();
			$data['title'] = 'Form Pembelian';
			$this->load->view('templates/header', $data);
			$this->load->view('pembelian', $data);
		}
		public function tambah_pembeli()
		{
			date_default_timezone_set('Asia/Jakarta');
			$nama_pembeli 	= $this->input->post('f_nama_pembeli');
			$alamat			= $this->input->post('f_alamat');
			$no_telp		= $this->input->post('f_no_telp');
			$jumlah_order	= $this->input->post('f_jumlah_order');
			$total_bayar	= $this->input->post('f_total_bayar');
			$nama_warung	= $this->input->post('f_nama_warung');
			$nama_makanan   = $this->input->post('f_nama_makanan');
			$harga 		= $this->input->post('f_harga');

			$data = array (
				'f_nama_pembeli'	=>$nama_pembeli,
				'f_alamat'			=>$alamat,
				'f_tanggal'			=>date('Y-m-d H:i:s'),
				'f_no_telp'			=>$no_telp,
				'f_jumlah_order'	=>$jumlah_order,
				'f_total_bayar'		=>$total_bayar

			);
			$test = $this->model_history->tambah_history($data, 'tb_pembeli');
			$where = array('f_nama_warung' => $nama_warung);
			$data['warung'] = $this->model_kategori_makanan->ambil_data($where,'tb_warung')->result();
			if($test){
              $phone = $data['warung'][0]->f_no_telp;
              redirect("https://wa.me/".$phone."?text=Nama%20Pembeli%20%3A%20$nama_pembeli%0ANama%20Makanan%20%3A%20$nama_makanan%0AAlamat%20%3A%20$alamat%0AJumlah%20Order%20%3A%20$jumlah_order%0AHarga%20%3A%20$harga%0ATotal%20Bayar%20%3A%20$total_bayar");
			}else{
				echo "Penyimpanan tidak berhasil";
			}
		}
		public function search()
		{
			$keyword = $this->input->post('keyword');
			$data['makanan'] = $this->model_kategori_makanan->get_keyword($keyword);
			$data['title'] = 'Search';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('makanan', $data);
			$this->load->view('templates/footer');
		}
	}
?>