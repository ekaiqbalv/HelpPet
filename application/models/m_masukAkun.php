<?php
class M_masukAkun extends CI_Model
{
	public function masukAkun ($email, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email =', $email);
        $this->db->where('password =', $password);
        
         $query = $this->db->get();
         return $query;
    }
}