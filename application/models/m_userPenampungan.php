<?php
class M_userPenampungan extends CI_Model
{
	public function insertUserPenampungan ($data)
	{
		$this->db->insert('penampungan', $data);
	}
}