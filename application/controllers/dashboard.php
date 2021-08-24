 <?php
	class Dashboard extends CI_Controller{
		public function index()
		{
			$data ['makanan'] = $this->model_kategori_makanan->tampil_data()->result();
			$data['title'] = 'Dashboard';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard', $data);
			$this->load->view('templates/footer');
		}
	}
?>