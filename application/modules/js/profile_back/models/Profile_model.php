<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Profile_model extends CI_Model {
	public function __construct(){
            parent::__construct();
        }
    //============================= PERSONAL SECTION START =================================//
    public function InsPersonalData($empData,$empId,$empTyp){
            if(empty($empId)){$empId=10000;$empTyp=1;}
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
                'emp_ph_percent' => $empData['emp_phy_percent'],
                'emp_ph_certificate_no' => $empData['emp_phy_details_certificate'],
                'emp_ph_issuing_date' => $phyDate,
                'emp_ph_issuing_authority' => $empData['emp_phy_details_name'],
                'emp_createdby' => $this->session->userdata('user_id'),
                'emp_createdon' => date('Y-m-d'),
                'emp_updatedby' => $this->session->userdata('user_id'),
                'emp_updatedon' => date('Y-m-d'),
                'emp_isdraft' => '1'
            );
            if($this->db->insert('employee_details', $PostData)) {
                // Insert Into User Table
                // Role_id decided by the user logged in System
                $UserData = array(
                    'role_id' => 6,
                    'role_category' => 0,
                    'region_id' => 0,
                    'school_id' => 0,
                    'username' => $empId,
                    'password' => hash('sha512', 'Kvs@1234'),
                    'email_id' =>$empData['emp_email'] ,
                    'status' => '1',
                    'created' => date("Y-m-d H:i:s")
                );
                $this->db->insert('users', $UserData);
                $response['status'] = 'success';
                $response['emp_code'] = $empId;
            } else {
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
                'emp_ph_percent' => $empData['emp_phy_percent'],
                'emp_ph_certificate_no' => $empData['emp_phy_details_certificate'],
                'emp_ph_issuing_date' => $phyDate,
                'emp_ph_issuing_authority' => $empData['emp_phy_details_name'],
                'emp_updatedby' => $this->session->userdata('user_id'),
                'emp_updatedon' => date('Y-m-d'),
                'emp_isdraft' => '1'
            );
            $this->db->where('emp_code',$empId);
            $qry = $this->db->update('employee_details', $PostData);
            if ($qry) {
                $response['status'] = 'success';
                $response['emp_code'] = $empId;
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Form Could not be saved,Please try again';
            }
            return $response;    
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
                $empId=10000;
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
    //============================= PERSONAL SECTION END =================================//
    //============================= ACADEMIC SECTION START ===============================//
    public function setAcademicData($empData){
     
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
            $cdata=array(
                'emp_id' => $empId,
                'is_comp_prof' =>$is_comp_prof,
                'comp_prof_type' => $comp_prof_in,
                'comp_other_prof' => $comp_prof_course,
                'status' => '1');
            $this->db->insert('ci_proficiency_details', $cdata);
            $response['C'] = 1; 
        }else{
            $cdata=array(
                'emp_id' => $empId,
                'is_comp_prof' =>$is_comp_prof,
                'comp_prof_type' => '',
                'comp_other_prof' => '',
                'status' => '1');
            $this->db->insert('ci_proficiency_details', $cdata);
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
                    if($this->db->insert('results_non_tech_details', $NonData)){ $ntCtr++; }
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
                        if($this->db->insert('results_tech_details', $TecData)){ $ttCtr++; }
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
                    if($this->db->insert('results_tech_details', $TecData)){ $ttCtr++; }
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
                    if($this->db->insert('results_tech_details', $TecData)){ $ttCtr++; }
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
                    if($this->db->insert('results_tech_details', $TecData)){ $ttCtr++; }
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
    public function setFamilyData($empData){
        
    }
    public function getFamilyData($ExEc = NULL){
        
    }
    //============================= FAMILY SECTION END =================================//
    
    //============================= SERVICE SECTION START ===============================//
    public function setServiceData($empData){
        
    }
    public function getServiceData($ExEc = NULL){
        
    }
    //============================= SERVICE SECTION END =================================//
    
    //============================= PAY-SCALE SECTION START =============================//
    public function setPayScaleData($empData){
        
    }
    public function getPayScaleData($ExEc = NULL){
        
    }
    //============================= PAY-SCALE SECTION END ==============================//
    
    //============================= AWARD SECTION START ================================//
    

    public function setAwardData($empData){
        $response = array();
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_awards_details');
        
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
                'award_brief' => $award_brief,
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s')   
            );
           
            if($this->db->insert('ci_awards_details', $PostData)) {
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
        $this->db->select('A.*');
        $this->db->from('ci_awards_details as A');
        if(!empty($ExEc)){
            $this->db->where('A.emp_id', $ExEc);
        }
        return $this->db->get()->result();    
    }
    //============================= AWARD SECTION END =================================//
    
    //============================= TRAINING SECTION START ===============================//
    public function setTrainingData($empData){
        
    }
    public function getTrainingData($ExEc = NULL){
        
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
        $year = $emp_data['year'];
        $grade = $emp_data['grading'];
        
        $final_data = array_combine($year,$grade);
        
        foreach($final_data as $k=> $row){
          
            $apar_data[] =[
                'emp_id'=> $emp_data['emp_id'],
                'year'=> $k,
                'grading'=> $row,
                'created'=>date('Y-m-d H:i:s'),
                'updated'=>date('Y-m-d H:i:s'),
            ]; 
        }
       
        $this->db->insert_batch(' ci_performance_details',$apar_data);
        $response['status'] = 'success';
        return $response;    
    }
    //============================= PERFORMANCE SECTION END =================================//
    
    //============================= PROMOTION SECTION START ===============================//
    public function setPromotionData($empData){
        $response = array();
        
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
        } 
        $response['status'] = 'success';
        return $response;
    }
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
        $this->db->where('E.type', 1);
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
        if($this->db->insert('teacher_exchange_program', $PostData)) {
            $response['status'] = 'success';
            $response['emp_code'] = $empData['emp_id'];
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Form Could not be saved,Please try again';
        }
        return $response;
    }
    public function getExchangeData($ExEc = NULL){
        $this->db->select('E.*');
        $this->db->from('ci_teacher_exchange_program as E');
        if(!empty($ExEc)){
            $this->db->where('E.emp_id', $ExEc);
        }
        return $this->db->get()->row();  
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
            'emp_id'            => $empData['emp_id'],
            'is_exchange_prog'  => $empData['is_exchange_prog'],
            'program_name'      => $empData['program_name'],
            'program_order_no'  => $empData['program_order_no'],
            'country_name'  => $empData['country_name'],
            'date_from'     => $fromdate,
            'date_to'       => $todate,
            'duration'      => $empData['duration'],
            'created_by'    => $this->session->userdata('user_id')   
        );
        $this->db->where('emp_id', $empId);
        $qry = $this->db->update('teacher_exchange_program', $PostData);
        if($qry) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error']  = 'Some Error Occured';
        }
        return $response;     
    }
    //============================= EXCHANGE SECTION END =================================//
    
    //============================= FOREIGN SECTION START ===============================//
    public function setForeignVisitData($empData){
        $response = array();
        $this -> db -> where('emp_id', $empData['emp_id']);
        $this -> db -> delete('ci_foreign_visits');
        foreach ($empData['visit_year'] as $key => $value)
        {
            $PostData = array(
                'emp_id'            => $empData['emp_id'],
                'is_country_visit'  => $empData['is_country_visit'],
                'visit_year'        => $value,
                'country_name'      => $empData['country_name'][$key],
                'order_no'          => $empData['order_no'][$key],
                'duration'          => $empData['duration'][$key],
                'purpose'           => $empData['purpose'][$key],
                'created_by'        => $this->session->userdata('user_id')   
            );
            
            if($this->db->insert('ci_foreign_visits', $PostData)) {
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error']  = 'Form Could not be saved,Please try again';
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
        $this->db->select("SQL_CALC_FOUND_ROWS E.id,E.emp_code,
        (CASE WHEN E.emp_type=1 THEN 'NEW REGISTERED' ELSE 'EXISTING EMPLOYEE' END) AS 'emp_type',
        (CASE 
            WHEN E.emp_title=1 THEN 'Sh.' 
            WHEN E.emp_title=2 THEN 'Smt.' 
            WHEN E.emp_title=3 THEN 'Ms.' END
        ) AS 'emp_title',
        E.emp_first_name,E.emp_middle_name,E.emp_last_name,E.emp_email,E.emp_mobile_no,
        IFNULL(P.present_zone,0) AS present_zone",false);
        $this->db->from('ci_employee_details E');
        $this->db->join('ci_present_service_details P','P.emp_id=E.emp_code','Left');
        if($limit > 0)
        {
            $this->db->limit($limit,$start);
        }
        if($col)
        {
            $this->db->order_by($col,$dir);
        }
        if($search && !empty($search))
        {
            $this->db->like('E.emp_first_name', $search);
            //$this->db->where("CONCAT(e.first_name) LIKE '%$search%' ");
        }
		
        $qry=$this->db->get();
       
        if($qry->num_rows())
        {
            $data['result']=$qry->result();
        }else{
            $data['result']=array();
        }
        
        $total = $this->db->query("SELECT FOUND_ROWS() AS count"); 
        $data['count']=isset($total->row()->count)?$total->row()->count:0;
        return $data;
        
    }
}
