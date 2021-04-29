<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('content', $this->session->userdata('site_lang'));
        $this->load->model('front_model/Profile_Model');
        $this->load->model('front_model/Category_Model');
        $this->load->database();
    }

    function index()
    {
        if($this->session->userdata('loggedIn_front') == true && $this->session->userdata('status') == 1)
        {
            
            $user_id = $this->session->userdata('user_id');
            $data['user_info'] = $this->Profile_Model->get_user_info($user_id);
            $data['order_products'] = $this->Profile_Model->products_of_order($user_id);
            $data['orders'] = $this->Profile_Model->order($user_id);
            $data['total_salse'] = $this->Profile_Model->total_salse($user_id);

            $data['categories'] = $this->Category_Model->get_categories();
            $this->load->view('front/header',$data);
            $this->load->view('front/profile');
            $this->load->view('front/footer');
        }
        else
        {
            redirect('Front');
        }      
    }

}

?>