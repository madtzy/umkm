<?php 
	class Model_mitra extends CI_Model{
        
        public function tampil_data()
		{
			$result	= $this->db->get('tb_mitra');
			if($result->num_rows() > 0){
				return $result->result();
			}else{
				return FALSE;	
			}
		}
        public function hapus_data($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
		public function tambah_mitra($data,$table)
		{
			return $this->db->insert($table,$data);
		} 
	}
?>