<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');


class Register extends MY_Controller{

	public function __construct(){
		parent::__construct();
        $this->load->model('register_model');
    }
	

   public function index()
	{
		if($post_data=$this->input->post(null,true))
		{	
            //$this->form_validation->set_rules('role_id', 'Application For', 'required|integer|xss_clean|callback_regex_check');	
			$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean|callback_regex_check');
			$this->form_validation->set_rules('middle_name', 'Middel Name', 'xss_clean|callback_regex_check');
			$this->form_validation->set_rules('last_name', 'Last Name', 'xss_clean|callback_regex_check');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean|is_unique[ci_users.email]|callback_regex_check');
			$this->form_validation->set_rules('mobile', 'Mobile Number', 'required|xss_clean|is_unique[ci_users.mobile]|callback_regex_check');
			$this->form_validation->set_rules('password', 'Password', 'required|xss_clean|callback_regex_check');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|xss_clean|matches[password]|callback_regex_check');
			$this->form_validation->set_rules('captcha', 'Captcha', 'required|xss_clean|callback_check_captcha');
			if ($this->form_validation->run($this) !== FALSE)
            {
                $response=$this->register_model->add_register($post_data);
                if($response['status']=='success')
                {
                	$this->session->set_flashdata('success','You are successfully Registered,username send your email then login by username and password');
                	redirect(base_url('login'));
                }else{
                	$view_data['error_msg']=isset($response['error'])?$response['error']:'User Id or password does not match';
                }
            }

		}
		
        $view_data['captchaImg'] = getcaptcha();
		$view = 'add_register';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Register
			',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->front_template, $data);
	}
	
	
	function refresh_captcha()
	{
		if ($this->input->is_ajax_request()) {
			
	        $captcha= getcaptcha();
	        echo $captcha;
		}
	}


	public function cheque_unique_email()
	{
		if ($this->input->is_ajax_request()) 
		{
			$email=$_GET['email'];
			$response=$this->register_model->cheque_unique_email($email);	
			if($response)
			{
				echo 'false';
			}else{
				echo 'true';
			}
		}
	}
	public function cheque_unique_mobile()
	{
		if ($this->input->is_ajax_request()) 
		{
			$mobile=$_GET['mobile'];
			$response=$this->register_model->cheque_unique_mobile($mobile);	
			if($response)
			{
				echo 'false';
			}else{
				echo 'true';
			}
		}
	}
	public function check_captcha($str)
    {
    	$session=$this->session->all_userdata();
        if($str==''){
        	$this->form_validation->set_message('check_captcha', 'The captcha is required');
                return FALSE;
        }
        else if ($str != $session['captcha'])
        {
                $this->form_validation->set_message('check_captcha', 'The captcha does not match');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
   
   
	
}