<?php 
class Setting_model extends CI_model{

    public function update_user_password($user_id)
	{
		$post_data=$this->input->post(null,true);
		$new_password=$post_data['new_password'];
		
		$this->db->where('id',$user_id);
		$qry=$this->db->update('ci_users',array('password'=>$new_password,'is_password_changed'=>1));
		if($qry){
			return true;
		}
	}
	
	public function update_profile($post_data){
		$post_data['created']=date("Y-m-d H:i:s");
		$response=array();
		$this->db->where("id",$this->auth_user_id);
        $qry=$this->db->update('users',$post_data);
		if($qry){
			$response['status']='success';
		}else{
			$response['status']='error';
			$response['error']='Form Could not be saved,Please try again';
		}
        return $response;

    }
	
		public function cheque_unique_email($email,$user_id=null){
        $this->db->select('*');
        $this->db->from('ci_users');
        $this->db->where('email',$email);
		if($user_id)
        {
            $this->db->where('id !=',$user_id);
        }
        $qry=$this->db->get();
        if($qry->num_rows()){
            return true;
        }else{
            return false;
        }   
    }
	
    public function cheque_unique_mobile($mobile,$user_id=null)
    {
        $this->db->select('*');
        $this->db->from('ci_users');
        $this->db->where('mobile',$mobile);
		if($user_id)
        {
            $this->db->where('id !=',$user_id);
        }
        $qry=$this->db->get();
        if($qry->num_rows()){
            return true;
        }else{
            return false;
        }   
    }
}
?>