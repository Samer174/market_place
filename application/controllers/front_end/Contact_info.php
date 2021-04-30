<?php

class Contact_info extends CI_Controller
{

    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Category_Model');
         $this->load->model('front_model/Contact_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
    }

    public function index()
    {
        $data['categories'] = $this->Category_Model->get_categories();
        $data['contact'] = $this->Contact_Model->get_des();
        // print_r($data['about']);
        $this->load->view('front/header',$data);
        $this->load->view('front/contact-page');
        $this->load->view('front/footer');
    }
    public function insert_contact()
    {

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('msg','Message','required');

        if($this->form_validation->run())
        {
            $name = $this->input->post('name');
        $last_name = $this->input->post('last_name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $msg = $this->input->post('msg');
        $content = array(
            'name'=>$name,
            'last_name'=>$last_name,
            'phone'=>$phone,
            'email'=>$email,
            'msg'=>$msg
        );
        // $this->session->set_userdata('alert_msg','Thank You ,Your Message Have Been Sent Successfully');
        // $this->session->set_userdata('alert_msg_ar','شكرا علي تواصلكم,تم إرسال الرسالة بنجاح');
        $arabic_msg = '<div class="alert alert-primary" role="alert"><h3>شكرا علي تواصلكم, تم إرسال الرسالة بنجاح</h3></div>';
        $english_msg = '<div class="alert alert-primary" role="alert"><h3>Thank You ,Your Message Has Been Sent Successfully</h3></div>';
      
        $this->load->view('front/header',array('sent_msg_ar'=>$arabic_msg,'sent_msg'=>$english_msg));
        $this->load->view('front/contact-page');
        $this->load->view('front/footer');
        }
        
        $this->Contact_Model->insert_contact_info($content);
    }
}