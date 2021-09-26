<?php 

class M_mahasiswa extends CI_Model {
	public function tampil_data(){
		return $this->db->get('tb_mhs');
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table,$data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function data_edit($cond, $table)
	{
		return $this->db->get_where($table,$cond);
	}

	public function update_data($cond, $data, $table)
	{
		$this->db->where($cond);
		$this->db->update($table,$data);
	}

	public function detail_data($id = NULL)
	{
		$query = $this->db->get_where('tb_mhs', array ('id' => $id))->row();
		return $query;
	}

}