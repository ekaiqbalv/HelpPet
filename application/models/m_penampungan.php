<?php
class M_penampungan extends CI_Model
{
	public function insertPenampungan ($data)
	{
		$this->db->insert('penampungan', $data);
	}

	function tampil_penampungan(){
		$this->db->select('*');
		$this->db->from('penampungan');
		

		$query = $this->db->get();
		return $query;
	}
}