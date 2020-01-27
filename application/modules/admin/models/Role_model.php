<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Role_model extends CI_Model {
	public function __construct(){
        parent::__construct();
    }
	
	
	/*
        function for getting all users listing with searching and ordering
    */
    public function get_all_roles_list_json($limit=null,$start=null,$col=null,$dir=null,$search=null,$post_data=null)
    {
        if(func_num_args()==0)//this is used for getting total number of records
        {
            $this->db->select('count(id) as total');
			$this->db->from('roles');
			$qry=$this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS rl.*",false);
        $this->db->from('roles rl');
        if($limit > 0)
        {
            $this->db->limit($limit,$start);
        }
        if($col)
        {
            $this->db->order_by($col,$dir);
        }
        if($search && !empty($search))
        {
            $this->db->where("CONCAT(rl.name) LIKE '%$search%' ");
        }
		
        $qry=$this->db->get();
       
        if($qry->num_rows())
        {
            $data['result']=$qry->result();
        }else{
            $data['result']=array();
        }
        
        $total = $this->db->query("SELECT FOUND_ROWS() AS count"); 
        $data['count']=isset($total->row()->count)?$total->row()->count:0;
        return $data;
        
    }
	
	public function get_role_by_id($id){
         $this->db->select('*');
         $this->db->from('ci_roles');
         $this->db->where('id',$id);
         return  $this->db->get()->row();		 
		
	}
        
        public function role_is_exists($id) {
		$this->db->where("id", $id);
		$query = $this->db->get("roles");
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
    } 
    
    public function add_roles($post_data,$id) {
		
	    if(!empty($id) && !empty($id)){
			 $post_data['name'] = $post_data['name'];
			 $this->db->where('id',$id);
			 $qry = $this->db->update('roles', $post_data);
                         if ($qry) {
            $response['status'] = 'success';
            add_user_activity($this->auth_user_id, 'Updated', json_encode($post_data), 'Role Module');
        } else {
            $response['status'] = 'error';
            $response['error'] = 'Some Error Occured';
        }
        return $response;
		}else{
			$post_data['name'] = $post_data['name'];
                        $post_data['description'] = $post_data['description'];
                        $post_data['label'] = $post_data['name'];
                        $post_data['status'] = 1;
			$qry = $this->db->insert('roles', $post_data);
                         if ($qry) {
            $response['status'] = 'success';
            add_user_activity($this->auth_user_id, 'Added', json_encode($post_data), 'Role Module');
            } else {
            $response['status'] = 'error';
            $response['error'] = 'Some Error Occured';
        }
        return $response;
		}
    }
    
   

}
