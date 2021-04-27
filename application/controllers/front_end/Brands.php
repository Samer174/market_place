<?php

class Brands extends CI_Controller
{

    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Category_Model');
         $this->load->model('front_model/Brand_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
    }

    public function index()
    {
        $data['categories'] = $this->Category_Model->get_categories();
        $data['brands'] = $this->Brand_Model->get_brands();
        // print_r($data['about']);
        $this->load->view('front/header',$data);
        $this->load->view('front/brands');
        $this->load->view('front/footer');
    }
}