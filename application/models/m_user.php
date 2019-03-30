<?php
class M_user extends CI_Model
{
	public function insertUser ($data)
	{
		$this->db->insert('user', $data);
	}

	function tampil_user($where){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($where);

		$query = $this->db->get();
		return $query;
	}
}