<?php

class Testimonial_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_testimonial()
    {
        $data = $this->db->select('*')
        ->from('testimonial')
        ->order_by('testimonial_id','DESC')->get();
        if($data->num_rows()){
            return $data->result_array();
        }
        else{
            return null;
        }
    }
}