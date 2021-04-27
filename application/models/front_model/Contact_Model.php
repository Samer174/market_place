<?php

class Contact_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_des()
    {
        $data = $this->db->get('contact_us');
        if($data->num_rows()){
            return $data->result_array();
        }
        else{
            return null;
        }
    }
}