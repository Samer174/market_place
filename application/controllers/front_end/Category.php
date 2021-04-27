<?php
class Category extends CI_Controller 
{
    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Category_Model');
         $this->load->model('front_model/Product_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
        
    }

    public function index()
    {
        $categories = $this->Category_Model->get_categories();
        $count = 0;
        $product_count = array();
         foreach ($categories as $cat) {
             
            $p_count = $this->Category_Model->get_product_count($cat["id"]);
            $product_count[$count] = array('cat_id'=>$cat["id"],'count'=>$p_count);
            $count++;
         }
         $data['product_count'] = $product_count;
        //  print_r($product_count);
         $data["categories"] = $categories;
         $this->load->view('front/header');
         $this->load->view('front/collection', $data);
         $this->load->view('front/footer');
    }

    public function single_Cat($id=null)
    {
        $data["category"] = $this->Category_Model->get_single_cat($id);
        $this->load->view("front/single_category",$data);
    }
       
    public function products_of_cat($id=NULL)
    {
       
        $data['data']= $this->Product_Model->get_cat($id);
        $data["categories"] = $this->Category_Model->get_categories();
        $data['one_cat'] = $this->Category_Model->get_single_cat($id);
        $data['products'] = $this->Product_Model->get_products();
        $data['sizes'] = $this->Product_Model->get_sizes_all();
        $this->load->view('front/header',$data);
        $this->load->view('front/category_page_nosidebar');
        $this->load->view('front/footer');

    }
        
}