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

class Investor_model extends CI_Model {


    var $db_investor = "tbl_investor"; 
    var $db_investorcate = "tbl_investcategory";

    function __construct() {
        parent::__construct(); 
        $this->load->database();
    }

    public function listallcate() { 
        $this->db->order_by('id', "asc");
        $query = $this->db->get($this->db_investorcate);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function listallinvest($userid = null){
        $this->db->where('userid',$userid);
        $this->db->order_by('id', "asc");
        $query = $this->db->get($this->db_investor);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }


     public function insertinvest($userid = null,$investcateid=null,$investamount = null,$district = null, $city = null){
        if($userid<>null){
            $data = array(
                'userid'=>$userid,
                'investcateid'=>$investcateid,
                'investtime'=>3,
                'investamount'=>$investamount,
                'district'=>$district,
                'city'=>$city,
                'status'=>0,
                'createdate'=>date("d-m-Y h:m:s"),
            );
            $this->db->insert($this->db_investor,$data);
            $id = $this->db->insert_id();
            $this->db->trans_complete();
            return $id;
        } else {
            return 0;
        }
    }



}
