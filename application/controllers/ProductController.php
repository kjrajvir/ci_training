<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product');
    }

    public function index()
    {
        echo "Here will be lsit of products";
        $this->product->listProduct();
    }

    public function listcategory(){
        $this->product->listCategory();
    }
}