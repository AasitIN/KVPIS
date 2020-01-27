<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
class Settings extends MY_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("setting_model");
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}
   public function change_password(){
		if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST'){
			$this->form_validation->set_rules('old_password', 'Old Password', 'required|xss_clean|callback_check_old_password|callback_regex_check');
			$this->form_validation->set_rules('new_password', 'New Password', 'required|xss_clean|callback_regex_check');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|xss_clean|matches[new_password]|callback_regex_check');
			
		    if($this->form_validation->run($this) !== FALSE){
				$post_data=$this->input->post(null,true);
				$response=$this->setting_model->update_user_password($this->auth_user_id);
				if($response)
				{
					$user_info=array('password'=>$post_data['new_password'],);
					$this->session->set_userdata($user_info);
					$user_info=$this->session->all_userdata();
					add_user_activity($user_info['user_id'],'Password Change','Password Change Successfully');
					$this->session->set_flashdata('success','Password Changed Successfully,Please login again');
					$this->session->unset_userdata('user_id');
					$this->session->unset_userdata('password');
					$this->session->unset_userdata('captcha');
					redirect(base_url());
					
				}
			}
		}
		$view = 'change_password';
		$data = array(
				'title' => WEBSITE_TITLE . ' - Change Password',
				'javascripts' => array(),
				'style_sheets' => array(),
				'content' => $this->load->view( $view, ( isset( $view_data ) ) ? $view_data : '', true )
		);

		$this->load->view($this->template, $data );
	}
        
        public function reset_password(){
            if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST'){
                    $this->form_validation->set_rules('new_password', 'New Password', 'required|xss_clean|callback_regex_check');
                    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|xss_clean|matches[new_password]|callback_regex_check');

                if($this->form_validation->run($this) !== FALSE){
                            $post_data=$this->input->post(null,true);
                            $response=$this->setting_model->update_user_password($this->input->post('user_id_forpass'));
                            if($response)
                            {
                                echo 1;

                            }
                    }
            }
		
	}
	
	 function check_old_password(){
		$post_data=$this->input->post(null,true);
		$old_password=$post_data['old_password'];
	    $qry=$this->db->select('id')->from('ci_users')->where(array('id'=>$this->auth_user_id,'password'=>$old_password))->get();
		if($qry->num_rows())
		{
			return TRUE;
		}else{
			$this->form_validation->set_message('check_old_password', 'Your Old password Does not Match');
			return FALSE;
		}
	} 

	
	public function profile(){
		if($post_data=$this->input->post(null,true))
		{	
			$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean|callback_regex_check');
			$this->form_validation->set_rules('middle_name', 'Middel Name', 'xss_clean|callback_regex_check');
			$this->form_validation->set_rules('last_name', 'Last Name', 'xss_clean|callback_regex_check');
			
			$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|callback_cheque_uniqueness[ci_users.email]|callback_regex_check');
			
			$this->form_validation->set_rules('mobile', 'Mobile Number', 'required|xss_clean|min_length[10]|max_length[10]|callback_cheque_uniqueness[ci_users.mobile]|callback_regex_check');

			if ($this->form_validation->run($this) !== FALSE)
            {
                $response=$this->setting_model->update_profile($post_data);
                if($response['status']=='success')
                {
                	$this->session->set_flashdata('success','Profile Updated Successfully');
                	redirect('settings/profile');
                }else{
                	$view_data['error_msg']=isset($response['error'])?$response['error']:'Profile Not Updated Successfully';
                }
            }

		}
		
		$view = 'settings/profile';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Update Profile
			',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
	}
	
	
	public function cheque_unique_email()
	{
		if ($this->input->is_ajax_request()) 
		{   $user_id=$_GET['user_id'];
			$email=$_GET['email'];
			$response=$this->setting_model->cheque_unique_email($email,$user_id);	
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
			$user_id=$_GET['user_id'];
			$mobile=$_GET['mobile'];
			$response=$this->setting_model->cheque_unique_mobile($mobile,$user_id);	
			if($response)
			{
				echo 'false';
			}else{
				echo 'true';
			}
		}
	}

    public function cheque_uniqueness($str, $val)
    {
        if($str==''){
            $this->form_validation->set_message('cheque_uniqueness', 'The %s  is required');
                return FALSE;
        }
        $user_id=$this->auth_user_id;
        list($table, $column) = explode('.', $val, 2);
        $this->db->select('id');
        $this->db->from('ci_users');
        $this->db->where($column,$str);
        if($user_id)
        {
            $this->db->where('id !=',$user_id);
        }
        $qry=$this->db->get();

        if($qry->num_rows())
        {
            $this->form_validation->set_message('cheque_uniqueness', 'The %s already existed');
            return FALSE;
        }
        else
        {
            return true;    
        }
        

    }

}
?>