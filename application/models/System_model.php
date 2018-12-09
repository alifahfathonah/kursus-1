<?php

class System_model extends CI_Model{
   

    function login($email, $password){
       
        $this->db->select('*');
        $this->db->from('tb_member');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $this->db->limit(1);
        //$query= $this->db->get_where('tb_member', array('email'=>$email,'password'=>$password));
        $query = $this->db->get();
        if ($query->num_rows()==1) {
           return $query->result();
        } else{
            return false;
        }
        
    }

public function registrasi_member ($table, $data_member){
        //$query = "INSERT INTO tb_member values($id_member, $nama, $email, $password)";
      $exe = $this->db->insert($table,$data_member);
        return $exe;
    }

public function get_selected($table,$column, $data){
    $result = $this->db->where($column,$data)->get($table)->num_rows();
    return $result;
}


}