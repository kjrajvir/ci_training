<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function checkLogin()
    {
        $data = $this->input->post();

        if(!empty($data)){

        }
        else
            $data = $this->input->get();


//        print_r($this->input->get());
        echo "Login form submitted";die;
    }
}