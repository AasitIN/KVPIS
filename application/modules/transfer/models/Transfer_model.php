<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Transfer_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    public function getAllEmp(){
        //=====================================================================//
        $this->db->select('id')->from('ci_users');
        $this->db->where('region_id=', $this->session->userdata['region_id']);
        $subQuery =  $this->db->get_compiled_select();
        //====================================================================//
        $this->db->select("SQL_CALC_FOUND_ROWS
            E.emp_createdby,
            E.emp_code,
            (CASE 
                WHEN E.emp_title=1 THEN 'Sh.' 
                WHEN E.emp_title=2 THEN 'Smt.' 
                WHEN E.emp_title=3 THEN 'Ms.' END
            ) AS emp_title,T.emp_id as transfered,T.status as transferstatus,
            E.emp_first_name,E.emp_middle_name,E.emp_last_name,E.emp_email,E.emp_mobile_no,
            S.present_designationid,S.present_place,S.present_unit,S.present_school,S.present_kvcode,S.present_zone,
            IFNULL(D.`name`,'NA') AS emp_desig,
            IFNULL(R.`name`,'NA') AS emp_post_place,
            (CASE WHEN S.present_place=5 THEN SC.`name` ELSE RO.`name` END) AS 'kv_region_zt',
            IFNULL(RO.`name`,'NA') AS emp_region,
            IFNULL(SC.`name`,'NA') AS emp_school,
            IFNULL(SC.`code`,'NA') AS emp_school_code,
            IFNULL(SU.`name`,'NA') AS emp_subject,
            IFNULL(ZO.`name`,'NA') AS emp_zone",false);
        $this->db->from('ci_employee_details E');
        $this->db->join('ci_present_service_details S','E.emp_code=S.emp_id','Left');
        $this->db->join('ci_designations D','S.present_designationid=D.id','Left');
        $this->db->join('ci_roles R','S.present_place=R.id','Left');
        $this->db->join('ci_regions RO','S.present_unit=RO.id','Left');
        $this->db->join('ci_schools SC','S.present_school=SC.id','Left');
        $this->db->join('ci_regions ZO','S.present_zone=ZO.id','Left');
        $this->db->join('ci_subjects SU','S.present_subject=SU.id','Left');
        $this->db->join('ci_initiate_transfer T','E.emp_code=T.emp_id AND T.active=1'  ,'Left');
        //======================= Check Role & According To Access ==============================//
        
        $LogAcs=$this->session->userdata['role_id'];
        if($LogAcs==5 || $LogAcs==4 || $LogAcs==3 || $LogAcs==2){ //HQ/ZIET/KV
            $this->db->where('E.emp_createdby=', $this->session->userdata['user_id']);
        }
        /*elseif($LogAcs==3){ 
         
           $this->db->where("E.emp_createdby IN ($subQuery)", NULL, FALSE);
        }*/
        else{
            // for Web Admin
        }
        $qry=$this->db->get();
        //echo $lastQry=$this->db->last_query();
        if($qry->num_rows())
        {
            $data['result']=$qry->result();
        }else{
            $data['result']=array();
        }
        return $data;
    }
    public function getEmpDetails($empCode=null){
        $this->db->select("E.emp_code,
        (CASE 
            WHEN E.emp_title=1 THEN 'Sh.' 
            WHEN E.emp_title=2 THEN 'Smt.' 
            WHEN E.emp_title=3 THEN 'Ms.' END
        ) AS emp_title,CONCAT(E.emp_first_name,' ',E.emp_middle_name,' ',E.emp_last_name) AS emp_name,E.emp_email,E.emp_mobile_no,
        S.present_designationid,S.present_subject,S.present_place,S.present_unit,S.present_section,S.present_school,S.present_kvcode,S.present_zone,
        D.`name`  AS P_DESIG,
        R.`name`  AS P_PLACE,
        RO.`name` AS P_REGION,
        SC.`name` AS P_SCHOOL,
        SC.`code` AS P_CODE,
        ZO.`name` AS P_ZONE");
        $this->db->from('ci_employee_details E');
        $this->db->join('ci_present_service_details S','E.emp_code=S.emp_id','Left');
        $this->db->join('ci_designations D','S.present_designationid=D.id','Left');
        $this->db->join('ci_roles R','S.present_place=R.id','Left');
        $this->db->join('ci_regions RO','S.present_unit=RO.id','Left');
        $this->db->join('ci_schools SC','S.present_school=SC.id','Left');
        $this->db->join('ci_regions ZO','S.present_zone=ZO.id','Left');
        $this->db->where('E.emp_code=', $empCode);
         $qry=$this->db->get();
       
        if($qry->num_rows())
        {
            return $qry->row_array();
        }else{
            return array();
        }
        //return $data;
    }
    
    public function setTransferinitiateData($transfer_data){
        
        $response = array();
        if(!empty($transfer_data['transfer_orderdate']))
        {
            $transferdate=date('Y-m-d', strtotime($transfer_data['transfer_orderdate']));
        }else{
            $transferdate='NULL';
        }
        
        if(!empty($transfer_data['relieving_date']))
        {
            $relievingdate=date('Y-m-d', strtotime($transfer_data['relieving_date']));
        }else{
            $relievingdate='NULL';
        }
        
        $PostData = array(
            'emp_id'        => $transfer_data['emp_id'],
            'current_place' => $transfer_data['present_place'],
            'current_unit'  => $transfer_data['present_unit'],
            'current_section'   => $transfer_data['present_section'],
            'current_school'    => $transfer_data['present_school'],
            'current_designation'   => $transfer_data['present_designationid'],
            'current_subject'   => $transfer_data['present_subject'],
            'current_kvcode'    => $transfer_data['present_kvcode'],
            'transfer_place'    => $transfer_data['transfer_place'],
            'transfer_unit'     => $transfer_data['transfer_unit'],
            'transfer_section'  => $transfer_data['transfer_section'],
            'transfer_school'   => $transfer_data['transfer_school'],
            'transfer_designation' => $transfer_data['transfer_designation'],
            'transfer_subject'  => $transfer_data['transfer_subject'],
            'transfer_kvcode'   => $transfer_data['transfer_kvcode'],
            'transfer_orderno'  => $transfer_data['transfer_orderno'],
            'transfer_orderdate'=> $transferdate,
            'relieving_orderno' => $transfer_data['relieving_orderno'],
            'relieving_date'    => $relievingdate,
            'created_by'        => $this->session->userdata('user_id')   
        );
        //print_r($PostData); die;
        $this->db->set('active', '0');
        $this->db->where('emp_id=', $transfer_data['emp_id']);
        $qry = $this->db->update('initiate_transfer');
        
        if($this->db->insert('initiate_transfer', $PostData)) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Form Could not be saved,Please try again';
        }
        return $response;
        
    }
    
    public function getTransferinitiateData($ExEc = NULL){
        $this->db->select("T.*,
            (CASE 
            WHEN T.current_place=2 THEN 'HeadQuarter'
            WHEN T.current_place=5 THEN S.name 
            ELSE R.name END
        ) AS currentunitname,
            (CASE 
            WHEN T.transfer_place=2 THEN 'HeadQuarter'
            WHEN T.transfer_place=5 THEN SC.name 
            ELSE RO.name END
        ) AS unitname,D.name as currentdesignation,DE.name as transferdesignation,
        DATE_FORMAT(T.transfer_orderdate,'%d-%m-%Y') as transfer_date,DATE_FORMAT(T.created_at,'%d-%m-%Y') as initiate_date ");
        $this->db->from('initiate_transfer as T');
        $this->db->join('ci_regions R','T.current_unit=R.id','Left');
        $this->db->join('ci_schools S','T.current_school=S.id','Left');
        $this->db->join('ci_regions RO','T.transfer_unit=RO.id','Left');
        $this->db->join('ci_schools SC','T.transfer_school=SC.id','Left');
        $this->db->join('ci_designations D','T.current_designation=D.id','Left');
        $this->db->join('ci_designations DE','T.transfer_designation=DE.id','Left');
        if(!empty($ExEc)){
            $this->db->where('T.emp_id', $ExEc);
            $this->db->where('T.active=', 1);
        }
        return $this->db->get()->row(); 
    }
    
    public function getAllTransferEmp(){
        
        $this->db->select("E.emp_code,E.emp_first_name,E.emp_middle_name,E.emp_last_name,(CASE 
                WHEN E.emp_title=1 THEN 'Sh.' 
                WHEN E.emp_title=2 THEN 'Smt.' 
                WHEN E.emp_title=3 THEN 'Ms.' END
            ) AS emp_title,IFNULL(R.`name`,'NA') as present_place,
            (CASE WHEN T.current_place=5 THEN SC.`name` ELSE RO.`name` END) AS 'kv_region_zt',
            (CASE WHEN T.current_place=5 THEN SC.`code` ELSE RO.`code` END) AS 'kv_code',IFNULL(D.`name`,'NA') AS present_desig,
            S.name as subjectname,T.transfer_orderno,T.transfer_orderdate,T.status as Transferstatus,T.id as transferid");
        $this->db->from('ci_initiate_transfer T');
        $this->db->join('ci_employee_details E','T.emp_id=E.emp_code','Left');
        $this->db->join('ci_roles R','T.current_place=R.id','Left');
        $this->db->join('ci_regions RO','T.current_unit=RO.id','Left');
        $this->db->join('ci_schools SC','T.current_school=SC.id','Left');
        $this->db->join('ci_designations D','T.current_designation=D.id','Left');
        $this->db->join('ci_subjects S','T.current_subject=S.id','Left');
        
       
        //======================= Check Role & According To Access ==============================//
        
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
        //$this->db->where('T.status=', 'INPROCESS');
        $this->db->where_in('T.status', array('INPROCESS','ONHOLD'));
        $this->db->where('T.active=', 1);
        $qry=$this->db->get();
        //echo $lastQry=$this->db->last_query();

        if($qry->num_rows())
        {
            $data['result']=$qry->result();
        }else{
            $data['result']=array();
        }
        return $data;
    }
    
    public function getTransferEmpDetails($empCode=null){
        $this->db->select("CONCAT(E.emp_first_name,' ',E.emp_middle_name,' ',E.emp_last_name) AS emp_name,E.emp_code,E.emp_email,E.emp_mobile_no,
            (CASE 
                WHEN E.emp_title=1 THEN 'Sh.' 
                WHEN E.emp_title=2 THEN 'Smt.' 
                WHEN E.emp_title=3 THEN 'Ms.' END
            ) AS emp_title,IFNULL(R.`name`,'NA') as present_place,
            (CASE WHEN T.current_place=5 THEN SC.`name` ELSE RO.`name` END) AS 'kv_region_zt',
            (CASE WHEN T.current_place=5 THEN SC.`code` ELSE RO.`code` END) AS 'kv_code',IFNULL(D.`name`,'NA') AS present_desig,
            S.name as subjectname,T.*");
        $this->db->from('ci_initiate_transfer T');
        $this->db->join('ci_employee_details E','T.emp_id=E.emp_code','Left');
        $this->db->join('ci_roles R','T.current_place=R.id','Left');
        $this->db->join('ci_regions RO','T.current_unit=RO.id','Left');
        $this->db->join('ci_schools SC','T.current_school=SC.id','Left');
        $this->db->join('ci_designations D','T.current_designation=D.id','Left');
        $this->db->join('ci_subjects S','T.current_subject=S.id','Left');
        $this->db->where('T.id=', $empCode);
        $where = '(T.status="INPROCESS" or T.status= "ONHOLD")';
        $this->db->where($where);
        $qry=$this->db->get();
       
        if($qry->num_rows())
        {
            return $qry->row_array();
        }else{
            return array();
        }
        //return $data;
    }
    
    public function updateTransferData($transfer_data){
       // show($transfer_data);
        $response = array();
        $active=($transfer_data['status']=="ONHOLD")?1:0;
        $PostData = array(
            'status' => $transfer_data['status'],
            'reason' => $transfer_data['reason'],
            'active' => $active,
            'updated_by' => $this->session->userdata('user_id')   
        );
      //  show($PostData); die;
        
        if($transfer_data['status']=='ACCEPTED'){
            $query1=$this->db->query("SELECT (v.sanctioned_post - v.inposition_post) as vacancy FROM ci_vacancy_master as v 
                inner join ci_initiate_transfer as t on v.code=t.transfer_kvcode 
                where v.designation=t.transfer_designation and v.subject=t.transfer_subject and t.id='".$transfer_data['transferid']."'");
            $result1 = $query1->row();
            $vacancy=$result1->vacancy;
            if($vacancy>0)
            {
                //update transfer table if the status is accepted
                $this->db->where('id=', $transfer_data['transferid']);
                $qry = $this->db->update('initiate_transfer', $PostData);
                //update present service detail table
                $query=$this->db->query("select t.emp_id FROM ci_initiate_transfer as t WHERE t.id='".$transfer_data['transferid']."'");
                $result = $query->row();
                $empid=$result->emp_id;
                $this->db->query("update ci_present_service_details p,ci_initiate_transfer t set 
                    p.present_designationid=t.transfer_designation,p.present_subject=t.transfer_subject,p.present_place=t.transfer_place,p.present_unit=t.transfer_unit,
                    p.present_section=t.transfer_section,p.present_school=t.transfer_school,p.present_kvcode=t.transfer_kvcode  
                    where p.emp_id='".$empid."' and  t.id='".$transfer_data['transferid']."'");
                //update vacancy table
                
                $this->db->query("update ci_vacancy_master v, ci_initiate_transfer t set v.inposition_post=(v.inposition_post+1) 
                    WHERE v.code=t.transfer_kvcode 
                    and v.designation=t.transfer_designation 
                    and v.subject=t.transfer_subject and t.id='".$transfer_data['transferid']."'");
                $lastQry=$this->db->last_query();
                $this->db->query("update ci_vacancy_master v, ci_initiate_transfer t set v.inposition_post=(v.inposition_post-1) 
                    WHERE v.code=t.current_kvcode 
                    and v.designation=t.current_designation 
                    and v.subject=t.current_subject 
                    and t.id='".$transfer_data['transferid']."'");
                $lastQry=$this->db->last_query();
                //update created by in employee details table
                $this->db->query("update ci_employee_details as e set e.emp_createdby='".$this->session->userdata('user_id')."',"
                        . "e.emp_updatedby='".$this->session->userdata('user_id')."' where e.emp_code='".$empid."' ");
                //update created by in present service detail table
                $this->db->query("update ci_present_service_details as e set e.created_by='".$this->session->userdata('user_id')."',"
                        . "e.updated_by='".$this->session->userdata('user_id')."' where e.emp_id='".$empid."' ");
            }else{
                $response['status'] = 'error';
                $response['error'] = 'The Post is not vacant.';
                return $response; 
            }
            
        }else{
            //update transfer table other than accepted status
            $this->db->where('id=', $transfer_data['transferid']);
            $qry = $this->db->update('initiate_transfer', $PostData);
        }
        if($qry) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Some Error Occured';
        }
        return $response;     
    }
    
    public function getTransferCompletionData($ExEc = NULL){
        $this->db->select("T.*,
            (CASE 
            WHEN E.emp_title=1 THEN 'Sh.' 
            WHEN E.emp_title=2 THEN 'Smt.' 
            WHEN E.emp_title=3 THEN 'Ms.' END
        ) AS emp_title,CONCAT(E.emp_first_name,' ',E.emp_middle_name,' ',E.emp_last_name) AS emp_name,
            (CASE 
            WHEN T.current_place=2 THEN 'HeadQuarter'
            WHEN T.current_place=5 THEN S.name 
            ELSE R.name END
        ) AS currentunitname,
            (CASE 
            WHEN T.transfer_place=2 THEN 'HeadQuarter'
            WHEN T.transfer_place=5 THEN SC.name 
            ELSE RO.name END
        ) AS unitname,D.name as currentdesignation,DE.name as transferdesignation,
        DATE_FORMAT(T.transfer_orderdate,'%d-%m-%Y') as transfer_date,DATE_FORMAT(T.updated_at,'%d-%m-%Y') as initiate_date ");
        $this->db->from('initiate_transfer as T');
        $this->db->join('ci_employee_details E','T.emp_id=E.emp_code','Left');
        $this->db->join('ci_regions R','T.current_unit=R.id','Left');
        $this->db->join('ci_schools S','T.current_school=S.id','Left');
        $this->db->join('ci_regions RO','T.transfer_unit=RO.id','Left');
        $this->db->join('ci_schools SC','T.transfer_school=SC.id','Left');
        $this->db->join('ci_designations D','T.current_designation=D.id','Left');
        $this->db->join('ci_designations DE','T.transfer_designation=DE.id','Left');
        if(!empty($ExEc)){
            $this->db->where('T.id', $ExEc);
        }
        return $this->db->get()->row(); 
    }
    public function transferHistory(){
        //=====================================================================//
        $this->db->select('id')->from('ci_users');
        $this->db->where('region_id=', $this->session->userdata['region_id']);
        $subQuery =  $this->db->get_compiled_select();
        //====================================================================//
        $this->db->select("SQL_CALC_FOUND_ROWS
            E.emp_createdby,
            E.emp_code,
            (CASE 
                WHEN E.emp_title=1 THEN 'Sh.' 
                WHEN E.emp_title=2 THEN 'Smt.' 
                WHEN E.emp_title=3 THEN 'Ms.' END
            ) AS emp_title,T.emp_id as transfered,T.status as transferstatus,
            E.emp_first_name,E.emp_middle_name,E.emp_last_name,E.emp_email,E.emp_mobile_no,
            S.present_designationid,S.present_place,S.present_unit,S.present_school,S.present_kvcode,S.present_zone,
            IFNULL(D.`name`,'NA') AS emp_desig,
            IFNULL(R.`name`,'NA') AS emp_post_place,
            (CASE WHEN S.present_place=5 THEN SC.`name` ELSE RO.`name` END) AS 'kv_region_zt',
            (CASE WHEN T.transfer_place=5 THEN TS.`name` ELSE TR.`name` END) AS 'transfer_kv_region_zt',
            IFNULL(RO.`name`,'NA') AS emp_region,
            IFNULL(TR.`name`,'NA') AS emp_transfer_region,
            IFNULL(SC.`name`,'NA') AS emp_school,
            IFNULL(SC.`code`,'NA') AS emp_school_code,
            IFNULL(SU.`name`,'NA') AS emp_subject,
            IFNULL(TD.`name`,'NA') AS emp_transfer_desig,
            IFNULL(TSU.`name`,'NA') AS emp_transfer_subject",false);
        $this->db->from('ci_employee_details E');
        $this->db->join('ci_present_service_details S','E.emp_code=S.emp_id','Left');
        $this->db->join('ci_initiate_transfer T','E.emp_code=T.emp_id ');
        $this->db->join('ci_designations D','T.current_designation=D.id','Left');
        $this->db->join('ci_roles R','T.current_place=R.id','Left');
        $this->db->join('ci_regions RO','T.current_unit=RO.id','Left');
        $this->db->join('ci_schools SC','T.current_school=SC.id','Left');
        //$this->db->join('ci_regions ZO','T.current_zone=ZO.id','Left');
        $this->db->join('ci_subjects SU','T.current_subject=SU.id','Left');
        $this->db->join('ci_regions TR','T.transfer_unit=TR.id','Left');
        $this->db->join('ci_schools TS','T.transfer_school=TS.id','Left');
        $this->db->join('ci_designations TD','T.transfer_designation=TD.id','Left');
        $this->db->join('ci_subjects TSU','T.transfer_subject=TSU.id','Left');
        //======================= Check Role & According To Access ==============================//
        
        $LogAcs=$this->session->userdata['role_id'];
        if($LogAcs==5 || $LogAcs==4 || $LogAcs==2){ //HQ/ZIET/KV
            $this->db->where('T.created_by=', $this->session->userdata['user_id']);
        }elseif($LogAcs==3){ //RO
           // $this->db->where('E.emp_createdby=', $this->session->userdata['user_id']);
           $this->db->where("T.created_by IN ($subQuery)", NULL, FALSE);
        }else{
            // for Web Admin
        }
        $qry=$this->db->get();
       
        if($qry->num_rows())
        {
            $data['result']=$qry->result();
        }else{
            $data['result']=array();
        }
        return $data;
    }
}
