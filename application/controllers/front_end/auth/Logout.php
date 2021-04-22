<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('loggedIn_front');
        $this->session->sess_destroy();

        redirect('front_end/auth/login');
    }
}