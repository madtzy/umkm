<?php 
	class Model_dashboard extends CI_Model{

		public function data_makanan()
		{
			$this->db->select('*');
			$this->db->from('tb_makanan');
			return $this->db->get()->num_rows();
		}
		public function data_warung()
		{
			$this->db->select('*');
			$this->db->from('tb_warung');
			return $this->db->get()->num_rows();
		}
		public function data_history()
		{
			$this->db->select('*');
			$this->db->from('tb_pembeli');
			return $this->db->get()->num_rows();
		}
		public function data_join()
		{
			$this->db->select('*');
			$this->db->from('tb_join');
			return $this->db->get()->num_rows();
		}
	}
?>