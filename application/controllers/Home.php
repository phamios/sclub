<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->helper('url'); 
        $this->load->helper(array('form', 'url')); 
    }

    public function index() {
        $this->load->model('user_model');
        $this->user_model->listAllUser();
        $this->load->view('home');
    }

    public function login($err = null){
        if($err){
            $data['notify_error'] = "Mật khẩu, Tên đăng nhập không đúng, hoặc tài khoản của bạn chưa được kích hoạt !";
             $this->load->view('home',$data);
        } else {
            $this->load->view('home');
        }
    }

    public function register(){
    	$this->load->view('home');
    }


}
