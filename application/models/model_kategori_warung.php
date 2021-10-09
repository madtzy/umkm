<?php
	class Model_kategori_warung extends CI_Model{

		public function tampil_data	()
		{
			return $this->db->get('tb_warung');
		}
		public function detail_warung($id_warung)
		{
			$result = $this->db->where('f_id_warung', $id_warung)->get('tb_warung');
			if($result->num_rows() > 0){
				return $result->result();
			}else {
				return FALSE;
			}
		}
		public function get_keyword($keyword)
		{
			$this->db->select('*');
			$this->db->from('tb_warung');
			$this->db->like('f_nama_warung', $keyword);
			$this->db->or_like('f_alamat',$keyword);
			$this->db->or_like('f_no_telp',$keyword);
			return $this->db->get()->result();
		}
		public function ambil_makanan_warung($id_warung)
		{
			return $this->db->get_where("tb_makanan", array('f_id_warung' => $id_warung));
		}
		public function ambil_minuman_warung($id_Warung)
		{
			return $this->db->get_where("tb_minuman", array('f_id_Warung' => $id_Warung));
		}
	}
?>