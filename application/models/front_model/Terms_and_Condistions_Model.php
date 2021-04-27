<?php

class Terms_and_Condistions_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_des()
    {
        $data = $this->db->get('term_condition');
        if($data->num_rows()){
            return $data->row();
        }
        else{
            return null;
        }
    }
}