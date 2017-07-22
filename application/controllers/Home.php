<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->helper('url'); 
        $this->load->helper(array('form', 'url')); 
    }

    public function index() {
        $this->load->model('userinfo_model');
        $this->userinfo_model->listAllUser();
        $this->load->view('home');
    }

    public function login($err = null){
        if($err){
            $this->load->model('userinfo_model');
            if (isset($_REQUEST['loginsubmit'])) {
                $username = $this->input->post('useremail', true);
                $password = $this->input->post('userpass', true);
                $result = $this->userinfo_model->authentication($username,$password);
                if($result <> 0) {
                    redirect('home/index');
                }else{
                    redirect('home/login/'.md5(date("y-m-d h:m:s")));
                }
            }
            $data['notify_error'] = "Mật khẩu, Tên đăng nhập không đúng, hoặc tài khoản của bạn chưa được kích hoạt !";
            $this->load->view('home',$data);
        } else {
            $data['notify_error'] = "";
            $this->load->view('home',$data);
        }
        
    }

    public function register($status=null){
        if (isset($_REQUEST['registersubmit'])) {
            $this->load->model('userinfo_model');
            $fullname = $this->input->post('fullname', true);
            $validatenumber = $this->input->post('date', true);
            $userphone = $this->input->post('userphone', true);
            $userpass = $this->input->post('userpass', true);
            $useridentitynumber = $this->input->post('useridentitynumber', true);
            $identityaddress = $this->input->post('identityaddress', true);
            $useremail = $this->input->post('useremail', true);
            $userpassagain = $this->input->post('userpassagain', true);
            if($userpass == $userpassagain){
               $id = $this->userinfo_model->insertUserStep1(1,$useremail ,$fullname,$useridentitynumber,$identityaddress,
                    $userpass,$useremail,$userphone,$validatenumber);
                    if($id <> 0){
                        redirect('home/step2');
                    }
            } else {
                redirect('home/register/'.md5(date("d-m-Y")));
            }
        }
        if($status){
            $data['status']= "Đăng ký có lỗi, email đã có người sử dụng !";
        } else {
            $data['status']= "";
        }
    	$this->load->view('home',$data);
    }

    public function step2($userid=null){
        if($userid){
            $data['status']= 1;
        }else{
            $data['status'] = 0;//"Xác thực tài khoản";       
        }
        
        $this->load->view('home',$data);
    }


}
