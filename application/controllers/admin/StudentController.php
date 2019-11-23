<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller
{
    public function index(){
        $this->load->view('admin/student/index');
    }
}