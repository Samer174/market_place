<?php
class Search extends CI_Controller 
{
    public function __construct(){
        parent::__construct();

        $this->load->model('front_model/Category_Model');
         $this->load->model('front_model/Search_Model');
         $this->load->model('front_model/Product_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
        
    }

    public function index()
    {
        $search_contect = $this->input->post("search");
        if(isset($search_contect))
        {
            $search_result = $this->Search_Model->get_products($search_contect);
        }

        $categories = $this->Category_Model->get_categories();
        $data["categories"] = $categories;
        $data["data"] = $search_result;
        $data['products'] = $this->Product_Model->get_products();
        $data['sizes'] = $this->Product_Model->get_sizes_all();
        $this->load->view('front/header', $data);
        $this->load->view('front/category_page_nosidebar');
        $this->load->view('front/footer');
    }       
}