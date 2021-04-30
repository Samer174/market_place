<?php

class Profile_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_user_info($user_id)
    {
        $this->db->select('*')
        ->from('app_user')
        ->where('u_id',$user_id);
        $query = $this->db->get()->row();
        
        return $query;
 
    }

    public function products_of_order($user_id)
    {
        $query = $this->db->query('SELECT `order`.*,category.name as "category_name",category.name_ar as "category_name_ar", product.name as "product_name", product.name_ar as "product_name_ar", product.image FROM `order` LEFT JOIN product ON product.id = order.product_id JOIN product_category ON product.id=product_category.product_id JOIN category ON product_category.category_id=category.id WHERE order.user_id='.$user_id)->result_array();
        
        return $query;
    }

    public function order($user_id)
    {
        $query = $this->db->query('SELECT SUM(order.price), order.order_id, order_product.status FROM `order` JOIN order_product ON order.order_id = order_product.order_id  WHERE order.user_id='.$user_id.' GROUP BY order.order_id ORDER BY order.order_id DESC')->result_array();
        
        return $query;
    }

    public function total_salse($user_id)
    {
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('order')->row();

        return $query;
    }

    public function edit($user_id,$name,$phone,$address)
    {
        $this->db->set('name',$name);
        $this->db->set('phone_number',$phone);
        $this->db->set('address',$address);
        $this->db->where('u_id',$user_id);
        $this->db->update('app_user');

        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }

    public function edit_pass($user_id,$pass)
    {
        $this->db->set('password',md5($pass));
        $this->db->where('u_id',$user_id);
        $this->db->update('app_user');

        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }


}