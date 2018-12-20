<?php

class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('system_model');
    }

    function index(){
        if ($this->session->userdata('login_status')==false) {
           $this->load->view('landing');
        } else{
            if ($this->session->userdata('status_profil')=='guru') {
                $id = $this->session->userdata('id_member');
                $this->data['profil'] = $this->system_model->get_where('tb_profile','id_member',$id);
                $this->data['kursus'] = $this->system_model->get_where('tb_kursus','id_guru',$id);
                $this->load->view('guru/home', $this->data);
                
            }else {
                $this->load->view('index');
            }
            
        }
        
    }

    function welcome(){
        $this->load->view('welcome');
    }

    function login(){
        $email = trim($this->input->post('email'));
        $password = sha1($this->input->post('password'));

        $check = $this->system_model->login($email,$password);
        if ($check) {
            $sess_array = array();
            foreach ($check as $row) {
                $sess_array = array('nama'=>$row->user_name,'email'=>$row->email,'id_member'=>$row->id_member,'status_profil'=>$row->profil, 'login_status'=>TRUE,);
                $this->session->set_userdata($sess_array);
               
            }

           
            echo "success";
        }else{
            echo "gagal";
        }
    }

    function logout(){
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_member');
        $this->session->unset_userdata('status_profil');
        $this->session->unset_userdata('login_status');

        redirect('');
    }

  
}