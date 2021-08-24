<?php 
	class Model_warung extends CI_Model{

		public function tampil_data()
		{
			return $this->db->get('tb_warung');
		}
		public function tambah_warung($data,$table)
		{
			$this->db->insert($table,$data);
		}
		public function edit_warung($where,$table)
		{
			return $this->db->get_where($table,$where);
		}
		public function update_data($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		public function hapus_data($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
		public function find($id_barang)
		{
			$result = $this->db->where('id_barang', $id_barang)
							   ->limit(1)
							   ->get('tb_barang');
			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return array();
			}
		}
		public function detail_barang($id_barang)
		{
			$result = $this->db->where('id_barang', $id_barang)->get('tb_barang');
			if($result->num_rows() > 0){
				return $result->result();
			}else {
				return FALSE;
			}
		}
		public function detail_warung_admin($id_warung)
		{
			$result = $this->db->where('f_id_warung', $id_warung)->get('tb_warung');
			if($result->num_rows() > 0){
				return $result->result();
			}else {
				return FALSE;
			}
		}
	}
 ?>