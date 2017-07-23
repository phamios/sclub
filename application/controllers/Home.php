<?php
ini_set('display_errors', 0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url'); 
        $this->load->helper(array('form', 'url'));
        session_start();
    }

    public function index() {
        if ($this->session->userdata('user_id') == null) {
            $this->load->view('home');
        } else {
            redirect('home/user/'.md5($this->session->userdata('user_id')));
        }
    }

    public function login($err = null){
        if ($this->session->userdata('user_id') == null) {
            if ($err) {
                $this->load->model('userinfo_model');
                if (isset($_REQUEST['loginsubmit'])) {
                    $username = $this->input->post('useremail', true);
                    $password = $this->input->post('userpass', true);
                    $result = $this->userinfo_model->authentication($username, $password);
                    if ($result <> 0) {
                        $session_user = array(
                            'user_id' => $result,
                            'user_name' => $username
                        );
                        $this->session->set_userdata($session_user);
                        redirect('home/index');
                    } else {
                        redirect('home/login/' . md5(date("y-m-d h:m:s")));
                    }
                }
                $data['notify_error'] = "Mật khẩu, Tên đăng nhập không đúng, hoặc tài khoản của bạn chưa được kích hoạt !";
                $this->load->view('home', $data);
            } else {
                $data['notify_error'] = "";
                $this->load->view('home', $data);
            }
        } else {
            redirect('home/user/'.md5($this->session->userdata('user_id')));
        }
        
    }

    public function register($status=null){
        if ($this->session->userdata('user_id') == null) {
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
        }else{
            redirect('home/user/'.md5($this->session->userdata('user_id')));
        }

    }

    public function step2($userid=null){
        if ($this->session->userdata('user_id') == null) {
            if($userid){
                $data['status']= 1;
            }else{
                $data['status'] = 0;//"Xác thực tài khoản";
            }
            $this->load->view('home',$data);
        }else{
            redirect('home/user/'.md5($this->session->userdata('user_id')));
        }

    }

    public function user($info=null){
        if ($this->session->userdata('user_id') == null) {
            redirect('home/login');
        }else{
            $this->load->model('userinfo_model');
            $data['userinfos'] = $this->userinfo_model->getDetailsUserInfo($this->session->userdata('user_id'));
            $data['fullname'] = $this->userinfo_model->getFullNae($this->session->userdata('user_id'));
            $this->load->view('home',$data);
        }
    }

    public function add_bank(){
        if ($this->session->userdata('user_id') == null) {
            redirect('home/login');
        }else{
            $this->load->model('bank_model');
            $this->load->model('userinfo_model');
            if (isset($_REQUEST['btnSubmit'])) {
                $userid = $this->session->userdata('user_id');
                $bankname = $this->input->post('bankname',true);
                $bankaddress = $this->input->post('bankaddress',true);
                $bankaccount = $this->input->post('bankaccount',true);
                $this->bank_model->insertBank($userid ,$bankname,$bankaddress,$bankaccount);
                redirect("home/add_bank");
            }

            $data['allbank'] = $this->bank_model->listBankbyUser($this->session->userdata('user_id'));
            $data['userinfos'] = $this->userinfo_model->getDetailsUserInfo($this->session->userdata('user_id'));
            $data['fullname'] = $this->userinfo_model->getFullNae($this->session->userdata('user_id'));
            $this->load->view('home',$data);
        }
    }

    public function remove_bank($bankid = null){
        if ($this->session->userdata('user_id') == null) {
            redirect('home/login');
        }else{
            $this->load->model('bank_model');
            $userid= $this->session->userdata('user_id');
            $this->bank_model->delete($bankid,$userid);
            redirect('home/add_bank');
        }

    }

    public function investor(){
        if ($this->session->userdata('user_id') == null) {
            redirect('home/login');
        }else{
            $this->load->model('userinfo_model');
            $data['userinfos'] = $this->userinfo_model->getDetailsUserInfo($this->session->userdata('user_id'));
            $data['fullname'] = $this->userinfo_model->getFullNae($this->session->userdata('user_id'));
            $this->load->view('home',$data);
        }
    }

    public function userrent(){
        if ($this->session->userdata('user_id') == null) {
            redirect('home/login');
        }else{
            $this->load->model('userinfo_model');
            $data['userinfos'] = $this->userinfo_model->getDetailsUserInfo($this->session->userdata('user_id'));
            $data['fullname'] = $this->userinfo_model->getFullNae($this->session->userdata('user_id'));
            $this->load->view('home',$data);
        }
    }

    public function logout(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
        redirect('home/login');
    }


}
