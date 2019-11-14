<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
    }

    public function index()
    {
echo "<pre>";
       $lstUsers =  $this->user->listUsers();
print_r($lstUsers);
    }

    public function add(){
        //ActiveRecord
//        $data = array('name'=>'kalpesh','email'=>'kalpeshrajvir@gmail.com','phone'=>'9375701917');
        $data = array('name'=>'hardik','email'=>'hardik@gmail.com');
        echo $this->user->addUser($data);
    }

    public function edit(){
        echo $this->user->updateUser();
    }

    public function delete(){
        echo $this->user->deleteUser();
    }

    public function details(){
        echo "<pre>";
        $userData = $this->user->getUserDetail();

        print_r($userData);
        /* when in model result is used  return array of objects */
/*        print_r($userData[0]->id);
        print_r($userData[0]->name);
        print_r($userData[0]->email);
        print_r($userData[0]->phone);*/

        /* when in model row is used  return object*/
/*                echo $userData->id."<br/>";
                echo $userData->name."<br/>";
                echo $userData->email."<br/>";
                echo $userData->phone."<br/>";*/

        /* when in model row_array is used return array */
                        echo $userData['id']."<br/>";
                        echo $userData['name']."<br/>";
                        echo $userData['email']."<br/>";
                        echo $userData['phone']."<br/>";
    }
}
