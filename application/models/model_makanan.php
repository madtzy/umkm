<?php 
	class Model_makanan extends CI_Model{

		public function tampil_data()
		{
			return $this->db->get('tb_makanan');
		}
		public function tambah_makanan($data,$table)
		{
			$this->db->insert($table,$data);
		}
		public function edit_makanan($where,$table)
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
		public function detail_makanan_admin($id_makanan)
		{
			$result = $this->db->where('f_id_makanan', $id_makanan)->get('tb_makanan');
			if($result->num_rows() > 0){
				return $result->result();
			}else {
				return FALSE;
			}
		}
	}
 ?>