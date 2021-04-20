<?php

class Checkout extends CI_Controller
{

    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Category_Model');
         $this->load->model('front_model/About_modal');
         $this->lang->load('content', $this->session->userdata('site_lang'));
    }

    public function index()
    {
        $data['categories'] = $this->Category_Model->get_categories();
        // $data['about'] = $this->About_modal->get_des();
        // print_r($data['about']);
        $this->load->view('front/header',$data);
        $this->load->view('front/checkout');
        $this->load->view('front/footer');
    }
}