<?php

class Brand_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_brands()
    {
        $this->db->select('brand.brand_id, brand.brand_name, brand.brand_name_ar, brand.category_id, category.name, category.name_ar');
        $this->db->from('brand');
        $this->db->join('category', 'category.id = brand.category_id');
        $query = $this->db->get();
        if($query->num_rows()){
            return $query->result_array();
        }
        else{
            return null;
        }
    }
}