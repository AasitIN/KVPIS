<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Profile_model extends CI_Model {
	public function __construct(){
            parent::__construct();
        }
    //============================= PERSONAL SECTION START =================================//
    public function getPersonalData($ExEc = NULL){
        $this->db->select('E.*');
        $this->db->from('ci_employee_details as E');
        //$this->db->join('roles R', 'U.role_id=R.id', 'LEFT');
        //$this->db->join('role_category C', 'U.role_category=C.id', 'LEFT');
        //$this->db->join('regions Z', 'U.region_id=Z.id', 'LEFT');
        //$this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('E.emp_code', $ExEc);
        }
        return $this->db->get()->row();
    }
    //============================= PERSONAL SECTION END =================================//
    //============================= ACADEMIC SECTION START ===============================//
    
    public function getAcademicData($ExEc = NULL){
        $this->db->select('A.*');
        $this->db->from('ci_academic as A');
        //$this->db->join('academic_details AD', 'A.id=AD.academic_id', 'LEFT');
        //$this->db->join('role_category C', 'U.role_category=C.id', 'LEFT');
        //$this->db->join('regions Z', 'U.region_id=Z.id', 'LEFT');
        //$this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('A.emp_id', $ExEc);
        }
        $this->db->order_by("A.id", "asc");
        $query=$this->db->get();
        return $query->result();
    }
    public function getAcademicDetailData($acId = NULL, $empId = NULL){
        $this->db->select('AD.*');
        $this->db->from('ci_academic_details as AD');
        if(!empty($acId) && !empty($empId)){
            $clause = array('AD.academic_id' => $acId, 'AD.emp_id' => $empId);
            $this->db->where($clause);
            $this->db->order_by("AD.id", "asc");
            $query=$this->db->get();
            return $query->result();
        }else{
            return array();
        }
        
    }
    public function getProfessionalData($ExEc = NULL){
        $this->db->select('P.id,P.emp_id,P.emp_prof_exp,P.org_name,P.org_address,P.job_profile,P.job_description,DATE_FORMAT(P.job_start_date,"%d-%m-%Y") as job_start_date,DATE_FORMAT(P.job_end_date,"%d-%m-%Y") as job_end_date');
        $this->db->from('ci_professional_details as P');
        if(!empty($ExEc)){
            $this->db->where('P.emp_id', $ExEc);
        }
        $this->db->order_by("P.id", "asc");
        $query=$this->db->get();
        return $query->result();
    }
    public function getProficiencyData($ExEc = NULL){
        $this->db->select('C.*');
        $this->db->from('ci_proficiency_details as C');
        if(!empty($ExEc)){
            $this->db->where('C.emp_id', $ExEc);
        }
        $this->db->order_by("C.id", "asc");
        $query=$this->db->get();
        return $query->result();
    }

    //============================= ACADEMIC SECTION END =================================//
    //============================= RESULT SECTION START =================================//
    
    public function getResultData($ExEc = NULL){
        $this->db->select('R.*');
        $this->db->from('ci_results as R');
        //$this->db->join('academic_details AD', 'A.id=AD.academic_id', 'LEFT');
        //$this->db->join('role_category C', 'U.role_category=C.id', 'LEFT');
        //$this->db->join('regions Z', 'U.region_id=Z.id', 'LEFT');
        //$this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('R.emp_id', $ExEc);
        }
        $this->db->order_by("R.id", "asc");
        $query=$this->db->get();
        return $query->row_array();
    }
    public function getResultDataTech($ExEc = NULL){
        $this->db->select('T.*,S.`name` as rst_subjects_name');
        $this->db->from('ci_results_tech_details as T');
        $this->db->join('subjects S', 'T.rst_subjects=S.id', 'LEFT');
        //$this->db->join('role_category C', 'U.role_category=C.id', 'LEFT');
        //$this->db->join('regions Z', 'U.region_id=Z.id', 'LEFT');
        //$this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('T.emp_id', $ExEc);
        }
        $this->db->order_by("T.id", "asc");
        $query=$this->db->get();
        return $query->result();
    }
    public function getResultDataNonTech($ExEc = NULL){
        $this->db->select('N.id,N.results_id,N.emp_id,N.rsnt_vid_ofc_name,N.rsnt_dign_post,D.name as rsnt_dign_post_name,
        DATE_FORMAT(N.rsnt_srv_frm_date,"%d-%m-%Y") AS rsnt_from_date, 
        DATE_FORMAT(N.rsnt_srv_to_date,"%d-%m-%Y") AS rsnt_to_date,
        N.rsnt_sec_mat_details,N.rsnt_res_disp,N.rsnt_doc_name');
        $this->db->from('ci_results_non_tech_details as N');
        $this->db->join('designations D', 'N.rsnt_dign_post=D.id', 'LEFT');
        //$this->db->join('role_category C', 'U.role_category=C.id', 'LEFT');
        //$this->db->join('regions Z', 'U.region_id=Z.id', 'LEFT');
        //$this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('N.emp_id', $ExEc);
        }
        $this->db->order_by("N.id", "asc");
        $query=$this->db->get();
        return $query->result();
    }
    //============================= RESULT SECTION END =================================//
    
    //============================= FAMILY SECTION START ===============================//
    public function getFamilyData($ExEc = NULL){
        $this->db->select('F.*');
        $this->db->from('ci_family_details as F');
        if(!empty($ExEc)){
            $this->db->where('F.emp_id', $ExEc);
        }
        return $this->db->get()->result();      
    }

    public function getSpouseData($ExEc = NULL){
        $this->db->select('S.*,designations.name designation_name,designations.cat_id as des_cat_id');
        $this->db->join('designations ','designations.id=designation','LEFT');
        $this->db->from('spouse_details as S');
        if(!empty($ExEc)){
            $this->db->where('S.emp_id', $ExEc);
        }
		
        return $this->db->get()->result();    
    }
    //============================= FAMILY SECTION END =================================//
    
    //============================= SERVICE SECTION START ===============================//
    public function getinitialServiceData($ExEc = NULL){
        $this->db->select('E.*,D.name as designationname,D.cat_id,S.name as subjectname,r.name as rolename,re.name as region,sc.name as school,rc.name as section,'
                . 'reg.name as initial_zone,DATE_FORMAT(E.initial_joiningdate,"%d-%m-%Y") as initial_joiningdate,'
                . 'DATE_FORMAT(E.initial_confirmdate,"%d-%m-%Y") as initial_confirmdate,'
                . 'DATE_FORMAT(E.initial_trailsdate,"%d-%m-%Y") as initial_trailsdate,DATE_FORMAT(E.initial_trailedate,"%d-%m-%Y") as initial_trailedate,'
                . 'DATE_FORMAT(E.initial_regulardate,"%d-%m-%Y") as initial_regulardate,DATE_FORMAT(E.initial_liensdate,"%d-%m-%Y") as initial_liensdate,'
                . 'DATE_FORMAT(E.initial_lienedate,"%d-%m-%Y") as initial_lienedate');
        $this->db->from('ci_initial_service_details as E');
        $this->db->join('designations D', 'D.id=E.initial_designationid', 'LEFT');
        $this->db->join('subjects S', 'S.id=E.initial_subject', 'LEFT');
        $this->db->join('roles r', 'r.id=E.initial_place', 'LEFT');
        $this->db->join('regions re', 're.id=E.initial_unit', 'LEFT');
        $this->db->join('schools sc', 'sc.id=E.initial_school', 'LEFT');
        $this->db->join('role_category rc', 'rc.id=E.initial_section', 'LEFT');
        $this->db->join('regions reg', 'reg.id=E.initial_zone', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->row(); 
    }
    public function getpresentServiceData($ExEc = NULL){
        $this->db->select('E.*,D.name as designationname,D.cat_id,S.name as subjectname,r.name as rolename,re.name as region,sc.name as school,rc.name as section,'
                . 'reg.name as present_zone,DATE_FORMAT(E.present_joiningdate,"%d-%m-%Y") as present_joiningdate,'
                . 'DATE_FORMAT(E.present_trailsdate,"%d-%m-%Y") as present_trailsdate,DATE_FORMAT(E.present_trailedate,"%d-%m-%Y") as present_trailedate,'
                . 'DATE_FORMAT(E.present_regulardate,"%d-%m-%Y") as present_regulardate,DATE_FORMAT(E.present_notionaldate,"%d-%m-%Y") as present_notionaldate');
        $this->db->from('ci_present_service_details as E');
        $this->db->join('designations D', 'D.id=E.present_designationid', 'LEFT');
        $this->db->join('subjects S', 'S.id=E.present_subject', 'LEFT');
        $this->db->join('roles r', 'r.id=E.present_place', 'LEFT');
        $this->db->join('regions re', 're.id=E.present_unit', 'LEFT');
        $this->db->join('schools sc', 'sc.id=E.present_school', 'LEFT');
        $this->db->join('role_category rc', 'rc.id=E.present_section', 'LEFT');
        $this->db->join('regions reg', 'reg.id=E.present_zone', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->row(); 
    }
    
    public function getallServiceData($ExEc = NULL){
        $this->db->select('E.*,D.name as designationname,D.cat_id,S.name as subjectname,r.name as rolename,re.name as region,sc.name as school,rc.name as section,'
                . 'DATE_FORMAT(E.all_fromdate,"%d-%m-%Y") as s_from,DATE_FORMAT(E.all_todate,"%d-%m-%Y") as s_to,'
                . 'DATE_FORMAT(E.all_trailsdate,"%d-%m-%Y") as alltrailstart,DATE_FORMAT(E.all_trailedate,"%d-%m-%Y") as alltrailend,'
                . 'DATE_FORMAT(E.all_regulardate,"%d-%m-%Y") as alltrailregular');
        $this->db->from('ci_all_service_details as E');
        $this->db->join('designations D', 'D.id=E.all_designationid', 'LEFT');
        $this->db->join('subjects S', 'S.id=E.all_subjectid', 'LEFT');
        $this->db->join('roles r', 'r.id=E.all_place', 'LEFT');
        $this->db->join('regions re', 're.id=E.all_unit', 'LEFT');
        $this->db->join('schools sc', 'sc.id=E.all_school', 'LEFT');
        $this->db->join('role_category rc', 'rc.id=E.all_section', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result(); 
    }
    
    public function getLeaveData($ExEc = NULL){
        $this->db->select('L.*,DATE_FORMAT(L.from_date,"%d-%m-%Y") as from_date,DATE_FORMAT(L.to_date,"%d-%m-%Y") as to_date');
        $this->db->from('ci_leave_service_details as L');
        if(!empty($ExEc)){
            $this->db->where('L.emp_id', $ExEc);
        }
        return $this->db->get()->result();           
    }
    
    public function getOtherDetailData($ExEc = NULL){
        $this->db->select('O.*,DATE_FORMAT(O.due_date_retirement,"%d-%m-%Y") as due_date_retirement');
        $this->db->from('ci_other_service_details as O');
        if(!empty($ExEc)){
            $this->db->where('O.emp_id', $ExEc);
        }
        return $this->db->get()->row();           
    }
    
    public function getDisciplinaryData($ExEc = NULL){
        $this->db->select(' D.*,DATE_FORMAT(D.from_date,"%d-%m-%Y") as from_date,DATE_FORMAT(D.to_date,"%d-%m-%Y") as to_date,'
                . 'DATE_FORMAT(D.dies_non_start_date,"%d-%m-%Y") as dies_non_start_date,DATE_FORMAT(D.dies_non_end_date,"%d-%m-%Y") as dies_non_end_date ');
        $this->db->from('ci_desciplinary_service_details as  D');
        if(!empty($ExEc)){
            $this->db->where('D.emp_id', $ExEc);
        }
        return $this->db->get()->result();           
    }
    public function getDobData($ExEc = NULL){
        $this->db->select('emp_dob');
        $this->db->from('ci_employee_details as E');
        
        if(!empty($ExEc)){
            $this->db->where('E.emp_code', $ExEc);
        }
       $dob = $this->db->get()->row();

       
       return $dob->emp_dob;
    }
    
    //============================= SERVICE SECTION END =================================//
    
    //============================= PAY-SCALE SECTION START ===============================//
    public function getPayScaleData($ExEc = NULL){
        $this->db->select('E.*,DATE_FORMAT(E.date_of_increment,"%d-%m-%Y") as date_of_increment');
        $this->db->from('pay_details as E');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->row(); 
    }
    //============================= PAY-SCALE SECTION END =================================//
    
     //============================= AWARD SECTION START ===============================//
    
    public function getAwardData($ExEc = NULL){
        $this->db->select('A.*,D.name as designationname');
        $this->db->from('ci_awards_details as A');
        $this->db->join('designations D', 'D.id=A.in_designation', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('A.emp_id', $ExEc);
        }
        return $this->db->get()->result();    
    }
    //============================= AWARD SECTION END =================================//
    
    //============================= TRAINING SECTION START ===============================//
    public function getTrainingData($ExEc = NULL){
        $this->db->select('T.*,D.name as designationname,D.cat_id,S.name as subjectname,r.name as rolename,re.name as region,sc.name as school,DATE_FORMAT(T.t_from1,"%d-%m-%Y") as t_from1,DATE_FORMAT(T.t_from2,"%d-%m-%Y") as t_from2,DATE_FORMAT(T.t_from3,"%d-%m-%Y") as t_from3,DATE_FORMAT(T.t_from4,"%d-%m-%Y") as t_from4,DATE_FORMAT(T.t_to1,"%d-%m-%Y") as t_to1,DATE_FORMAT(T.t_to2,"%d-%m-%Y") as t_to2,DATE_FORMAT(T.t_to3,"%d-%m-%Y") as t_to3,DATE_FORMAT(T.t_to4,"%d-%m-%Y") as t_to4');
        $this->db->from('ci_training_details as T');
        $this->db->join('designations D', 'D.id=T.designation', 'LEFT');
        $this->db->join('subjects S', 'S.id=T.subject', 'LEFT');
        $this->db->join('roles r', 'r.id=T.venuetype', 'LEFT');
        $this->db->join('regions re', 're.id=T.venueregion', 'LEFT');
        $this->db->join('schools sc', 'sc.id=T.venueschool', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('T.emp_id', $ExEc);
        }
        return $this->db->get()->result(); 
    }
    public function getOtherTrainingData($ExEc = NULL){
        $this->db->select('T.*,D.name as designationname,D.cat_id,S.name as subjectname,DATE_FORMAT(T.t_from,"%d-%m-%Y") as t_from,DATE_FORMAT(T.t_to,"%d-%m-%Y") as t_to');
        $this->db->from('ci_other_training_details as T');
        $this->db->join('designations D', 'D.id=T.designation', 'LEFT');
        $this->db->join('subjects S', 'S.id=T.subject', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('T.emp_id', $ExEc);
        }
        return $this->db->get()->result(); 
    }
    //============================= TRAINING SECTION END =================================//
    
    //============================= PERFORMANCE SECTION START ============================//
    
    public function getPerformanceData($ExEc = NULL){
        $this->db->select('P.*');
        $this->db->from('ci_performance_details as P');
        if(!empty($ExEc)){
            $this->db->where('P.emp_id', $ExEc);
        }
        $this->db->order_by('year', 'DESC');
        return $this->db->get()->result();        
    }

    //============================= PERFORMANCE SECTION END ===============================//
    
    //============================= PROMOTION SECTION START ===============================//
   
    public function getPromotionData($ExEc = NULL){
        $this->db->select('E.*,DATE_FORMAT(E.promotion_order_date,"%d-%m-%Y") as odate,DATE_FORMAT(E.promotion_demotion_date,"%d-%m-%Y") as pdate,DATE_FORMAT(E.notional_joining_date,"%d-%m-%Y") as ndate');
        $this->db->from('ci_promotiondemotion_details as E');
        $this->db->where('E.type', 1);
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result();
    }
    public function getDemotionData($ExEc = NULL){
        $this->db->select('E.*');
        $this->db->from('ci_promotiondemotion_details as E');
        $this->db->where('E.type', 2);
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result();
    }
    //============================= PROMOTION SECTION END =================================//
    
    //============================= FINANCIAL SECTION START ===============================//
    
    public function getFinancialData($ExEc = NULL){
        $this->db->select('E.*,DATE_FORMAT(E.order_date,"%d-%m-%Y") as fdate');
        $this->db->from('ci_financial_upgradation as E');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result();
    }
    //============================= FINANCIAL SECTION END =================================//
    
    //============================= EXCHANGE SECTION START ===============================//
   
    public function getExchangeData($ExEc = NULL){
        $this->db->select('E.*,DATE_FORMAT(E.date_from,"%d-%m-%Y") as date_from,DATE_FORMAT(E.date_to,"%d-%m-%Y") as date_to');
        $this->db->from('ci_teacher_exchange_program as E');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result();  
    }
    
    //============================= EXCHANGE SECTION END =================================//
    
    //============================= FOREIGN SECTION START ===============================//
    public function getForeignVisitData($ExEc = NULL){
        $this->db->select('E.*');
        $this->db->from('ci_foreign_visits as E');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result();
    }
    //============================= FOREIGN SECTION END =================================//
    
    public function getRegdEmployee(){
        $this->db->select("
        ED.id,ED.emp_code,ED.emp_title,
        CONCAT(ED.emp_first_name,' ',ED.emp_middle_name,' ',ED.emp_last_name) as emp_name,
        ED.emp_gender,ED.emp_email,ED.emp_mobile_no
        ");
        $this->db->from('ci_employee_details ED');
        $this->db->where('ED.emp_code!=', '');
       
        return $this->db->get()->result();
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
        	
        $qry=$this->db->get();
       
        if($qry->num_rows())
        {
            $data['result']=$qry->result();
            $x=$this->db->last_query();
        }else{
            $data['result']=array();
        }
        
        $total = $this->db->query("SELECT FOUND_ROWS() AS count"); 
        $data['count']=isset($total->row()->count)?$total->row()->count:0;
        return $data;
        
    }
}
