<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Transfer extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('transfer_model');
        if (!$this->is_logged_in()) {
            redirect(base_url());
        }
    }

    public function index() {
        $view = 'index';
        $view_data['TF']=$this->transfer_model->getAllEmp();
        //print_r($view_data['TF']);
        $data = array(
            'title' => WEBSITE_TITLE . ' - Employee Details',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function initiate_request($id) {
        $EmpCode= base64_decode($id);
        $view_data['ED']=$this->transfer_model->getEmpDetails($EmpCode);
        $view_data['Ord_No']="KVS/".date('dmY')."/ORD/". strtoupper(substr(md5(time()), 0, 8));
        $view_data['Ord_Date']=date('d-m-Y');
        $view_data['Rel_No']="KVS/".date('dmY')."/REL/". strtoupper(substr(md5(time()), 0, 8));
        if ($transfer_data = $this->input->post(null, true)) {
            //echo '<pre>'; print_r($transfer_data);// die;
            $this->form_validation->set_rules('present_place', 'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('present_unit', 'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('present_kvcode', 'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('present_designationid', 'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_place', 'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_unit', 'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_kvcode', 'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_designation', 'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_orderno', 'This Field', 'required|xss_clean');
            $this->form_validation->set_rules('transfer_orderdate', 'This Field', 'required|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('relieving_orderno', 'This Field', 'required|xss_clean');
            $this->form_validation->set_rules('relieving_date', 'This Field', 'required|xss_clean|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->transfer_model->setTransferinitiateData($transfer_data);
                if ($response['status'] == 'success') {
                    //$this->session->set_flashdata('success', 'Data Successfully Saved');
                    redirect(base_url('transfer/initiate_request_success/'.$id));
                } else {
                    $view_data['error_msg'] = isset($response['error']) ? $response['error'] : 'Data could not be Saved. Please try again';
                    redirect(base_url('transfer/initiate_request?/'.$id));
                }
            }
        }
        $view = 'initiate_request';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Initiate Request',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    public function initiate_request_success($id) {
        $EmpCode=base64_decode($id);
        $view_data['empdata']=$this->transfer_model->getTransferinitiateData($EmpCode);
        $view_data['ED']=$this->transfer_model->getEmpDetails($EmpCode);
        $view = 'initiate_request_success';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Success Initiate Request',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    public function request_approved_success($id) {
        $view_data['id'] = $id;
        $view = 'request_approved_success';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Success Approved Request',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function pending_for_approval() {
        $view_data['TF']=$this->transfer_model->getAllTransferEmp();
        $view = 'pending_for_approval';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Pending For approval',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function process_prnding_for_approval($id) {
        $ids= base64_decode($id);
        $view_data['ED']=$this->transfer_model->getTransferEmpDetails($ids);
        if ($transfer_data = $this->input->post(null, true)) {
            //echo '<pre>'; print_r($transfer_data);die;
            $this->form_validation->set_rules('status', 'This Field', 'required|xss_clean|callback_regex_check');
            if($transfer_data[status]=='REJECTED' || $transfer_data[status]=='ONHOLD')
                $this->form_validation->set_rules('reason', 'This Field', 'required|xss_clean');
           
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->transfer_model->updateTransferData($transfer_data);
                if ($response['status'] == 'success') {
                    //$this->session->set_flashdata('success', 'Data Successfully Saved');
                    redirect(base_url('transfer/transfer_letter/'.$id));
                } else {
                    //$view_data['error_msg'] = isset($response['error']) ? $response['error'] : 'Data could not be Saved. Please try again';
                    $this->session->set_flashdata('error',$response['error']);
                    redirect(base_url('transfer/process_prnding_for_approval/'.$id));
                }
            }
        }
        $view = 'process_pending_for_approval';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Process Request',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function transfer_letter($id) {
        $ids=base64_decode($id);
        $view_data['empdata']=$this->transfer_model->getTransferCompletionData($ids);
        //show($view_data['empdata']);
        $view = 'letter';
        $data = array(
            'title' => WEBSITE_TITLE . ' - letter',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    public function transfer_history() {
        $view = 'transfer_history';
        $view_data['TF']=$this->transfer_model->transferHistory();
        //print_r($view_data['TF']);
        $data = array(
            'title' => WEBSITE_TITLE . ' - Employee Details',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

}
