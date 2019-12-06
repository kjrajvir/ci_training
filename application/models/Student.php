<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model
{

    public function addStudent($data){
//print_r($data);die;

        return $this->db->insert('students',$data);
    }

    public function getStudents(){
        $this->db->select('*');
        $this->db->from('students');
        $query = $this->db->get();
        $result = $query->result();
       return $result;
    }
}