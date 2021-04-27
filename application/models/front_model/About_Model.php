<?php

class About_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_des()
    {
        $data = $this->db->get('about');
        if($data->num_rows()){
            return $data->result_array();
        }
        else{
            return null;
        }
    }
}