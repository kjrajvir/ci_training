<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{


    public function listUsers(){

        echo $this->db->count_all('user');

        // select * from table_name
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id', 'desc');
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
        $data = array(
            'email' => 'mahesh@gmail.com',
            'phone' => '1111111',
            'name' => 'mahesh'
        );
        $this->db->where('id', 3);
        $this->db->update('user', $data);

        // alternate way
//        $this->db->set('email', 'mahesh@gmail.com');
//        $this->db->set('phone', '1111111');
//        $this->db->set('name', 'mahesh');

//        $this->db->where('id', 3);
//        $this->db->update('user';

        // update tbl_user set name = 'mahesh' , email = 'mahesh@gmail.com', phone = '1111111' where id  = 3


        if($this->db->affected_rows() > 0)
            echo "records updated successfully";

        echo $this->db->affected_rows();
    }

    public function listStudent($anotherDatabse){
        $anotherDatabse->select('*');
        $anotherDatabse->from('students');
        $query = $anotherDatabse->get();


        // Alternate way
        //$this->db2 = $this->load->database('db2',true);
        // $this->db2->select('*');
        //$this->db2->from('students');
        // $query = $this->db2->get();


        $students = $query->result_array();
        return $students;
    }

    public function searchUsingWhere(){


        // select * from table_name
        $this->db->select('*');
        $this->db->from('user');
//        $this->db->where('id',2);       // select * from user where id = 2
//        $this->db->where(array('name'=>'kalpesh','phone'=>'9375701917'));
        // select * from user where name = 'kalpesh' and phone = '9375701917'

        // alternate for and needs to write where two times.
        // select * from user where name = 'kalpesh' and phone = '9375701917'
//        $this->db->where('name','kalpesh');
//        $this->db->where('phone','9375701917');

        // select * from user where name = 'kalpesh' or name = 'hardik'

/*        $this->db->where('name','kalpesh');
        $this->db->or_where('name','hardik');
        $query = $this->db->get();*/

        $this->db->where('phone','9375701917');
        $this->db->or_where('name','hardik');
        $query = $this->db->get();

        $users = $query->result_array();
        return $users;
    }


    public function useOfLike()
    {
        $this->db->select('*');
        $this->db->from('user');
        //$this->db->like('email','gmail','both');            // select * from user where email like '%gmail%'
        //$this->db->like('email','ha','after');              // select * from user where email like 'ha%'
        //                                                  // this will show records  starting with ha like hardik@gmail.com, hitesh@yahoo.co.in
        $this->db->like('email','gmail.com','before');      // select * from user where email like '%gmail.com'
                                                            // This will show records email ending with gmail.com
        $query = $this->db->get();

        $users = $query->result();
        return $users;
    }


}