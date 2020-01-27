<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Register_model extends CI_Model {
	 public function __construct(){
        parent::__construct();
    }
	
    public function add_register($post_data){
		unset($post_data['captcha']);
		unset($post_data['cpassword']);
		$random_string=random_string('alnum',5);
		$post_data['username']=$random_string;
		$post_data['role_id']=ROLE_APPLICANT;
		$post_data['created']=date("Y-m-d H:i:s");
		$response=array();
        $qry=$this->db->insert('users',$post_data);
		if($qry){
			$user_send_mail_register_new_username=array(
				'name'=>$post_data['first_name']." ".$post_data['middle_name']." ".$post_data['last_name'],
				'email'=>$post_data['email'],
				'username'=>$random_string,
				'subject'=>'Registration Successfully',
				
			);
			
			user_send_mail_register_new_username($user_send_mail_register_new_username);
			
			/*//user_send_mail_register 
			$user_send_mail_register=array(
				'email'=>$post_data['email'],
				'subject'=>'Registration Successfully',
				'message'=>'Your registration is Successfully completed,You can login after admin approval',
				'name'=>$post_data['first_name']." ".$post_data['middle_name']." ".$post_data['last_name'],
			);
			
			user_send_mail_register($user_send_mail_register);
			
			//admin_send_mail 
			 $admininfo=user_info(ROLE_ADMIN);
			 $admin_send_mail=array(
				'email'=>$admininfo->email,
				'subject'=>WEBSITE_TITLE.' -New User Registered',
				'message'=>'New User has been registered ,Kindly login and verify',
				'name'=>$admininfo->first_name." ".$admininfo->middle_name." ".$admininfo->last_name,
			);
			admin_send_mail_register($admin_send_mail);*/
			
			$response['status']='success';
		}else{
			$response['status']='error';
			$response['error']='Form Could not be saved,Please try again';
		}
        return $response;

    }
	
	
	public function cheque_unique_email($email){
        $this->db->select('*');
        $this->db->from('ci_users');
        $this->db->where('email',$email);
        $qry=$this->db->get();
        if($qry->num_rows()){
            return true;
        }else{
            return false;
        }   
    }
	
    public function cheque_unique_mobile($mobile)
    {
        $this->db->select('*');
        $this->db->from('ci_users');
        $this->db->where('mobile',$mobile);
        $qry=$this->db->get();
        if($qry->num_rows()){
            return true;
        }else{
            return false;
        }   
    }
   

}
