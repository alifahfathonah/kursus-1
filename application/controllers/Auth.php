<?php

class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('system_model');
    }

    function index(){
        $this->load->view('index');
    }
}