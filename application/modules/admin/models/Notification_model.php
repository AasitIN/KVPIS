<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Notification_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*
      function for getting all users listing with searching and ordering
     */
    public function getNotificationlist($ExEc = NULL){
        $this->db->select("n.*,u.role_id,concat(e.emp_first_name,' ',e.emp_middle_name,' ',e.emp_last_name) as sendername,e.emp_code as sendercode");
        $this->db->from('ci_notifications as n');
        $this->db->join('ci_users as u', 'n.senderid=u.id', 'LEFT');
        $this->db->join('ci_employee_details as e', 'u.username=e.emp_code', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('n.receiverid', $ExEc);
            $this->db->where('n.readstatus', 0);
        }
        $this->db->order_by("n.id", "asc");
        $query=$this->db->get();
        return $query->result();
    }
    
    public function getEMPNotificationlist($ExEc = NULL){
        $this->db->select("n.*,u.role_id,(CASE when u.role_id=2 THEN concat('HQ(',r.`name`,')') WHEN u.role_id=5 THEN s.name ELSE re.name END) AS sendername,(CASE WHEN u.role_id=2 THEN '1917' WHEN u.role_id=5 THEN s.code ELSE re.code END)  AS sendercode");
        $this->db->from('ci_notifications as n');
        $this->db->join('ci_users as u', 'n.senderid=u.id', 'LEFT');
        $this->db->join('ci_role_category as r', 'u.role_category=r.id', 'LEFT');
        $this->db->join('ci_regions as re','u.region_id=re.id','LEFT');
        $this->db->join('ci_schools as s','u.school_id=s.id','LEFT');
        if(!empty($ExEc)){
            $this->db->where('n.receiverid', $ExEc);
            $this->db->where('n.readstatus', 0);
        }
        $this->db->order_by("n.id", "asc");
        $query=$this->db->get();
        return $query->result();
    }
    
    public function setReplyData($msgData)
    {
        $userid=$this->session->userdata('user_id');
        $PostData = array(
            'message' => $msgData['message'],
            'senderid' => $userid,
            'receiverid' => $msgData['senderid']
        );
        if($this->db->insert('ci_notifications', $PostData)) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Could not be updated,Please try again';
        }
        return $response;
    }
    
    public function setMessageData($msgData)
    {
        $userid=$this->session->userdata('user_id');
        if($this->session->userdata('role_id')==6)
        {
            $empcode=$this->session->userdata('user_name');
            $this->db->select('emp_createdby');
            $this->db->from('ci_employee_details');
            $this->db->where('emp_code',$empcode);
            $qry=$this->db->get()->row();
            $created_by=$qry->emp_createdby;
        }
        
        $PostData = array(
            'message' => $msgData['message'],
            'senderid' => $this->session->userdata('user_id'),
            'receiverid' => $created_by
        );
        if($this->db->insert('ci_notifications', $PostData)) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Could not be updated,Please try again';
        }
        return $response;
    }
   

}
