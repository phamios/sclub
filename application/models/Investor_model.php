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
        $query = $this->db->get($this->db_db_investorcateuser);
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



}
