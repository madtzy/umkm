<?php
	class Model_kategori_minuman extends CI_Model{
		
		public function tampil_data()
		{
			return $this->db->get('tb_minuman');
		}
		public function ambil_data($where,$table)
		{
			return $this->db->get_where($table,$where);
		}
		public function get_keyword($keyword)
		{
			$this->db->select('*');
			$this->db->from('tb_minuman');
			$this->db->like('f_nama_minuman', $keyword);
			$this->db->or_like('f_harga',$keyword);
			$this->db->or_like('f_nama_warung',$keyword);
			return $this->db->get()->result();
		}
	}
?>