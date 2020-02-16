<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class Admin_m extends CI_Model{
        
        public function getData($table)
        {
            $query = $this->db->get($table);
            return $query->result_array();
        }

        public function insert($table, $data)
        {
            $this->db->insert($table, $data);
        }

        public function delete($table, $id_column, $id)
        {
            $this->db->where($id_column, $id);
            $this->db->delete($table);
        }

        public function getSpecifiedData($table, $id_column, $id)
        {
            $this->db->where($id_column, $id);
            $query = $this->db->get($table);
            return $query->result_array();
        }

        public function update($table, $id_column, $id, $data)
        {
            $this->db->where($id_column, $id);
            $this->db->update($table, $data);
        }

        public function getDataJoin($stTable, $ndTable, $stColumn, $ndColumn)
        {
            $this->db->select('*');
            $this->db->from($stTable);
            $this->db->join($ndTable, $stColumn.' = '.$ndColumn );
            $query = $this->db->get();
            return $query->result_array();
        }
    }