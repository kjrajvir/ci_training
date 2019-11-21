<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model
{
    
    public function listProduct(){
/*        $this->db->select('product.name as product_name,category.name as category_name, product.price');
            $this->db->from('product_category');
            $this->db->join('product','product.id = product_category.product_id');
            $this->db->join('category','category.id = product_category.category_id');*/

                $this->db->select('product.name as product_name,category.name as category_name, product.price');
                    $this->db->from('product');
                    $this->db->join('category','product.category_id = category.id','left');

        $query = $this->db->get();

        $result = $query->result_array();
echo "<br/>";
echo "<pre>";

        print_r($result);
//            $this->db->join('category','product.id = product_category.product_id')
    }

    public function listCategory(){
        $this->db->select('category.name as category_name');
        $this->db->from('category');
        $this->db->join('product','product.category_id = category.id','left');
        $this->db->group_by('category.id');
        $query = $this->db->get();

        $result = $query->result_array();
        echo "<br/>";
        echo "<pre>";

        print_r($result);
    }
}