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

class Itemcategory_model extends CI_Model
{

    var $db_bank = "tbl_itemcategory";

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listAllCateItem()
    {
        $this->db->order_by('id', "asc");
        $query = $this->db->get($this->db_bank);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

//    public function insertBank($userid = null,$name=null,$address=null,$accountnumber){
//        if($userid<>null){
//            $data = array(
//                'userid'=>$userid,
//                'bankname'=>$name,
//                'bankaddress'=>$address,
//                'bankaccount'=>$accountnumber,
//                'status'=>1,
//                'createdate'=>date("d-m-Y h:m:s"),
//            );
//            $this->db->insert($this->db_bank,$data);
//            $id = $this->db->insert_id();
//            $this->db->trans_complete();
//            return $id;
//        } else {
//            return 0;
//        }
//    }
//
//    function delete($id = null,$userid=null) {
//        $this->db->where(array(
//            'id'=>$id,
//            'userid'=>$userid
//        ));
//        $this->db->delete($this->db_bank);
//    }


}