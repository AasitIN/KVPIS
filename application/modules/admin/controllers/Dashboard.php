<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Dashboard extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('dashboard_model');
        //$this->load->model('employee_model');
        if(!$this->is_logged_in()){
            redirect(base_url());
        }
    }
	
    public function index($kCode = null){
       
        $LogRole=$this->session->userdata['role_id'];
		//show($this->session->userdata);
		
		    
			
		
        if($LogRole=="1"){
                $view = 'dashboard/index'; // Site Admin
		//$view_data['user_register_by_region'] = $this->dashboard_model->getUserRegisterByRegion();
		//$view_data['vacancy_by_region']       = $this->dashboard_model->getVacancyByRegion();
        $view_data['EMP_REGD']      = $this->dashboard_model->getHqZtRoEmpRegd($kCode);
        $view_data['VAC_VS_INPOS']  = $this->dashboard_model->getHqZtRoVacInPos($kCode);       
        }else if($LogRole=="2"){
                $view = 'dashboard/hq-index'; // Head Quarter
				$region_id = $this->session->userdata['region_id'];
				//show($this->session->userdata);
				$kCode =1917 ;
				$view_data['EMP_REGD']      = $this->dashboard_model->getHqZtRoEmpRegd($kCode);
				$view_data['VAC_VS_INPOS']  = $this->dashboard_model->getHqZtRoVacInPos($kCode);
                $view_data['HQ']    = $this->dashboard_model->getHqDetails();
                $view_data['HQG']   = $this->dashboard_model->getHq();
                $view_data['REG']   = $this->dashboard_model->getHqEmpRegd();
        }else if($LogRole=="3"){ //Region
				/* ======================get rolwise data =========================================== */
				$region_id = $this->session->userdata['region_id'];
				if(isset($kCode) && !empty($kCode)){
					$region_code= $kCode ;
				}else{
				 $region_code= $this->dashboard_model->getCodeByRegionId($region_id);
				}
				$view_data['EMP_REGD']      = $this->dashboard_model->getHqZtRoEmpRegd($region_code);
                                
				$view_data['VAC_VS_INPOS']  = $this->dashboard_model->getHqZtRoVacInPos($region_code); 
				/* ================================================================================= */
                $view_data['RO']= $this->dashboard_model->getRoDetails();
                $view = 'dashboard/ro-index'; // Regional 
		$view_data['school_by_region'] = $this->dashboard_model->getSchoolByRegion();
        }else if($LogRole=="4"){ //Ziet
			    //show($this->session->userdata);
                                $region_id = $this->session->userdata['region_id'];
				$region_code= $this->dashboard_model->getCodeByRegionId($region_id);
				$view_data['EMP_REGD']      = $this->dashboard_model->getHqZtRoEmpRegd($region_code);
				$view_data['VAC_VS_INPOS']  = $this->dashboard_model->getHqZtRoVacInPos($region_code); 
                $view_data['ZT']= $this->dashboard_model->getZtDetails();
				$view = 'dashboard/zi-index'; // ZIET
		$view_data['ziet'] = $this->dashboard_model->getZiet();
        }else if($LogRole=="5"){
	    /* ======================get rolwise data =========================================== */
                $school_id = $this->session->userdata['school_id'];
                $school_code= $this->dashboard_model->getCodeBySchoolId($school_id);
		$view_data['EMP_REGD']      = $this->dashboard_model->getHqZtRoEmpRegd($school_code);
                //show($view_data['EMP_REGD']);
                $view_data['VAC_VS_INPOS']  = $this->dashboard_model->getHqZtRoVacInPos($school_code); 
		/* ================================================================================= */
		$view_data['KV']= $this->dashboard_model->getKvDetails();
		$view_data['school_by_post'] = $this->dashboard_model->getSchoolBypost();
		$view = 'dashboard/kv-index'; // Kendriya Vidyalaya
        }else if($LogRole=="6"){
                $view = 'dashboard/em-index'; // Employee
        }else{
            redirect(base_url());
        }
        $view_data['total_user']= $this->dashboard_model->getTotalUser();
        $view_data['total_current_user']= $this->dashboard_model->getTotalCurrentUser();
        $view_data['total_transfre']= $this->dashboard_model->getTotalTransfer();
        $view_data['total_vacancy'] = $this->dashboard_model->getTotalVacancy();
        $data = array(
            'title' => WEBSITE_TITLE . ' - Dashboard',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view,(isset($view_data) ) ? $view_data : '', TRUE)
        );
        
        $this->load->view($this->template, $data);
    }
}