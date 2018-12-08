<?php

class Register extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('system_model');
    }

    function index(){
        $this->load->view('register');
    }

    function reg_member(){
        $id_member = $this->uuid->v4();
        $tgl_lahir = $this->input->post('reg_tanggallahir');
        //$date = DateTime::createFromFormat('dd/mm/yyyy',$tgl_lahir);
        //$date = $date->format('Y-m-d');
        $data_member =array(
        'id_member' => $id_member,
        'user_name' => $this->input->post('reg_nama'),
        'email' => $this->input->post('reg_email'),
        'password' => $this->input->post('reg_password'),
        
        'profil' => $this->input->post('reg_profesi')
        
        
        
        );
        $profile_member = array('id_member' => $id_member,
        'alamat' => $this->input->post('reg_alamat'),
        'jenis_kelamin' => $this->input->post('reg_gender'),
        'tanggal_lahir' => $tgl_lahir,
        'tanggal_join' => date('Y-m-d'),
        );
        
           $hasil = $this->system_model->registrasi_member('tb_member', $data_member);
            
            if ($hasil) {
                $hasil2 = $this->system_model->registrasi_member('tb_profile', $profile_member);
                 if ($hasil2) {
                    echo "success";
                 }  else {
                     echo "gagal2";
                 }
                    
                
            } else {
                echo "gagal";
                
                
            
            }
    }
}