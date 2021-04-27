<?php

class FAQ_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_faq()
    {
        $data = $this->db->get('faq');
        if($data->num_rows()){
            return $data->result_array();
        }
        else{
            return null;
        }
    }
}