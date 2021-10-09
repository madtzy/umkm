<?php
	class Auth extends CI_Controller{
		public function login()
		{
			$this->form_validation->set_rules('f_username','Username','required',array('required' => 'Username Wajib Diisi!'));
			$this->form_validation->set_rules('f_password','Password','required|min_length[6]',
				array(
						'required' => 'Password Wajib Diisi!',
						'min_length' => 'Password Wajib Minimal 6 Karakter!'
					 )
			);
			if ($this->form_validation->run() == FALSE)
			{
				$data['title'] = 'Form Login';
				$this->load->view('templates_admin/header', $data);
				$this->load->view('templates_admin/footer');
				$this->load->view('admin/form_login');
			}else{
				$auth = $this->model_auth->cek_login();
				if($auth == FALSE)
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible" role="alert">
					  Username atau Password Anda Salah!
					  <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
					redirect('admin/auth/login');
				}else{
					$this->session->set_userdata('f_username',$auth->f_username);
					redirect('admin/dashboard_admin');	
				}
			}
		}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('admin/auth/login');
		}
	}
?>