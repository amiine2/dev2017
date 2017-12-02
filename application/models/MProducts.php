<?php
class MProducts extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function getAll($store_id){
        $data = array();
        $sql = "select * from products where store_id = ?";
        $q = $this->db->query($sql, $store_id);
        if($q->num_rows()>0){
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            $q->free_result();
            return $data;
        }else{
            return false;
         }
    }

    function getProducts($category_id){
        $data = array();
        $sql = "select * from products where category_id = ?";
        $q = $this->db->query($sql, $category_id);
        if($q->num_rows()>0){
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            $q->free_result();
            return $data;
        }else{
            return false;
         }
    }    
}
