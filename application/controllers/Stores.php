<?php

class Stores extends CI_Controller {
    function __construct(){
		  parent::__construct();
      $this->load->model('MStores');
      $this->load->model('MCategories');
      $this->load->model('MProducts');
    }

    function index(){
      $this->load->view('store');
    }

    function display($store_id = 1){
      $data['store'] = $this->MStores->get($store_id);
      $data['categories'] = $this->MCategories->getCategories($store_id);
      $products = $this->MProducts->getAll($store_id);
      if(is_array($products))
        $data['products'] = shuffle($products);
      else
        $data['products'] = null;
      $this->load->view('store', $data);        
    }    
}
