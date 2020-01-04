<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {
      function __construct() {
        parent::__construct();
        $this->load->model('Dumbways');
        
      }

      public function index() {
        $data ['table_join']= $this->Dumbways->getJoin();
        
        $this->load->view('template/header');        
        $this->load->view('home/home',$data);        
        $this->load->view('template/footer');    
      }
    }

?>