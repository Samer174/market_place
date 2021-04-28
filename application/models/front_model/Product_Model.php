<?php
class Product_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
    }


    public function get_products()
    {
        $query = $this->db->get("product");

        return $query->result_array();
    }

    public function get_single_product($id)
    {
        $this->db->select('product.*, brand.brand_id, brand.brand_name, brand.brand_name_ar, tag.tag_id, tag.tag_name, tag.tag_name_ar');
        $this->db->from('product');
        $this->db->where('id',$id);
       
        $this->db->join('brand', 'product.product_brand = brand.brand_id','left');
        $this->db->join('tag', 'product.product_tag = tag.tag_id','left');
        $query = $this->db->get()->row();

        return $query;
    }

    public function get_cat($id)
    {
            $this->db->select('product_category.category_id,product.id,product.*');              
            $this->db->from('product,product_category');
            $this->db->where('product.id=product_category.product_id');
            $this->db->where('product_category.category_id',$id);
            $q= $this->db->get();
            return $q->result_array();

            // print_r($q->result_array());
            
    }



    public function get_all_images($id)
    {
            $query = $this->db->query("SELECT * FROM product_image WHERE product_id = '$id'");
            $row = $query->result_array();
            return $row;
    }


    public function get_color($id)
    {
            $query = $this->db->query("SELECT * FROM product_size  WHERE product_id = '$id'");
            $row = $query->result_array();
            return $row;
    }




    public function get_sizes($id)
    {
            $this->db->select('product_size.product_id,product_size.size_id,size.size_id,size.name');              
            $this->db->from('product_size,size');
            $this->db->where('size.size_id=product_size.size_id');
            $this->db->where('product_size.product_id',$id);
            $q= $this->db->get();
            return $q->result_array();
            
            
    }

    public function get_latest_products()
    {
        $this->db->select('*'); 
         $this->db->from('product'); 
        $this->db->order_by('id','DESC');
        $this->db->limit(10);
       $q = $this->db->get();
       $result = $q->result_array();
       return $result;
       
    }

    public function get_wish($id)
    {
    
        $this->db->select('user_favorite.user_id,user_favorite.product_id,product.id,product.name,product.price,product.status,product.id');              
        $this->db->from('product,user_favorite');
        $this->db->where('user_favorite.product_id=product.id');
        $this->db->where('user_favorite.user_id',$id);
        $q= $this->db->get();
        return $q->result_array();
       
        
    }

    public function get_sizes_all()
    {
            $this->db->select('product_size.product_id,product_size.size_id,size.size_id,size.name,product_size.product_stock_color');              
            $this->db->from('product_size,size');
            $this->db->where('size.size_id=product_size.size_id');
           
            $q= $this->db->get();
            return $q->result_array();
            
            
    }

    

    public function get_related_products($pro_tag)
    {
        $this->db->select('*'); 
        $this->db->from('product'); 
        $this->db->where('product_tag',$pro_tag);
       $q = $this->db->get();
       $result = $q->result_array();
       return $result;
       
    }

}
