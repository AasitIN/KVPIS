<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Reports_model extends CI_Model {
	public function __construct(){
            parent::__construct();
			//show($this->session->userdata['user_id']);
        }
    public function getAllRegisteredProfile($limit=null,$start=null,$col=null,$dir=null,$search=null,$post_data=null)
    {
        if(func_num_args()==0)//this is used for getting total number of records
        {
            $this->db->select('count(id) as total');
            $this->db->from('employee_details');
            $qry=$this->db->get();
            return $qry->row()->total;
        }
        //=====================================================================//
        $this->db->select('id')->from('ci_users');
        $this->db->where('region_id=', $this->session->userdata['region_id']);
        $subQuery =  $this->db->get_compiled_select();
        //====================================================================//
        
        $this->db->select("SQL_CALC_FOUND_ROWS
            E.id,
            E.emp_createdby,
            E.emp_code,
            (CASE 
                WHEN E.emp_title=1 THEN 'Sh.' 
                WHEN E.emp_title=2 THEN 'Smt.' 
                WHEN E.emp_title=3 THEN 'Ms.' END
            ) AS emp_title,
            E.emp_first_name,E.emp_middle_name,E.emp_last_name,E.emp_email,E.emp_mobile_no,
            S.present_designationid,S.present_place,S.present_unit,S.present_school,S.present_kvcode,S.present_zone,
            IFNULL(D.`name`,'NA') AS emp_desig,
            IFNULL(SU.`name`,'NA') AS emp_subject,
            IFNULL(R.`name`,'NA') AS emp_post_place,
            IFNULL(RO.`name`,'NA') AS emp_region,
            IFNULL(SC.`name`,'NA') AS emp_school,
            IFNULL(SC.`code`,'NA') AS emp_school_code,
            IFNULL(ZO.`name`,'NA') AS emp_zone",false);
        $this->db->from('ci_employee_details E');
        $this->db->join('ci_present_service_details S','E.emp_code=S.emp_id','Left');
        $this->db->join('ci_designations D','S.present_designationid=D.id','Left');
        $this->db->join('ci_subjects SU','SU.id=S.present_subject','LEFT');
        $this->db->join('ci_roles R','S.present_place=R.id','Left');
        $this->db->join('ci_regions RO','S.present_unit=RO.id','Left');
        $this->db->join('ci_schools SC','S.present_school=SC.id','Left');
        $this->db->join('ci_regions ZO','S.present_zone=ZO.id','Left');
        $this->db->join('ci_role_category CRO','CRO.id=S.present_section','Left');
        //======================= Check Role & According To Access ==============================//
        
        $LogAcs=$this->session->userdata['role_id'];
        if($LogAcs==5 || $LogAcs==4 || $LogAcs==2){ //HQ/ZIET/KV
            $this->db->where('E.emp_createdby=', $this->session->userdata['user_id']);
		}elseif($LogAcs==3){ //RO
           // $this->db->where('E.emp_createdby=', $this->session->userdata['user_id']);
           $this->db->where("E.emp_createdby IN ($subQuery)", NULL, FALSE);
        }else{
            // for Web Admin
        }
        if($limit > 0){
            $this->db->limit($limit,$start);
        }
        if($col){
            $this->db->order_by($col,$dir);
        }
        if($search && !empty($search)) {
            $this->db->group_start();
            $this->db->like('E.emp_first_name', $search);
            $this->db->or_like('E.emp_code', $search);
            $this->db->group_end();
        }
        //pr($post_data);
       /*============filter for report=======================================  */
        if(isset($post_data['initial_role_id'])&& !empty($post_data['initial_role_id'])){
            if(isset($post_data['initial_school_id'])&& !empty($post_data['initial_school_id'])){
               //$this->db->where('SC.id',$post_data['initial_school_id']);
            }else{
               $this->db->where('R.id',$post_data['initial_role_id']);
            }
        }
	if(isset($post_data['desiganition_id'])&& !empty($post_data['desiganition_id'])){
            $this->db->where('D.id',$post_data['desiganition_id']);
	}
        if(isset($post_data['sdesiganition_id'])&& !empty($post_data['sdesiganition_id'])){
            $this->db->where('D.id',$post_data['sdesiganition_id']);
	}
        if(isset($post_data['subject_id'])&& !empty($post_data['subject_id'])){
            $this->db->where('SU.id',$post_data['subject_id']);
	}
	
	if(isset($post_data['initial_section_id'])&& !empty($post_data['initial_section_id'])){
            $this->db->where('CRO.id',$post_data['initial_section_id']);
	}
	if(isset($post_data['initial_region_id'])&& !empty($post_data['initial_region_id'])){
            $this->db->where('RO.id',$post_data['initial_region_id']);
	}
	if(isset($post_data['initial_school_id'])&& !empty($post_data['initial_school_id'])){
            $this->db->where('SC.id',$post_data['initial_school_id']);
	}
	 /* ================================================================= */
        $qry=$this->db->get();
        //show($this->db->last_query());
	if($qry->num_rows()){
            $data['result']=$qry->result();
        }else{
            $data['result']=array();
        }
        
        $total = $this->db->query("SELECT FOUND_ROWS() AS count"); 
        $data['count']=isset($total->row()->count)?$total->row()->count:0;
        return $data;
        
    }
	
    /* ========================================VACANCY================================================ */
    public function getAllRegisteredProfilevacancy($limit=null,$start=null,$col=null,$dir=null,$search=null,$post_data){
        //show($post_data['initial_school_id']);
        //=====================================================================//
        $this->db->select('code')->from('ci_schools');
        $this->db->where('reg_id=', $post_data['initial_region_id']);
        $subQuery =  $this->db->get_compiled_select();
        //====================================================================//
//=====================================================================//
        $this->db->select('code')->from('ci_schools');
        $this->db->where('id=', $post_data['initial_school_id']);
        $subCQuery =  $this->db->get_compiled_select();
        //====================================================================//
        if(func_num_args()==0)//this is used for getting total number of records
        {
            $this->db->select('count(id) as total');
            $this->db->from('ci_vacancy_master');
            $qry=$this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS V.`code` AS 'KV_CODE',
            V.type, R.`name` AS 'ROLE',
            (CASE WHEN V.type=5 THEN SC.`name` ELSE RO.`name` END) AS 'KV_REGION_ZEIT',
            V.designation, D.`name` AS 'IN_POST',
            (CASE WHEN V.designation_type=1 THEN 'TEACHING' ELSE 'NON-TEACHING' END) AS 'DESI_TYPE',
            V.`subject`,IFNULL(S.`name`,'NA') AS 'IN_SUBJECT',
            V.sanctioned_post AS 'SANCTION_POST',V.inposition_post AS 'IN_POSITION',
            (v.sanctioned_post-V.inposition_post) AS 'TOTAL_VACANCY'",false);
        $this->db->from('ci_vacancy_master V');
        $this->db->join('ci_roles R','V.type=R.id','Left');
        $this->db->join('ci_designations D','V.designation=D.id','Left');
        $this->db->join('ci_subjects S','V.`subject`=S.id','Left');
        $this->db->join('ci_regions RO','V.`code`=RO.`code`','Left');
        $this->db->join('ci_schools SC','V.`code`=SC.`code`','Left');

        /*============filter for report=======================================  */
 if(isset($post_data['initial_role_id'])&& !empty($post_data['initial_role_id'])){
 if(empty($post_data['initial_school_id'])){
  $this->db->where('R.id',$post_data['initial_role_id']);
 }else{
  $this->db->where('R.id',5);
 }
  }
           
  // if place id <> 5
  if($post_data['initial_role_id']==5){
 
$this->db->where("V.code IN ($subQuery)", NULL, FALSE);
  }else{
if(isset($post_data['initial_region_id'])&& !empty($post_data['initial_region_id'])){
if(empty($post_data['initial_school_id'])){
$this->db->where('RO.id',$post_data['initial_region_id']);
}else{
 $this->db->where("V.code IN ($subQuery)", NULL, FALSE);
}
}
  }
  if(isset($post_data['initial_school_id'])&& !empty($post_data['initial_school_id'])){
  //$this->db->where('SC.id',$post_data['initial_school_id']);
  $this->db->where("V.code IN ($subCQuery)", NULL, FALSE);
  }
  if(isset($post_data['desiganition_id'])&& !empty($post_data['desiganition_id'])){
  $this->db->where('D.id',$post_data['desiganition_id']);
  }
  if(isset($post_data['subject_id'])&& !empty($post_data['subject_id'])){
  $this->db->where('S.id',$post_data['subject_id']);
  }
  if(isset($post_data['desiganition_category_id'])&& !empty($post_data['desiganition_category_id'])){
  $this->db->where('V.designation_type',$post_data['desiganition_category_id']);
  }

        /* ================================================================= */
       
        if($limit > 0){
            $this->db->limit($limit,$start);
        }
        if($col){
            $this->db->order_by($col,$dir);
        }
        if($search && !empty($search)) {
            $this->db->group_start();
            $this->db->like('D.`name`', $search);
            $this->db->or_like('SC.`name`', $search);
            $this->db->or_like('RO.`name`', $search);
            $this->db->group_end();
        }
       
        $qry=$this->db->get();
       /*  echo $this->db->last_query();
die; */
        if($qry->num_rows())
        {
            $data['result']=$qry->result();
            $lastQry=$this->db->last_query();
        }else{
            $data['result']=array();
        }
       
        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $lastQry=$this->db->last_query();
        $data['count']=isset($total->row()->count)?$total->row()->count:0;
        return $data;
       
    }
	public function getAllEmployeeReport($limit=null,$start=null,$col=null,$dir=null,$search=null,$post_data=null)
    {
        if(func_num_args()==0)//this is used for getting total number of records
        {
            $this->db->select('count(id) as total');
            $this->db->from('employee_details');
            $qry=$this->db->get();
            return $qry->row()->total;
        }
        //=====================================================================//
        $this->db->select('id')->from('ci_users');
        $this->db->where('region_id=', $this->session->userdata['region_id']);
        $subQuery =  $this->db->get_compiled_select();
        //====================================================================//
        
        $this->db->select("SQL_CALC_FOUND_ROWS
            E.id,
			E.emp_createdby,
            E.emp_code,
            (CASE 
                WHEN E.emp_title=1 THEN 'Sh.' 
                WHEN E.emp_title=2 THEN 'Smt.' 
                WHEN E.emp_title=3 THEN 'Ms.' END
            ) AS emp_title,
			(CASE 
                WHEN S.present_place =5 THEN SC.name   
                ELSE R.name END
            ) AS kv_where_working,
			S.present_place AS role_id, PD.comp_other_prof as profesional_qualification ,S.present_joiningdate as doj ,
            E.emp_first_name,E.emp_middle_name,E.emp_last_name,E.emp_email,E.emp_mobile_no,E.emp_dob AS e_dob,S.seniorityno as seniorti_no,S.present_joiningdate as date_oppointment,
            S.present_designationid,S.present_place,S.present_unit,S.present_school,S.present_kvcode,S.present_zone,F.order_date as date_of_drawing_center,T.t_from1 as training_from,T.t_to1 as tranig_to,T.duration as no_of_days,QL.name as educational_qualification,
            IFNULL(D.`name`,'NA') AS emp_desig,
            IFNULL(R.`name`,'NA') AS emp_post_place,
            IFNULL(RO.`name`,'NA') AS emp_region,
            IFNULL(SC.`name`,'NA') AS emp_school,
            IFNULL(SC.`code`,'NA') AS emp_school_code,
            IFNULL(ZO.`name`,'NA') AS emp_zone",false);
        $this->db->from('ci_employee_details E');
        $this->db->join('ci_present_service_details S','E.emp_code=S.emp_id','Left');
        $this->db->join('ci_designations D','S.present_designationid=D.id','Left');
        $this->db->join('ci_roles R','S.present_place=R.id','Left');
        $this->db->join('ci_regions RO','S.present_unit=RO.id','Left');
        $this->db->join('ci_schools SC','S.present_school=SC.id','Left');
        $this->db->join('ci_regions ZO','S.present_zone=ZO.id','Left');
        $this->db->join('ci_role_category CRO','CRO.id=S.present_section','Left');
        $this->db->join('ci_financial_upgradation F','F.emp_id=E.emp_code','Left');
        $this->db->join('ci_academic A','A.emp_id=E.emp_code','Left');
        $this->db->join('ci_training_details T','T.emp_id=E.emp_code','Left');
        $this->db->join('ci_qualification QL','QL.id=A.emp_education','Left');
        $this->db->join('ci_proficiency_details PD','PD.emp_id=E.emp_code','Left');
        //======================= Check Role & According To Access ==============================//
        
        $LogAcs=$this->session->userdata['role_id'];
        if($LogAcs==5 || $LogAcs==4 || $LogAcs==2){ //HQ/ZIET/KV
            $this->db->where('E.emp_createdby=', $this->session->userdata['user_id']);
		}elseif($LogAcs==3){ //RO
           // $this->db->where('E.emp_createdby=', $this->session->userdata['user_id']);
           $this->db->where("E.emp_createdby IN ($subQuery)", NULL, FALSE);
        }else{
            // for Web Admin
        }
        if($limit > 0){
            $this->db->limit($limit,$start);
        }
        if($col){
            $this->db->order_by($col,$dir);
        }
		//pr($search);
        if($search && !empty($search)) {
            $this->db->group_start();
            $this->db->like('S.emp_id',$search);
            $this->db->or_like('E.emp_first_name', $search);
            $this->db->or_like('E.emp_last_name', $search);
            $this->db->or_like('E.emp_middle_name', $search);
            $this->db->or_like('F.order_date', $search);
            $this->db->or_like('T.t_from1', $search);
            $this->db->or_like('T.t_to1', $search);
            $this->db->or_like('T.duration', $search);
            $this->db->or_like('QL.name', $search);
            $this->db->or_like('PD.comp_other_prof', $search);
            $this->db->or_like('S.seniorityno', $search);
            $this->db->or_like('E.emp_dob', $search);
            $this->db->or_like('SC.name', $search);
            $this->db->or_like('R.name', $search);
            $this->db->group_end();
        }
        //pr($post_data);
       /*============filter for report=======================================  */
        if(isset($post_data['initial_role_id'])&& !empty($post_data['initial_role_id'])){
            if(isset($post_data['initial_school_id'])&& !empty($post_data['initial_school_id'])){
               //$this->db->where('SC.id',$post_data['initial_school_id']);
            }else{
               $this->db->where('R.id',$post_data['initial_role_id']);
            }
        }
	if(isset($post_data['desiganition_id'])&& !empty($post_data['desiganition_id'])){
            $this->db->where('D.id',$post_data['desiganition_id']);
	}
	
	if(isset($post_data['initial_section_id'])&& !empty($post_data['initial_section_id'])){
            $this->db->where('CRO.id',$post_data['initial_section_id']);
	}
	if(isset($post_data['initial_region_id'])&& !empty($post_data['initial_region_id'])){
            $this->db->where('RO.id',$post_data['initial_region_id']);
	}
	if(isset($post_data['initial_school_id'])&& !empty($post_data['initial_school_id'])){
            $this->db->where('SC.id',$post_data['initial_school_id']);
	}
	 /* ================================================================= */
        $qry=$this->db->get();
        //show($this->db->last_query());
	if($qry->num_rows()){
            $data['result']=$qry->result();
        }else{
            $data['result']=array();
        }
        
        $total = $this->db->query("SELECT FOUND_ROWS() AS count"); 
        $data['count']=isset($total->row()->count)?$total->row()->count:0;
        return $data;
        
    }
}
