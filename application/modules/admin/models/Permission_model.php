<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Permission_model extends CI_Model {
	 public function __construct(){
        parent::__construct();
    }
	
	
	
    public function add($role_id)
    {
        $response=array();
        $post=$this->input->post(null,true);
        
        $user_permission='';
        
        if(!empty($post['permission']))
        {
            $user_permission=json_encode($post['permission']);
        }
		$this->db->where('id',$role_id);
        $qry=$this->db->update('ci_roles',array('permissions'=>$user_permission));
		
        if($qry)
        {
            $response['status']='success';
        }else{
            $response['status']='error';
            $response['error']='Form Could not be saved,Please try again';
        }
        return $response;
    }
    public function get_all_permission($role_id)
    {
        $this->db->select('name,permissions');
        $this->db->from('ci_roles');
        $this->db->where('id',$role_id);
        $qry=$this->db->get();
        if($qry->num_rows())
        {
            return $qry->row();
        }else{
            return false;
        }
        
    }
    
}
