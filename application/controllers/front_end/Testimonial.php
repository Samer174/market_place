<?php

class Testimonial extends CI_Controller
{

    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Category_Model');
         $this->load->model('front_model/Contact_Model');
         $this->load->model('front_model/Testimonial_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
    }

    public function index()
    {
        $data['categories'] = $this->Category_Model->get_categories();
        $data['testimonial'] = $this->Testimonial_Model->get_testimonial();
        $data['contact'] = $this->Contact_Model->get_des();
        // print_r($data['about']);
        $this->load->view('front/header',$data);
        $this->load->view('front/testimonial');
        $this->load->view('front/footer');
    }
}