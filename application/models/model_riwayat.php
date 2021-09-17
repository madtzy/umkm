<?php 
	class Model_riwayat extends CI_Model{
		
		public function tampil_data()
		{
			$result	= $this->db->get('tb_pembeli');
			if($result->num_rows() > 0){
				return $result->result();
			}else{
				return FALSE;	
			}
		}
		public function tambah_riwayat($data,$table)
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
		public function ambil_id_makanan($id_pembeli)
		{
			$this->db->select('*');
			$this->db->from('tb_makanan');
			$this->db->join('tb_pembeli', 'tb_pembeli.f_id_makanan=tb_makanan.f_id_makanan','INNER');
			$result =  $this->db->where('f_id_pembeli', $id_pembeli)->get();
			if($result->num_rows() > 0){
				return$result->result();
			}else{
				return FALSE;
			}
		}
		public function ambil_id_minuman($id_pembeli)
		{
			$this->db->select('*');
			$this->db->from('tb_minuman');
			$this->db->join('tb_pembeli', 'tb_pembeli.f_id_minuman=tb_minuman.f_id_minuman','INNER');
			$result =  $this->db->where('f_id_pembeli', $id_pembeli)->get();
			if($result->num_rows() > 0){
				return$result->result();
			}else{
				return FALSE;
			}
		}
	}
?>