<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/helpers/admin_helper.php';

class User_model extends CI_Model
{
    function __construct() {
        parent::__construct(); 
        $this->load->database();
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function userListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.id, BaseTbl.username, BaseTbl.userType, BaseTbl.createdate');
        $this->db->from('tbl_user as BaseTbl');
        $this->db->join('tbl_userinfo as uinfo', 'uinfo.id = BaseTbl.id','left');
        if(!empty($searchText)) {
            $likeCriteria = "(uinfo.useremail  LIKE '%".$searchText."%'
                            OR  BaseTbl.username  LIKE '%".$searchText."%'
                            OR  uinfo.userphone  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return count($query->result());
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function userListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.id, uinfo.socialnumber, BaseTbl.username, uinfo.useremail, uinfo.userphone, BaseTbl.userType, BaseTbl.createdate, ust.desc');
        $this->db->from('tbl_user as BaseTbl');
        $this->db->join('tbl_userinfo as uinfo', 'uinfo.id = BaseTbl.id','left');
        $this->db->join('tbl_user_status_desc as ust', 'ust.statusID = BaseTbl.status','left');
        if(!empty($searchText)) {
            $likeCriteria = "(uinfo.useremail  LIKE '%".$searchText."%'
                            OR  BaseTbl.username  LIKE '%".$searchText."%'
                            OR  uinfo.userphone  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.id');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */

    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }

    function getUserStatus()
    {
        $this->db->select('statusId, desc');
        $this->db->from('tbl_user_status_desc');
        $query = $this->db->get();
        
        return $query->result();
    }

    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function checkEmailExists($email, $userId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_user");
        $this->db->where("email", $email);   
        $this->db->where("isDeleted", 0);
        if($userId != 0){
            $this->db->where("userId !=", $userId);
        }
        $query = $this->db->get();

        return $query->result();
    }
    
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewUser($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_user', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfo($userId)
    {
        $this->db->select('BaseTbl.id, uinfo.socialnumber, BaseTbl.username, uinfo.useremail, uinfo.userphone, BaseTbl.userType, BaseTbl.status');
        $this->db->from('tbl_user as BaseTbl');
        $this->db->join('tbl_userinfo as uinfo', 'uinfo.id = BaseTbl.id','left');
        $this->db->where('BaseTbl.id', $userId);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editUser($userInfo, $userDetails, $userId)
    {
        $this->db->where('id', $userId);
        $this->db->update('tbl_user', $userInfo);

        $this->db->where('id', $userId);
        $this->db->update('tbl_userinfo', $userDetails);
        
        return TRUE;
    }
    
    function updateUserStatus($statusId, $userId) {
        $this->db->where('id', $userId);
        $this->db->update('tbl_user', array('status' => $statusId));

        return TRUE;
    }
    
    
    /**
     * This function is used to delete the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_user', $userInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to match users password for change password
     * @param number $userId : This is user id
     */
    function matchOldPassword($userId, $oldPassword)
    {
        $this->db->select('userId, password');
        $this->db->where('userId', $userId);        
        //$this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_admin');
        
        $user = $query->result();

        if(!empty($user)){
            if(verifyHashedPassword($oldPassword, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
    
    /**
     * This function is used to change users password
     * @param number $userId : This is user id
     * @param array $userInfo : This is user updation info
     */
    function changePassword($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_admin', $userInfo);
        
        return $this->db->affected_rows();
    }
}

  