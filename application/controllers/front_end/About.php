<?php

class About extends CI_Controller
{

    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Category_Model');
         $this->load->model('front_model/About_Model');
         $this->load->model('front_model/Contact_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
    }

    public function index()
    {
        $data['categories'] = $this->Category_Model->get_categories();
        $data['about'] = $this->About_Model->get_des();
        $data['contact'] = $this->Contact_Model->get_des();
        // print_r($data['about']);
        $this->load->view('front/header',$data);
        $this->load->view('front/about-page');
        $this->load->view('front/footer');
    }
}