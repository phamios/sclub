<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Authen extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        session_start();
    }


    public function login($error=null) {
       if ($this->session->userdata('user_id') == null) {
            $this->load->model('userinfo_model');
            if (isset($_REQUEST['loginsubmit'])) {
                $username = $this->input->post('useremail', true);
                $password = $this->input->post('userpass', true);
                $result = $this->userinfo_model->authentication($username,$password);
                if($result <> 0) {
                    $session_user = array(
                        'user_id' => $result,
                        'user_name' => $username
                    );
                    $this->session->set_userdata($session_user);
                   redirect('home/index');

                }else{
                   redirect('home/login/'.md5(date("y-m-d h:m:s")));
                }
            }
         } else {
             redirect('home/user/'.md5($this->session->userdata('user_id')));
         }
    }

    public function verifyaccount(){
        if ($this->session->userdata('user_id') == null) {
            if(isset($_REQUEST['verifybutton'])){
                $this->load->model('userinfo_model');
                $username = $this->input->post('verifyaccountnumber', true);
                $this->userinfo_model->verifyaccount($username);
                $userid = $this->userinfo_model->getUserid($username);
                redirect('home/step2/'.$userid);
            } else {
                redirect('authen/login/'.md5(date("y-m-d h:m:s")));
            }
        } else {
            redirect('home/user/'.md5($this->session->userdata('user_id')));
        }

    }



}
