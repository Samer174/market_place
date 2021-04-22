<?php

class Checkout_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_site_setting_tax()
    {
        $this->db->where('code','TAX');
        $query = $this->db->get("config")->row();

        return $query;
    }

    public function insert_order_data($data){
        // Add created and modified date if not included
        if(!array_key_exists("create_date", $data)){
            $data['create_date'] = date("Y-m-d H:i:s");
        }       
        // Insert order data
        $insert = $this->db->insert('order_product', $data);
        // Return the status
        return $insert?$this->db->insert_id():false;
    }

    public function get_size_id($size)
    {
        $this->db->where('name',$size);
        $query = $this->db->get("size")->row();

        return $query;
    }

    function get_user_info($user_id)
    {
        $data=$this->db->query('SELECT * FROM app_user WHERE u_id="'.$user_id.'"')->result_array();
        return $data;
    }

    public function insertOrderItems($data = array()) {
        
        // Insert order items
        $insert = $this->db->insert_batch('order', $data);

        // Return the status
        return $insert?true:false;
    }

    public function get_order($order_id)
    {
        $this->db->where('order_id',$order_id);
        $query = $this->db->get("order_product")->row();

        return $query;
    }

    public function products_of_order($order_id)
    {
        $query = $this->db->query('SELECT `order`.*, product.name, product.name_ar, product.image FROM `order` LEFT JOIN product ON product.id = order.product_id WHERE order.order_id='.$order_id)->result_array();

        return $query;
    }
}