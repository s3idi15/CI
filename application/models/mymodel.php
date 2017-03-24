<?php
    
class Mymodel extends CI_Model
{
    
    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result();
    }
    
    
}
?>