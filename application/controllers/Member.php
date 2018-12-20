<?php

class Member extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('system_model');
        $this->load->helper(array('form', 'url'));
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

    function profile(){
        if ($this->session->userdata('login_status')==true) {
            $id = $this->session->userdata('id_member');
            $this->data['member'] = $this->system_model->get_where('tb_member','id_member',$id);
            $this->data['profil'] = $this->system_model->get_where('tb_profile','id_member',$id);
    
            $this->load->view('guru/profile',$this->data);
        }
        
    }

    function update_pass(){
        $id = $this->input->post('id');
        $pass_lama = sha1(trim( $this->input->post('pass_lama')));
        $pass_baru = sha1(trim($this->input->post('pass_baru')));
        $email = $this->input->post('email');

        $data = array(
            'password'=> $pass_baru
        );
        $kondisi= array(
            'id_member'=> $id
        );
        $check = $this->system_model->login($email,$pass_lama);
        if ($check) {
           
            $ganti = $this->system_model->update_data('tb_member',$data,$kondisi);
            if ($ganti) {
                echo "success";
            }else{
                echo "gagal ganti";
            }

           
           
        }else{
            echo "salah password";
        }
    }

    function update_profile(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $pend = $this->input->post('pend');
        $desk = $this->input->post('desk');
        $data = array(
            
            'alamat'=> $alamat,
            'nomer_telp'=> $telp,
            'pendidikan' => $pend,
            'deskripsi' => $desk
        );

        $col = array(
            'user_name' => $nama
        );

        $kondisi = array(
            'id_member' =>$id
        );
        $ubah = $this->system_model->update_data('tb_member',$col,$kondisi);
        if ($ubah) {
            $ganti = $this->system_model->update_data('tb_profile',$data,$kondisi);
            if ($ganti) {
                echo "success";
            }else{
                echo "gagal update";
            }
        }else {
            echo "gagal update";
        }
        

    }

    function upload_foto(){

        
        $id = $this->session->userdata('id_member');

        $config['upload_path']          = './assets/img/profile';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;
        $config['overwrite']            = TRUE;
        $config['file_name']            = $id;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto_member'))
        {
               
                    echo "error";
               
                
        }
        else
        {
               $id = $this->session->userdata('id_member');
                $img = $this->upload->data();
                $gambar = $img['file_name'];

                $data = array(
                    'link_foto'=> $gambar
                );

                $kondisi = array(
                    'id_member' =>$id
                );
            $update = $this->system_model->update_data('tb_profile',$data,$kondisi);
            if ($update) {
                echo 'success';
            }else {
                echo "error";
            }
                
        }
       
    }

    function new_kursus(){

        $id_member = $this->session->userdata('id_member');
        $id_kursus = $this->uuid->v4();
        $tgl = date('Y-m-d');
        $data = array(
            'id_kursus'=> $id_kursus,
            'id_guru'=> $id_member,
            'kategori_kursus'=> $this->input->post('kategori_kursus'),
            'harga_kursus'=> $this->input->post('biaya_kursus'),
            'judul_kursus' => $this->input->post('judul_kursus'),
            'level_kursus' => $this->input->post('level_kursus'),
            'point_kelulusan' => $this->input->post('point_kursus'),
            'durasi_kursus' => $this->input->post('jumlah_kursus'),
            'deskripsi_kursus' => $this->input->post('deskripsi_kursus'),
            'tgl_dibuat' => $tgl
        );

        $simpan = $this->system_model->insert_into ('tb_kursus',$data);

        if ($simpan) {
            echo 'success';
        }else{
            echo 'gagal';
        }
    }

}