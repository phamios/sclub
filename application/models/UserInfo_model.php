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

class Userinfo_model extends CI_Model {


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
            'userpass'=>$userpass,
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

    public function insertUserStep1($usertype=null,$username=null,$fullname=null,$socialnumber=null,$placesocialnumber=null,
                    $userpass=null,$useremail=null,$userphone=null,$datenumber=null){
        $username = $useremail;
        if($this->checkExitUser($username) == 1){
            $data = array( 
                'username'=>$username,
                'userpass'=>$userpass, 
                'usertype'=>$usertype, 
                'balance'=>0,
                'status'=>0,
                'createdate'=>date("d-m-Y h:m:s"),
            );
            $this->db->insert($this->db_user,$data);
            $id = $this->db->insert_id();
            $this->db->trans_complete();
            $useraddress="";
             $data2 = array( 
                'id'=>$id,
                'fullname'=>$fullname,
                'socialnumber'=>$socialnumber, 
                'placesocialnumber'=>$placesocialnumber, 
                'datenumber'=>$datenumber,
                'useraddress'=>$useraddress,
                'useremail'=>$useremail,
                'userphone'=>$userphone,
                'createdate'=>date("d-m-Y h:m:s")
            );
            $this->db->insert($this->db_userinfo,$data2);
            $id2 = $this->db->insert_id();
            $this->db->trans_complete(); 
            return $this->getUserid($useremail);
        }else{
            return 0;
        }
    }

    public function checkExitUser($username=null){
        $this->db->where('username',$username);
        $query = $this->db->get($this->db_user);
        if($query->num_rows() > 0){
            return 0;
        }else{
            return 1;
        }
    }

    public function getUserid($username = null){
        $this->db->where('username',$username);
        $query = $this->db->get($this->db_user);
        if($query->num_rows() > 0){
             foreach ($query->result() as $value) {
                return $value->id;
            }
        }else{
            return 0;
        }
    }

    public function verifyaccount($username = null){
        $this->db->where('username',$username);
        $data = array('status'=>1);
        $this->db->update($this->db_user,$data);
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
