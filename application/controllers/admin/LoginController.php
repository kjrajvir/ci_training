<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function index()
    {
//        echo "z";die;
        $this->load->view('admin/login');
    }

    public function checkLogin()
    {
        $data = $this->input->post();




//        print_r($this->input->get());
        echo "Login form submitted";die;
    }
}