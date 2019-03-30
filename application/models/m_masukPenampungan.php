<?php
class M_masukPenampungan extends CI_Model
{
	public function masukPenampungan ($email, $password)
	{
		$this->db->select('*');
        $this->db->from('penampungan');
        $this->db->where('email =', $email);
        $this->db->where('password =', $password);
        
         $query = $this->db->get();
         return $query;
	}
}