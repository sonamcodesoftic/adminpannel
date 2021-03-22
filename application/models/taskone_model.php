<?php 
 class Taskone_model extends CI_Model{
      public function insertdata($table, $data)
      {
          return $this->db->insert($table, $data);
      }
     
 }
?>