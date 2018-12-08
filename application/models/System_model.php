<?php

class System_model extends CI_Model{
   

    function login($username, $password){
       
        
    }

public function registrasi_member ($table, $data_member){
        //$query = "INSERT INTO tb_member values($id_member, $nama, $email, $password)";
      $exe = $this->db->insert($table,$data_member);
        return $exe;
    }
}