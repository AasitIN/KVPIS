<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reports extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('reports_model');
        if (!$this->is_logged_in() || $this->role_id == ROLE_APPLICANT) {
            redirect(base_url());
        }
    }

    public function index() {
		//pr($this->session->userdata['role_id']);
		$role_id = $this->session->userdata['role_id'] ; 
		if($role_id==1){
			$view = 'report/reports';
		}else if($role_id==2){
			$view = 'report/hq_reports';
		}else if($role_id==3){
			$view = 'report/ro_reports';
		}else if($role_id==4){
			$view = 'report/zt_reports';
		}else{
			$view = 'report/kv_reports';
		}
		
        $data = array(
            'title' => WEBSITE_TITLE . ' - 	',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
	
        public function vacancy() {
            //$view = 'vacancy';
            $role_id = $this->session->userdata['role_id'] ;
            if($role_id==1){
            $view = 'vacancy/vacancy';
            }else if($role_id==2){
            $view = 'vacancy/hq_vacancy';
            }else if($role_id==3){
            $view = 'vacancy/ro_vacancy';
            }else if($role_id==4){
            $view = 'vacancy/zt_vacancy';
            }else{
            $view = 'vacancy/kv_vacancy';
            }
            $data = array(
                'title' => WEBSITE_TITLE . ' - Vacancy',
                'javascripts' => array(),
                'style_sheets' => array(),
                'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
            );
            $this->load->view($this->template, $data);
        }
    //Report One 13/11/19
        public function reportone() {
		    $role_id = $this->session->userdata['role_id'] ;
            if($role_id==1){
            $view = 'reportone/emp_report';
            }else if($role_id==2){
            $view = 'reportone/hq_reports';
            }else if($role_id==3){
            $view = 'reportone/ro_reports';
            }else if($role_id==4){
				
            $view = 'reportone/zt_reports';
            }else{
            $view = 'reportone/kv_reports';
            }
            
            $data = array(
                'title' => WEBSITE_TITLE . ' - Emp Report',
                'javascripts' => array(),
                'style_sheets' => array(),
                'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
            );
            $this->load->view($this->template, $data);
        }
	public function get_profile() {
        
        $columns = array(
            0 => 'id',
            1 => 'emp_code',
            2 => 'emp_first_name',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->reports_model->getAllRegisteredProfile();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->reports_model->getAllRegisteredProfile($limit, $start, $order, $dir, $search, $post_data);
        //show($response);
        
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['emp_own'] = $user->emp_createdby;
                $nestedData['decode_id'] = base64_encode($user->emp_code);
                $nestedData['emp_code'] = $user->emp_code;
                $nestedData['emp_post'] = $user->emp_desig;
                $nestedData['emp_subject'] = $user->emp_subject;
                $nestedData['emp_place'] = $user->emp_post_place;
                $nestedData['emp_region'] = $user->emp_region;
                $nestedData['emp_school'] = $user->emp_school;
                $nestedData['emp_school_code'] = $user->emp_school_code;
                $nestedData['emp_name'] = $user->emp_title.' '.$user->emp_first_name.' '.$user->emp_middle_name.' '.$user->emp_last_name;
                $nestedData['serial_no'] = $serial;
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        echo json_encode($json_data);
    }
    
	 //===================================== View Vacancy =======================================//
    public function get_all_vacancy() {
       
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->reports_model->getAllRegisteredProfilevacancy();
        $post_data = $this->input->post(null, true);
        $search    = $this->input->post('search')['value'];
        $response  = $this->reports_model->getAllRegisteredProfilevacancy($limit, $start, $order, $dir, $search, $post_data);
        //show($response);
        
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['KV_CODE'] = $user->KV_CODE;
                $nestedData['ROLE'] = $user->ROLE;
                $nestedData['KV_REGION_ZEIT'] = $user->KV_REGION_ZEIT;
                $nestedData['IN_POST'] = $user->IN_POST;
                $nestedData['DESI_TYPE'] = $user->DESI_TYPE;
                $nestedData['IN_SUBJECT'] = $user->IN_SUBJECT;
                $nestedData['SANCTION_POST'] = $user->SANCTION_POST;
                $nestedData['IN_POSITION'] = $user->IN_POSITION;
                $nestedData['TOTAL_VACANCY'] = $user->TOTAL_VACANCY;
                $nestedData['serial_no'] = $serial;
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        echo json_encode($json_data);
    }
    /* ==================================13112019================================================== */
	public function get_employee_data() {
        $columns = array(
            0 => 'id',
            1 => 'seniorti_no',
            2 => 'emp_first_name',
            3 => 'kv_where_working',
            4 => 'emp_dob',
            5 => 'date_oppointment',
            6 => 'educational_qualification',
            7 => 'profesional_qualification',
            8 => 'date_of_drawing_center',
            9 => 'training_from',
            10 => 'tranig_to',
            11 => 'no_of_days',
            12 => 'emp_first_name',
            13 => 'emp_first_name',
            14 => 'emp_first_name',
            15 => 'emp_first_name',
            16 => 'emp_first_name',
            17 => 'emp_first_name',
            18 => 'emp_first_name',
        );
		
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->reports_model->getAllEmployeeReport();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->reports_model->getAllEmployeeReport($limit, $start, $order, $dir, $search, $post_data);
        //show($response);
        
        $users = isset($response['result']) ? $response['result'] : array();
		
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;
       
        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) { 
			
				++$serial;
				$grade = $this->get_garading_by_emp_id($user->emp_code);
				//pr($grade);
				$nestedData['id'] = $user->id;
                $nestedData['seniorti_no'] = $user->seniorti_no;
                $nestedData['emp_name'] = $user->emp_title.' '.$user->emp_first_name.' '.$user->emp_middle_name.' '.$user->emp_last_name;
                $nestedData['kv_where_working'] = $user->kv_where_working;
                $nestedData['emp_dob'] = $user->e_dob;
                $nestedData['date_oppointment'] = $user->date_oppointment;
                $nestedData['educational_qualification'] = $user->educational_qualification;
                $nestedData['ded_prof'] = $user->profesional_qualification;
                $nestedData['date_of_drawing_center'] = $user->date_of_drawing_center;
                $nestedData['training_from'] = $user->training_from;
                $nestedData['tranig_to'] = $user->tranig_to;
                $nestedData['no_of_days'] = $user->no_of_days;
                $nestedData['role_id'] = $user->role_id;
				$nestedData['G1'] = isset($grade['result'][0]['grading']) ? $grade['result'][0]['grading'] : 0;
                $nestedData['G2'] = isset($grade['result'][1]['grading']) ? $grade['result'][1]['grading'] : 0;
                $nestedData['G3'] = isset($grade['result'][2]['grading']) ? $grade['result'][2]['grading'] : 0;
                $nestedData['G4'] = isset($grade['result'][3]['grading']) ? $grade['result'][3]['grading'] : 0;
                $nestedData['G5'] = isset($grade['result'][4]['grading']) ? $grade['result'][4]['grading'] : 0;
                $nestedData['G6'] = isset($grade['result'][5]['grading']) ? $grade['result'][5]['grading'] : 0;
                $nestedData['G7'] = isset($grade['result'][6]['grading']) ? $grade['result'][6]['grading'] : 0;
                $nestedData['G8'] = isset	($grade['result'][7]['grading']) ? $grade['result'][7]['grading'] : 0;
				$nestedData['retire_date'] = retirement_date($user->e_dob);
				$nestedData['serial_no'] = $serial;
				
				
                $data[] = $nestedData;
            }
        }
		
        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        echo json_encode($json_data);
    }
	
	public function get_garading_by_emp_id($emp_id){
		$this->db->select('grading');
		$this->db->from('ci_performance_details');
		$this->db->where('emp_id',$emp_id);
		$qry=$this->db->get();
        if($qry->num_rows()){
            $data['result']=$qry->result_array();
        }else{
            $data['result']=array();
        }
		return $data ;
	}
    public function get_designation()
    {
        $did=$this->input->post('d_id');
        $designation = designation_lists($did); 
        //print_r($designation); 
        $str='';
        $str.='<option value="">Select</option>';
        foreach ($designation as $key => $val)
        {
            $str.='<option value='.$key.'>'.$val.'</option>';
        }
        echo($str);
        die;
    }
    
    public function get_subject()
    {
        $subid=$this->input->post('s_id');
        $subject = subject_lists_designationwise($subid); 
        if(!empty($subject))
        {
            $str='';
            $str.='<option value="">Select</option>';
            foreach ($subject as $key => $val)
            {
                $str.='<option value='.$key.'>'.$val.'</option>';
            }
            echo($str);
            die;
        }else{
            echo 0; die;
        }
        
    }
	
    
}
