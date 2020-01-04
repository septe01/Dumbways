<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

    class Dumbways extends CI_Model {
       public function getJoin()
       {
        $this->db->select("products_tb.product_name,suppliers_tb.company_name,suppliers_tb.address,suppliers_tb.phone");
        $this->db->from('products_tb');
        $this->db->join('suppliers_tb', 'suppliers_tb.id = products_tb.supplier_id');
        return $this->db->get()->result_array();
        ;
       }
    }

?>