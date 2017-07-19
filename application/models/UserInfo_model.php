<?php
/**
 * Created by PhpStorm.
 * User: Javelin
 * Date: 8/2/2016
 * Time: 1:42 PM
 */
date_default_timezone_set('Asia/Bangkok');
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserInfo_model extends CI_Model {


    var $db_user = "tbl_user";
    var $db_userinfo = "tbl_userinfo";

    function __construct() {
        parent::__construct(); 
        $this->load->database();
    }

    /**
    ** List all user from db
    **/
    public function listAllUser() { 
        $this->db->order_by('id', "asc");
        $query = $this->db->get($this->db_user);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }
    
    /**
    ** Login into system, it will be check the authentication
    ** It will check status and user exits
    **/
    public function authentication($username= null,$userpass=null){
        $this->db->where(array(
            'username'=>$username,
            'username'=>$userpass,
        ));
        $query = $this->db->get($this->db_user);
        if($query->num_rows() > 0){
            foreach($query->result() as $result){
                 if($this->checkActive($result->id) > 0){
                     return $result->id;
                 }else{
                     return 0;
                 }
            }
        } else {
            return 0;
        }
    }
    
    /**
    ** Check status
    ** 1: active
    ** 2: pending
    ** 0: unactive
    **/
    public function checkActive($userid = null){
        $this->db->where('id',$userid);
        $this->db->where('status',1);
        $query = $this->db->get($this->db_user);
        if($query->num_rows() > 0){
            return 1;
        } else {
            return 0;
        }
    }


//----------------------------------------------------------------------------------------------------------------------------------
    public function getUserType($userid = null){
        $this->db->where('id',$userid);
        $this->db->where('userstatus',1);
        $query = $this->db->get('es_user');
        if($query->num_rows() > 0){
            foreach($query->result() as $result){
                return $result->usertype;
            }
        } else {
            return 0;
        }
    }

    /**
     * @param   $usertype
     * @param   $username
     * @param   $userpass
     * @param   $useremail
     * @param   $userphone
     * @param   $usericon
     * @param   $usergender
     * @return int
     */
    public function insertUser($usertype=null,$username=null,$userpass=null,$useremail=null,$userphone=null,$usericon=null,$usergender=null){
        if($this->checkExitUser($username) == 1){
            $data = array(
                'username'=>$username,
                'userpass'=>$userpass,
                'useremail'=>$useremail,
                'userphone'=>$userphone,
                'usericon'=>$usericon,
                'usertype'=>$usertype,
                'usergender'=>$usergender,
            );
            $this->db->insert('es_user',$data);
            $id = $this->db->insert_id();
            $this->db->trans_complete();
            return $id;
        }else{
            return 0;
        }
    }

    /**
     * @param  $username
     * @return int
     */
    public function checkExitUser($username=null){
        $this->db->where('username',$username);
        $query = $this->db->get('es_user');
        if($query->num_rows() > 0){
            return 0;
        }else{
            return 1;
        }
    }

    /**
     * @param   $userid
     * @param   $number
     * @param   $type = 1 : Add
     *          $type = 2 : Sub
     */
    public function updateBalance($userid=null,$number=null,$type=null){
        $currentBalance = $this->getCurrentBalance($userid);
        $this->db->where('id',$userid);
        if($type = 1){
            $data = array('userbalance'=>$currentBalance + $number);
        } else {
            $data = array('userbalance'=>$currentBalance - $number);
        }
        $this->db->update('es_user',$data);
    }

    /**
     * @param  $userid
     * @return int
     */
    public function getCurrentBalance($userid=null){
        $this->db->where('id',$userid);
        $query = $this->db->get('es_user');
        if($query->num_rows() > 0 ){
            foreach($query->result() as $result){
                return $result->userbalance;
            }
        } else {
            return 0;
        }
    }



}
