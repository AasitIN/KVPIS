<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Compliance_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    
    public function setComplianceData()
    {
        $response = array();
        $role = $this->session->userdata('role_id');
        $school = $this->session->userdata('school_id');
        $region = $this->session->userdata('region_id');
        if($role==5)
        {
            $this->db->select('E.*');
            $this->db->from('ci_schools as E');
            $this->db->where('E.id', $school);
            $result = $this->db->get()->row(); 
            $code=$result->code;
            
        }
        elseif($role==2)
        {
            $code='1917';
        }
        else
        {
            $this->db->select('E.*');
            $this->db->from('ci_regions as E');
            $this->db->where('E.id', $region);
            $result = $this->db->get()->row(); 
            $code=$result->code;
            
        }
        //print_r($code); die;
        $PostData = array(
            'submittedby' => $this->session->userdata('user_id'),
            'role_id' => $this->session->userdata('role_id'),
            'kvcode'=>$code
        );
        if($this->db->insert('ci_compliance', $PostData)) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Could not be updated,Please try again';
        }
        return $response;
    }
    
    public function getComplianceData($emp_id){
        $month = date('m');
        $year = date('Y');
        $this->db->select('*');
        $this->db->from('ci_compliance');
        $this->db->where(array('submittedby'=>$emp_id,'MONTH(created_at)'=>$month,'YEAR(created_at)'=>$year));
        //echo $this->db->last_query(); 
        return $this->db->get()->row(); 
        //$this->db->last_query(); 
    }
    
    
    public function getRegionComplianceData($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        $month = date('m');
        $year = date('Y');
        $reg_id = $this->session->userdata('region_id');
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(*) as total');
            $this->db->from('ci_schools as S');
            $this->db->join('ci_compliance C','S.code=C.kvcode AND MONTH(C.created_at)="'.$month.'" AND YEAR(C.created_at)="'.$year.'"' ,'Left');
            $this->db->where('S.reg_id',$reg_id);
            $qry = $this->db->get();
            //echo $this->db->last_query(); die;
            return $qry->row()->total;
            
        }
        $this->db->select("SQL_CALC_FOUND_ROWS S.*,C.id as compliancestatus",false);
        $this->db->from('ci_schools as S');
        $this->db->join('ci_compliance C','S.code=C.kvcode AND MONTH(C.created_at)="'.$month.'" AND YEAR(C.created_at)="'.$year.'"' ,'Left');
        $this->db->where('S.reg_id',$reg_id);
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(S.name,S.code) LIKE '%$search%' ");
        }
        
        $qry = $this->db->get();
       

        if($qry->num_rows()){
            $data['result']=$qry->result();
        }else{
            $data['result']=array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        //pr($data['count']);
        return $data;
    }
    
    public function getHqEstComplianceData($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null)
    {
        $month = date('m');
        $year = date('Y');
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(*) as total');
            $this->db->from('users as U');
            $this->db->join('regions RO','U.region_id=RO.id' ,'LEFT');
            $this->db->join('schools KV','U.school_id=KV.id' ,'LEFT');
            $this->db->join('roles R','U.role_id=R.id' ,'LEFT');
            $this->db->join('role_category CA','U.role_category=CA.id' ,'LEFT');
            $this->db->join('compliance C','U.id=C.submittedby AND MONTH(C.created_at)="'.$month.'" AND YEAR(C.created_at)="'.$year.'"' ,'LEFT');
            $this->db->where_not_in('U.role_id ', array(1,5,6));
            //$this->db->group_by('U.id'); 
            $this->db->order_by('U.role_id', 'asc'); 
            $qry = $this->db->get();
            //echo $this->db->last_query(); die;          
            return $qry->row()->total;
            
        }
        $this->db->select("SQL_CALC_FOUND_ROWS U.*, 
            (CASE
            WHEN U.role_id=2 THEN CONCAT('HQ (',CA.`name`,')')
            WHEN U.role_id=3 THEN CONCAT('RO (',RO.`name`,')')
            WHEN U.role_id=4 THEN CONCAT('ZT (',RO.`name`,')')
            WHEN U.role_id=7 THEN CONCAT('KV (',KV.`name`,')')
            ELSE 'NA' END
            ) AS 'name',
            (CASE
            WHEN U.role_id=2 THEN RO.`code`
            WHEN U.role_id=3 THEN RO.`code`
            WHEN U.role_id=4 THEN RO.`code`
            WHEN U.role_id=7 THEN KV.`code`
            ELSE 'NA' END
            ) AS 'code',C.id AS 'compliancestatus' ",false);
        $this->db->from('ci_users as U');
        $this->db->join('ci_regions  RO','U.region_id=RO.id' ,'Left');
        $this->db->join('ci_schools KV','U.school_id=KV.id' ,'Left');
        $this->db->join('ci_roles R','U.role_id=R.id' ,'Left');
        $this->db->join('ci_role_category CA','U.role_category=CA.id' ,'Left');
        $this->db->join('ci_compliance C','U.id=C.submittedby AND MONTH(C.created_at)="'.$month.'" AND YEAR(C.created_at)="'.$year.'"' ,'Left');
        $this->db->where_not_in('U.role_id ', array(1,5,6));
        $this->db->group_by('U.id'); 
        $this->db->order_by('U.role_id', 'asc'); 
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
           // $this->db->where("CONCAT(CA.name,RO.name,KV.name,RO.code,KV.code) LIKE '%$search%' ");
            $this->db->like('CA.name', $search);
            $this->db->or_like('RO.name', $search);
            $this->db->or_like('KV.name', $search);
            $this->db->or_like('RO.code', $search);
            $this->db->or_like('KV.code', $search);
        }
        
        $qry = $this->db->get();
        //echo $this->db->last_query(); die;  

        if($qry->num_rows()){
            $data['result']=$qry->result();
        }else{
            $data['result']=array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        //pr($data['count']);
        return $data;
    }
    
    
    
}
