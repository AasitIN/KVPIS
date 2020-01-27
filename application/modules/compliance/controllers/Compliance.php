<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Compliance extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('compliance_model');
        if (!$this->is_logged_in()) {
            redirect(base_url());
        }
    }
    
    public function index()
    {
        $emp_id=$this->session->userdata('user_id');
        $view_data['compdata'] = $this->compliance_model->getComplianceData($emp_id); 
        if ($comp_data = $this->input->post(null, true)) {
            
            $this->form_validation->set_rules('acceptance', 'This Field', 'required|xss_clean');	
            if ($this->form_validation->run($this) !== FALSE) {
                $empcode=$this->session->userdata('user_id');
                $response = $this->compliance_model->setComplianceData($comp_data);
                if ($response['status'] == 'success') {
                    $this->session->set_flashdata('success', 'Submitted Successfully');
                    redirect(base_url('compliance'));
                } else {
                    $view_data['error_msg'] = isset($response['error']) ? $response['error'] : 'Something went wrong, please try again.';
                    redirect(base_url('compliance'));
                }
            }
        }
        
        $view = 'index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Compliance',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
        
    }
    
    public function compliance_report()
    {
        if($this->session->userdata('role_id')==3)
        {
            $view = 'regionlist';
            $data = array(
                'title' => WEBSITE_TITLE . ' - Compliance Report',
                'javascripts' => array(),
                'style_sheets' => array(),
                'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
            );
            $this->load->view($this->template, $data);
            
        }elseif ($this->session->userdata('role_id')==2 && $this->session->userdata('role_category')==3) {
            $view = 'headquarterlist';
            $data = array(
                'title' => WEBSITE_TITLE . ' - Compliance Report',
                'javascripts' => array(),
                'style_sheets' => array(),
                'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
            );
            $this->load->view($this->template, $data);
        }
    }
    
    public function region_complaince_report()
    {
        
        $regid=$this->input->post('reg_id');
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'code',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->compliance_model->getRegionComplianceData();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->compliance_model->getRegionComplianceData($limit, $start, $order, $dir, $search, $post_data);
       
        $compliancedata = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;
        $data = array();
        if (!empty($compliancedata)) {
            $serial = $start;
            foreach ($compliancedata as $user) {
                ++$serial;
                if(!empty($user->compliancestatus))
                {
                    $status='Submitted';
                }else{
                    $status='<span class="text-danger">Not Submitted</span>';
                }
                $nestedData['id'] = $user->id;
                $nestedData['name'] = $user->name;
                $nestedData['code'] = $user->code;
                $nestedData['status'] = $status;
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
        die;
    }
    
    public function hqest_complaince_report()
    {
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'code',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->compliance_model->getHqEstComplianceData();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->compliance_model->getHqEstComplianceData($limit, $start, $order, $dir, $search, $post_data);
       
        $compliancedata = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;
        $data = array();
        if (!empty($compliancedata)) {
            $serial = $start;
            foreach ($compliancedata as $user) {
                ++$serial;
                if(!empty($user->compliancestatus))
                {
                    $status='Submitted';
                }else{
                    $status='<span class="text-danger">Not Submitted</span>';
                }
                $nestedData['id'] = $user->id;
                $nestedData['name'] = $user->name;
                $nestedData['code'] = $user->code;
                $nestedData['status'] = $status;
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
        die;
    }
    
    
}
