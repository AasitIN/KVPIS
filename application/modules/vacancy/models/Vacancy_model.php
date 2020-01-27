<?php
class Vacancy_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
   
    public function AddToVacancyMaster($ExData){
        $PostData=array(
            'code'          => $ExData['code'],
            'type'          => $ExData['role_type'],
            'designation'   => $ExData['designation'],
            'designation_type'  => $ExData['designation_type'],
            'subject'           => $ExData['subject'],
            'sanctioned_post'   => $ExData['sanctioned_post'],
        );
        
        //Check duplicate if sanctioned post of same designation and same subject for same kvcode is present. 
        $array = array('code' => $ExData['code'], 'designation' => $ExData['designation'], 'subject' => $ExData['subject']);
        $this->db->select('*');
        $this->db->from('vacancy_master');
        $this->db->where($array); 
        $ids = $this->db->get()->row();
        //print_r($ids->id);die;
        
        //Check if sanctioned post is greater than the employee present in that kvs. 
        $array = array('present_kvcode' => $ExData['code'], 'present_designationid' => $ExData['designation'], 'present_subject' => $ExData['subject']);
        $this->db->select("count(id) as counts");
        $this->db->from('ci_present_service_details');
        $this->db->where($array); 
        $count = $this->db->get()->row();
        //print_r($count->counts); die;
        
        if(!empty($ids))//update if present 
        {
            $this->db->where('id', $ids->id);
            if($ExData['sanctioned_post']>$count->counts)
            {
                $qry = $this->db->update('vacancy_master', $PostData);
                if($qry) {
                    $response['status'] = 'success';
                } else {
                    $response['status'] = 'error';
                } 
            }else{
                $response['status'] = 'error';
            }
            
        }else{ // insert if not present
            if($ExData['sanctioned_post']>$count->counts)
            {
                $qry = $this->db->insert('vacancy_master', $PostData);
                if($qry) {
                    $response['status'] = 'success';
                } else {
                    $response['status'] = 'error';
                } 
            }else{
                $response['status'] = 'error';
            } 
        }
    
        
        return $response;
    }
    public function getAllRegisteredProfile($limit=null,$start=null,$col=null,$dir=null,$search=null,$post_data=null)
    {
        if(func_num_args()==0)//this is used for getting total number of records
        {
            $this->db->select('count(id) as total');
            $this->db->from('ci_vacancy_master');
            $qry=$this->db->get();
            return $qry->row()->total;
        }
        //=====================================================================//
        //$this->db->select('id')->from('ci_users');
        //$this->db->where('region_id=', $this->session->userdata['region_id']);
        //$subQuery =  $this->db->get_compiled_select();
        //====================================================================//
        
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

        //======================= Check Role & According To Access ==============================//
        /*
        $LogAcs=$this->session->userdata['role_id'];
        if($LogAcs==5 || $LogAcs==4 || $LogAcs==2){ //HQ/ZIET/KV
            $this->db->where('E.emp_createdby=', $this->session->userdata['user_id']);
        }elseif($LogAcs==3){ //RO
           // $this->db->where('E.emp_createdby=', $this->session->userdata['user_id']);
           $this->db->where("E.emp_createdby IN ($subQuery)", NULL, FALSE);
        }else{
            // for Web Admin
        }
        */
        
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
    
}