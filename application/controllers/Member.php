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
                    $kon = array(
                        'tb_jadwal.status' => NULL
                    );
                    $p = "tb_kursus.id_guru = '$id'";
                    $this->data['jadwal'] = $this->system_model->get_jadwal(5,0,$p, $kon);
                    $this->load->view('guru/home', $this->data);
                }else {
                    $this->load->view('siswa/home');
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

    function edit_kursus(){
        $id = $this->input->get('id');
        $this->data['kursus'] = $this->system_model->get_where('tb_kursus','id_kursus',$id);
        $this->load->view('guru/edit_kursus', $this->data);
      
    }

    function update_kursus(){
        $id_kursus = $this->input->post('id_kursus');

        $data = array(
            'kategori_kursus'=> $this->input->post('kategori_kursus'),
            'harga_kursus'=> $this->input->post('biaya_kursus'),
            'judul_kursus' => $this->input->post('judul_kursus'),
            'level_kursus' => $this->input->post('level_kursus'),
            'point_kelulusan' => $this->input->post('point_kursus'),
            'durasi_kursus' => $this->input->post('jumlah_kursus'),
            'deskripsi_kursus' => $this->input->post('deskripsi_kursus')
            
        );
        //echo $id_kursus;

        $kondisi = array(
            'id_kursus' => $id_kursus
        );

        $ganti = $this->system_model->update_data('tb_kursus',$data,$kondisi);

        if ($ganti) {
           echo 'success';
           
        } else {
            echo 'gagal update';
        }
    }

    function delete_kursus(){
        $id_kursus = $this->input->post('id_kursus');
        $kondisi = array(
            'id_kursus' => $id_kursus
        );

        $hapus = $this->system_model->delete_data('tb_kursus',$kondisi);
        if ($hapus) {
           echo 'success';
        } else {
            echo 'Gagal hapus';
        }

    }

    function delete_member(){
        $id_member = $this->input->post('id_member');

        $kondisi = array(
            'id_member' => $id_member
        );

        $hapus = $this->system_model->delete_data('tb_member',$kondisi);
        if ($hapus) {
            
            $this->session->sess_destroy();
           echo 'success';
        } else {
            echo 'Gagal hapus';
        }
    }

    function kursus(){
       // $this->data['kursus']=$this->system_model->get_join();
       
       
        $this->load->view('guru/kursus');
    }

    function page_kursus(){
        if ($this->session->userdata('login_status')==false) {
            $this->load->view('landing');
         }else {
        
        $this->load->helper('url');
        $this->load->library('pagination');
        $rowperpage = 1;

        $id_member = $this->session->userdata('id_member');
        
        $rowno= $this->input->get('per_page');
        $kond = $this->input->get('kond');
        $cari = $this->input->get('cari');
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
          }

        if ($kond == 'undefined' || empty($kond)) {

            $allcount = $this->system_model->total_record('tb_kursus',$id_member);
            $users_record = $this->system_model->get_join($rowperpage, $rowno, $id_member);

         }else{
           if ($kond == 'judul_kursus') {
               $kond = 'tb_kursus.judul_kursus';
           } elseif ($kond == 'deskripsi_kursus') {
              $kond = 'tb_kursus.deskripsi_kursus';
           } elseif($kond == 'user_name'){
             $kond = 'tb_member.user_name';
           }
            $allcount = $this->system_model->count_cari($kond,$cari, $id_member);
            $users_record = $this->system_model->get_condition($rowperpage, $rowno, $kond, $cari, $id_member);
         }
     
        $config['base_url'] = base_url().'member/page_kursus';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
        $config['page_query_string'] = TRUE;
 
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';

 
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
 
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
 
        echo json_encode($data);
    }
    }
    function detail_kursus(){
        $id = $this->input->get('id');
        $this->data['kursus'] = $this->system_model->get_detail(1,0,'tb_kursus.id_kursus',$id);
        $this->load->view('siswa/detail_kursus', $this->data);

    }

    function set_jadwal(){
        $id_kursus = $this->input->post('id_kursus');
        $id_member = $this->input->post('id_member');
        $tanggal = $this->input->post('tanggal');
        $jam = $this->input->post('jam');
        $id_jadwal = $this->uuid->v4();

        $data = array(
            'id_jadwal'=> $id_jadwal,
            'id_kursus'=> $id_kursus,
            'id_member'=> $id_member,
            'tanggal'=> $tanggal,
            'jam'=>$jam
        );

        $simpan = $this->system_model->insert_into ('tb_jadwal',$data);  

        if ($simpan) {
           echo "success";
        } else {
            echo "gagal simpan";
        }
    }

    function acc_jadwal(){
        $id_jadwal = $this->input->post('id_jadwal');
        $data = array(
            'status'=>"aprove"
        );

        $kond = array(
            'id_jadwal'=> $id_jadwal
        );

        $ubah = $this->system_model->update_data('tb_jadwal', $data, $kond);

        if ($ubah) {
           echo "success";
        } else {
            echo "gagal";
        }
    }
    

}