<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->helper('url'); 
        $this->load->helper(array('form', 'url')); 
    }


    public function login() {
        $this->load->model('user_model');
        if (isset($_REQUEST['loginsubmit'])) {
            $username = $this->input->post('useremail', true);
            $password = $this->input->post('userpass', true);
            $result = $this->user_model->authentication($username,$password);
            if($result <> 0) {
               redirect('home/index');
            }else{
               redirect('home/login/'.md5(date("y-m-d h:m:s")));
            }
        }
    }

 

}
