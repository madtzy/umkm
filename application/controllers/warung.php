<?php
	class Warung extends CI_Controller{
		public function lihat_warung()
		{
			$data['warung'] = $this->model_kategori_warung->tampil_data()->result();
			$data['title'] = 'Warung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('warung', $data);
			$this->load->view('templates/footer');
		}
		public function detail($id_warung)
		{
			$data['warung'] = $this->model_kategori_warung->detail_warung($id_warung);
			$data['title'] = 'Detail Warung';
			$this->load->view('templates/header', $data);
			$this->load->view('detail_warung', $data);
		}
		public function search()
		{
			$keyword = $this->input->post('keyword');
			$data['warung'] = $this->model_kategori_warung->get_keyword($keyword);
			$data['title'] = 'Search';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('warung', $data);
			$this->load->view('templates/footer');
		}
		public function masuk()
		{
			$warung = urldecode($this->uri->segment(3));
			$data ['makanan_warung'] = $this->model_kategori_warung->ambil_makanan_warung($warung)->result();
			$data ['minuman_warung'] = $this->model_kategori_warung->ambil_minuman_warung($warung)->result();
			$data['title'] = 'Masuk Warung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('masuk_warung', $data);
			$this->load->view('templates/footer');
		}
	}
?>