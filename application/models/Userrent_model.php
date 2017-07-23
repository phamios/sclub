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

class Userrent_model extends CI_Model
{

    var $db_rent = "tbl_useritem";

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listAllRent($userid =null) {
        $this->db->where('userid',$userid);
        $this->db->order_by('id', "desc");
        $query = $this->db->get($this->db_rent);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }


    public function insertRent($userid = null,$categoryid=null,$rentpurpose=null,$itemdescription = null,
    $itemprice = null, $itemimages = null){

        $month = strtotime(date("Y-m-d", strtotime(date("Y-m-d"))) . " +1 month");
        $month = strftime("%Y-%m-%d",$month);
        if($userid<>null){
            $data = array(
                'userid'=>$userid,
                'categoryid'=>$categoryid,
                'itemprice'=>$itemprice,
                'itemimages'=>$itemimages,
                'itemvalidate'=>$month,
                'rentpurpose'=>$rentpurpose,
                'itemdescription'=>$itemdescription,
                'status'=>0,
                'createdate'=>date("d-m-Y h:m:s"),
                'modifydate'=>date("d-m-Y h:m:s"),
            );
            $this->db->insert($this->db_rent,$data);
            $id = $this->db->insert_id();
            $this->db->trans_complete();
            return $id;
        } else {
            return 0;
        }
    }

    function delete($id = null,$userid=null) {
        $this->db->where(array(
            'id'=>$id,
            'userid'=>$userid
        ));
        $this->db->delete($this->db_bank);
    }


}