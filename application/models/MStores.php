<?php
class MStores extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function get($id){
        $data = array();
        $sql = "select * from stores where id = ?";
        $q = $this->db->query($sql, $id);
        if($q->num_rows()>0){
            $data = $q->row();
            $q->free_result();
            return $data;
        }else{
            return false;
        }
    }    
}
