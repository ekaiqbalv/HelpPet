<?php
class M_user extends CI_Model
{
	public function insertUser ($data)
	{
		$this->db->insert('user', $data);
	}
}