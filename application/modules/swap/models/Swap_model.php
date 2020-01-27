<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Swap_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    public function getAllEmp(){
        
        $this->db->select("SQL_CALC_FOUND_ROWS
        E.emp_code AS 'TR_EMP_CODE',
        (CASE WHEN E.emp_title=1 THEN 'Sh.' WHEN E.emp_title=2 THEN 'Smt.' WHEN E.emp_title=3 THEN 'Ms.' END ) AS 'TR_EMP_TTL', 
        CONCAT(E.emp_first_name,' ',E.emp_middle_name,' ',E.emp_last_name) AS 'TR_EMP_NAME',
        E.emp_mobile_no AS 'TR_EMP_MOB',
        E.emp_email AS 'TR_EMP_MAIL',
        E.emp_createdby AS 'TR_EMP_CRBY',
        E.emp_istransffered AS 'TR_EMP_TRANS',
        S.present_designationid AS 'TR_EMP_DESID', 
        IFNULL(D.`name`, 'NA') AS 'TR_EMP_DESNAME',
        S.present_place AS 'TR_EMP_PLACE', 
        IFNULL(R.`name`, 'NA') AS 'TR_EMP_PLACENAME', 
        S.present_unit AS 'TR_EMP_UNIT', 
        (CASE WHEN S.present_place=5 THEN SC.`name` ELSE RO.`name` END) AS 'TR_EMP_UNITNAME', 
        IFNULL(RO.`name`, 'NA') AS 'TR_EMP_REGION',
        S.present_school AS 'TR_EMP_SCHOOL', 
        IFNULL(SC.`name`, 'NA') AS 'TR_EMP_SCHOOL_NAME',
        S.present_kvcode AS 'TR_EMP_KVCODE', 
        S.present_zone AS 'TR_EMP_ZONE',
        IFNULL(ZO.`name`, 'NA') AS 'TR_EMP_ZONE_NAME',
        S.present_subject AS 'TR_EMP_SUB',
        IFNULL(SB.`name`, 'NA') AS 'TR_EMP_SUBNAME',
        T.emp_id AS 'TR_TRS_EMP_ID', 
        T.status AS 'TR_TRS_EMP_STS'",false);
        
        $this->db->from('ci_employee_details E');
        $this->db->join('ci_present_service_details S','E.emp_code=S.emp_id','Left');
        $this->db->join('ci_designations D','S.present_designationid=D.id','Left');
        $this->db->join('ci_roles R','S.present_place=R.id','Left');
        $this->db->join('ci_regions RO','S.present_unit=RO.id','Left');
        $this->db->join('ci_schools SC','S.present_school=SC.id','Left');
        $this->db->join('ci_regions ZO','S.present_zone=ZO.id','Left');
        $this->db->join('ci_subjects SB','S.present_subject=SB.id','Left');
        $this->db->join('ci_initiate_transfer T','E.emp_code=T.emp_id AND T.active=1'  ,'Left');
        //======================= Check Role & According To Access ==============================//
        
        $LogAcs=$this->session->userdata['role_id'];
        if($LogAcs==5 || $LogAcs==4 || $LogAcs==3 || $LogAcs==2){ //HQ/ZIET/KV
            $this->db->where('E.emp_createdby=', $this->session->userdata['user_id']);
        }else{
            // All record accessed by web administrator
        }
       
        $qry=$this->db->get();
        //show($this->db->last_query());
        if($qry->num_rows())
        {
            return $data=$qry->result();
        }else{
            return $data=array();
        }
         
    }
    //==================================== GET EMPLOYEE DATA ==========================================//  
    public function getEmpDetails($empCode=null){
        
        $this->db->select("E.`emp_code` AS `P_EMP_CODE`, 
        (CASE WHEN E.emp_title=1 THEN 'Sh.' WHEN E.emp_title=2 THEN 'Smt.' WHEN E.emp_title=3 THEN 'Ms.' END) AS P_EMP_TTL, 
        CONCAT(E.emp_first_name, ' ', E.`emp_middle_name`, ' ', E.emp_last_name) AS P_EMP_NAME,
        E.`emp_email` AS `P_EMP_MAIL`, 
        E.`emp_mobile_no` AS `P_EMP_MOB`, 
        S.`present_designationid` AS `P_DESG_ID`, 
        D.`name` AS `P_DESG_NAME`, 
        S.`present_subject` AS `P_SUB_ID`, 
        SB.`name` AS `P_SUB_NAME`,
        S.`present_place` AS `P_PLACE_ID`, 
        R.`name` AS `P_PLACE_NAME`,
        S.`present_unit` AS `P_UNIT_ID`, 
        RO.`name` AS `P_UNIT_NAME`, 
        S.`present_section` AS `P_SECTION_ID`, 
        IFNULL(RC.`name`,'NA') AS `P_SECTION_NAME`, 
        S.`present_school` AS `P_SCHOOL_ID`, 
        SC.`name` AS `P_SCHOOL_NAME`, 
        S.`present_kvcode` AS `P_KVCODE`, 
        S.`present_zone` AS `P_EMP_ZONE`, 
        SC.`code` AS `P_CODE`, 
        ZO.`name` AS `P_ZONE`");
        
        $this->db->from('ci_employee_details E');
        $this->db->join('ci_present_service_details S','E.emp_code=S.emp_id','Left');
        $this->db->join('ci_designations D','S.present_designationid=D.id','Left');
        $this->db->join('ci_roles R','S.present_place=R.id','Left');
        $this->db->join('ci_regions RO','S.present_unit=RO.id','Left');
        $this->db->join('ci_schools SC','S.present_school=SC.id','Left');
        $this->db->join('ci_regions ZO','S.present_zone=ZO.id','Left');
        $this->db->join('ci_subjects SB','S.present_subject=SB.id','Left');
        $this->db->join('ci_role_category RC','S.present_section=RC.id','Left');
        $this->db->where('E.emp_code=', $empCode);
        $qry=$this->db->get();
        //show($this->db->last_query());
        if($qry->num_rows())
        {
            return $data=$qry->row_array();
        }else{
            return $data=array();
        }
    }
    
    //==================================== INITIATE TRANSFER REQUEST =======================================// 
    public function setTransferinitiateData($InsTrans,$typ=0){
 
    $response = array();
    $transOrdDate   =(empty($InsTrans['transfer_orderdate']))?'NULL' : date('Y-m-d', strtotime($InsTrans['transfer_orderdate']));
    $relievOrdDate  =(empty($InsTrans['relieving_date']))?'NULL' : date('Y-m-d', strtotime($InsTrans['relieving_date']));
        
        $PostData = array(
            'emp_id' => $InsTrans['emp_id'],
            
            'present_place' => $InsTrans['present_place'],
            'present_unit' => $InsTrans['present_unit'],
            'present_section' => $InsTrans['present_section'],
            'present_school' => $InsTrans['present_school'],
            'present_designation' => $InsTrans['present_designation'],
            'present_subject' => $InsTrans['present_subject'],
            'present_kvcode' => $InsTrans['present_kvcode'],
            
            'transfer_place' => $InsTrans['transfer_place'],
            'transfer_unit' => $InsTrans['transfer_unit'],
            'transfer_section' => $InsTrans['transfer_section'],
            'transfer_school' => $InsTrans['transfer_school'],
            'transfer_designation' => $InsTrans['transfer_designation'],
            'transfer_subject' => $InsTrans['transfer_subject'],
            'transfer_kvcode' => $InsTrans['transfer_kvcode'],
            
            'transfer_orderno' => $InsTrans['transfer_orderno'],
            'transfer_date' => $transOrdDate,
            
            'relieving_orderno' => $InsTrans['relieving_orderno'],
            'relieving_date' => $relievOrdDate,
            
            'transfer_status'=>1, //1-Pending, 2-Accept, 3-Transfered to HQ, 0-Reject 
            'transfer_remarks'=>'NA',
            
            'created_by' => $this->session->userdata('user_id'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('user_id'),
            'updated_at' => date('Y-m-d H:i:s'),
            
            'in_process' => 1 // 1 - Service Record Active  / 2 - Service Completed / Transffered
        );
        $this->db->query("update ci_emp_transfer_details set in_process='0' where in_process='1' and emp_id='".$InsTrans['emp_id']."'");
        //$Lx=$this->db->last_query();
        if($this->db->insert('emp_transfer_details', $PostData)) {
            // On Successful 
           
            if($typ==1){ // Direct Transfer
                // Update vacancy_master
                if($InsTrans['present_kvcode']){ $code=$InsTrans['present_kvcode'];}
                if($InsTrans['present_designation']){ $desig=$InsTrans['present_designation'];}
                $sql="update ci_vacancy_master set inposition_post=inposition_post-1 where code=$code and designation=$desig";
                if($InsTrans['present_subject']){ $sub=$InsTrans['present_subject']; $sql.=" and subject=$sub";}
                $this->db->query($sql);
            }
            

            // Update employee_details
            if($InsTrans['emp_id']){$empId=$InsTrans['emp_id'];}
            $this->db->query("update ci_employee_details set emp_istransffered=1 where emp_code=$empId");
            
            // Set Response Status
            $response['status'] = 'success';
        } else {
            // Set Response Status
            $response['status'] = 'error';
            $response['error'] = 'Form Could not be saved,Please try again';
        }
        return $response;
        
    }
    
    public function getTransferinitiateData($ExEc = NULL){
        
        $sql="T.id,
            T.emp_id AS EMP_ID,
            (CASE WHEN E.emp_title=1 THEN 'Sh.' WHEN E.emp_title=2 THEN 'Smt.' WHEN E.emp_title=3 THEN 'Ms.' END) AS EMP_TTL, 
             CONCAT(E.emp_first_name,' ', E.emp_middle_name,' ', E.emp_last_name) AS EMP_NAME,
            T.present_place,PP.name AS EMP_PRE_PLACE,
            T.present_unit,PU.name AS EMP_PRE_UNIT,
            T.present_section,IFNULL(PS.name,'NA') AS EMP_PRE_SECTION,
            T.present_school,IFNULL(PK.name,'NA') AS EMP_PRE_SCHOOL,
            T.present_designation,IFNULL(PD.name,'NA') AS EMP_PRE_DESIG,
            T.present_subject,IFNULL(PC.name,'NA') AS EMP_PRE_SUB,
            T.present_kvcode AS PRE_KCODE,
            (CASE WHEN T.present_place=5 THEN PKA.name ELSE PA.name END) AS EMP_PRE_AUTH,
            T.transfer_place,TP.name AS EMP_TRA_PLACE,
            T.transfer_unit,TU.name AS EMP_TRA_UNIT,
            T.transfer_section,IFNULL(TS.name,'NA') AS EMP_TRA_SECTION,
            T.transfer_school,IFNULL(TK.name,'NA') AS EMP_TRA_SCHOOL,
            T.transfer_designation,IFNULL(TD.name,'NA') AS EMP_TRA_DESIG,
            T.transfer_subject,IFNULL(TC.name,'NA') AS EMP_TRA_SUB,
            T.transfer_kvcode AS TRA_KCODE,
            (CASE WHEN T.present_place=5 THEN TKA.name ELSE TA.name END) AS EMP_TRA_AUTH,
            T.transfer_orderno AS 'TRA_OR_NO',
            DATE_FORMAT(T.transfer_date,'%d-%m-%Y') AS 'TRA_OR_DT',
            T.relieving_orderno AS 'REL_OR_NO',
            DATE_FORMAT(T.relieving_date,'%d-%m-%Y')AS 'REL_OR_DT',
            T.transfer_status,
            (CASE 
                WHEN T.transfer_status=1 THEN 'PENDING' 
                WHEN T.transfer_status=2 THEN 'ACCEPTED' 
                WHEN T.transfer_status=3 THEN 'TRANSFFERED TO HQ'
                WHEN T.transfer_status=0 THEN 'REJECTED'
                ELSE 'NA' 
            END) AS EMP_TRA_STS,
            T.transfer_remarks,
            T.created_by,
            T.created_at,
            T.updated_by,
            T.updated_at,
            T.in_process";
            $this->db->select($sql);
            $this->db->from('emp_transfer_details T');
            $this->db->join('employee_details E','T.emp_id=E.emp_code','Left');
            $this->db->join('roles PP','T.present_place=PP.id','Left');
            $this->db->join('roles TP','T.transfer_place=TP.id','Left');
            $this->db->join('regions PU','T.present_unit=PU.id','Left');
            $this->db->join('regions TU','T.transfer_unit=TU.id','Left');
            $this->db->join('role_category PS','T.present_section=PS.id','Left');
            $this->db->join('role_category TS','T.transfer_section=TS.id','Left');
            $this->db->join('schools PK','T.present_school=PK.id','Left');
            $this->db->join('schools TK','T.transfer_school=TK.id','Left');
            $this->db->join('designations PD','T.present_designation=PD.id','Left');
            $this->db->join('designations TD','T.transfer_designation=TD.id','Left');
            $this->db->join('subjects PC','T.present_subject=PC.id','Left');
            $this->db->join('subjects TC','T.transfer_subject=TC.id','Left');
            $this->db->join('regions PA','T.present_kvcode=PA.code','Left');
            $this->db->join('schools PKA','T.present_kvcode=PKA.code','Left');
            $this->db->join('regions TA','T.transfer_kvcode=TA.code','Left');
            $this->db->join('schools TKA','T.transfer_kvcode=TKA.code','Left');
        if(!empty($ExEc)){
            $this->db->where('T.emp_id', $ExEc);
            $this->db->where('T.in_process=', 1);
        }
        return $this->db->get()->row(); 
    }
    
    //============================== STEP - II (INCOMING REQUEST DETAILS) ==================================//
    public function getAllTransferEmp(){
        
        $sql="T.id,
            T.emp_id AS EMP_ID,
            (CASE WHEN E.emp_title=1 THEN 'Sh.' WHEN E.emp_title=2 THEN 'Smt.' WHEN E.emp_title=3 THEN 'Ms.' END) AS EMP_TTL, 
             CONCAT(E.emp_first_name,' ', E.emp_middle_name,' ', E.emp_last_name) AS EMP_NAME,
            T.present_place,PP.name AS EMP_PRE_PLACE,
            T.present_unit,PU.name AS EMP_PRE_UNIT,
            T.present_section,IFNULL(PS.name,'NA') AS EMP_PRE_SECTION,
            T.present_school,IFNULL(PK.name,'NA') AS EMP_PRE_SCHOOL,
            T.present_designation,IFNULL(PD.name,'NA') AS EMP_PRE_DESIG,
            T.present_subject,IFNULL(PC.name,'NA') AS EMP_PRE_SUB,
            T.present_kvcode AS PRE_KCODE,
            (CASE WHEN T.present_place=5 THEN PKA.name ELSE PA.name END) AS EMP_PRE_AUTH,
            T.transfer_place,TP.name AS EMP_TRA_PLACE,
            T.transfer_unit,TU.name AS EMP_TRA_UNIT,
            T.transfer_section,IFNULL(TS.name,'NA') AS EMP_TRA_SECTION,
            T.transfer_school,IFNULL(TK.name,'NA') AS EMP_TRA_SCHOOL,
            T.transfer_designation,IFNULL(TD.name,'NA') AS EMP_TRA_DESIG,
            T.transfer_subject,IFNULL(TC.name,'NA') AS EMP_TRA_SUB,
            T.transfer_kvcode AS TRA_KCODE,
            (CASE WHEN T.present_place=5 THEN TKA.name ELSE TA.name END) AS EMP_TRA_AUTH,
            T.transfer_orderno AS 'TRA_OR_NO',
            DATE_FORMAT(T.transfer_date,'%d-%m-%Y') AS 'TRA_OR_DT',
            T.relieving_orderno AS 'REL_OR_NO',
            DATE_FORMAT(T.relieving_date,'%d-%m-%Y')AS 'REL_OR_DT',
            T.transfer_status,
            (CASE 
                WHEN T.transfer_status=1 THEN 'PENDING' 
                WHEN T.transfer_status=2 THEN 'ACCEPTED' 
                WHEN T.transfer_status=3 THEN 'TRANSFFERED TO HQ'
                WHEN T.transfer_status=0 THEN 'REJECTED'
                ELSE 'NA' 
            END) AS EMP_TRA_STS,
            T.transfer_remarks,
            T.created_by,
            T.created_at,
            T.updated_by,
            T.updated_at,
            T.in_process";
            $this->db->select($sql);
            $this->db->from('emp_transfer_details T');
            $this->db->join('employee_details E','T.emp_id=E.emp_code','Left');
            $this->db->join('roles PP','T.present_place=PP.id','Left');
            $this->db->join('roles TP','T.transfer_place=TP.id','Left');
            $this->db->join('regions PU','T.present_unit=PU.id','Left');
            $this->db->join('regions TU','T.transfer_unit=TU.id','Left');
            $this->db->join('role_category PS','T.present_section=PS.id','Left');
            $this->db->join('role_category TS','T.transfer_section=TS.id','Left');
            $this->db->join('schools PK','T.present_school=PK.id','Left');
            $this->db->join('schools TK','T.transfer_school=TK.id','Left');
            $this->db->join('designations PD','T.present_designation=PD.id','Left');
            $this->db->join('designations TD','T.transfer_designation=TD.id','Left');
            $this->db->join('subjects PC','T.present_subject=PC.id','Left');
            $this->db->join('subjects TC','T.transfer_subject=TC.id','Left');
            $this->db->join('regions PA','T.present_kvcode=PA.code','Left');
            $this->db->join('schools PKA','T.present_kvcode=PKA.code','Left');
            $this->db->join('regions TA','T.transfer_kvcode=TA.code','Left');
            $this->db->join('schools TKA','T.transfer_kvcode=TKA.code','Left');
        
        //=========================  PICK DATA AGAINST ROLEID =============================//
        $LogAcs=$this->session->userdata['role_id'];
        if($LogAcs==5){ //KV
            $this->db->where('T.transfer_school=', $this->session->userdata['school_id']);

        }elseif($LogAcs==3 || $LogAcs==4){ //RO/ZEIT
            $this->db->where('T.transfer_unit=',    $this->session->userdata['region_id']);

        }elseif($LogAcs==2){ //HQ
            $this->db->where('T.transfer_section=', $this->session->userdata['role_category']);

        }else{
            // for Web Admin
        }
        $this->db->where('T.in_process=', 1);
        //https://www.javahelps.com/2017/09/install-oracle-jdk-9-on-linux.html
        //$this->db->where('T.transfer_status=', 1);
        $qry=$this->db->get();
        //show($this->db->last_query());
        if($qry->num_rows())
        {
            $data=$qry->result();
        }else{
            $data=array();
        }
        return $data;
    }
    
    //============================== STEP - III (INCOMING REQUEST DETAILS) ==================================//
    public function getAllResolutionEmp(){
        
        $sql="T.id,
            T.emp_id AS EMP_ID,
            (CASE WHEN E.emp_title=1 THEN 'Sh.' WHEN E.emp_title=2 THEN 'Smt.' WHEN E.emp_title=3 THEN 'Ms.' END) AS EMP_TTL, 
             CONCAT(E.emp_first_name,' ', E.emp_middle_name,' ', E.emp_last_name) AS EMP_NAME,
            T.present_place,PP.name AS EMP_PRE_PLACE,
            T.present_unit,PU.name AS EMP_PRE_UNIT,
            T.present_section,IFNULL(PS.name,'NA') AS EMP_PRE_SECTION,
            T.present_school,IFNULL(PK.name,'NA') AS EMP_PRE_SCHOOL,
            T.present_designation,IFNULL(PD.name,'NA') AS EMP_PRE_DESIG,
            T.present_subject,IFNULL(PC.name,'NA') AS EMP_PRE_SUB,
            T.present_kvcode AS PRE_KCODE,
            (CASE WHEN T.present_place=5 THEN PKA.name ELSE PA.name END) AS EMP_PRE_AUTH,
            T.transfer_place,TP.name AS EMP_TRA_PLACE,
            T.transfer_unit,TU.name AS EMP_TRA_UNIT,
            T.transfer_section,IFNULL(TS.name,'NA') AS EMP_TRA_SECTION,
            T.transfer_school,IFNULL(TK.name,'NA') AS EMP_TRA_SCHOOL,
            T.transfer_designation,IFNULL(TD.name,'NA') AS EMP_TRA_DESIG,
            T.transfer_subject,IFNULL(TC.name,'NA') AS EMP_TRA_SUB,
            T.transfer_kvcode AS TRA_KCODE,
            (CASE WHEN T.present_place=5 THEN TKA.name ELSE TA.name END) AS EMP_TRA_AUTH,
            T.transfer_orderno AS 'TRA_OR_NO',
            DATE_FORMAT(T.transfer_date,'%d-%m-%Y') AS 'TRA_OR_DT',
            T.relieving_orderno AS 'REL_OR_NO',
            DATE_FORMAT(T.relieving_date,'%d-%m-%Y')AS 'REL_OR_DT',
            T.transfer_status,
            (CASE 
                WHEN T.transfer_status=1 THEN 'PENDING' 
                WHEN T.transfer_status=2 THEN 'ACCEPTED' 
                WHEN T.transfer_status=3 THEN 'TRANSFFERED TO HQ'
                WHEN T.transfer_status=0 THEN 'REJECTED'
                ELSE 'NA' 
            END) AS EMP_TRA_STS,
            T.transfer_remarks,
            T.created_by,
            T.created_at,
            T.updated_by,
            T.updated_at,
            T.in_process";
            $this->db->select($sql);
            $this->db->from('emp_transfer_details T');
            $this->db->join('employee_details E','T.emp_id=E.emp_code','Left');
            $this->db->join('roles PP','T.present_place=PP.id','Left');
            $this->db->join('roles TP','T.transfer_place=TP.id','Left');
            $this->db->join('regions PU','T.present_unit=PU.id','Left');
            $this->db->join('regions TU','T.transfer_unit=TU.id','Left');
            $this->db->join('role_category PS','T.present_section=PS.id','Left');
            $this->db->join('role_category TS','T.transfer_section=TS.id','Left');
            $this->db->join('schools PK','T.present_school=PK.id','Left');
            $this->db->join('schools TK','T.transfer_school=TK.id','Left');
            $this->db->join('designations PD','T.present_designation=PD.id','Left');
            $this->db->join('designations TD','T.transfer_designation=TD.id','Left');
            $this->db->join('subjects PC','T.present_subject=PC.id','Left');
            $this->db->join('subjects TC','T.transfer_subject=TC.id','Left');
            $this->db->join('regions PA','T.present_kvcode=PA.code','Left');
            $this->db->join('schools PKA','T.present_kvcode=PKA.code','Left');
            $this->db->join('regions TA','T.transfer_kvcode=TA.code','Left');
            $this->db->join('schools TKA','T.transfer_kvcode=TKA.code','Left');
        
        //=========================  PICK DATA AGAINST ROLEID =============================//
        $LogAcs=$this->session->userdata['role_id'];
        $LogAcs=$this->session->userdata['role_category'];
        if($this->session->userdata['role_id']=='2' && $this->session->userdata['role_category']=='2'){ 
            $this->db->where('T.transfer_status=', 3);

        }else{
            // for Web Admin
        }
        $this->db->where('T.in_process=', 1);
        $qry=$this->db->get();
        //show($this->db->last_query());
        if($qry->num_rows())
        {
            $data=$qry->result();
        }else{
            $data=array();
        }
        return $data;
    }
    
    public function getTransferEmpDetails($empCode=null){
        $sql="T.id,
            T.emp_id AS EMP_ID,
            (CASE WHEN E.emp_title=1 THEN 'Sh.' WHEN E.emp_title=2 THEN 'Smt.' WHEN E.emp_title=3 THEN 'Ms.' END) AS EMP_TTL, 
             CONCAT(E.emp_first_name,' ', E.emp_middle_name,' ', E.emp_last_name) AS EMP_NAME,
            E.emp_email AS EMP_MAIL, E.emp_mobile_no AS EMP_MOB,
            T.present_place,PP.name AS EMP_PRE_PLACE,
            T.present_unit,PU.name AS EMP_PRE_UNIT,
            T.present_section,IFNULL(PS.name,'NA') AS EMP_PRE_SECTION,
            T.present_school,IFNULL(PK.name,'NA') AS EMP_PRE_SCHOOL,
            T.present_designation,IFNULL(PD.name,'NA') AS EMP_PRE_DESIG,
            T.present_subject,IFNULL(PC.name,'NA') AS EMP_PRE_SUB,
            T.present_kvcode AS PRE_KCODE,
            (CASE WHEN T.present_place=5 THEN PKA.name ELSE PA.name END) AS EMP_PRE_AUTH,
            T.transfer_place,TP.name AS EMP_TRA_PLACE,
            T.transfer_unit,TU.name AS EMP_TRA_UNIT,
            T.transfer_section,IFNULL(TS.name,'NA') AS EMP_TRA_SECTION,
            T.transfer_school,IFNULL(TK.name,'NA') AS EMP_TRA_SCHOOL,
            T.transfer_designation,IFNULL(TD.name,'NA') AS EMP_TRA_DESIG,
            T.transfer_subject,IFNULL(TC.name,'NA') AS EMP_TRA_SUB,
            T.transfer_kvcode AS TRA_KCODE,
            (CASE WHEN T.present_place=5 THEN TKA.name ELSE TA.name END) AS EMP_TRA_AUTH,
            T.transfer_orderno AS 'TRA_OR_NO',
            DATE_FORMAT(T.transfer_date,'%d-%m-%Y') AS 'TRA_OR_DT',
            T.relieving_orderno AS 'REL_OR_NO',
            DATE_FORMAT(T.relieving_date,'%d-%m-%Y')AS 'REL_OR_DT',
            T.transfer_status,
            (CASE 
                WHEN T.transfer_status=1 THEN 'PENDING' 
                WHEN T.transfer_status=2 THEN 'ACCEPTED' 
                WHEN T.transfer_status=3 THEN 'TRANSFFERED TO HQ'
                WHEN T.transfer_status=0 THEN 'REJECTED'
                ELSE 'NA' 
            END) AS EMP_TRA_STS,
            T.transfer_remarks,
            T.created_by,
            T.created_at,
            T.updated_by,
            T.updated_at,
            T.in_process";
        
            $this->db->select($sql);
            $this->db->from('emp_transfer_details T');
            $this->db->join('employee_details E','T.emp_id=E.emp_code','Left');
            $this->db->join('roles PP','T.present_place=PP.id','Left');
            $this->db->join('roles TP','T.transfer_place=TP.id','Left');
            $this->db->join('regions PU','T.present_unit=PU.id','Left');
            $this->db->join('regions TU','T.transfer_unit=TU.id','Left');
            $this->db->join('role_category PS','T.present_section=PS.id','Left');
            $this->db->join('role_category TS','T.transfer_section=TS.id','Left');
            $this->db->join('schools PK','T.present_school=PK.id','Left');
            $this->db->join('schools TK','T.transfer_school=TK.id','Left');
            $this->db->join('designations PD','T.present_designation=PD.id','Left');
            $this->db->join('designations TD','T.transfer_designation=TD.id','Left');
            $this->db->join('subjects PC','T.present_subject=PC.id','Left');
            $this->db->join('subjects TC','T.transfer_subject=TC.id','Left');
            $this->db->join('regions PA','T.present_kvcode=PA.code','Left');
            $this->db->join('schools PKA','T.present_kvcode=PKA.code','Left');
            $this->db->join('regions TA','T.transfer_kvcode=TA.code','Left');
            $this->db->join('schools TKA','T.transfer_kvcode=TKA.code','Left');
        

        $this->db->where('T.emp_id=', $empCode);
        $this->db->where('T.in_process=', 1);
        $qry=$this->db->get();
        //show($this->db->last_query());
        if($qry->num_rows())
        {
            $data=$qry->row_array();
        }else{
            $data=array();
        }
        return $data;
    }
    
    //  Request Process Start (Accept / Transferred)
    public function updateTransferData($TransData ,$SubmitData){
       // show($TransData);
       // show($SubmitData);
        $response = array();
        $respSts=$SubmitData['status'];
        $RowId=$TransData['id'];
        //===============================Fresh Code Start ====================================//
        if($respSts=='2'){ // Accepted or Approved Request
            $CvQry= $this->db->query("SELECT (VM.sanctioned_post - VM.inposition_post) AS AVL_POST 
            FROM ci_vacancy_master  VM 
            JOIN ci_emp_transfer_details TD ON(VM.`code`=TD.transfer_kvcode)
            WHERE VM.designation=TD.transfer_designation AND VM.subject=TD.transfer_subject AND TD.id='".$RowId."'");
            $CvRes=$CvQry->row();
            $AvlPost=$CvRes->AVL_POST;
            if($AvlPost && $AvlPost>0){ // Post Available for Transfer
                
                //Update Transfer Details
                $PostDataETD = array( 'transfer_status' => 2,'transfer_remarks' => 'Approved', 'updated_by' => $this->session->userdata('user_id') ,'updated_at' => date('Y-m-d H:i:s'),'in_process'=>2);
                $this->db->where('id=', $TransData['id']);
                $this->db->where('in_process=', 1);
                $this->db->update('ci_emp_transfer_details', $PostDataETD);
                
                //Update Employee Details
                $PostDataED = array( 'emp_istransffered' => 0,'emp_createdby'=>$this->session->userdata('user_id'),'emp_updatedon'=>date('Y-m-d H:i:s'));
                $this->db->where('emp_code=', $TransData['EMP_ID']);
                $this->db->update('ci_employee_details', $PostDataED);
                
                //Update Present Service Details
                $PostDataPSD = array(   'present_designationid' => $TransData['transfer_designation'],
                                        'present_subject' => $TransData['transfer_subject'],
                                        'present_place' => $TransData['transfer_place'],
                                        'present_unit' => $TransData['transfer_unit'],
                                        'present_section' => $TransData['transfer_section'],
                                        'present_school' => $TransData['transfer_school'],
                                        'present_kvcode' => $TransData['TRA_KCODE'],
                                        'created_by' => $this->session->userdata('user_id'),
                                        'updated_at' => date('Y-m-d H:i:s')
                                        
                                );
                $this->db->where('emp_id=', $TransData['EMP_ID']);
                $this->db->update('ci_present_service_details', $PostDataPSD);
                
                //Update Vacancy Master
                if($TransData['TRA_KCODE']){ $code=$TransData['TRA_KCODE'];}
                if($TransData['transfer_designation']){ $desig=$TransData['transfer_designation'];}
                $sql="update ci_vacancy_master set inposition_post=inposition_post+1 where code=$code and designation=$desig";
                if($TransData['transfer_subject']){ 
                    $sub=$TransData['transfer_subject']; $sql.=" and subject=$sub";
                }
                $this->db->query($sql);
                $response['status'] = 'approved';
                $response['message'] = 'Transfer requested has been accepted.';

            }
            else{
                $response['status'] = 'error';
                $response['message'] = 'Some Error Occured';
            }
        }elseif ($respSts=='3') { // Transfered to HQ
            //Update Transfer Details
            $PostDataETD = array( 'transfer_status' => 3,'transfer_remarks' => $SubmitData['reason'], 'updated_by' => $this->session->userdata('user_id') ,'updated_at' => date('Y-m-d H:i:s'));
            $this->db->where('id=', $TransData['id']);
            $this->db->where('in_process=', 1);
            $this->db->update('ci_emp_transfer_details', $PostDataETD);
            
            //Update Employee Details
            $PostDataED = array( 'emp_istransffered' => 3);
            $this->db->where('emp_code=', $TransData['EMP_ID']);
            $this->db->update('ci_employee_details', $PostDataED);
            //$LS= $this->db->last_query();
            $response['status'] = 'transferred';
            $response['message'] = 'Transfer requested has been transferred to Head Quarter.';
        }else{
            $response['status'] = 'error';
            $response['message'] = 'Some Error Occured';
        }
        //===============================Fresh Code End ====================================//
        return $response;     
    }
    
    public function getTransferCompletionData($ExEc = NULL,$Resp = NULL){
        $sql="T.id,
            T.emp_id AS EMP_ID,
            (CASE WHEN E.emp_title=1 THEN 'Sh.' WHEN E.emp_title=2 THEN 'Smt.' WHEN E.emp_title=3 THEN 'Ms.' END) AS EMP_TTL, 
             CONCAT(E.emp_first_name,' ', E.emp_middle_name,' ', E.emp_last_name) AS EMP_NAME,
            T.present_place,PP.name AS EMP_PRE_PLACE,
            T.present_unit,PU.name AS EMP_PRE_UNIT,
            T.present_section,IFNULL(PS.name,'NA') AS EMP_PRE_SECTION,
            T.present_school,IFNULL(PK.name,'NA') AS EMP_PRE_SCHOOL,
            T.present_designation,IFNULL(PD.name,'NA') AS EMP_PRE_DESIG,
            T.present_subject,IFNULL(PC.name,'NA') AS EMP_PRE_SUB,
            T.present_kvcode AS PRE_KCODE,
            (CASE WHEN T.present_place=5 THEN PKA.name ELSE PA.name END) AS EMP_PRE_AUTH,
            T.transfer_place,TP.name AS EMP_TRA_PLACE,
            T.transfer_unit,TU.name AS EMP_TRA_UNIT,
            T.transfer_section,IFNULL(TS.name,'NA') AS EMP_TRA_SECTION,
            T.transfer_school,IFNULL(TK.name,'NA') AS EMP_TRA_SCHOOL,
            T.transfer_designation,IFNULL(TD.name,'NA') AS EMP_TRA_DESIG,
            T.transfer_subject,IFNULL(TC.name,'NA') AS EMP_TRA_SUB,
            T.transfer_kvcode AS TRA_KCODE,
            (CASE WHEN T.present_place=5 THEN TKA.name ELSE TA.name END) AS EMP_TRA_AUTH,
            T.transfer_orderno AS 'TRA_OR_NO',
            DATE_FORMAT(T.transfer_date,'%d-%m-%Y') AS 'TRA_OR_DT',
            T.relieving_orderno AS 'REL_OR_NO',
            DATE_FORMAT(T.relieving_date,'%d-%m-%Y')AS 'REL_OR_DT',
            T.transfer_status,
            (CASE 
                WHEN T.transfer_status=1 THEN 'PENDING' 
                WHEN T.transfer_status=2 THEN 'ACCEPTED' 
                WHEN T.transfer_status=3 THEN 'TRANSFFERED TO HQ'
                WHEN T.transfer_status=0 THEN 'REJECTED'
                ELSE 'NA' 
            END) AS EMP_TRA_STS,
            T.transfer_remarks,
            T.created_by,
            T.created_at,
            T.updated_by,
            T.updated_at,
            T.in_process";
            $this->db->select($sql);
            $this->db->from('emp_transfer_details T');
            $this->db->join('employee_details E','T.emp_id=E.emp_code','Left');
            $this->db->join('roles PP','T.present_place=PP.id','Left');
            $this->db->join('roles TP','T.transfer_place=TP.id','Left');
            $this->db->join('regions PU','T.present_unit=PU.id','Left');
            $this->db->join('regions TU','T.transfer_unit=TU.id','Left');
            $this->db->join('role_category PS','T.present_section=PS.id','Left');
            $this->db->join('role_category TS','T.transfer_section=TS.id','Left');
            $this->db->join('schools PK','T.present_school=PK.id','Left');
            $this->db->join('schools TK','T.transfer_school=TK.id','Left');
            $this->db->join('designations PD','T.present_designation=PD.id','Left');
            $this->db->join('designations TD','T.transfer_designation=TD.id','Left');
            $this->db->join('subjects PC','T.present_subject=PC.id','Left');
            $this->db->join('subjects TC','T.transfer_subject=TC.id','Left');
            $this->db->join('regions PA','T.present_kvcode=PA.code','Left');
            $this->db->join('schools PKA','T.present_kvcode=PKA.code','Left');
            $this->db->join('regions TA','T.transfer_kvcode=TA.code','Left');
            $this->db->join('schools TKA','T.transfer_kvcode=TKA.code','Left');
        if(!empty($ExEc)){
            $this->db->where('T.emp_id', $ExEc);
            $this->db->where('T.in_process=', $Resp);
        }
        return $this->db->get()->row(); 
    }
    
    public function transferHistory(){
        //=====================================================================//
        $this->db->select('id')->from('ci_users');
        $this->db->where('region_id=', $this->session->userdata['region_id']);
        $subQuery =  $this->db->get_compiled_select();
        //====================================================================//
        $sql="T.id,
            T.emp_id AS EMP_ID,
            (CASE WHEN E.emp_title=1 THEN 'Sh.' WHEN E.emp_title=2 THEN 'Smt.' WHEN E.emp_title=3 THEN 'Ms.' END) AS EMP_TTL, 
             CONCAT(E.emp_first_name,' ', E.emp_middle_name,' ', E.emp_last_name) AS EMP_NAME,
            T.present_place,PP.name AS EMP_PRE_PLACE,
            T.present_unit,PU.name AS EMP_PRE_UNIT,
            T.present_section,IFNULL(PS.name,'NA') AS EMP_PRE_SECTION,
            T.present_school,IFNULL(PK.name,'NA') AS EMP_PRE_SCHOOL,
            T.present_designation,IFNULL(PD.name,'NA') AS EMP_PRE_DESIG,
            T.present_subject,IFNULL(PC.name,'NA') AS EMP_PRE_SUB,
            T.present_kvcode AS PRE_KCODE,
            (CASE WHEN T.present_place=5 THEN PKA.name ELSE PA.name END) AS EMP_PRE_AUTH,
            T.transfer_place,TP.name AS EMP_TRA_PLACE,
            T.transfer_unit,TU.name AS EMP_TRA_UNIT,
            T.transfer_section,IFNULL(TS.name,'NA') AS EMP_TRA_SECTION,
            T.transfer_school,IFNULL(TK.name,'NA') AS EMP_TRA_SCHOOL,
            T.transfer_designation,IFNULL(TD.name,'NA') AS EMP_TRA_DESIG,
            T.transfer_subject,IFNULL(TC.name,'NA') AS EMP_TRA_SUB,
            T.transfer_kvcode AS TRA_KCODE,
            (CASE WHEN T.present_place=5 THEN TKA.name ELSE TA.name END) AS EMP_TRA_AUTH,
            T.transfer_orderno AS 'TRA_OR_NO',
            DATE_FORMAT(T.transfer_date,'%d-%m-%Y') AS 'TRA_OR_DT',
            T.relieving_orderno AS 'REL_OR_NO',
            DATE_FORMAT(T.relieving_date,'%d-%m-%Y')AS 'REL_OR_DT',
            T.transfer_status,
            (CASE 
                WHEN T.transfer_status=1 THEN 'PENDING' 
                WHEN T.transfer_status=2 THEN 'ACCEPTED' 
                WHEN T.transfer_status=3 THEN 'TRANSFFERED TO HQ'
                WHEN T.transfer_status=0 THEN 'REJECTED'
                ELSE 'NA' 
            END) AS EMP_TRA_STS,
            T.transfer_remarks,
            T.created_by,
            T.created_at,
            T.updated_by,
            T.updated_at,
            T.in_process";
            $this->db->select($sql);
            $this->db->from('emp_transfer_details T');
            $this->db->join('employee_details E','T.emp_id=E.emp_code','Left');
            $this->db->join('roles PP','T.present_place=PP.id','Left');
            $this->db->join('roles TP','T.transfer_place=TP.id','Left');
            $this->db->join('regions PU','T.present_unit=PU.id','Left');
            $this->db->join('regions TU','T.transfer_unit=TU.id','Left');
            $this->db->join('role_category PS','T.present_section=PS.id','Left');
            $this->db->join('role_category TS','T.transfer_section=TS.id','Left');
            $this->db->join('schools PK','T.present_school=PK.id','Left');
            $this->db->join('schools TK','T.transfer_school=TK.id','Left');
            $this->db->join('designations PD','T.present_designation=PD.id','Left');
            $this->db->join('designations TD','T.transfer_designation=TD.id','Left');
            $this->db->join('subjects PC','T.present_subject=PC.id','Left');
            $this->db->join('subjects TC','T.transfer_subject=TC.id','Left');
            $this->db->join('regions PA','T.present_kvcode=PA.code','Left');
            $this->db->join('schools PKA','T.present_kvcode=PKA.code','Left');
            $this->db->join('regions TA','T.transfer_kvcode=TA.code','Left');
            $this->db->join('schools TKA','T.transfer_kvcode=TKA.code','Left');
        
        //=========================  PICK DATA AGAINST ROLEID =============================//
        $LogAcs=$this->session->userdata['role_id'];
        if($LogAcs==5){ //KV
            $this->db->where('T.transfer_school=', $this->session->userdata['school_id']);

        }elseif($LogAcs==3 || $LogAcs==4){ //RO/ZEIT
            $this->db->where('T.transfer_unit=',    $this->session->userdata['region_id']);

        }elseif($LogAcs==2){ //HQ
            $this->db->where('T.transfer_section=', $this->session->userdata['role_category']);

        }else{
            // for Web Admin
        }
        //$this->db->where('T.in_process=', 1);
        $qry=$this->db->get();
        //show($this->db->last_query());
        if($qry->num_rows())
        {
            $data=$qry->result();
        }else{
            $data=array();
        }
        return $data;
        //$this->db->where("T.created_by IN ($subQuery)", NULL, FALSE);
        
    }
}
