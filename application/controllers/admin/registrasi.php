<?php
    class Registrasi extends CI_Controller{
        public function daftar()
        {
            $this->form_validation->set_rules('f_nama','Nama','required',array('required' => 'Nama Wajib Diisi!'));
            $this->form_validation->set_rules('f_username','Username','required|is_unique[tb_admin.f_username]',array('required' => 'Username Wajib Diisi!','is_unique' => 'Username Sudah Ada!'));
            $this->form_validation->set_rules('f_password_1','Password','required|min_length[6]|matches[f_password_2]',
                array(
                        'required' => 'Password Wajib Diisi!',
                        'min_length' => 'Password Wajib Minimal 6 Karakter!',
                        'matches' => 'Password Tidak Cocok!'
                     )
            );
            $this->form_validation->set_rules('f_password_2','Password','required|matches[f_password_1]');

            if($this->form_validation->run() == FALSE)
            {
                $data['title'] = 'Form Register';
                $this->load->view('admin/registrasi');
                $this->load->view('templates_admin/header', $data);
                $this->load->view('templates_admin/footer');
            }else{
                $data = array(
                    'f_id'        =>'',
                    'f_nama'      =>$this->input->post('f_nama'),
                    'f_username'  =>$this->input->post('f_username'),
                    'f_password'  =>$this->input->post('f_password_1')
                );

                $this->db->insert('tb_admin', $data);
                $this->session->set_flashdata('berhasil','<div class="alert alert-success" role="alert">Selamat Akun Anda Terdaftar. Silahkan Login</div>');
                redirect('admin/auth/login');
            }
            
        }
    }
?>