<?php 
	class Model_minuman extends CI_Model{

		public function tampil_data()
		{
			return $this->db->get('tb_minuman');
		}
		public function tambah_data($data,$table)
		{
			$this->db->insert($table,$data);
		}
		public function edit_data($where,$table)
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
		public function detail_minuman_admin($id_minuman)
		{
			$result = $this->db->where('f_id_minuman', $id_minuman)->get('tb_minuman');
			if($result->num_rows() > 0){
				return $result->result();
			}else {
				return FALSE;
			}
		}
	}
 ?>