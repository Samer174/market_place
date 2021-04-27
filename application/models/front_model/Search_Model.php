<?php
class Search_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function get_products($search_value)
    {
        $this->db->select("*");
        $this->db->from("product");
        $this->db->like("name", $search_value);
        $this->db->or_like("name_ar", $search_value);
        $query = $this->db->get()->result_array();

        return $query;
    }

    

}
