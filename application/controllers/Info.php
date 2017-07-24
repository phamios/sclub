<?php
ini_set('display_errors', 0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller
{

    var $upload_dir = "./files/products/";

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        session_start();
    }

    public function index()
    {
        redirect('info/loan');
    }

    public function loan()
    {
        if ($this->session->userdata('user_id') == null) {
            $this->load->view('home');
        }else{
            $this->load->model('userinfo_model');
            $data['userinfos'] = $this->userinfo_model->getDetailsUserInfo($this->session->userdata('user_id'));
            $data['fullname'] = $this->userinfo_model->getFullNae($this->session->userdata('user_id'));
            $this->load->view('home',$data);
        }
    }

    public function knowledge(){
        if ($this->session->userdata('user_id') == null) {
            $this->load->view('home');
        }else{
            $this->load->model('userinfo_model');
            $data['userinfos'] = $this->userinfo_model->getDetailsUserInfo($this->session->userdata('user_id'));
            $data['fullname'] = $this->userinfo_model->getFullNae($this->session->userdata('user_id'));
            $this->load->view('home',$data);
        }
    }

    public function aboutus(){
        if ($this->session->userdata('user_id') == null) {
            $this->load->view('home');
        }else{
            $this->load->model('userinfo_model');
            $data['userinfos'] = $this->userinfo_model->getDetailsUserInfo($this->session->userdata('user_id'));
            $data['fullname'] = $this->userinfo_model->getFullNae($this->session->userdata('user_id'));
            $this->load->view('home',$data);
        }
    }

    public function policy(){
        if ($this->session->userdata('user_id') == null) {
            $this->load->view('home');
        }else{
            $this->load->model('userinfo_model');
            $data['userinfos'] = $this->userinfo_model->getDetailsUserInfo($this->session->userdata('user_id'));
            $data['fullname'] = $this->userinfo_model->getFullNae($this->session->userdata('user_id'));
            $this->load->view('home',$data);
        }
    }

}