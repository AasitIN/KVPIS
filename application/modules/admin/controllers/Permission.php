<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');


class Permission extends My_Controller{

	public function __construct(){
		parent::__construct();
        
		$this->load->model('permission_model');
    }
	
	public function set_permission($role_id)
	{
		$decode_id=base64_decode($role_id);
		if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST')
        {
            $this->form_validation->set_rules('permission[]', 'Permission', 'xss_clean');
            if ($this->form_validation->run($this) !== FALSE)
            {
                $response=$this->permission_model->add($decode_id);
                if($response['status']=='success')
                {
                    $this->session->set_flashdata('success','Permission Saved successfully');
                    redirect(base_url().'admin/permission/set_permission/'.$role_id);
                }else{
                    $view_data['error_msg']=isset($response['error'])?$response['error']:'form Could Not be added';
                }
            }
        }	
		$view_data['row']=$this->permission_model->get_all_permission($decode_id);
		
        $view = 'permission/permission';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Permission ',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
	
	
}