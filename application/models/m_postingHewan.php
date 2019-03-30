<?php
class M_postingHewan extends CI_Model
{
	public function insertPosting ($data)
	{
		$this->db->insert('postinghewan', $data);
	}

	function tampil_postingHewan(){
		$this->db->select('*');
		$this->db->from('postinghewan');

		$query = $this->db->get();
		return $query;
    }
    
}