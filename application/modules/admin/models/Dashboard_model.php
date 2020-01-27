<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
	public function __construct(){
        parent::__construct();
        //show($this->session->userdata());
    }
    public function getKvDetails(){
        //show($this->session->userdata);
        
        $userId=$this->session->userdata['user_id'];
        $roleId=$this->session->userdata['role_id'];
        $roleCat=$this->session->userdata['role_category'];
        $regionId=$this->session->userdata['region_id'];
        $schoolId=$this->session->userdata['school_id'];
        $this->db->select('U.id,U.role_id,U.role_category,U.region_id,U.school_id,R.`name` AS role_name,RO.`name` AS region_name ,SC.`name` AS school_name');
        $this->db->from('ci_users U');
        $this->db->join('ci_roles R', 'U.role_id=R.id', 'LEFT');
        $this->db->join('ci_regions RO', 'U.region_id=RO.id', 'LEFT');
        $this->db->join('ci_schools SC', 'U.school_id=SC.id', 'LEFT');
        //$this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
        if(!empty($userId)){
             $this->db->where('U.id=', $userId);
        }
        return $this->db->get()->row();
    }
    public function getHqDetails(){
        $userId=$this->session->userdata['user_id'];
        $roleId=$this->session->userdata['role_id'];
        $roleCat=$this->session->userdata['role_category'];
        $regionId=$this->session->userdata['region_id'];
        $schoolId=$this->session->userdata['school_id'];
        $this->db->select('U.id,U.role_id,U.role_category,U.region_id,U.school_id,U.username,R.`name` AS role_name,RO.`name` AS region_name ,SC.`name` AS school_name');
        $this->db->from('ci_users U');
        $this->db->join('ci_roles R', 'U.role_id=R.id', 'LEFT');
        $this->db->join('ci_regions RO', 'U.region_id=RO.id', 'LEFT');
        $this->db->join('ci_regions SC', 'U.school_id=SC.id', 'LEFT');
        //$this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
        if(!empty($userId)){
             $this->db->where('U.id=', $userId);
        }
        return $this->db->get()->row();
    }
    public function getZtDetails(){
        $userId=$this->session->userdata['user_id'];
        $roleId=$this->session->userdata['role_id'];
        $roleCat=$this->session->userdata['role_category'];
        $regionId=$this->session->userdata['region_id'];
        $schoolId=$this->session->userdata['school_id'];
        $this->db->select('U.id,U.role_id,U.role_category,U.region_id,U.school_id,R.`name` AS role_name,RO.`name` AS region_name ,SC.`name` AS school_name');
        $this->db->from('ci_users U');
        $this->db->join('ci_roles R', 'U.role_id=R.id', 'LEFT');
        $this->db->join('ci_regions RO', 'U.region_id=RO.id', 'LEFT');
        $this->db->join('ci_regions SC', 'U.school_id=SC.id', 'LEFT');
        //$this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
        if(!empty($userId)){
             $this->db->where('U.id=', $userId);
        }
        return $this->db->get()->row();
    }
    public function getRoDetails(){
        $userId=$this->session->userdata['user_id'];
        $roleId=$this->session->userdata['role_id'];
        $roleCat=$this->session->userdata['role_category'];
        $regionId=$this->session->userdata['region_id'];
        $schoolId=$this->session->userdata['school_id'];
        $this->db->select('U.id,U.role_id,U.role_category,U.region_id,U.school_id,R.`name` AS role_name,RO.`name` AS region_name ,SC.`name` AS school_name');
        $this->db->from('ci_users U');
        $this->db->join('ci_roles R', 'U.role_id=R.id', 'LEFT');
        $this->db->join('ci_regions RO', 'U.region_id=RO.id', 'LEFT');
        $this->db->join('ci_regions SC', 'U.school_id=SC.id', 'LEFT');
        //$this->db->join('schools S', 'U.school_id=S.id', 'LEFT');
        if(!empty($userId)){
             $this->db->where('U.id=', $userId);
        }
        return $this->db->get()->row();
    }
    //======================= Dashboard Graph ============================//
    public function getUserRegisterByRegion(){
        $this->db->select('psd.present_unit,COUNT(psd.present_place) as total,rg.name');
        $this->db->from('ci_regions as rg');
        $this->db->join('ci_present_service_details as psd','psd.present_unit=rg.id');
        $this->db->group_by('psd.present_unit');
        $this->db->order_by('rg.name','asc');
        $q = $this->db->get();
        if($q->num_rows() > 0) {
            return $q->result_array();
        } else {
            return 0;
        }
    }
    public function getUserRegisterBySchool(){
        $this->session->userdata['region_id'];
        $this->db->select('psd.present_unit,COUNT(psd.present_place) as total,rg.name');
        $this->db->from('ci_regions as rg');
        $this->db->join('ci_present_service_details as psd','psd.present_unit=rg.id');
        $this->db->group_by('psd.present_unit');
        $this->db->order_by('rg.name','asc');
        $q = $this->db->get();
        if($q->num_rows() > 0) {
            return $q->result_array();
        } else {
            return 0;
        }
    }
    public function getSchoolByRegion(){
		$region_id = $this->session->userdata['region_id'] ;
		$this->db->select("psd.present_kvcode,COUNT(psd.id) as total,psd.present_place as type");
        $this->db->from('ci_present_service_details as psd');
        $this->db->group_by('psd.present_kvcode');
		$this->db->where('psd.present_unit',$region_id);
        $q = $this->db->get();
		if($q->num_rows() > 0) {
            return $q->result_array();
        } else {
            return 0;
        }
    }
	
	public function getSchoolBypost(){
		//=====================================================================//
		$school_id = $this->session->userdata['school_id'];
                $this->db->select('code')->from('ci_schools');
                $this->db->where('id=',$school_id);
                $subQuery =  $this->db->get_compiled_select();
                //====================================================================//
		$this->db->select("psd.present_designationid as pid , psd.present_subject sid,COUNT(psd.id) as total,psd.present_place as type,ps.name as subject_name,d.name as designation_name");
                $this->db->from('ci_present_service_details as psd');
		$this->db->join('ci_subjects as ps','ps.id=psd.present_subject','left');
		$this->db->join('ci_designations as d','d.id=psd.present_designationid','left');
		$this->db->group_by('psd.present_designationid');
                $this->db->group_by('psd.present_subject');
		$this->db->where("psd.present_kvcode IN ($subQuery)", NULL, FALSE);
                $q = $this->db->get();
                //show($this->db->last_query());
		if($q->num_rows() > 0) {
            return $q->result_array();
        } else {
            return 0;
        }
    }
    public function getHq(){
        //=====================================================================//
        $cr_by = $this->session->userdata['user_id'];
	$SQL="SELECT COUNT(MAS.DESIG_ID) AS 'TOT',MAS.DESIG_NAME FROM (
            SELECT
            E.emp_code AS 'EMP_CODE',
            P.present_designationid AS 'DESIG_ID',IFNULL(D.`name`,'NA') AS 'DESIG_NAME',
            P.present_subject AS 'SUB_ID', IFNULL(S.`name`,'NA') AS 'SUB_NAME',
            P.present_place AS 'LEVEL_ID', R.label AS 'LEVEL_NAME',
            P.present_unit AS 'UNIT_ID', RO.`name` AS 'UNIT_NAME',
            P.present_section AS 'SECTION_ID',RC.`name` AS 'SECTION_NAME',
            P.present_school AS 'SCHOOL_ID', IFNULL(SO.`name`,'NA') AS 'SCHOOL_NAME',
            P.present_kvcode AS 'KV_CODE', E.emp_createdby AS 'REGD_BY_ID',U.username AS 'REGD_BY'
            FROM ci_present_service_details P
            JOIN ci_employee_details E ON(P.emp_id=E.emp_code)
            JOIN ci_users U ON(E.emp_createdby=U.id)
            LEFT JOIN ci_designations D ON(P.present_designationid=D.id)
            LEFT JOIN ci_subjects S ON(P.present_subject=S.id)
            LEFT JOIN ci_roles R ON(P.present_place=R.id)
            LEFT JOIN ci_regions RO ON(P.present_unit=RO.id)
            LEFT JOIN ci_schools SO ON(P.present_school=SO.id)
            LEFT JOIN ci_role_category RC ON(P.present_section=RC.id)
            )MAS WHERE MAS.REGD_BY_ID=$cr_by GROUP BY MAS.DESIG_ID";
        $query = $this->db->query($SQL);
        //show( $EQ=$this->db->last_query());
        //show( $query->result_array());
        if($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return 0;
        }
    }
    public function getHqEmpRegd(){
        $cr_by = $this->session->userdata['user_id'];
        $SQL="SELECT COUNT(id) AS 'TOT', SUM((CASE WHEN  DATE_FORMAT(emp_createdon,'%Y-%m')= DATE_FORMAT(CURDATE(),'%Y-%m') THEN 1 ELSE 0 END)) AS 'C_TOT'
        FROM(
        SELECT E.id,E.emp_code,E.emp_createdby,E.emp_createdon
        FROM ci_employee_details E
        JOIN ci_present_service_details P ON(E.emp_code=P.emp_id)
        WHERE P.created_by=$cr_by
        )AS EMP";
        $query = $this->db->query($SQL);
        //show( $EQ=$this->db->last_query());
        //show( $query->result_array());
        if($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return 0;
        }
    }

    public function getZiet(){
		//=====================================================================//
		$region_id_zt = $this->session->userdata['region_id'];
		$this->db->select('code')->from('ci_regions');
        $this->db->where('id=',$region_id_zt);
        $subQuery =  $this->db->get_compiled_select();
        //====================================================================//
        
		$this->db->select("psd.present_designationid as pid,COUNT(psd.id) as total,d.name as designation_name");
        $this->db->from('ci_present_service_details as psd');
		$this->db->join('ci_designations as d','d.id=psd.present_designationid');
		$this->db->group_by('psd.present_designationid');
        $this->db->where("psd.present_kvcode IN ($subQuery)", NULL, FALSE);
        $q = $this->db->get();
		if($q->num_rows() > 0) {
            return $q->result_array();
        } else {
            return 0;
        }
    }
    
        
        public function getTotalUser(){
		$role_id = $this->session->userdata['role_id'] ;
                
                $this->db->select('COUNT(present_kvcode) as total');
                //$this->db->where('role_id',$role_id);
                if($role_id==1){    
                    
                }else if($role_id==5){    
                        $this->db->where('present_school',$this->session->userdata['school_id']);   
                }else{
                        $this->db->where('present_unit',$this->session->userdata['region_id']);
                }
                $query=$this->db->get("ci_present_service_details");
                
                //show($this->db->last_query());
                return $query->row()->total;
		 
	}
        public function getTotalCurrentUser(){
		$role_id = $this->session->userdata['role_id'] ;
                
                $this->db->select('COUNT(present_kvcode) as total');
                //$this->db->where('role_id',$role_id);
                if($role_id==1){    
                    
                }else if($role_id==5){    
                        $this->db->where('present_school',$this->session->userdata['school_id']);   
                }else{
                        $this->db->where('present_unit',$this->session->userdata['region_id']);
                }
                $this->db->where('MONTH(created_at)', date('m'));
                $this->db->where('YEAR(created_at)', date('Y'));
                $query=$this->db->get("ci_present_service_details");
                
                //show($this->db->last_query());
                return $query->row()->total;
		 
	}
	
	public function getTotalTransfer(){
            //====================================================================//
		$school_id = $this->session->userdata['school_id'];
                $this->db->select('code')->from('ci_schools');
                $this->db->where('id=',$school_id);
                $subScQuery =  $this->db->get_compiled_select();
            //====================================================================//
            //====================================================================//
		$region_id = $this->session->userdata['region_id'];
                $this->db->select('code')->from('ci_regions');
                $this->db->where('id=',$region_id);
                $subHRZQuery =  $this->db->get_compiled_select();
            //====================================================================//
			
			
		$role_id = $this->session->userdata['role_id'] ;
		$this->db->select('COUNT(id) as total');
                //$this->db->where('transfer_kvcode',$role_id);
                $this->db->where('in_process',1);
                if($role_id==1){    
                    
                }else if($role_id==5){    
                        //$this->db->where('type',$role_id);   
                        $this->db->where("transfer_kvcode IN ($subScQuery)", NULL, FALSE);
                        //show($this->db->lastquery());
                }else if($role_id==2){
                       // $this->db->where('type',$role_id);
                        $this->db->where('transfer_kvcode',1917);
                        $this->db->where('transfer_section',$this->session->userdata['role_category']);
                }else{
					$this->db->where("transfer_kvcode IN ($subHRZQuery)", NULL, FALSE);
				}
                $query=$this->db->get("ci_emp_transfer_details");
                return $query->row()->total;
	}
	public function getTotalVacancy(){
            //====================================================================//
		$school_id = $this->session->userdata['school_id'];
                $this->db->select('code')->from('ci_schools');
                $this->db->where('id=',$school_id);
                $subScQuery =  $this->db->get_compiled_select();
            //====================================================================//
            //====================================================================//
		$region_id = $this->session->userdata['region_id'];
                $this->db->select('code')->from('ci_regions');
                $this->db->where('id=',$region_id);
                $subHRZQuery =  $this->db->get_compiled_select();
            //====================================================================//
		$role_id = $this->session->userdata['role_id'] ;
                //show($role_id);
                $this->db->select('SUM(sanctioned_post) as total_sanction_post,SUM(inposition_post) as total_inposition_post');
                if($role_id==1){    
                    
                }else if($role_id==5){    
                        $this->db->where('type',$role_id);   
                        $this->db->where("code IN ($subScQuery)", NULL, FALSE);
                }else if($role_id==2){
                         $this->db->where('code',1917);
                }else{
					$this->db->where('type',$role_id);
                    $this->db->where("code IN ($subHRZQuery)", NULL, FALSE);
				}
                $this->db->where('status',1);
                    $query = $this->db->get("ci_vacancy_master");
                    //show($this->db->last_query());
                return $query->row();
	}
	public function getVacancyByRegion(){
	    $query = $this->db->query("SELECT cc.reg_id, SUM(aa.sanctioned_post) as total_vacancy FROM `ci_vacancy_master` aa, ci_schools cc where aa.code = cc.code GROUP BY cc.reg_id");
        return $query->result_array();
	}
        public function getHqZtRoVacInPos($kCode=null){
            // ALL
			
            if(empty($kCode)){
            $query = $this->db->query("SELECT M.`RO_KV_CODE` AS `KVC`,M.REGION AS `NAME`,SUM(M.SANCTIONED) AS `SANCTIONED`,SUM(M.`IN-POSITION`) AS `POSITION`
            FROM(
            SELECT V.`code` AS `KV_CODE`,
            V.designation AS `DESIG_CODE`,DS.`name` AS `DESIG_NAME`,
            V.`subject` AS `SUB_CODE`,IFNULL(SU.`name`,'NA') AS `SUB_NAME`,
            CA.`label` AS `LEVEL`,
            (CASE WHEN v.`type`=5 THEN S.`name`  ELSE R.`name` END) as `PLACE`,
            (CASE WHEN v.`type`=5 THEN RO.`code` ELSE R.`code` END) as `RO_KV_CODE`,
            (CASE WHEN v.`type`=5 THEN RO.`name` ELSE R.`name` END) as `REGION`,
            V.sanctioned_post AS `SANCTIONED`,V.inposition_post AS `IN-POSITION`, IFNULL((V.sanctioned_post-V.inposition_post),0) AS `VACANCY`
            FROM ci_vacancy_master V
            LEFT JOIN ci_schools S ON(V.`code`=S.`code`)
            LEFT JOIN ci_regions R ON(V.`code`=R.`code`)
            LEFT JOIN ci_regions RO ON(S.reg_id=RO.`id`)
            LEFT JOIN ci_subjects SU ON(V.`subject`=SU.`id`)
            LEFT JOIN ci_designations DS ON(V.designation=DS.`id`)
            LEFT JOIN ci_roles CA ON(V.`type`=CA.`id`)
            ) AS M GROUP BY M.REGION");
                        }else{
                            $this->db->select('id');
                            $this->db->from('ci_schools');
                            $this->db->where('`code`=',$kCode);
                            $qry=$this->db->get();
                            $id=$qry->row()->id;

                    $segment = $this->uri->segment(5);
                    if($id || $segment==3){
                    $query = $this->db->query("SELECT CONCAT(M.DESIG_NAME,'(',M.SUB_NAME,')') AS 'NAME',SUM( M.SANCTIONED) AS 'SANCTIONED', SUM(M.`IN-POSITION`) AS 'POSITION',M.KV_CODE AS 'KVC'
                    FROM(
                    SELECT V.`code` AS `KV_CODE`,
                    V.designation AS `DESIG_CODE`,DS.`name` AS `DESIG_NAME`,
                    V.`subject` AS `SUB_CODE`,IFNULL(SU.`name`,'NA') AS `SUB_NAME`,
                    CA.`label` AS `LEVEL`,
                    (CASE WHEN v.`type`=5 THEN S.`name`  ELSE R.`name` END) as `PLACE`,
                    (CASE WHEN v.`type`=5 THEN RO.`code` ELSE R.`code` END) as `RO_KV_CODE`,
                    (CASE WHEN v.`type`=5 THEN RO.`name` ELSE R.`name` END) as `REGION`,
                    V.sanctioned_post AS `SANCTIONED`,V.inposition_post AS `IN-POSITION`, IFNULL((V.sanctioned_post-V.inposition_post),0) AS `VACANCY`
                    FROM ci_vacancy_master V
                    LEFT JOIN ci_schools S ON(V.`code`=S.`code`)
                    LEFT JOIN ci_regions R ON(V.`code`=R.`code`)
                    LEFT JOIN ci_regions RO ON(S.reg_id=RO.`id`)
                    LEFT JOIN ci_subjects SU ON(V.`subject`=SU.`id`)
                    LEFT JOIN ci_designations DS ON(V.designation=DS.`id`)
                    LEFT JOIN ci_roles CA ON(V.`type`=CA.`id`)
                    ) AS M WHERE M.KV_CODE=$kCode

                    GROUP BY M.KV_CODE, M.DESIG_CODE,M.SUB_NAME");
                    }else{
                    // Check KvCode & Unit
                    $this->db->select('`code`,`type`');
                    $this->db->from('ci_regions');
                    $this->db->where('`code`=',$kCode);
                    $qry=$this->db->get();
                    $kvc=$qry->row()->code;
                    $typ=$qry->row()->type;
                    if(!empty($kvc)&&($typ)){ //Region
                        $query = $this->db->query("SELECT ROV.`KV_CODE` AS `KVC`, ROV.PLACE AS `NAME`,SUM(ROV.`SANCTIONED`) AS `SANCTIONED`,SUM(ROV.`IN-POSITION`) AS `POSITION`
                        FROM(
                        SELECT V.`code` AS `KV_CODE`,
                        V.designation AS `DESIG_CODE`,DS.`name` AS `DESIG_NAME`,
                        V.`subject` AS `SUB_CODE`,IFNULL(SU.`name`,'NA') AS `SUB_NAME`,
                        CA.`label` AS `LEVEL`,
                        (CASE WHEN v.`type`=5 THEN S.`name`  ELSE R.`name` END) as `PLACE`,
                        (CASE WHEN v.`type`=5 THEN RO.`code` ELSE R.`code` END) as `RO_KV_CODE`,
                        (CASE WHEN v.`type`=5 THEN RO.`name` ELSE R.`name` END) as `REGION`,
                        V.sanctioned_post AS `SANCTIONED`,V.inposition_post AS `IN-POSITION`, IFNULL((V.sanctioned_post-V.inposition_post),0) AS `VACANCY`
                        FROM ci_vacancy_master V
                        LEFT JOIN ci_schools S ON(V.`code`=S.`code`)
                        LEFT JOIN ci_regions R ON(V.`code`=R.`code`)
                        LEFT JOIN ci_regions RO ON(S.reg_id=RO.`id`)
                        LEFT JOIN ci_subjects SU ON(V.`subject`=SU.`id`)
                        LEFT JOIN ci_designations DS ON(V.designation=DS.`id`)
                        LEFT JOIN ci_roles CA ON(V.`type`=CA.`id`)
                        ) ROV WHERE ROV.RO_KV_CODE=$kCode GROUP BY ROV.PLACE");
                    }
                }
                }
             
            //show($this->db->last_query());
            return $query->result_array();
        }
	public function getHqZtRoEmpRegd($kCode=NULL){
            $query = $this->db->query("SELECT E.`RO_KV_CODE` AS `KVC`,E.`RO_HQ_ZT-NAME` AS `HQ_ZT_RO`, COUNT(E.EMP_CODE) AS `TOT`
            FROM(
            SELECT 
            PS.`emp_id` AS `EMP_CODE`,
            PS.`present_designationid` AS `DESIG_ID`,DG.`name` AS `DESIG_NAME`,
            PS.`present_subject`AS `SUB_CODE`,IFNULL(SU.`name`,'NA') AS `SUB_NAME`,
            PS.`present_place` AS `LEVEL_ID`,CA.`label` AS `LEVEL`,
            PS.`present_unit` AS `RO_HQ_ZT-ID`,RO.`name` AS `RO_HQ_ZT-NAME`,
            PS.`present_section` AS `DEPT_ID`,IFNULL(CL.`name`,'NA') AS `DEPT_NAME`,
            PS.`present_kvcode` AS `KV_CODE`,RO.`code` AS `RO_KV_CODE`,
            PS.`created_by` AS `CR_BY`,EM.emp_createdby,US.username AS `UNAME`
            FROM ci_present_service_details PS
            LEFT JOIN ci_designations DG ON(PS.`present_designationid`=DG.`id`)
            LEFT JOIN ci_subjects SU ON(PS.`present_subject`=SU.`id`)
            LEFT JOIN ci_roles CA ON(PS.`present_place`=CA.`id`)
            LEFT JOIN ci_regions RO ON(PS.`present_unit`=RO.`id`)
            LEFT JOIN ci_role_category CL ON(PS.`present_section`=CL.`id`)
            LEFT JOIN ci_users US ON(PS.`created_by`=US.`id`) 
            LEFT JOIN ci_employee_details EM ON(PS.emp_id=EM.emp_code)

            ORDER BY US.`role_id`, PS.`created_by`
            ) AS E
            GROUP BY E.`RO_HQ_ZT-NAME`");
            //show($this->db->last_query());
            return $query->result_array();
        }
		
		public function getCodeBySchoolId($school_id){
			$this->db->select('code')->from('ci_schools');
			$this->db->where('id=',$school_id);
			$query = $this->db->get();
			if($query->num_rows()){
				return $query->row()->code ;
			}
		}
		public function getCodeByRegionId($region_id){
			$this->db->select('code')->from('ci_regions');
			$this->db->where('id=',$region_id);
			$query = $this->db->get();
				if($query->num_rows()){
				return $query->row()->code ;
			}
		}
}
