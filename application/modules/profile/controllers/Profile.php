<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Profile extends MY_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('profile_model');
            if (!$this->is_logged_in()) {
                redirect(base_url());
            }
        }
    
        public function index() {
            
            $view = 'ViewProfile';
            if(!empty($this->input->get('EC'))){
            $ExEc=base64_decode($this->input->get('EC'));
            $view_data['EmpCode']=$ExEc;
            } else{
                $view_data['EmpCode']='';
            }
            // $ExEc=10000;
            // Personal Data
            $view_data['PerData'] = $this->profile_model->getPersonalData($ExEc); 
            // Academic Data
            $AC_MAS = $this->profile_model->getAcademicData($ExEc);
            
            $AC_MASTER=array();
            foreach($AC_MAS as $AC){
                if($AC->emp_education=='2'){
                    $AC_DTL = $this->profile_model->getAcademicDetailData($AC->id, $AC->emp_id);
                    $AC->edulist=$AC_DTL;
                }else{
                    $AC->edulist=array();
                }
                array_push($AC_MASTER,$AC);
            }
            
            $view_data['AcdmData']['edu']=$AC_MASTER;
            $view_data['AcdmData']['pro']=$this->profile_model->getProfessionalData($ExEc);
            $view_data['AcdmData']['com']=$this->profile_model->getProficiencyData($ExEc);
            
            // Result Data
            $ResMas = $this->profile_model->getResultData($ExEc);
            $view_data['Mas']= $ResMas;
            if($ResMas['emp_type']==1){ // Teaching Staff
                $Tech = $this->profile_model->getResultDataTech($ExEc);
                if($ResMas['emp_dign_post']==6)
                $view_data['tPGT']=$Tech;
                if($ResMas['emp_dign_post']==8)
                $view_data['tTGT']=$Tech;
                if($ResMas['emp_dign_post']==1 || $ResMas['emp_dign_post']==2)
                $view_data['tPRI']=$Tech;
                if($ResMas['emp_dign_post']==3 || $ResMas['emp_dign_post']==7)
                $view_data['tHMS']=$Tech;
            }
            if($ResMas['emp_type']==2){ // Non Teaching Staff
                $view_data['Non'] = $this->profile_model->getResultDataNonTech($ExEc);
            }
            //==============================================================================//
           //Service Detail
            $view_data['InitialServiceData']  = $this->profile_model->getinitialServiceData($ExEc);
            $view_data['PresentServiceData']  = $this->profile_model->getpresentServiceData($ExEc);
            $view_data['AllServiceData']  = $this->profile_model->getallServiceData($ExEc);
            $view_data['LeaveData']  = $this->profile_model->getLeaveData($ExEc);
            $view_data['DisciplinaryData']  = $this->profile_model->getDisciplinaryData($ExEc);
            $view_data['OtherData']  = $this->profile_model->getOtherDetailData($ExEc);
            $view_data['dob'] = $this->profile_model->getDobData($ExEc);
            $age = (date('Y') - date('Y',strtotime($view_data['dob'])));
            $retirement = retirement_date( $view_data['dob']); 
            $view_data['date_of_retirement'] = date_format(date_create($retirement), 'd-m-Y');
            if($age<40)
            {
                $view_data['age']=1;
            }elseif ($age>=40) {
                $view_data['age']=2;
            }
            //Pay Detail
            $view_data['PayData']  = $this->profile_model->getPayScaleData($ExEc);
            //Award
            $view_data['AwardData']  = $this->profile_model->getAwardData($ExEc);
            //Training
            $view_data['TrainingData']  = $this->profile_model->getTrainingData($ExEc);
            $view_data['OtherTrainingData']  = $this->profile_model->getOtherTrainingData($ExEc);
            //Apar
            $view_data['AparData']  = $this->profile_model->getPerformanceData($ExEc);
            $view_data['PromotionData']  = $this->profile_model->getPromotionData($ExEc);
            $view_data['DemotionData']  = $this->profile_model->getDemotionData($ExEc);
            // Foreign Visit Data
            $view_data['ForeignVisitData']  = $this->profile_model->getForeignVisitData($ExEc);
            $view_data['TeacherExchangeData']  = $this->profile_model->getExchangeData($ExEc);
            $view_data['FinancialData']  = $this->profile_model->getFinancialData($ExEc);
            $view_data['FamilyData']  = $this->profile_model->getFamilyData($ExEc);
            $view_data['SpouseData']  = $this->profile_model->getSpouseData($ExEc);
            //echo '<pre>';print_r($view_data['OtherTrainingData'] );die;
            $data = array(
                'title' => WEBSITE_TITLE . ' - View Employee Profile',
                'javascripts' => array(),
                'style_sheets' => array(),
                'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
            );
            $this->load->view($this->template, $data);
        }
        public function regd_employee(){
            $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'description',
            3 => 'status',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->role_model->get_all_roles_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->role_model->get_all_roles_list_json($limit, $start, $order, $dir, $search, $post_data);
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['decode_id'] = base64_encode($user->id);
                $nestedData['name'] = $user->name;
                $nestedData['description'] = $user->description;
                $nestedData['status'] = $user->status == 1 ? 'Active' : 'In-active';
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
    

}
