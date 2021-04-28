<?php
class register_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function insert_register($data)
    {
        $this->db->insert('app_user', $data);
        $insert_id = $this->db->insert_id();
        $this->db->select('*');
        $this->db->from('app_user');
        $this->db->where('u_id', $insert_id);
        $query = $this->db->get();
        return $query->row();
    }
}
