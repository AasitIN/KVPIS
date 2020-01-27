<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('javascript');
    }
    public function index(){
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST'){
            //$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
            $this->form_validation->set_rules('username', 'UserName', 'required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
            $this->form_validation->set_rules('captcha', 'Captcha', 'required|xss_clean|callback_check_captcha');
            if ($this->form_validation->run() !== FALSE){
                $response=$this->login_model->login();
                if($response['status']=='success'){ 
                    if($response['role_id']==1){	// Super Admin
                        redirect(base_url().'admin/dashboard');
                    }else if($response['role_id']==2){	// KVS HQ
                        redirect(base_url().'admin/dashboard');
                    }else if($response['role_id']==3){	// Regional Office
                        redirect(base_url().'admin/dashboard');
                    }else if($response['role_id']==4){	// ZIET
                        redirect(base_url().'admin/dashboard');
                    }else if($response['role_id']==5){	// KV School / Principal
                        redirect(base_url().'admin/dashboard');
                    }else if($response['role_id']==6){	// Employee / Registered User
                        redirect(base_url().'admin/dashboard');
                    }else{
                        $view_data['error_msg']=isset($response['error'])?$response['error']:'Anonymous User Access Denied';
                    }
                }else{
                    $view_data['error_msg']=isset($response['error'])?$response['error']:'User Id or password does not match';
                }
            }
        }
        $random_string=random_string('alnum',20);
        $this->session->set_userdata('secKey',$random_string );
        $view_data['enKey']= $random_string;
        $view_data['captchaImg'] = getcaptcha();
        //Load Login View
        $view = 'login';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Login ',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($view, $data);
    }
	
    public function check_captcha($str){
        $session=$this->session->all_userdata();
	$qry=$this->db->select('*')->from('ci_secret_key')->where('session_id',$session['__ci_last_regenerate'])->order_by('id','desc')->get();
	if($qry->num_rows()){
            $captcha=$qry->row()->captcha;
            $sess_captcha=$session['captcha'];
            if ($captcha != $sess_captcha){
                $this->form_validation->set_message('check_captcha', 'The captcha does not match');
                    return FALSE;
                }
	}else{
            $this->form_validation->set_message('check_captcha', 'Please enter valid data');
            return FALSE;
	}
        
        if($str==''){
                $this->form_validation->set_message('check_captcha', 'The captcha is required');
                return FALSE;
        }else if ($str != $session['captcha']){
            $this->form_validation->set_message('check_captcha', 'The captcha does not match');
            return FALSE;
        }else{
            return TRUE;
        }
    }
		
    public function forgot_password(){
	if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST'){
            $this->db->where('email_id',$email_id);
            $this->db->update('ci_users',array('token_status'=>'Inactive'));
            $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email|callback_regex_check');
            $this->form_validation->set_rules('captcha', 'Captcha', 'required|xss_clean|callback_check_captcha|callback_regex_check');
            if ($this->form_validation->run() !== FALSE){
		$email_id=$this->input->post('email',true);
                $token=random_string('numeric',5);
                $token=hash('sha512', $token);
		$qry=$this->db->select('id,email_id,status')->from('ci_users')->where(array('email_id'=>$email_id))->get();
                if($qry->num_rows()){
                    $this->db->where('email_id',$email_id);
                    $this->db->update('ci_users',array('token'=>$token,'token_time'=>date('Y-m-d H:i:s'),'token_status'=>'Active'));
                    $recovery_link=base_url().'login/recovery_password/?email_id='.base64_encode($email_id).'&token='.$token;
                    $name='User';
                    $subject=WEBSITE_TITLE.' - Forget Password';
                    $message='Click this link to recover your password. ';
                    $message .='<a href="'.$recovery_link.'"> Click Here</a>';
                    //send_mail($email_id,$subject,$message,$name=null);
                }
                print_r($recovery_link); die;
                $this->session->set_flashdata('success',"A link has been sent to $email_id for resetting the password. This link is valid for 15 minutes.");
                redirect('login/forgot_password');
            }
	}
	$view_data['captchaImg'] = getcaptcha();
	$view = 'forgot_password';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Forgot Password ',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($view, $data);
    }
	
    public function recovery_password(){
	
        if(isset($_GET['email_id']) && !empty($_GET['email_id'])){
            $email_id=base64_decode($_GET['email_id']);
            $token=$_GET['token'];
            if(!empty($email_id) && !empty($token)){
		$qry=$this->db->select('id,email_id')->from('ci_users')->where(array('email_id'=>$email_id,'token'=>$token,'token_status'=>'Active'))->get();
		if($qry->num_rows()){
                    $view_data['email_id']=$_GET['email_id'];
                    $view_data['token']=$_GET['token'];
                    $view_data['link_valid']=true;
                    if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST'){
                        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
	            	$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|xss_clean|matches[password]');
	            	$this->form_validation->set_rules('captcha', 'Captcha', 'required|xss_clean|callback_check_captcha|callback_regex_check');
			if ($this->form_validation->run() !== FALSE){
                            //print_r($token); die;
			    $post=$this->input->post(null,true);
			    $update_arr=array(
			        'password'=>$post['password'],
			        'token'=>'',
                                'token_status' => 'Inactive',
                                'is_forgot_password' => '1',
                                'forgot_password_time'=>date('Y-m-d H:i:s')
			    );
                            $this->db->where('email_id',$email_id);
                            $this->db->update('ci_users',$update_arr);
                            $this->session->set_flashdata('success','Password Updated Successfully.Please go to <a href="'.base_url().'">Home</a> page for login');
                            redirect(base_url().'login');
			}
                        echo validation_errors(); die;
                    }
		}else{
                    $view_data['link_valid']=false;
		}
            }else{
		$view_data['link_valid']=false;
            }
	}
	$random_string=random_string('alnum',20);
	$this->session->set_userdata('secKey',$random_string );
        $view_data['enKey']= $random_string;
	$view_data['captchaImg'] = getcaptcha();
        print_r($this->session->userdata());
        print_r($view_data['captchaImg']); //die;
	$view = 'recovery_password';
        $data = array(
            'title' => WEBSITE_NAME . ' - Password Recover ',
            'javascripts' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
	$this->load->view($view,$data);
    }
	
    public function logout(){
        $user_info=$this->session->all_userdata();
        $this->session->set_flashdata('success','You are successfully logout');
        add_user_activity($user_info['user_id'],'Logout','Logout Successfully');
        $this->session->unset_userdata('user_id');
	$this->session->sess_destroy();
	redirect(base_url());
    }
	
    public function inactivity_logout(){
        $user_info=$this->session->all_userdata();
        $this->session->set_flashdata('success','You have been logged out due to inactivity.Please login again');
        add_user_activity($user_info['user_id'],'Logout','You have been logged out due to inactivity.Please login again');
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect(base_url());
    }
	
    function regex_check($str){
        if(!empty($str)){
            if (preg_match('/^[a-z0-9A-Z .!@#$%&*()_-]+$/', $str)) {
                    return TRUE;
            } else {
                    $this->form_validation->set_message('regex_check', 'The %s field is not is correct format.');
                    return FALSE;
            }
        }else{
            return TRUE;
        }
    }

}
