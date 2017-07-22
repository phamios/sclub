<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->helper('url'); 
        $this->load->helper(array('form', 'url')); 
    }


    public function login($error=null) {
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
    }

    public function verifyaccount(){
        if(isset($_REQUEST['verifybutton'])){
            $this->load->model('userinfo_model');
            $username = $this->input->post('verifyaccountnumber', true);
            $this->userinfo_model->verifyaccount($username);
            $userid = $this->userinfo_model->getUserid($username);
            redirect('home/step2/'.$userid);
        } else {
            redirect('authen/login/'.md5(date("y-m-d h:m:s")));
        }
    }

 

}
