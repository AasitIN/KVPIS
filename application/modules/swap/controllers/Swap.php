<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Swap extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('swap_model');
        if (!$this->is_logged_in()) {
            redirect(base_url());
        }
    }
    
    //Eligible Employee for Transfer 
    public function index(){
        
        $view = 'index';
        $view_data['EMP']=$this->swap_model->getAllEmp();

        $data = array(
            'title' => WEBSITE_TITLE . ' - Employee Details',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
        
    }
    
    // Initiate Transfer Request
    public function initiate_request() {
        
        $typ =  $this->uri->segment(3); // Direct / Indirect
        $id  =  $this->uri->segment(4); // Employee Id
        $EmpCode= base64_decode($id);
        $view_data['ED']=$this->swap_model->getEmpDetails($EmpCode);
        $view_data['Ord_No']="KVS/".date('dmY')."/ORD/". strtoupper(substr(md5(time()), 0, 8));
        $view_data['Ord_Date']=date('d-m-Y');
        $view_data['Rel_No']="KVS/".date('dmY')."/REL/". strtoupper(substr(md5(time()), 0, 8));
        
        if($transfer_data = $this->input->post(null, true)) {
            
            $this->form_validation->set_rules('present_place',          'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('present_unit',           'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('present_kvcode',         'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('present_designation',    'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_place',         'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_unit',          'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_kvcode',        'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_designation',   'This Field', 'required|integer|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('transfer_orderno',       'This Field', 'required|xss_clean');
            $this->form_validation->set_rules('transfer_orderdate',     'This Field', 'required|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('relieving_orderno',      'This Field', 'required|xss_clean');
            $this->form_validation->set_rules('relieving_date',         'This Field', 'required|xss_clean|callback_regex_check');
            
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->swap_model->setTransferinitiateData($transfer_data,$typ);
                if ($response['status'] == 'success') {
                    redirect(base_url('swap/initiate_request_success/'.$typ.'/'.$id));
                } else {
                    $view_data['error_msg'] = isset($response['error']) ? $response['error'] : 'Data could not be Saved. Please try again';
                    redirect(base_url('swap/initiate_request?/'.$typ.'/'.$id));
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
    
    // On Success Initiate Transfer Request
    public function initiate_request_success() {
        $typ =  $this->uri->segment(3); // Direct / Indirect
        $id  =  $this->uri->segment(4); // Employee Id
        $EmpCode= base64_decode($id);
        $view_data['TYP']=$typ;
        $view_data['ID']=$EmpCode;        
        $view_data['E']=$this->swap_model->getTransferinitiateData($EmpCode); //Employee Transfer Details
        $view = 'initiate_request_success';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Success Initiate Request',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    //Pending for Approval
    public function pending_for_approval() {
        $view_data['E']=$this->swap_model->getAllTransferEmp();
        $view = 'pending_for_approval';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Pending For approval',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    //Pending for Resolution
    public function pending_for_Resolution() {
        $view_data['E']=$this->swap_model->getAllResolutionEmp();
        $view = 'pending_for_resolution';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Pending For Resolution',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    //Process Pending Request
    public function process_pending_for_approval($id) {
        $ids= base64_decode($id);
        $view_data['TD']=$this->swap_model->getTransferEmpDetails($ids); // Get transfer details
        $TransData=$view_data['TD'];
        if ($SubmitData = $this->input->post(null, true)) {
            $SubmitData = $this->input->post(null, true);
            $this->form_validation->set_rules('status', 'This Field', 'required|xss_clean|callback_regex_check');
                if($SubmitData['status']=='3')
                    $this->form_validation->set_rules('reason', 'This Field', 'required|xss_clean');
                if ($this->form_validation->run($this) !== FALSE) {
                    $response = $this->swap_model->updateTransferData($TransData ,$SubmitData);
                    if ($response['status'] == 'approved') {
                        redirect(base_url('swap/approved_request_success/'.$id));
                    }elseif ($response['status'] == 'transferred') {
                        $this->session->set_flashdata('success',$response['message']);
                        redirect(base_url('swap/forwarded_to_hq_success/'.$id));
                    }else {
                        $this->session->set_flashdata('error',$response['message']);
                        redirect(base_url('swap/process_pending_for_approval/'.$id));
                    }
            }
        }
        $view = 'process_pending_for_approval';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Process Pending Request',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    // Approved Transfer Letter
    public function approved_request_success($id) {
        $EmpCode=base64_decode($id);
        $view_data['E']=$this->swap_model->getTransferCompletionData($EmpCode, $Resp=2);//Employee Transfer Details
        $view = 'approved_request_success';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Approved Transferred Letter',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function forwarded_to_hq_success($id){
        $EmpCode=base64_decode($id);
        $view_data['E']=$this->swap_model->getTransferCompletionData($EmpCode, $Resp=1);//Employee Transfer Details
        $view = 'forwarded_to_hq_success';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Forwarded Request Letter',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }


    
    
    public function resolution_details(){
        if ($this->input->is_ajax_request()) {
            $post = $this->input->post(null, true);
            if (!empty($post['EmpId'])) {
                $ids = $post['EmpId'];
                $EmpData=$this->swap_model->getTransferEmpDetails($ids); // Get transfer details
                //show($EmpData);
                $tblData="<div class='modal-header'>
                <h4 class='modal-title'>Previous Transfer Details</h4>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                </div>
                <div class='modal-body'>
                <table class='table table-bordered'>
                <thead>
                        <tr style='background: #014a69;color: #ffffff;'>
                            <td style='text-align:center;'>Name : ".$EmpData['EMP_TTL'].$EmpData['EMP_NAME']."(".$EmpData['EMP_ID'].")</td>
                            <td style='text-align:center;'>Order No:".$EmpData['EMP_ID']."/ Date:".$EmpData['TRA_OR_DT']."</td>
                        </tr>
                        <tr style='background: #f36d1b;color: #ffffff;'>
                            <td style='text-align:center;'>TRANSFER FROM</td>
                            <td style='text-align:center;'>TRANSFER TO</td>
                        </tr>
                </thead>
                <tbody>
                        <tr> 
                            <td><b>Present Place : </b>".$EmpData['EMP_PRE_PLACE']."</td>
                            <td><b>Transfer Place : </b>".$EmpData['EMP_TRA_PLACE']."</td>
                        </tr>
                
                        <tr> 
                            <td><b>Present UNIT/REGION/ZIET/KV : </b>".$EmpData['EMP_PRE_UNIT']."</td>
                            <td><b>Transfer UNIT/REGION/ZIET/KV : </b>".$EmpData['EMP_TRA_UNIT']."</td>
                        </tr>
                        <tr> 
                            <td><b>Present KV CODE : </b>".$EmpData['PRE_KCODE']."</td>
                            <td><b>Transfer KV CODE : </b>".$EmpData['TRA_KCODE']."</td>
                        </tr>
                        <tr> 
                            <td><b>Present Designation : </b>".$EmpData['EMP_PRE_DESIG']."</td>
                            <td><b>Transfer Designation : </b>".$EmpData['EMP_TRA_DESIG']."</td>
                        </tr>
                        <tr> 
                            <td><b>Present Subject : </b>".$EmpData['EMP_PRE_SUB']."</td>
                            <td><b>Transfer Subject : </b>".$EmpData['EMP_TRA_SUB']."</td>
                        </tr>
                        <tr> 
                            <td colspan='2'><span style='color:#F00F00;'>Reason for Transferred but not joined : </span>".$EmpData['transfer_remarks']."</td>
                        </tr>
                </tbody>
                </table>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                    <a href='". base_url()."swap/initiate_request/2/".base64_encode($EmpData['EMP_ID'])."' class='btn btn-primary' id='status_save'>Re Initiate</a>
                </div>";
                
                echo $tblData;
            }
        }
    }
    // Translation History
    public function transfer_history() {
        $view = 'transfer_history';
        $view_data['TH']=$this->swap_model->transferHistory();
        //print_r($view_data['TH']);
        $data = array(
            'title' => WEBSITE_TITLE . ' - Employee Details',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
}
