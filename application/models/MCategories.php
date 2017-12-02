<?php
class MCategories extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function getCategories($store_id){
        $data = array();
        $sql = "select * from pcategories where store_id = ?";
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
}
