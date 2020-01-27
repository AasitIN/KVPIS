<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Employee_model extends CI_Model {
	public function __construct(){
            parent::__construct();
        }
    //============================= PERSONAL SECTION START =================================//
    public function InsPersonalData($empData,$empId,$empTyp){
            if(empty($empId)){$empId=100000;$empTyp=1;}
            $response = array();
            $catDate=empty($empData['emp_cat_details_date'])?'0000-00-00':date('Y-m-d', strtotime($empData['emp_cat_details_date']));
            $phyDate=empty($empData['emp_phy_details_date'])?'0000-00-00':date('Y-m-d', strtotime($empData['emp_phy_details_date']));
            $PostData = array(
                'emp_code'          => $empId,
                'emp_type'          => $empTyp,
                'emp_title'         => $empData['emp_title'],
                'emp_first_name'    => $empData['emp_first_name'],
                'emp_middle_name'   => $empData['emp_middle_name'],
                'emp_last_name'     => $empData['emp_last_name'],
                'emp_father_name'   => $empData['emp_father_name'],
                'emp_mother_name'   => $empData['emp_mother_name'],
                'emp_father_title'  => $empData['emp_father_title'],
                'emp_mother_title'  => $empData['emp_mother_title'],
                'emp_photo'         => $empData['emp_upload_photo'],
                'emp_gender'        => $empData['emp_gender'],
                'emp_dob'           => date('Y-m-d', strtotime($empData['emp_dob'])),
                'emp_marital_status'=> $empData['emp_marital_status'],
                'emp_maiden_name'   => $empData['emp_maiden_name'],
                'emp_email'         => $empData['emp_email'],
                'emp_mobile_no'     => $empData['emp_mobile'],
                'emp_landline_no'   => $empData['emp_landline_no'],
                'emp_aadhar_no'     => $empData['emp_aadhaar_no'],
                'emp_pancard_no'    => $empData['emp_pancard_no'],
                'emp_passport_no'   => $empData['emp_passport_no'],
                'emp_blood_group'   => $empData['emp_blood_group'],
                'emp_postaladdress' => $empData['emp_address'],
                'emp_pincode'       => $empData['emp_pincode'],
                'emp_hometown'      => $empData['emp_hometown'],
                'emp_single_parent' => $empData['emp_single_parent'],
                'emp_surviving_child' => $empData['emp_surviving_child'],
                'emp_identity_mark' => $empData['emp_identity_mark'],
                'emp_religion'      => $empData['emp_religion'],
                'emp_other_religion' => $empData['emp_othereligion'],
                'emp_category' => $empData['emp_category'],
                'emp_cat_certificate_no' => $empData['emp_cat_details_certificate'],
                'emp_cat_issuing_date' =>$catDate,
                'emp_cat_issuing_authority' => $empData['emp_cat_details_name'],
                'emp_physical_abled' => $empData['emp_physical_handicapped'],
                'emp_ph_category' => $empData['emp_phy_details_type'],
                'emp_ph_othername' => $empData['emp_ph_othername'],
                'emp_ph_percent' => $empData['emp_phy_percent'],
                'emp_ph_certificate_no' => $empData['emp_phy_details_certificate'],
                'emp_ph_issuing_date' => $phyDate,
                'emp_ph_issuing_authority' => $empData['emp_phy_details_name'],
                'emp_gpfcpfnps' => $empData['emp_gpfcpfnps'],
                'emp_gpfcpfnpsnumber' => $empData['emp_gpfcpfnpsnumber'],
                'emp_createdby' => $this->session->userdata('user_id'),
                'emp_createdon' => date('Y-m-d'),
                'emp_updatedby' => $this->session->userdata('user_id'),
                'emp_updatedon' => date('Y-m-d'),
                'emp_isdraft' => '1'
            );
            //$this->db->insert('employee_details', $PostData);
            //show($lastQry=$this->db->last_query());
            //die;
            if($this->db->insert('employee_details', $PostData)) {
                // Insert Into User Table
                // Role_id decided by the user logged in System
                
                $newpass='PIS@'.$empId;
                $UserData = array(
                    'role_id' => 6,
                    'role_category' => 0,
                    'region_id' => 0,
                    'school_id' => 0,
                    'username' => $empId,
                    'password' => hash('sha512', $newpass),
                    'email_id' =>$empData['emp_email'] ,
                    'status' => '1',
                    'created' => date("Y-m-d H:i:s")
                );
                $this->db->insert('users', $UserData);
                $lastQry=$this->db->last_query();
                $this->InsUpdVacancyMaster($empData,$empId);
                $this->InsUpdPresentService($empData,$empId);
                
                $response['status'] = 'success';
                $response['emp_code'] = $empId;
            } else {
                $lastQry=$this->db->last_query();
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            }
            return $response;
    }
    public function UpdPersonalData($empData,$empId,$empTyp){
           
            $response = array();
            $catDate=empty($empData['emp_cat_details_date'])?'0000-00-00':date('Y-m-d', strtotime($empData['emp_cat_details_date']));
            $phyDate=empty($empData['emp_phy_details_date'])?'0000-00-00':date('Y-m-d', strtotime($empData['emp_phy_details_date']));
            $PostData = array(
                
                'emp_type'          => $empTyp,
                'emp_title'         => $empData['emp_title'],
                'emp_first_name'    => $empData['emp_first_name'],
                'emp_middle_name'   => $empData['emp_middle_name'],
                'emp_last_name'     => $empData['emp_last_name'],
                'emp_father_name'   => $empData['emp_father_name'],
                'emp_mother_name'   => $empData['emp_mother_name'],
                'emp_father_title'   => $empData['emp_father_title'],
                'emp_mother_title'   => $empData['emp_mother_title'],
                'emp_photo'         => $empData['emp_upload_photo'],
                'emp_gender'        => $empData['emp_gender'],
                'emp_dob'           => date('Y-m-d', strtotime($empData['emp_dob'])),
                'emp_marital_status'=> $empData['emp_marital_status'],
                'emp_maiden_name'   => $empData['emp_maiden_name'],
                'emp_email'         => $empData['emp_email'],
                'emp_mobile_no'     => $empData['emp_mobile'],
                'emp_landline_no'   => ($empData['emp_landline_no'])?$empData['emp_landline_no']:'',
                'emp_aadhar_no'     => ($empData['emp_aadhaar_no'])?$empData['emp_aadhaar_no']:'',
                'emp_pancard_no'    => $empData['emp_pancard_no'],
                'emp_passport_no'   => $empData['emp_passport_no'],
                'emp_blood_group'   => $empData['emp_blood_group'],
                'emp_postaladdress' => $empData['emp_address'],
                'emp_pincode'       => $empData['emp_pincode'],
                'emp_hometown'      => $empData['emp_hometown'],
                'emp_single_parent' => $empData['emp_single_parent'],
                'emp_surviving_child' => $empData['emp_surviving_child'],
                'emp_identity_mark' => $empData['emp_identity_mark'],
                'emp_religion'      => $empData['emp_religion'],
                'emp_other_religion' => $empData['emp_othereligion'],
                'emp_category' => $empData['emp_category'],
                'emp_cat_certificate_no' => $empData['emp_cat_details_certificate'],
                'emp_cat_issuing_date' =>$catDate,
                'emp_cat_issuing_authority' => $empData['emp_cat_details_name'],
                'emp_physical_abled' => $empData['emp_physical_handicapped'],
                'emp_ph_category' => $empData['emp_phy_details_type'],
                'emp_ph_othername' => $empData['emp_ph_othername'],
                'emp_ph_percent' => $empData['emp_phy_percent'],
                'emp_ph_certificate_no' => $empData['emp_phy_details_certificate'],
                'emp_ph_issuing_date' => $phyDate,
                'emp_ph_issuing_authority' => $empData['emp_phy_details_name'],
                'emp_gpfcpfnps' => $empData['emp_gpfcpfnps'],
                'emp_gpfcpfnpsnumber' => $empData['emp_gpfcpfnpsnumber'],
                'emp_updatedby' => $this->session->userdata('user_id'),
                'emp_updatedon' => date('Y-m-d'),
                'emp_isdraft' => '1'
            );
            $this->db->where('emp_code',$empId);
            $qry = $this->db->update('employee_details', $PostData);
            show($lastQry=$this->db->last_query());
            
            if ($qry) {
                $this->InsUpdVacancyMaster($empData,$empId);
                $this->InsUpdPresentService($empData,$empId);
                
                $response['status'] = 'success';
                $response['emp_code'] = $empId;
            } else {
                $lastQry=$this->db->last_query();
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            }
            return $response;    
    }
    public function InsUpdPresentService($empData,$empId){
       
        if(!empty($empData['present_designationid']))
        {
            if(!empty($empData['present_joiningdate']))
            {
                $pjoiningdate=date('Y-m-d', strtotime($empData['present_joiningdate']));
            }else{
                $pjoiningdate='NULL';
            }
            if(!empty($empData['present_trailsdate']))
            {
                $ptrailstartdate=date('Y-m-d', strtotime($empData['present_trailsdate']));
            }else{
                $ptrailstartdate='NULL';
            }
            if(!empty($empData['present_trailedate']))
            {
                $ptrailenddate=date('Y-m-d', strtotime($empData['present_trailedate']));
            }else{
                $ptrailenddate='NULL';
            }
            if(!empty($empData['present_regulardate']))
            {
                $pregular_date=date('Y-m-d', strtotime($empData['present_regulardate']));
            }else{
                $pregular_date='NULL';
            }
            if(!empty($empData['present_notionaldate']))
            {
                $pnotional_date=date('Y-m-d', strtotime($empData['present_notionaldate']));
            }else{
                $pnotional_date='NULL';
            }
            $PostData = array(
                'emp_id' => $empId,
                'present_designationid' => $empData['present_designationid'],
                'present_subject' => $empData['present_subject'],
                'present_place' => $empData['present_role_id'],
                'present_unit' => $empData['present_region_id'],
                'present_section' => $empData['present_section_id'],
                'present_school' => $empData['present_school_id'],
                'present_kvcode' => $empData['present_kvcode'],
                'present_shift' => $empData['present_shift'],
                'present_zone' => $empData['present_zone'],
                'present_joiningdate' => $pjoiningdate,
                'present_appoint_trail' => $empData['present_appoint_trail'],
                'present_trailsdate' => $ptrailstartdate,
                'present_trailedate' => $ptrailenddate,
                'present_regulardate' => $pregular_date,
                'present_appointed_term' => $empData['present_appointed_term'],
                'present_notionaldate' => $pnotional_date,
                'reason_notional' => $empData['reason_notional'],
                'present_category' => $empData['present_category'],
                'seniorityno' => $empData['seniorityno'],
                'present_panel_year' => $empData['present_panel_year'],
                'created_by' => $this->session->userdata('user_id')   
            );
            $this->db->select('E.*');
            $this->db->from('ci_present_service_details as E');
            $this->db->where('E.emp_id', $empData['emp_id']);
            
            if(!empty($this->db->get()->row()))
            {
                $this->db->where('emp_id', $empData['emp_id']);
                $this->db->update('ci_present_service_details', $PostData);
                $ids=getEmployeeidByEmpcode($empData['emp_id']);
                add_user_activity($this->session->userdata('user_id'),$ids, 'Update', 'Updated Present Service Detail','Employee Module');
                $lastQry=$this->db->last_query();
            }else{
                $this->db->insert('ci_present_service_details', $PostData);
                add_user_activity($this->session->userdata('user_id'),$this->db->insert_id(), 'Insert', 'Added Employee Personal Detail','Employee Module');
                $lastQry=$this->db->last_query();
            }
        }
        
    }
    public function InsUpdVacancyMaster($empData,$empId){
        //====================== Submitted Posting Details =========================//
        $SubEmpId   = $empId;
        $SubKvCode  = $empData['present_kvcode'];
        $SubDesigId = $empData['present_designationid'];
        $SubSubId   = $empData['present_subject'];
        if(empty($SubSubId)){$SubSubId='NULL';}
        //======================= Ex Current Posting Details =========================//
        $this->db->select('emp_id,present_kvcode,present_designationid,present_subject');
        $this->db->from('ci_present_service_details');
        $this->db->where('emp_id=', $empId);
        
        $qry = $this->db->get();
        $lastQry=$this->db->last_query();
        if ($qry->num_rows()) {
            $resData = $qry->row();
            $CurEmpId   = $resData->emp_id;
            $CurKvCode  = $resData->present_kvcode;

            $CurDesigId = $resData->present_designationid; 
            $CurSubId   = $resData->present_subject; 
            if(empty($CurSubId)){$CurSubId='NULL';}
        }else{ //for first time insertion case
            $this->db->query("UPDATE ci_vacancy_master SET inposition_post=inposition_post+1 WHERE code=$SubKvCode AND designation=$SubDesigId AND subject=ifnull($SubSubId,subject)");
            $lastQry=$this->db->last_query();
            return;
        }
        
        //============ Check Submitted Designation vs Present Designation ===========//
        if($CurKvCode==$SubKvCode){
            if($CurDesigId==$SubDesigId){
                if(!empty($SubSubId ) && ($CurSubId==$SubSubId)){

                }else{// Update Vacancy By Designation
                    $this->db->query("UPDATE ci_vacancy_master SET inposition_post=inposition_post-1 WHERE code=$CurKvCode AND designation=$CurDesigId AND subject=ifnull($CurSubId,subject)");
                    $lastQry=$this->db->last_query();
                    $this->db->query("UPDATE ci_vacancy_master SET inposition_post=inposition_post+1 WHERE code=$SubKvCode AND designation=$SubDesigId AND subject=ifnull($SubSubId,subject)");
                    $lastQry=$this->db->last_query();
                    return;
                }
            }else{// Update Vacancy By Designation
                $this->db->query("UPDATE ci_vacancy_master SET inposition_post=inposition_post-1 WHERE code=$CurKvCode AND designation=$CurDesigId AND subject=ifnull($CurSubId,subject)");
                $lastQry=$this->db->last_query();
                $this->db->query("UPDATE ci_vacancy_master SET inposition_post=inposition_post+1 WHERE code=$SubKvCode AND designation=$SubDesigId AND subject=ifnull($SubSubId,subject)");
                $lastQry=$this->db->last_query();
                return;
            }
            
        }else{// Update Vacancy By Designation
            $this->db->query("UPDATE ci_vacancy_master SET inposition_post=inposition_post-1 WHERE code=$CurKvCode AND designation=$CurDesigId AND subject=ifnull($CurSubId,subject)");
            $lastQry=$this->db->last_query();
            $this->db->query("UPDATE ci_vacancy_master SET inposition_post=inposition_post+1 WHERE code=$SubKvCode AND designation=$SubDesigId AND subject=ifnull($SubSubId,subject)");
            $lastQry=$this->db->last_query();
            return;
        }
    }
    
    public function setPersonalData($empData){
        $empId=$empData['emp_id']; // Check if blank generate Random empId : emp_type=1 else existing empId: emp_type=2
        if(empty($empId)){ // Insert Record
            $this->db->select('max(emp_code)+1 as emp_code,emp_type,emp_isdraft');
            $this->db->from('employee_details');
            $this->db->where('emp_type', '1');
            $qry = $this->db->get();
            if ($qry->num_rows()) {
                $resData = $qry->row();
                $empId=$resData->emp_code; // Latest alloted emp_code+1
                $empTyp=1;
            } else {
                $empId=100000;
                $empTyp=1;
            }
            return $this->InsPersonalData($empData,$empId,$empTyp);
        }else{
            $this->db->select('emp_code,emp_type');
            $this->db->from('employee_details');
            $this->db->where('emp_code', $empId);
            $qry = $this->db->get();
            if ($qry->num_rows()) {
                $resData = $qry->row();
                $empId=$resData->emp_code;
                $empTyp=$resData->emp_type;
                return $this->UpdPersonalData($empData,$empId,$empTyp); // Update records
            } else {
                $empId=$empId; //Existing Employee Id having no records on Database.
                $empTyp=2;
                return $this->InsPersonalData($empData,$empId,$empTyp);
            }
        }
    }	
   
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
    
    public function getCurrentData(){
        $UsrId=$this->session->userdata('user_id');
        $CdQry=$this->db->query("SELECT 
            U.id,U.username,
            U.role_id,R.name AS role_name,
            U.role_category,IFNULL(RC.name,'NA') AS role_category_name,
            U.region_id,IFNULL(RO.name,'NA') AS region_name,IFNULL(RO.code,'NA') AS 'KCODE',
            U.school_id,SC.name AS school_name, IFNULL(SC.code,'NA') AS 'SCODE',
            (CASE WHEN U.role_id=5 THEN SC.code ELSE RO.code END) AS 'CCODE'
            FROM ci_users U
            LEFT JOIN ci_roles R ON(U.role_id=R.id)
            LEFT JOIN ci_role_category RC ON(U.role_category=RC.id)
            LEFT JOIN ci_regions RO ON(U.region_id=RO.id)
            LEFT JOIN ci_schools SC ON(U.school_id=SC.id)
            WHERE U.status=1 AND U.id='".$UsrId."'");
        //show($this->db->last_query());
        return $CdQry->row();
    }
    //============================= PERSONAL SECTION END =================================//
    //============================= ACADEMIC SECTION START ===============================//
    public function setAcademicData($empData){
        //show($empData);
        //die;
        $response = array();
        $empId      =   $empData['emp_id'];
        
        //============= R E M O V E  E X I S T I N G  R E C O R D S============//
        $this->db->where('emp_id', $empId);
        $this->db->delete('ci_academic');
        $this->db->where('emp_id', $empId);
        $this->db->delete('ci_academic_details');
        $this->db->where('emp_id', $empId);
        $this->db->delete('ci_professional_details');
        $this->db->where('emp_id', $empId);
        $this->db->delete('ci_proficiency_details');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Academic Data','Employee Module');
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Academic Details Data','Employee Module');
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Profesional Details Data','Employee Module');
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Proficiency Details Data','Employee Module');
        //==================== E N D  O F  Q U E R Y ==========================//
        
        
        $isQualified=   $empData['is_qualified'];
        
        $emp_education=$empData['emp_education'];
        $qualification_name=$empData['qualification_name'];
        $name_of_exam=$empData['name_of_exam'];
        $board_univ_name=$empData['board_univ_name'];
        
        $course_duration=$empData['course_duration'];
        $grad_duration=$empData['grad_duration'];
        
        $passing_year=$empData['passing_year'];
        $sub_offered =$empData['sub_offered'];
        
        $grad_first_year=$empData['grad_first_year'];
        $grad_first_sub=$empData['grad_first_sub'];
        $grad_first_sub_tot_marks=$empData['grad_first_sub_tot_marks'];
        $grad_first_sub_marks=$empData['grad_first_sub_marks'];
        
        $grad_second_year=$empData['grad_second_year'];
        $grad_second_sub=$empData['grad_second_sub'];
        $grad_second_sub_tot_marks=$empData['grad_second_sub_tot_marks'];
        $grad_second_sub_marks=$empData['grad_second_sub_marks'];
        
        $grad_third_year=$empData['grad_third_year'];
        $grad_third_sub=$empData['grad_third_sub'];
        $grad_third_sub_tot_marks=$empData['grad_third_sub_tot_marks'];
        $grad_third_sub_marks=$empData['grad_third_sub_marks'];
        
        $grad_fourth_year=$empData['grad_fourth_year'];
        $grad_fourth_sub=$empData['grad_fourth_sub'];
        $grad_fourth_sub_tot_marks=$empData['grad_fourth_sub_tot_marks'];
        $grad_fourth_sub_marks=$empData['grad_fourth_sub_marks'];
        
        
        $grad_all_marks=$empData['grad_all_marks'];
        $grad_all_tot_marks=$empData['grad_all_tot_marks'];
        $grad_all_tot_percent=$empData['grad_all_tot_percent'];
        
        //========================= INSERT DATA INTO ACADEMIC =========================//
        if($isQualified==1){ // Qualified
            $totEdu=count($emp_education);
            for($x=0;$x<$totEdu;$x++){
                if($emp_education[$x]==2){//
                    $edata=array(
                    'emp_id' => $empId,
                    'emp_education' => $emp_education[$x],
                    'emp_qualified' => $isQualified,
                    'emp_qualification_name' => 'NA',
                    'emp_name_of_exam' => $name_of_exam[$x],
                    'emp_university_name' => $board_univ_name[$x],
                    'emp_course_duration' => $grad_duration[$x],
                    'emp_passing_year' => '',
                    'emp_subject_offered' => '',
                    'emp_total_marks' => $grad_all_tot_marks[$x],
                    'emp_marks_obtained' => $grad_all_marks[$x],
                    'emp_marks_percentage' => $grad_all_tot_percent[$x],
                    'created_by' => $this->session->userdata('user_id'),
                    'created_on' => date('Y-m-d'),
                    'updated_by' => $this->session->userdata('user_id'),
                    'updated_on' => date('Y-m-d'),
                    'status' => 1,
                    'academic_isdraft' => 1);
                    $this->db->insert('ci_academic', $edata);
                    $insert_id = $this->db->insert_id();
                    add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Academic Data','Employee Module');
                    $totGradYear=($grad_duration[$x]/12); 
                    for($y=0;$y<$totGradYear;$y++){
                        $z=4*$x;
                        if($y==0){
                            $PassYear=$grad_first_year[$x];

                            $SUB1=$grad_first_sub[$z];
                            $SUB1_MO=$grad_first_sub_marks[$z];
                            $SUB1_FM=$grad_first_sub_tot_marks[$z];

                            $SUB2=$grad_first_sub[$z+1];
                            $SUB2_MO=$grad_first_sub_marks[$z+1];
                            $SUB2_FM=$grad_first_sub_tot_marks[$z+1];

                            $SUB3=$grad_first_sub[$z+2];
                            $SUB3_MO=$grad_first_sub_marks[$z+2];
                            $SUB3_FM=$grad_first_sub_tot_marks[$z+2];

                            $SUB4=$grad_first_sub[$z+3];
                            $SUB4_MO=$grad_first_sub_marks[$z+3];
                            $SUB4_FM=$grad_first_sub_tot_marks[$z+3];

                        }if($y==1){
                            $PassYear=$grad_second_year[$x];

                            $SUB1=$grad_second_sub[$z];
                            $SUB1_MO=$grad_second_sub_marks[$z];
                            $SUB1_FM=$grad_second_sub_tot_marks[$z];

                            $SUB2=$grad_second_sub[$z+1];
                            $SUB2_MO=$grad_second_sub_marks[$z+1];
                            $SUB2_FM=$grad_second_sub_tot_marks[$z+1];

                            $SUB3=$grad_second_sub[$z+2];
                            $SUB3_MO=$grad_second_sub_marks[$z+2];
                            $SUB3_FM=$grad_second_sub_tot_marks[$z+2];

                            $SUB4=$grad_second_sub[$z+3];
                            $SUB4_MO=$grad_second_sub_marks[$z+3];
                            $SUB4_FM=$grad_second_sub_tot_marks[$z+3];
                        }if($y==2){
                            $PassYear=$grad_third_year[$x];

                            $SUB1=$grad_third_sub[$z];
                            $SUB1_MO=$grad_third_sub_marks[$z];
                            $SUB1_FM=$grad_third_sub_tot_marks[$z];

                            $SUB2=$grad_third_sub[$z+1];
                            $SUB2_MO=$grad_third_sub_marks[$z+1];
                            $SUB2_FM=$grad_third_sub_tot_marks[$z+1];

                            $SUB3=$grad_third_sub[$z+2];
                            $SUB3_MO=$grad_third_sub_marks[$z+2];
                            $SUB3_FM=$grad_third_sub_tot_marks[$z+2];

                            $SUB4=$grad_third_sub[$z+3];
                            $SUB4_MO=$grad_third_sub_marks[$z+3];
                            $SUB4_FM=$grad_third_sub_tot_marks[$z+3];
                        }if($y==3){
                            $PassYear=$grad_fourth_year[$x];

                            $SUB1=$grad_fourth_sub[$z];
                            $SUB1_MO=$grad_fourth_sub_marks[$z];
                            $SUB1_FM=$grad_fourth_sub_tot_marks[$z];

                            $SUB2=$grad_fourth_sub[$z+1];
                            $SUB2_MO=$grad_fourth_sub_marks[$z+1];
                            $SUB2_FM=$grad_fourth_sub_tot_marks[$z+1];

                            $SUB3=$grad_fourth_sub[$z+2];
                            $SUB3_MO=$grad_fourth_sub_marks[$z+2];
                            $SUB3_FM=$grad_fourth_sub_tot_marks[$z+2];

                            $SUB4=$grad_fourth_sub[$z+3];
                            $SUB4_MO=$grad_fourth_sub_marks[$z+3];
                            $SUB4_FM=$grad_fourth_sub_tot_marks[$z+3];
                        }


                        $gdata=array(
                            'academic_id' => $insert_id,
                            'emp_id' => $empId,
                            'sessions_year' => ($y+1),
                            'passing_year' => $PassYear,
                            'sub_one'=>$SUB1,
                            'sub_one_full_marks'=>$SUB1_FM,
                            'sub_one_marks'=>$SUB1_MO,
                            'sub_two'=>$SUB2,
                            'sub_two_full_marks'=>$SUB2_FM,
                            'sub_two_marks'=>$SUB2_MO,
                            'sub_three'=>$SUB3,
                            'sub_three_full_marks'=>$SUB3_FM,
                            'sub_three_marks'=>$SUB3_MO,
                            'sub_four'=>$SUB4,
                            'sub_four_full_marks'=>$SUB4_FM,
                            'sub_four_marks'=>$SUB4_MO,
                            'status' => 1
                        );
                        if($this->db->insert('ci_academic_details', $gdata)){
                            $response['A'] = 1; 
                            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Academic Details Data','Employee Module');
                        }
                    }
                }else{
                    $edata=array(
                    'emp_id' => $empId,
                    'emp_education' => $emp_education[$x],
                    'emp_qualified' => $isQualified,
                    'emp_qualification_name' => $qualification_name[$x],
                    'emp_name_of_exam' => $name_of_exam[$x],
                    'emp_university_name' => $board_univ_name[$x],
                    'emp_course_duration' => $course_duration[$x],
                    'emp_passing_year' => $passing_year[$x],
                    'emp_subject_offered' => $sub_offered[$x],
                    'emp_total_marks' => $grad_all_tot_marks[$x],
                    'emp_marks_obtained' => $grad_all_marks[$x],
                    'emp_marks_percentage' => $grad_all_tot_percent[$x],
                    'created_by' => $this->session->userdata('user_id'),
                    'created_on' => date('Y-m-d'),
                    'updated_by' => $this->session->userdata('user_id'),
                    'updated_on' => date('Y-m-d'),
                    'status' => 1,
                    'academic_isdraft' => 1);
                    if($this->db->insert('ci_academic', $edata)){
                        add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Academic Data','Employee Module');
                        $response['A'] = 1; 
                    }
                }
            }
        }else{
            $edata=array(
                    'emp_id' => $empId,
                    'emp_education' => '',
                    'emp_qualified' => $isQualified,
                    'emp_qualification_name' => '',
                    'emp_name_of_exam' => '',
                    'emp_university_name' => '',
                    'emp_course_duration' => '',
                    'emp_passing_year' => '',
                    'emp_subject_offered' => '',
                    'emp_total_marks' => '',
                    'emp_marks_obtained' => '',
                    'emp_marks_percentage' => '',
                    'created_by' => $this->session->userdata('user_id'),
                    'created_on' => date('Y-m-d'),
                    'updated_by' => $this->session->userdata('user_id'),
                    'updated_on' => date('Y-m-d'),
                    'status' => 1,
                    'academic_isdraft' => 1);


                    if($this->db->insert('ci_academic', $edata)){
                        add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Academic Data','Employee Module');
                        $response['A'] = 1; 
                    }
        }
        //========================= INSERT DATA INTO PROFESSIONAL =========================//
        $is_professional_experience=$empData['is_professional_experience'];
        $org_name=$empData['org_name'];
        $desg_name=$empData['desg_name'];
        $org_addrs=$empData['org_addrs'];
        $job_start_date=$empData['job_start_date'];
        $job_end_date=$empData['job_end_date'];
        $job_desc=$empData['job_desc'];
        
        if($is_professional_experience==1){ // Having Professional Experience
            for($p=0;$p<count($org_name);$p++){
                $startDate=empty($job_start_date[$p])?'0000-00-00':date('Y-m-d', strtotime($job_start_date[$p]));
                $endDate=empty($job_end_date[$p])?'0000-00-00':date('Y-m-d', strtotime($job_end_date[$p]));
                $pdata=array(
                'emp_id' => $empId,
                'emp_prof_exp' => $is_professional_experience,
                'org_name' => $org_name[$p],
                'org_address' => $org_addrs[$p],
                'job_profile' => $desg_name[$p],
                'job_description' => $job_desc[$p],
                'job_start_date' => $startDate,
                'job_end_date' => $endDate,
                'status' => '1');
                $this->db->insert('ci_professional_details', $pdata);
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Professional Data','Employee Module');
                $response['P'] = 1; 
            }
        }else{
            $pdata=array(
                'emp_id' => $empId,
                'emp_prof_exp' => $is_professional_experience,
                'org_name' =>'',
                'org_address' => '',
                'job_profile' => '',
                'job_description' => '',
                'job_start_date' => '',
                'job_end_date' => '',
                'status' => '1');
                $this->db->insert('ci_professional_details', $pdata);
                $response['P'] = 1; 
        }
        //========================= INSERT DATA INTO COMP PROFIENCY =========================//
        $is_comp_prof=$empData['is_comp_prof'];
        $comp_prof_in=$empData['comp_prof_in'];
        $comp_prof_course=$empData['comp_prof_course'];
        if($is_comp_prof==1){
            for($xc=0; $xc<count($comp_prof_in);$xc++ ){
                 $cdata=array(
                'emp_id' => $empId,
                'is_comp_prof' =>$is_comp_prof,
                'comp_prof_type' => $comp_prof_in[$xc],
                'comp_other_prof' => $comp_prof_course[$xc],
                'status' => '1');
            $this->db->insert('ci_proficiency_details', $cdata);
            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Proficiency Data','Employee Module');
            //$this->db->last_query();
            $response['C'] = 1; 
            }
            
        }else{
            $cdata=array(
                'emp_id' => $empId,
                'is_comp_prof' =>$is_comp_prof,
                'comp_prof_type' => '',
                'comp_other_prof' => '',
                'status' => '1');
            $this->db->insert('ci_proficiency_details', $cdata);
            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Proficiency Data','Employee Module');
            $response['C'] = 1; 
        }
        if($response['A']==1 && $response['P']==1 && $response['C']==1){ 
            $response['status'] = 'success';
            $response['emp_code'] = $empId;
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Form Could not be saved,Please try again';
        }
       return $response;
    }
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
    public function setResultData($ResData){
        $response = array();
        $empId      =   $ResData['emp_id'];
        
        //============= R E M O V E  E X I S T I N G  R E C O R D S============//
        $this->db->where('emp_id', $empId);
        $this->db->delete('ci_results');
        $this->db->where('emp_id', $empId);
        $this->db->delete('ci_results_tech_details');
        $this->db->where('emp_id', $empId);
        $this->db->delete('ci_results_non_tech_details');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Result Data','Employee Module');
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Result Teaching Data','Employee Module');
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Result Non-Teaching Data','Employee Module');
        //==================== E N D  O F  Q U E R Y ==========================//
        //===================== INSERT /UPDATE CI RESULTS =====================//
        $UserData = array(
            'emp_id' => $empId,
            'emp_type' => $ResData['employee_type'],
            'emp_dign_post' =>$ResData['designation_type'] ,
            'created_by' => $this->session->userdata('user_id'),
            'created_on' => date('Y-m-d'),
            'updated_by' => $this->session->userdata('user_id'),
            'updated_on' => date('Y-m-d'),
            'status' => '1',
            'results_isdraft' => '1'
        );
        if($this->db->insert('results', $UserData)){
            $ResultId = $this->db->insert_id();
            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Result Data','Employee Module');
            if($ResData['employee_type']==2){                                   // Fon Non - Technical Employee
                $ntCtr=0;
                for($nt=0;$nt<count($ResData['designated_vid_ofc']);$nt++){
                    $NonData = array(
                        'results_id'=>$ResultId, 
                        'emp_id'=>$empId, 
                        'rsnt_vid_ofc_name' =>$ResData['designated_vid_ofc'][$nt],
                        'rsnt_dign_post'    =>$ResData['designated_post'][$nt],
                        'rsnt_srv_frm_date' =>date('Y-m-d', strtotime($ResData['designated_from'][$nt])),
                        'rsnt_srv_to_date'  =>date('Y-m-d', strtotime($ResData['designated_to'][$nt])),
                        'rsnt_sec_mat_details'=>$ResData['designated_details'][$nt], 
                        'rsnt_res_disp'     =>$ResData['designated_discharged'][$nt], 
                        'rsnt_doc_name'     =>$ResData['upload_docx'][$nt]
                        
                    );
                    if($this->db->insert('results_non_tech_details', $NonData))
                    {
                        add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Result Non-Teaching Data','Employee Module'); 
                        $lastQry=$this->db->last_query(); $ntCtr++; 
                        
                    }
                }
                
            }else{                                                              // Fon Technical Employee
                $ttCtr=0;
                if($ResData['designation_type']==1 || $ResData['designation_type']==2){ // Principal / Vice Principal
                    for($tt=0;$tt<count($ResData['pri_class']);$tt++){
                        $TecData = array(
                            'results_id'=>$ResultId, 
                            'emp_id'=>$empId, 
                            'rst_class'     =>$ResData['pri_class'][$tt],
                            'rst_year'      =>$ResData['pri_year'][$tt], 
                            'rst_no_students'=>$ResData['pri_no_stu'][$tt], 
                            'rst_no_pass_students'=>$ResData['pri_no_stu_pass'][$tt],
                            'rst_pass_per'  =>$ResData['pri_pass_per'][$tt], 
                            'rst_subjects'  =>0, 
                            'rst_pass_per_grade'    =>0,
                            'rst_pass_per_ninety'   =>$ResData['pri_high_per'][$tt],
                            'rst_pi_highest'    =>$ResData['pri_high_pi'][$tt], 
                            'rst_pi_class_xii'  =>0
                        );
                        if($this->db->insert('results_tech_details', $TecData))
                        { 
                            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Result Teaching Data','Employee Module'); 
                            $ttCtr++; 
                            
                        }
                    }
                }
                if($ResData['designation_type']==3 || $ResData['designation_type']==7){ // Head Master / Primary Teacher
                    for($tt=0;$tt<count($ResData['hms_class']);$tt++){
                        $TecData = array(
                            'results_id'=>$ResultId, 
                            'emp_id'=>$empId, 
                            'rst_class'     =>$ResData['hms_class'][$tt],
                            'rst_year'      =>$ResData['hms_year'][$tt], 
                            'rst_no_students'=>$ResData['hms_no_stu'][$tt], 
                            'rst_no_pass_students'=>$ResData['hms_no_stu_pass'][$tt],
                            'rst_pass_per'  =>$ResData['hms_pass_per'][$tt], 
                            'rst_subjects'  =>$ResData['hms_sub'][$tt], 
                            'rst_pass_per_grade'    =>$ResData['hms_high_pi'][$tt],
                            'rst_pass_per_ninety'   =>0,
                            'rst_pi_highest'    =>0, 
                            'rst_pi_class_xii'  =>0
                        );
                        if($this->db->insert('results_tech_details', $TecData))
                        { 
                            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Result Teaching Data','Employee Module'); 
                            $ttCtr++;
                        }
                    }
                }
                if($ResData['designation_type']==6){ // Post Graduate Teacher
                    for($tt=0;$tt<count($ResData['pgt_class']);$tt++){
                        $TecData = array(
                            'results_id'=>$ResultId, 
                            'emp_id'=>$empId, 
                            'rst_class'     =>$ResData['pgt_class'][$tt],
                            'rst_year'      =>$ResData['pgt_year'][$tt], 
                            'rst_no_students'=>$ResData['pgt_no_stu'][$tt], 
                            'rst_no_pass_students'=>$ResData['pgt_no_stu_pass'][$tt],
                            'rst_pass_per'  =>$ResData['pgt_pass_per'][$tt], 
                            'rst_subjects'  =>$ResData['pgt_sub'][$tt], 
                            'rst_pass_per_grade'    =>0,
                            'rst_pass_per_ninety'   =>0,
                            'rst_pi_highest'    =>$ResData['pgt_high_pi'][$tt], 
                            'rst_pi_class_xii'  =>0
                        );
                        if($this->db->insert('results_tech_details', $TecData))
                        { 
                            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Result Teaching Data','Employee Module'); 
                            $ttCtr++; 
                            
                        }
                    }
                }
                if($ResData['designation_type']==8){ // Trined Graduate Teacher
                    for($tt=0;$tt<count($ResData['tgt_class']);$tt++){
                        $TecData = array(
                            'results_id'=>$ResultId, 
                            'emp_id'=>$empId, 
                            'rst_class'     =>$ResData['tgt_class'][$tt],
                            'rst_year'      =>$ResData['tgt_year'][$tt], 
                            'rst_no_students'=>$ResData['tgt_no_stu'][$tt], 
                            'rst_no_pass_students'=>$ResData['tgt_no_stu_pass'][$tt],
                            'rst_pass_per'  =>$ResData['tgt_pass_per'][$tt], 
                            'rst_subjects'  =>$ResData['tgt_sub'][$tt], 
                            'rst_pass_per_grade'    =>0,
                            'rst_pass_per_ninety'   =>0,
                            'rst_pi_highest'    =>0, 
                            'rst_pi_class_xii'  =>0
                        );
                        if($this->db->insert('results_tech_details', $TecData))
                        { 
                            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Result Teaching Data','Employee Module'); 
                            $ttCtr++; 
                            
                        }
                    }
                }
            }
            
            
        }
        if($ntCtr>0 || $ttCtr>0){ 
            $response['status'] = 'success';
            $response['emp_code'] = $empId;
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Form Could not be saved,Please try again';
        }
       return $response;
        
        
    }
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
        $this->db->select('T.*');
        $this->db->from('ci_results_tech_details as T');
        //$this->db->join('academic_details AD', 'A.id=AD.academic_id', 'LEFT');
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
        $this->db->select('N.id,N.results_id,N.emp_id,N.rsnt_vid_ofc_name,N.rsnt_dign_post,
        DATE_FORMAT(N.rsnt_srv_frm_date,"%d-%m-%Y") AS rsnt_from_date, 
        DATE_FORMAT(N.rsnt_srv_to_date,"%d-%m-%Y") AS rsnt_to_date,
        N.rsnt_sec_mat_details,N.rsnt_res_disp,N.rsnt_doc_name');
        $this->db->from('ci_results_non_tech_details as N');
        //$this->db->join('academic_details AD', 'A.id=AD.academic_id', 'LEFT');
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
    public function emp_details($empID){
        $this->db->select('emp_marital_status,emp_religion');
        $this->db->from('ci_employee_details');
        $this->db->where('emp_code',$empID);
        $data = $this->db->get()->row_array();
        //echo $this->db->last_query();die;
        return $data;

    }

   

    public function setFamilyData($empData){
        //echo '<pre>';print_r($empData);die;
        $response = array();
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_family_details');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Family Data','Employee Module');
        foreach ($empData['relation'] as $key => $value)
        {
            if(!empty($empData['dob'][$key]))
            {
                $dob=date('Y-m-d', strtotime($empData['dob'][$key]));
            }else{
                $dob='NULL';
            }
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'relation' => $value,
                'title' => $empData['title'][$key],
                'name' => $empData['name'][$key],
                'dob' => $dob,
                'age' => $empData['age'][$key],
                'dependent' => $empData['dependent'][$key],
                'createdby' => $this->session->userdata('user_id')   
            );
            
            if($this->db->insert('family_details', $PostData)) {
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Family Data','Employee Module');
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            } 
        } 
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('spouse_details');
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Spouse Data','Employee Module');
        //iterate  spouse data 
        foreach ($empData['emp_spouse_name'] as $key => $value)
        {
            $emp_spouse_govt_service = !empty($empData['emp_spouse_govt_service'][$key])?$empData['emp_spouse_govt_service'][$key]:'NULL';
            $emp_spouse_organization_name = !empty($empData['emp_spouse_organization_name'][$key])?$empData['emp_spouse_organization_name'][$key]:'NULL';
            $emp_spouse_emp_code = !empty($empData['emp_spouse_emp_code'][$key])?$empData['emp_spouse_emp_code'][$key]:'NULL';
            $emp_spouse_organization_name = !empty($empData['emp_spouse_organization_name'][$key])?$empData['emp_spouse_organization_name'][$key]:'NULL';
            $spouse_post_designation = !empty($empData['spouse_post_designation'][$key])?$empData['spouse_post_designation'][$key]:'NULL';
            $subject_id = !empty($empData['subject_id'][$key])?$empData['subject_id'][$key]:'NULL';
            $posting_place = !empty($empData['role_id'][$key])?$empData['role_id'][$key]:'NULL';
            
            //if posting place is reginol office 
            if( $posting_place == 3){
                $region = !empty($empData['region_id'][$key])?$empData['region_id'][$key]:'NULL';
                $unit = 'NULL';
                $ziet = 'NULL';
                $school = 'NULL';
            }else if( $posting_place == 5){//if posting place is kendriya vidyalaya school
                $region = !empty($empData['region_id'][$key])?$empData['region_id'][$key]:'NULL';
                $school = !empty($empData['school_id'][$key])?$empData['school_id'][$key]:'NULL';
                $unit = 'NULL';
                $ziet = 'NULL';
               
            }else if( $posting_place == 4){//if posting place is ziet
                $ziet = !empty($empData['region_id'][$key])?$empData['region_id'][$key]:'NULL';
                $unit = 'NULL';
                $region = 'NULL';
                $school = 'NULL';
            }else if( $posting_place == 2){ //if posting place is kvs HQ
                $unit  = !empty($empData['region_id'][$key])?$empData['region_id'][$key]:'NULL';
                $region = 'NULL';
                $ziet = 'NULL';
                $school = 'NULL';
            }else{
                $ziet  = 'NULL';
                $region = 'NULL';
                $unit = 'NULL';    
                $school = 'NULL';
            }
    
            $emp_spouse_other_org = !empty($empData['emp_spouse_other_org'][$key])?$empData['emp_spouse_other_org'][$key]:'NULL';
            $emp_spouse_other_post_held = !empty($empData['emp_spouse_post_held'][$key])?$empData['emp_spouse_post_held'][$key]:'NULL';
            $emp_spouse_other_posting_place = !empty($empData['emp_spouse_posting_place'][$key])?$empData['emp_spouse_posting_place'][$key]:'NULL';
        
            $PostData = array(
                'emp_id'=> $empData['emp_id'],
                'spouse_name' => $value,
                'is_govt_service' => $emp_spouse_govt_service,
                'org_name' => $emp_spouse_organization_name,
                'spouse_emp_code' => $emp_spouse_emp_code,
                'designation' => $spouse_post_designation ,
                'subject' => $subject_id,
                'posting_place' => $posting_place,
                'unit' => $unit,
                'region' => $region,
                'ziet' => $ziet,
                'school' => $school,
                'other_org_name' => $emp_spouse_other_org ,
                'other_org_post' => $emp_spouse_other_post_held,
                'other_org_posting_place' => $emp_spouse_other_posting_place,
                'created_by' => $this->session->userdata('user_id'),
            );
            
            if($this->db->insert('spouse_details', $PostData)) {
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Spouse Data','Employee Module');
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            } 
        } 
        
        return $response;        
    }
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
    public function getDobData($ExEc = NULL){
        $this->db->select('emp_dob');
        $this->db->from('ci_employee_details as E');
        
        if(!empty($ExEc)){
            $this->db->where('E.emp_code', $ExEc);
        }
       $dob = $this->db->get()->row();

       
       return $dob->emp_dob;
    }
    public function setServiceData($empData){
       
      $response = array();
      // all post detail
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_all_service_details');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted All Service Data','Employee Module');
        foreach ($empData['alldesignationid'] as $key => $value)
        {
            if(!empty($empData['all_fromdate'][$key]))
            {
                $from_date=date('Y-m-d', strtotime($empData['all_fromdate'][$key]));
            }else{
                $from_date='NULL';
            }
            if(!empty($empData['all_todate'][$key]))
            {
                $to_date=date('Y-m-d', strtotime($empData['all_todate'][$key]));
            }else{
                $to_date='NULL';
            }
            if(!empty($empData['all_trailsdate'][$key]))
            {
                $trailstartdate=date('Y-m-d', strtotime($empData['all_trailsdate'][$key]));
            }else{
                $trailstartdate='NULL';
            }
            if(!empty($empData['all_trailedate'][$key]))
            {
                $trailenddate=date('Y-m-d', strtotime($empData['all_trailedate'][$key]));
            }else{
                $trailenddate='NULL';
            }
            if(!empty($empData['all_regulardate'][$key]))
            {
                $regular_date=date('Y-m-d', strtotime($empData['all_regulardate'][$key]));
            }else{
                $regular_date='NULL';
            }
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'all_designationid' => $value,
                'all_subjectid' => $empData['all_subjectid'][$key],
                'all_place' => $empData['all_role_id'][$key],
                'all_unit' => $empData['region_id_all'][$key],
                'all_section' => $empData['section_id_all'][$key],
                'all_school' => $empData['school_id_all'][$key],
                'all_kvcode' => $empData['all_kvcode'][$key],
                'all_shift' => $empData['all_shift'][$key],
                'all_station' => $empData['all_station'][$key],
                'all_fromdate' => $from_date,
                'all_todate' => $to_date,
                'all_appoint_trail' => $empData['all_appoint_trail'][$key],
                'all_trailsdate' => $trailstartdate,
                'all_trailedate' => $trailenddate,
                'all_regulardate' => $regular_date,
                'transfer_ground' => $empData['transfer_ground'][$key],
                'all_panel_year' => $empData['all_panel_year'][$key],
                'created_by' => $this->session->userdata('user_id')   
            );
            $this->db->insert('ci_all_service_details', $PostData);
            //$lastQry=$this->db->last_query();
            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added All Service Data','Employee Module');
        } 
        // initial post detail
        if(!empty($empData['initial_designationid']))
        {
            if(!empty($empData['initial_joiningdate']))
            {
                $ijoiningdate=date('Y-m-d', strtotime($empData['initial_joiningdate']));
            }else{
                $ijoiningdate='NULL';
            }
            if(!empty($empData['initial_confirmdate']))
            {
                $iconfirmdate=date('Y-m-d', strtotime($empData['initial_confirmdate']));
            }else{
                $iconfirmdate='NULL';
            }
            if(!empty($empData['initial_trailsdate']))
            {
                $itrailstartdate=date('Y-m-d', strtotime($empData['initial_trailsdate']));
            }else{
                $itrailstartdate='NULL';
            }
            if(!empty($empData['initial_trailedate']))
            {
                $itrailenddate=date('Y-m-d', strtotime($empData['initial_trailedate']));
            }else{
                $itrailenddate='NULL';
            }
            if(!empty($empData['initial_regulardate']))
            {
                $iregular_date=date('Y-m-d', strtotime($empData['initial_regulardate']));
            }else{
                $iregular_date='NULL';
            }
            if(!empty($empData['initial_liensdate']))
            {
                $iliensdate=date('Y-m-d', strtotime($empData['initial_liensdate']));
            }else{
                $iliensdate='NULL';
            }
            if(!empty($empData['initial_lienedate']))
            {
                $ilienedate=date('Y-m-d', strtotime($empData['initial_lienedate']));
            }else{
                $ilienedate='NULL';
            }
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'initial_designationid' => $empData['initial_designationid'],
                'initial_subject' => $empData['initial_subject'],
                'initial_place' => $empData['initial_role_id'],
                'initial_unit' => $empData['initial_region_id'],
                'initial_section' => $empData['initial_section_id'],
                'initial_school' => $empData['initial_school_id'],
                'initial_kvcode' => $empData['initial_kvcode'],
                'initial_shift' => $empData['initial_shift'],
                'initial_appoint_specialdrive' => $empData['initial_appoint_specialdrive'],
                'initial_appoint_zone' => $empData['initial_appoint_zone'],
                'initial_zone' => $empData['initial_zone'],
                'initial_joiningdate' => $ijoiningdate,
                'initial_confirmdate' => $iconfirmdate,
                'initial_appoint_trail' => $empData['initial_appoint_trail'],
                'initial_trailsdate' => $itrailstartdate,
                'initial_trailedate' => $itrailenddate,
                'initial_regulardate' => $iregular_date,
                'initial_appointed_term' => $empData['initial_appointed_term'],
                'absorbtion_dept' => $empData['absorbtion_dept'],
                'initial_lien' => $empData['initial_lien'],
                'initial_liensdate' => $iliensdate,
                'initial_lienedate' => $ilienedate,
                'initial_category' => $empData['initial_category'],
                'initial_panel_year' => $empData['initial_panel_year'],
                'created_by' => $this->session->userdata('user_id')   
            );
            $this->db->select('E.*');
            $this->db->from('ci_initial_service_details as E');
            $this->db->where('E.emp_id', $empData['emp_id']);
            if(!empty($this->db->get()->row()))
            {
                $this->db->where('emp_id', $empData['emp_id']);
                $qry = $this->db->update('ci_initial_service_details', $PostData);
                add_user_activity($this->session->userdata('user_id'),$ids, 'Update', 'Added Initial Service Data','Employee Module');
            }else{
                $this->db->insert('ci_initial_service_details', $PostData);
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Initial Service Data','Employee Module');
            }
        } 
        // leave detail
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_leave_service_details');
        add_user_activity($this->session->userdata('user_id'),$ids, 'Delete', 'Deleted Leave Data','Employee Module');
        foreach ($empData['leave_type'] as $key => $value)
        {   
            if(!empty($empData['leave_from_date'][$key]))
            {
                $leave_from_date=date('Y-m-d', strtotime($empData['leave_from_date'][$key]));
            }else{
                $leave_from_date='NULL';
            }
            if(!empty($empData['leave_to_date'][$key]))
            {
                $leave_to_date=date('Y-m-d', strtotime($empData['leave_to_date'][$key]));
            }else{
                $leave_to_date='NULL';
            }
       
            $leaveData = array(
                'emp_id' => $empData['emp_id'],
                'leave_type' => $value,
                'from_date' => $leave_from_date,
                'to_date' => $leave_to_date ,
                'duration'   => $empData['duration'][$key], 
            );
            //echo '<pre>';print_r($leaveData);die;
            if($this->db->insert(' ci_leave_service_details', $leaveData)) {
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Leave Data','Employee Module');
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            } 
           
        }
        // other detail
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_other_service_details');
        $retirement_date=date_format(date_create($empData['due_date_retirement']), 'Y-m-d'); 
        $serviceOtherDate = array(
            'emp_id' => $empData['emp_id'],
            'due_date_retirement' =>$retirement_date,
            'is_below_40_years' => $empData['is_below_40_years'],
            
        );
        //print_r($serviceOtherDate); die;
        if($this->db->insert('ci_other_service_details', $serviceOtherDate)) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Form Could not be saved,Please try again';
        } 
        // vigilance detail
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_desciplinary_service_details');
        add_user_activity($this->session->userdata('user_id'),$ids, 'Delete', 'Deleted Disciplinary Data','Employee Module');
        foreach ($empData['is_desciplinary_case'] as $key => $value)
        {
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'is_desciplinary_case' => $value,
                'disciplinary_action_name' => $empData['disciplinary_action_name'][$key],
                'from_date' => date('Y-m-d', strtotime($empData['from_date'][$key])),
                'to_date'   => date('Y-m-d', strtotime($empData['to_date'][$key])), 
                'is_dies_non' => $empData['is_dies_non'][$key],
                'dies_non_start_date'   => date('Y-m-d', strtotime($empData['dies_non_start_date'][$key])), 
                'dies_non_end_date' => date('Y-m-d', strtotime($empData['dies_non_end_date'][$key])),
            );
            
            if($this->db->insert('ci_desciplinary_service_details', $PostData)) {
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Disciplinary Data','Employee Module');
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            } 
           
        }
        
        $response['status'] = 'success';
        return $response;  
    }
    public function getinitialServiceData($ExEc = NULL){
        $this->db->select('E.*,D.name as designationname,DATE_FORMAT(E.initial_joiningdate,"%d-%m-%Y") as initial_joiningdate,DATE_FORMAT(E.initial_confirmdate,"%d-%m-%Y") as initial_confirmdate,DATE_FORMAT(E.initial_trailsdate,"%d-%m-%Y") as initial_trailsdate,DATE_FORMAT(E.initial_trailedate,"%d-%m-%Y") as initial_trailedate,DATE_FORMAT(E.initial_regulardate,"%d-%m-%Y") as initial_regulardate,DATE_FORMAT(E.initial_liensdate,"%d-%m-%Y") as initial_liensdate,DATE_FORMAT(E.initial_lienedate,"%d-%m-%Y") as initial_lienedate');
        $this->db->from('ci_initial_service_details as E');
        $this->db->join('designations D', 'D.id=E.initial_designationid', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->row(); 
    }
    
    public function getpresentServiceData($ExEc = NULL){
        $this->db->select('E.*,D.name as designationname,DATE_FORMAT(E.present_joiningdate,"%d-%m-%Y") as present_joiningdate,DATE_FORMAT(E.present_trailsdate,"%d-%m-%Y") as present_trailsdate,DATE_FORMAT(E.present_trailedate,"%d-%m-%Y") as present_trailedate,DATE_FORMAT(E.present_regulardate,"%d-%m-%Y") as present_regulardate,DATE_FORMAT(E.present_notionaldate,"%d-%m-%Y") as present_notionaldate');
        $this->db->from('ci_present_service_details as E');
        $this->db->join('designations D', 'D.id=E.present_designationid', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->row(); 
    }
    
    public function getallServiceData($ExEc = NULL){
        $this->db->select('E.*,D.name as designationname,D.cat_id,DATE_FORMAT(E.all_fromdate,"%d-%m-%Y") as s_from,DATE_FORMAT(E.all_todate,"%d-%m-%Y") as s_to,DATE_FORMAT(E.all_trailsdate,"%d-%m-%Y") as alltrailstart,DATE_FORMAT(E.all_trailedate,"%d-%m-%Y") as alltrailend,DATE_FORMAT(E.all_regulardate,"%d-%m-%Y") as alltrailregular');
        $this->db->from('ci_all_service_details as E');
        $this->db->join('designations D', 'D.id=E.all_designationid', 'LEFT');
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
        $this->db->select('O.*');
        $this->db->from('ci_other_service_details as O');
        if(!empty($ExEc)){
            $this->db->where('O.emp_id', $ExEc);
        }
        return $this->db->get()->row();           
    }

    public function getDisciplinaryData($ExEc = NULL){
        $this->db->select(' D.*,DATE_FORMAT(D.from_date,"%d-%m-%Y") as from_date,DATE_FORMAT(D.to_date,"%d-%m-%Y") as to_date,DATE_FORMAT(D.dies_non_start_date,"%d-%m-%Y") as dies_non_start_date,DATE_FORMAT(D.dies_non_end_date,"%d-%m-%Y") as dies_non_end_date');
        $this->db->from('ci_desciplinary_service_details as  D');
        if(!empty($ExEc)){
            $this->db->where('D.emp_id', $ExEc);
        }
        return $this->db->get()->result();           
    }
    //============================= SERVICE SECTION END =================================//
    
    //============================= PAY-SCALE SECTION START ===============================//
    public function setPayScaleData($empData){
        
        $response = array();
        if(!empty($empData['date_of_increment']))
        {
            $date_of_increment=date('Y-m-d', strtotime($empData['date_of_increment']));
        }else{
            $date_of_increment='NULL';
        }
        
        $PostData = array(
            'emp_id' => $empData['emp_id'],
            'present_paylevel' => $empData['present_paylevel'],
            'pay_range' => $empData['pay_range'],
            'date_of_increment' => $date_of_increment,
            'created_by' => $this->session->userdata('user_id')   
        );
        if($this->db->insert('pay_details', $PostData)) {
            $ids=getEmployeeidByEmpcode($empData['emp_id']);
            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Pay Scale Data','Employee Module');
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Form Could not be saved,Please try again';
        }
        return $response;
        
    }
    public function getPayScaleData($ExEc = NULL){
        $this->db->select('E.*,DATE_FORMAT(E.date_of_increment,"%d-%m-%Y") as date_of_increment');
        $this->db->from('pay_details as E');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->row(); 
    }
    public function updatePayscaleData($empData,$empId){
        $response = array();
        if(!empty($empData['date_of_increment']))
        {
            $date_of_increment=date('Y-m-d', strtotime($empData['date_of_increment']));
        }else{
            $date_of_increment='NULL';
        }
        $PostData = array(
            'emp_id' => $empData['emp_id'],
            'present_paylevel' => $empData['present_paylevel'],
            'pay_range' => $empData['pay_range'],
            'date_of_increment' => $date_of_increment,
            'created_by' => $this->session->userdata('user_id')   
        );
        $this->db->where('emp_id', $empId);
        $qry = $this->db->update('pay_details', $PostData);
        if($qry) {
            $ids=getEmployeeidByEmpcode($empData['emp_id']);
            add_user_activity($this->session->userdata('user_id'),$ids, 'Update', 'Updated Pay Scale Data','Employee Module');
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Some Error Occured';
        }
        return $response;     
    }
    //============================= PAY-SCALE SECTION END =================================//
    
    //============================= AWARD SECTION START ===============================//
    

    public function setAwardData($empData){
        $response = array();
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_awards_details');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Award Data','Employee Module');
        foreach ($empData['award'] as $key => $value)
        {
            if(!empty($empData['emp_otheraward'][$key]))
            {
                $emp_otheraward = $empData['emp_otheraward'][$key];
            }else{
                $emp_otheraward ='NULL';
            }
            if(!empty($empData['year_of_acheivement'][$key]))
            {
                $year_of_acheivement= $empData['year_of_acheivement'][$key];
            }else{
                $year_of_acheivement ='NULL';
            }
            
            if(!empty($empData['alldesignationid'][$key])){
                $in_designation=$empData['alldesignationid'][$key];
            }else{
                $in_designation='NULL';
            }
            if(!empty($empData['award_brief'][$key]))
            {
                $award_brief= $empData['award_brief'][$key];
            }else{
                $award_brief ='NULL';
            }
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'is_award_received'=> $empData['is_award'],
                'award' => $value,
                'other_award_name' =>  $emp_otheraward,
                'year_of_acheivement' => $year_of_acheivement,
                'in_designation'=>$in_designation,
                'award_brief' => $award_brief,
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s')   
            );
           
            if($this->db->insert('ci_awards_details', $PostData)) {
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Award Data','Employee Module');
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            } 
        }   
        $response['status'] = 'success';
        return $response;
          
    }
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
    public function setTrainingData($empData){
        $response = array();
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_training_details');
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_other_training_details');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Training Data','Employee Module');
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Other Training Data','Employee Module');
        foreach ($empData['course'] as $key => $value)
        {
            //capture date if spell is single
            if($empData['spell'][$key]==1)
            {
                if(!empty($empData['t_singlefrom'][$key]))
                {
                    $t_from1=date('Y-m-d', strtotime($empData['t_singlefrom'][$key]));
                }else{
                    $t_from1='NULL';
                }
                if(!empty($empData['t_singleto'][$key]))
                {
                    $t_to1=date('Y-m-d', strtotime($empData['t_singleto'][$key]));
                }else{
                    $t_to1='NULL';
                } 
            }
            //catch date if spell is double
            elseif($empData['spell'][$key]==2)
            {
                if(!empty($empData['t_doublefrom1'][$key]))
                {
                    $t_from1=date('Y-m-d', strtotime($empData['t_doublefrom1'][$key]));
                }else{
                    $t_from1='NULL';
                }
                if(!empty($empData['t_doubleto1'][$key]))
                {
                    $t_to1=date('Y-m-d', strtotime($empData['t_doubleto1'][$key]));
                }else{
                    $t_to1='NULL';
                } 
                if(!empty($empData['t_doublefrom2'][$key]))
                {
                    $t_from2=date('Y-m-d', strtotime($empData['t_doublefrom2'][$key]));
                }else{
                    $t_from2='NULL';
                }
                if(!empty($empData['t_doubleto2'][$key]))
                {
                    $t_to2=date('Y-m-d', strtotime($empData['t_doubleto2'][$key]));
                }else{
                    $t_to2='NULL';
                } 
            }
            elseif($empData['spell'][$key]==3)
            {
                if(!empty($empData['t_from1'][$key]))
                {
                    $t_from1=date('Y-m-d', strtotime($empData['t_from1'][$key]));
                }else{
                    $t_from1='NULL';
                }
                if(!empty($empData['t_to1'][$key]))
                {
                    $t_to1=date('Y-m-d', strtotime($empData['t_to1'][$key]));
                }else{
                    $t_to1='NULL';
                } 
                if(!empty($empData['t_from2'][$key]))
                {
                    $t_from2=date('Y-m-d', strtotime($empData['t_from2'][$key]));
                }else{
                    $t_from2='NULL';
                }
                if(!empty($empData['t_to2'][$key]))
                {
                    $t_to2=date('Y-m-d', strtotime($empData['t_to2'][$key]));
                }else{
                    $t_to2='NULL';
                } 
                if(!empty($empData['t_from3'][$key]))
                {
                    $t_from3=date('Y-m-d', strtotime($empData['t_from3'][$key]));
                }else{
                    $t_from3='NULL';
                }
                if(!empty($empData['t_to3'][$key]))
                {
                    $t_to3=date('Y-m-d', strtotime($empData['t_to3'][$key]));
                }else{
                    $t_to3='NULL';
                } 
                if(!empty($empData['t_from4'][$key]))
                {
                    $t_from4=date('Y-m-d', strtotime($empData['t_from4'][$key]));
                }else{
                    $t_from4='NULL';
                }
                if(!empty($empData['t_to4'][$key]))
                {
                    $t_to4=date('Y-m-d', strtotime($empData['t_to4'][$key]));
                }else{
                    $t_to4='NULL';
                }
            }
            
           
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'is_attended_training' => $empData['is_attended_training'],
                'course' => $value,
                'designation' => $empData['designation'][$key],
                'subject' => $empData['subject'][$key],
                'spell' => $empData['spell'][$key],
                'duration' => $empData['duration'][$key],
                't_from1' => $t_from1,
                't_to1' => $t_to1,
                't_from2' => $t_from2,
                't_to2' => $t_to2,
                't_from3' => $t_from3,
                't_to3' => $t_to3,
                't_from4' => $t_from4,
                't_to4' => $t_to4,
                'role' => $empData['role'][$key],
                'conductedfor' => $empData['conductedfor'][$key],
                'grading' => $empData['grading'][$key],
                'venuetype' => $empData['venuetype'][$key],
                'venueregion' => $empData['venueregion'][$key],
                'venueschool' => $empData['venueschool'][$key],
                'created_by' => $this->session->userdata('user_id')   
            );
            $this->db->insert('ci_training_details', $PostData);
            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Training Data','Employee Module');
        } 
        
        foreach ($empData['organizing_agency'] as $key => $value)
        {
            //capture date if spell is single
            if($empData['spell'][$key]==1)
            {
                if(!empty($empData['other_t_from'][$key]))
                {
                    $t_from1=date('Y-m-d', strtotime($empData['other_t_from'][$key]));
                }else{
                    $t_from1='NULL';
                }
                if(!empty($empData['other_t_to'][$key]))
                {
                    $t_to1=date('Y-m-d', strtotime($empData['other_t_to'][$key]));
                }else{
                    $t_to1='NULL';
                } 
            }
            
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'organizing_agency' => $value,
                'govt_agency' => $empData['govt_agency'][$key],
                'non_gov_agency_name' => $empData['non_gov_agency_name'][$key],
                'org_address' => $empData['org_address'][$key],
                'trainingvenue' => $empData['trainingvenue'][$key],
                't_from' => $t_from1,
                't_to' => $t_to1,
                'duration' => $empData['otherduration'][$key],
                'trainingtopic' => $empData['trainingtopic'][$key],
                'designation' => $empData['otherdesignationid'][$key],
                'subject' => $empData['othersubject'][$key],
                'role' => $empData['otherrole'][$key],
                'grading' => $empData['othergrading'][$key],
                'created_by' => $this->session->userdata('user_id')   
            );
            $this->db->insert('ci_other_training_details', $PostData);
            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Other Training Data','Employee Module');
        }
        
        
        $response['status'] = 'success';
        return $response;
    }
    public function getTrainingData($ExEc = NULL){
        $this->db->select('T.*,D.name as designationname,D.cat_id,DATE_FORMAT(T.t_from1,"%d-%m-%Y") as t_from1,DATE_FORMAT(T.t_from2,"%d-%m-%Y") as t_from2,DATE_FORMAT(T.t_from3,"%d-%m-%Y") as t_from3,DATE_FORMAT(T.t_from4,"%d-%m-%Y") as t_from4,DATE_FORMAT(T.t_to1,"%d-%m-%Y") as t_to1,DATE_FORMAT(T.t_to2,"%d-%m-%Y") as t_to2,DATE_FORMAT(T.t_to3,"%d-%m-%Y") as t_to3,DATE_FORMAT(T.t_to4,"%d-%m-%Y") as t_to4');
        $this->db->from('ci_training_details as T');
        $this->db->join('designations D', 'D.id=T.designation', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('T.emp_id', $ExEc);
        }
        return $this->db->get()->result(); 
    }
    public function getOtherTrainingData($ExEc = NULL){
        $this->db->select('T.*,D.name as designationname,D.cat_id,DATE_FORMAT(T.t_from,"%d-%m-%Y") as t_from,DATE_FORMAT(T.t_to,"%d-%m-%Y") as t_to');
        $this->db->from('ci_other_training_details as T');
        $this->db->join('designations D', 'D.id=T.designation', 'LEFT');
        if(!empty($ExEc)){
            $this->db->where('T.emp_id', $ExEc);
        }
        return $this->db->get()->result(); 
    }
    //============================= TRAINING SECTION END =================================//
    
    //============================= PERFORMANCE SECTION START ===============================//
    
    public function getPerformanceData($ExEc = NULL){
        $this->db->select('P.*');
        $this->db->from('ci_performance_details as P');
        if(!empty($ExEc)){
            $this->db->where('P.emp_id', $ExEc);
        }
        return $this->db->get()->result();        
    }

    public function setPerformanceData($emp_data){
        $response = array();
        $this -> db -> where('emp_id', $emp_data['emp_id']);
        $this -> db -> delete('ci_performance_details');
		//pr($emp_data);
        $year = $emp_data['year'];
        $grade = $emp_data['grading'];
        $remark = $emp_data['remark'];
        
        $final_data = array_combine($year,$grade);
       
		$count=0 ;
        foreach($final_data as $k=> $row){
          
            $apar_data[] =[
                'emp_id'=> $emp_data['emp_id'],
                'year'=> $k,
                'grading'=> $row,
		'remark'=>$emp_data['remark'][$count],
                'created'=>date('Y-m-d H:i:s'),
                'updated'=>date('Y-m-d H:i:s'),
            ]; 
			$count++ ;
        }
        //pr($apar_data);
        $this->db->insert_batch(' ci_performance_details',$apar_data);
        $response['status'] = 'success';
        return $response;    
    }
    //============================= PERFORMANCE SECTION END =================================//
    
    //============================= PROMOTION SECTION START ===============================//
    public function setPromotionData($empData){
        $response = array();
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_promotiondemotion_details');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Promotion Demotion Data','Employee Module');
        foreach ($empData['promotion_type'] as $key => $value)
        {
            if(!empty($empData['promotion_order_date'][$key]))
            {
                $promotion_order_date=date('Y-m-d', strtotime($empData['promotion_order_date'][$key]));
            }else{
                $promotion_order_date='NULL';
            }
            if(!empty($empData['promotion_date'][$key]))
            {
                $promotion_date=date('Y-m-d', strtotime($empData['promotion_date'][$key]));
            }else{
                $promotion_date='NULL';
            }
            if(!empty($empData['notional_joining_date'][$key]))
            {
                $notional_joining_date=date('Y-m-d', strtotime($empData['notional_joining_date'][$key]));
            }else{
                $notional_joining_date='NULL';
            }
            if(!empty($empData['debarred_from'][$key]))
            {
                $debarred_from=date('Y-m-d', strtotime($empData['debarred_from'][$key]));
            }else{
                $debarred_from='NULL';
            }
            if(!empty($empData['debarred_to'][$key]))
            {
                $debarred_to=date('Y-m-d', strtotime($empData['debarred_to'][$key]));
            }else{
                $debarred_to='NULL';
            }
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'type' => 1,
                'is_promoted_demoted' => $empData['is_promoted'],
                'promotion_type' => $value,
                'promoted_demoted_from' => $empData['promoted_from'][$key],
                'promoted_demoted_to' => $empData['promoted_to'][$key],
                'promotion_order_no' => $empData['promotion_order_no'][$key],
                'promotion_order_date' => $promotion_order_date,
                'promotion_demotion_date' => $promotion_date,
                'notional_joining_date' => $notional_joining_date,
                'is_offer_accepted' => $empData['is_offer_accepted'][$key],
                'is_debarred' => $empData['is_debarred'][$key],
                'debarred_letter_no' => $empData['debarred_letter_no'][$key],
                'debarred_from' => $debarred_from,
                'debarred_to' => $debarred_to,
                'duration' => $empData['duration'][$key],
                'created_by' => $this->session->userdata('user_id')   
            );
            $this->db->insert('ci_promotiondemotion_details', $PostData);
            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Promotion Data','Employee Module');
        } 
        
        foreach ($empData['demotion_from'] as $key => $value)
        {
            if(!empty($empData['demotion_date'][$key]))
            {
                $demotion_date=date('Y-m-d', strtotime($empData['demotion_date'][$key]));
            }else{
                $demotion_date='NULL';
            }
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'type' => 2,
                'is_promoted_demoted' => $empData['is_demoted'],
                'promoted_demoted_from' => $value,
                'promoted_demoted_to' => $empData['demotion_to'][$key],
                'promotion_demotion_date' => $demotion_date,
                'created_by' => $this->session->userdata('user_id')   
            );
            $this->db->insert('ci_promotiondemotion_details', $PostData);
            add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Demotion Data','Employee Module');
        } 
        $response['status'] = 'success';
        return $response;
    }
    public function getPromotionData($ExEc = NULL){
        $this->db->select('E.*,DATE_FORMAT(E.promotion_order_date,"%d-%m-%Y") as odate,DATE_FORMAT(E.promotion_demotion_date,"%d-%m-%Y") as pdate,DATE_FORMAT(E.notional_joining_date,"%d-%m-%Y") as ndate,DATE_FORMAT(E.debarred_from,"%d-%m-%Y") as debarredfdate,DATE_FORMAT(E.debarred_to,"%d-%m-%Y") as debarredtdate');
        $this->db->from('ci_promotiondemotion_details as E');
        $this->db->where('E.type', 1);
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result();
    }
    public function getDemotionData($ExEc = NULL){
        $this->db->select('E.*,DATE_FORMAT(E.promotion_demotion_date,"%d-%m-%Y") as demodate');
        $this->db->from('ci_promotiondemotion_details as E');
        $this->db->where('E.type', 2);
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result();
    }
    //============================= PROMOTION SECTION END =================================//
    
    //============================= FINANCIAL SECTION START ===============================//
    public function setFinancialData($empData){
        $response = array();
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_financial_upgradation');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Financial Upgradation Data','Employee Module');
        foreach ($empData['upgradation_type'] as $key => $value)
        {
            if(!empty($empData['order_date'][$key]))
            {
                $order_date=date('Y-m-d', strtotime($empData['order_date'][$key]));
            }else{
                $order_date='NULL';
            }
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'upgradation_type' => $value,
                'level_from' => $empData['level_from'][$key],
                'level_to' => $empData['level_to'][$key],
                'order_no' => $empData['order_no'][$key],
                'order_date' => $order_date,
                'created_by' => $this->session->userdata('user_id')   
            );
            
            if($this->db->insert('ci_financial_upgradation', $PostData)) {
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Financial Upgradation Data','Employee Module');
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            } 
        } 
        
        return $response;
    }
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
    public function setExchangeData($empData){
        $response = array();
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('teacher_exchange_program');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Teacher Exchange Data','Employee Module');
        foreach ($empData['program_name'] as $key => $value)
        {
            if(!empty($empData['date_from'][$key]))
            {
                $fromdate=date('Y-m-d', strtotime($empData['date_from'][$key]));
            }else{
                $fromdate='NULL';
            }
            if(!empty($empData['date_to'][$key]))
            {
                $todate=date('Y-m-d', strtotime($empData['date_to'][$key]));
            }else{
                $todate='NULL';
            }
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'is_exchange_prog' => $empData['is_exchange_prog'],
                'program_name' => $value,
                'program_order_no' => $empData['program_order_no'][$key],
                'country_name' => $empData['country_name'][$key],
                'date_from' => $fromdate,
                'date_to' => $todate,
                'duration' => $empData['duration'][$key],
                'created_by' => $this->session->userdata('user_id') 
            );
            //show($PostData); die;
            if($this->db->insert('teacher_exchange_program', $PostData)) {
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Teacher Exchange Data','Employee Module');
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            } 
        } 
        return $response;
    }
    
    public function getExchangeData($ExEc = NULL){
        $this->db->select('E.*,DATE_FORMAT(E.date_from,"%d-%m-%Y") as date_from,DATE_FORMAT(E.date_to,"%d-%m-%Y") as date_to');
        $this->db->from('ci_teacher_exchange_program as E');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result();  
    }
    
    public function updateExchangeData($empData,$empId){
        $response = array();
        if(!empty($empData['date_from']))
        {
            $fromdate=date('Y-m-d', strtotime($empData['date_from']));
        }else{
            $fromdate='NULL';
        }
        if(!empty($empData['date_to']))
        {
            $todate=date('Y-m-d', strtotime($empData['date_to']));
        }else{
            $todate='NULL';
        }
        $PostData = array(
            'emp_id' => $empData['emp_id'],
            'is_exchange_prog' => $empData['is_exchange_prog'],
            'program_name' => $empData['program_name'],
            'program_order_no' => $empData['program_order_no'],
            'country_name' => $empData['country_name'],
            'date_from' => $fromdate,
            'date_to' => $todate,
            'duration' => $empData['duration'],
            'created_by' => $this->session->userdata('user_id')   
        );
        $this->db->where('emp_id', $empId);
        $qry = $this->db->update('teacher_exchange_program', $PostData);
        if($qry) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Some Error Occured';
        }
        return $response;     
    }
    //============================= EXCHANGE SECTION END =================================//
    
    //============================= FOREIGN VISIT SECTION START ===============================//
    public function setForeignVisitData($empData){
        $response = array();
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_foreign_visits');
        $ids=getEmployeeidByEmpcode($empData['emp_id']);
        add_user_activity($this->session->userdata('user_id'),$ids, 'Deleted', 'Deleted Foreign Visit Detail','Employee Module');
        foreach ($empData['visit_year'] as $key => $value)
        {
            $PostData = array(
                'emp_id' => $empData['emp_id'],
                'is_country_visit' => $empData['is_country_visit'],
                'visit_year' => $value,
                'country_name' => $empData['country_name'][$key],
                'order_no' => $empData['order_no'][$key],
                'duration' => $empData['duration'][$key],
                'purpose' => $empData['purpose'][$key],
                'created_by' => $this->session->userdata('user_id')   
            );
            
            if($this->db->insert('ci_foreign_visits', $PostData)) {
                add_user_activity($this->session->userdata('user_id'),$ids, 'Insert', 'Added Foreign Visit Detail','Employee Module');
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            } 
        } 
        
        return $response;
    }
    public function getForeignVisitData($ExEc = NULL){
        $this->db->select('E.*');
        $this->db->from('ci_foreign_visits as E');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->result();
    }
    //============================= FOREIGN VISIT SECTION END =================================//
}
