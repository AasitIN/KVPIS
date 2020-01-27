<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Notification extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Notification_model');
        if (!$this->is_logged_in()) {
            redirect(base_url());
        }
    }
    
    public function index() {
        
        $ids=$this->session->userdata('user_id');
        $role_id = $this->session->userdata['role_id'] ; 
        if($role_id==6){
            $view_data['notification'] = $this->Notification_model->getEMPNotificationlist($ids);  
        }else{
            $view_data['notification'] = $this->Notification_model->getNotificationlist($ids);  
        }
        //print_r($view_data['notification']);
        if($role_id==6){
            $view = 'notify/index';
        }else{
            $view = 'notify/index';
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - Notification List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function changestatus($ids) {
        
        $nid= base64_decode($ids);
        $this->db->query("update ci_notifications set readstatus=1 where id= '".$nid."'" );
        redirect('admin/notification');
    }
    
    public function replytomsg(){
        $msg_data = $this->input->post(null, true);
        $response = $this->Notification_model->setReplyData($msg_data);
        if ($response['status'] == 'success') {
            echo 1;
        } 
    }

        public function sendmessage(){
        //print_r($this->session->userdata());
        if ($msg_data = $this->input->post(null, true)) {
            
            $this->form_validation->set_rules('message', 'This Field', 'required|xss_clean');	
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->Notification_model->setMessageData($msg_data);
                if ($response['status'] == 'success') {
                    $this->session->set_flashdata('success', 'Message Send Successfully');
                    redirect(base_url('admin/notification/sendmessage'));
                } else {
                    $view_data['error_msg'] = isset($response['error']) ? $response['error'] : 'Something went wrong, please try again.';
                    redirect(base_url('admin/notification/sendmessage'));
                }
            }
        }
        $view = 'notify/sendmessage';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Notification List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    
}
