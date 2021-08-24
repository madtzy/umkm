<?php 
	class Model_history extends CI_Model{
		
		public function tampil_data()
		{
			$result	= $this->db->get('tb_pembeli');
			if($result->num_rows() > 0){
				return $result->result();
			}else{
				return FALSE;	
			}
		}
		public function tambah_history($data,$table)
		{
			return $this->db->insert($table,$data);
		}
		public function ambil_id_pembeli($id_pembeli)
		{
			$result = $this->db->where('f_id_pembeli', $id_pembeli)->limit(1)->get('tb_pembeli');
			if($result->num_rows() > 0){
				return$result->row();
			}else{
				return FALSE;
			}
		}
		public function ambil_id_pesanan($id_pembeli)
		{
			$result = $this->db->where('f_id_pembeli', $id_pembeli)->get('tb_pesanan');
			if($result->num_rows() > 0){
				return$result->result();
			}else{
				return FALSE;
			}
		}
	}
?>