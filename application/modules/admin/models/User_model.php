<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*
      function for getting all users listing with searching and ordering
     */

    public function get_all_users_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(us.id) as total');
            $this->db->from('users us');
            $this->db->join('roles rs', 'us.role_id=rs.id', 'LEFT');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS us.*,rs.label as role_name", false);
        $this->db->from('users us');
        $this->db->join('roles rs', 'us.role_id=rs.id', 'LEFT');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if($search && !empty($search)) {
            $this->db->like('us.username', $search);
            $this->db->or_like('rs.label', $search);
        }
      /*  if ($this->role_id != ROLE_ADMIN) {
            $this->db->where('us.id !=', $this->auth_user_id);
        }
    */
        $this->db->order_by('us.id', "desc");
        $qry = $this->db->get();
        //show($lQ = $this->db->last_query());
       // die;
        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }
    
    public function get_user_by_id($id) {

        $this->db->select('role_id');
        $query = $this->db->get_where( 'ci_users', array('id' =>$id));
        $RoleID = $query->row('my_col'); //6-Employee
        if($RoleID==6){
            $this->db->select("U.role_id,U.username,U.email_id,U.`status`,
            S.emp_id,S.present_designationid,S.present_subject,S.present_place,S.present_unit,S.present_kvcode,
            D.`name` as 'designation',SUB.`name` as 'subject',PLC.`name` as 'place',RO.`name` as 'region',
            (CASE WHEN S.present_place=5 THEN KVS.`name`ELSE RVS.`name` END) AS 'kvcode_place'");
            $this->db->from('ci_users as U');
            $this->db->join('ci_present_service_details S', 'U.username=S.emp_id', 'LEFT');
            $this->db->join('ci_designations D', 'S.present_designationid=D.id', 'LEFT');
            $this->db->join('ci_subjects SUB',   'S.present_subject=SUB.id', 'LEFT');
            $this->db->join('ci_roles PLC',   'S.present_place=PLC.id', 'LEFT');
            $this->db->join('ci_regions RO',  'S.present_unit=RO.id', 'LEFT');
            $this->db->join('ci_schools KVS', 'S.present_kvcode=KVS.`code`', 'LEFT');
            $this->db->join('ci_regions RVS', 'S.present_kvcode=RVS.`code`', 'LEFT');
            $this->db->where('U.id', $id);
        }else{
            $this->db->select('U.*,R.name as ROLE,IFNULL(C.name,"NA") as CATG, IFNULL(Z.name,"NA") as REGION, IFNULL(S.name,"NA") as SCHOOL');
            $this->db->from('ci_users as U');
            $this->db->join('roles R', 'U.role_id=R.id', 'LEFT');
            $this->db->join('role_category C', 'U.role_category=C.id', 'LEFT');
            $this->db->join('regions Z', 'U.region_id=Z.id', 'LEFT');
            $this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
            $this->db->where('U.id', $id);
            //show($this->db->last_query());
        }
        return $this->db->get()->row();
    }
    

    public function get_all_activities_logs($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(uac.id) as total');
            $this->db->from('ci_user_activities uac');
            $this->db->join('users us', 'us.id=uac.user_id', 'LEFT');
            $this->db->join('roles r', 'us.role_id=r.id', 'LEFT');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS uac.*,us.first_name as username,us.email,us.last_login,r.name as role,us.status", false);
        $this->db->from('ci_user_activities uac');
        $this->db->join('users us', 'us.id=uac.user_id', 'LEFT');
        $this->db->join('roles r', 'us.role_id=r.id', 'LEFT');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(us.first_name,uac.activity_type) LIKE '%$search%' ");
        }
        if ($this->role_id != ROLE_ADMIN) {
            $this->db->where('us.id !=', $this->auth_user_id);
        }
        $qry = $this->db->get();

        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }

    public function add_user($post_data) {
        //$random_string = random_string('alnum', 5);
        //$random_password = random_string('alnum', 5);
        $response = array();
        unset($post_data['cpassword']);
        $UserData = array(
            'role_id' => $post_data['role_id'],
            'role_category' => $post_data['role_category'],
            'region_id' => $post_data['region_id'],
            'school_id' => $post_data['school_id'],
            'username' => $post_data['username'],
            'password' => hash('sha512', $post_data['password']),
            'email_id' =>$post_data['email_id'] ,
            'status' => '1',
            'created' => date("Y-m-d H:i:s")
        );
        if($this->db->insert('users', $UserData)) {
            add_user_activity($this->session->userdata('user_id'),$this->db->insert_id(), 'ADD', 'Added User Successfully','User Module');
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Form Could not be saved,Please try again';
        }
        return $response;
    }

    public function edit_user($post_data, $id) {
        $post_data['created'] = date("Y-m-d H:i:s");
        if($post_data['password'] == ''){
        unset($post_data['password']);  
        unset($post_data['cpassword']); 
        unset($post_data['user_id']); 
        }
        $response = array();
        $this->db->where("id", $id);
        $qry = $this->db->update('users', $post_data);
        if ($qry) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Form Could not be saved,Please try again';
        }
        return $response;
    }

    public function cheque_unique_email($email, $user_id = null) {
        $this->db->select('*');
        $this->db->from('ci_users');
        $this->db->where('email_id', $email);
        if ($user_id) {
            $this->db->where('id !=', $user_id);
        }
        $qry = $this->db->get();
        if ($qry->num_rows()) {
            return true;
        } else {
            return false;
        }
    }

    public function cheque_unique_username($username, $user_id = null) {
        $this->db->select('*');
        $this->db->from('ci_users');
        $this->db->where('username', $username);
        if ($user_id) {
            $this->db->where('id !=', $user_id);
        }
        $qry = $this->db->get();
        if ($qry->num_rows()) {
            return true;
        } else {
            return false;
        }
    }
    public function admin_reset_password($ResetData)
	{
		$post_data=$this->input->post(null,true);
                $ResetId=$ResetData['user_id_forpass'];
		$ResetPwd=$ResetData['new_password'];
		
		$this->db->where('id',$ResetId);
		$qry=$this->db->update('ci_users',array('password'=>$ResetPwd,'is_password_changed'=>1));
                $lQ=$this->db->last_query();
		if($qry){
                        add_user_activity($this->session->userdata('user_id'),$ResetId, 'Password Changed', 'Changed User Password','User Module');
			return true;
		}else{
                        return false;
                }
	}

}
