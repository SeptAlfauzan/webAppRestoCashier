<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class Admin_m extends CI_Model{
        
        public function getData($table)
        {
            $query = $this->db->get($table);
            return $query->result_array();
        }
    }