<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('student');
    }

    public function index(){
    $data = array();
        $data['students'] = $this->student->getStudents();

        $this->load->view('admin/student/index',$data);
    }

    public function add(){
//print_r($_POST);die;

        $config = array(
            array(
                'field' => 'student_name',
                'label' => 'Student Name',
                'rules' => 'required|min_length[5]',
                'errors' => array(
                    'required'=>'Student name is mandatory',
                    'min_length'=>'Min. 5 characters is required.'
                )
            )
        );

        $this->form_validation->set_rules($config);

        //$this->form_validation->set_rules('student_name', 'Student Name', 'required|min_length[5]',array('required'=>'Student name is mandatory','min_length'=>'Min. 5 characters is required.'));
        //$this->form_validation->set_rules('student_name', 'Student Name', 'required|min_length[5]|callback_namecheck');
        //$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
       // $this->form_validation->set_message('required','Please enter Student Name');
        if($this->form_validation->run()  == FALSE)
        {
//            print_r(validation_errors());
//            echo "Student name is not entered";
            $this->load->view('admin/student/add');
        }
        else
        {
            $studentData = array(
                'name' => $this->input->post('student_name'),
                'email' => $this->input->post('email'),
                'mobile_no' => $this->input->post('mobile_no')
            );
//            echo $this->input->post('student_name');die;
//            $studentData = $this->input->post();
            //  print_r($studentData);die;
            $inserted = $this->student->addStudent($studentData);
        if($inserted)
            echo "form submitted successfully";
            die;
        }
    }

    public function namecheck($value){

        $studentname = array ('admin','super');

        if(in_array($value,$studentname)){
            $this->form_validation->set_message('namecheck','{field} can not use preserve keyword.');
            return false;
        }
        else{
            return true;
        }

    }
}