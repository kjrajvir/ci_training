<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{

    public function listUsers(){


        // select * from table_name
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();

        $users = $query->result_array();
        return $users;
    }

    public function getUserDetail()
    {
        // select * from table_name
        $this->db->select('*')->where('id',1);
        $this->db->from('user');
        $query = $this->db->get();

        //$users = $query->result();
        $users = $query->row();
        $users = $query->row_array();
        return $users;
    }

    public function addUser($data){
        //$this->db->query("Insert into tbl_user (name,email) values('x','x@gmail.com')"); // raw query;
        $this->db->insert('user',$data);  // 'tbl_user' = table_name , $data = array of data \
        // If prefix in database.php is set then can be directly wiritten without prefix. like user
        //// Insert/Update/Delete/Select is ActiveRecord
        echo "here code for add user";
    }

    public function deleteUser(){
        echo "here code for delete user";
    }

    public function updateUser(){
        echo "here code for update user";
    }

}

