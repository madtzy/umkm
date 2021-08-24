<?php
	class Model_auth extends CI_Model{
		public function cek_login()
		{
			$username = set_value('f_username');
			$password = set_value('f_password');

			$result   = $this->db->where('f_username', $username)
								 ->where('f_password', $password)
								 ->limit(1)
								 ->get('tb_admin');
			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return array();
			}
		}
	}
?>


