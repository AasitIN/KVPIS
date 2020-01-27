	<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Common_model extends CI_model {

    public function construct() {
        parent::__construct();
    }

    public function do_upload_image($filename, $user_id, $path,$old_image=null) {
        $name_array = array();
        $this->create_image_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'img/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size'] = 2048;
		/* change by atul for max size of image allow to 2 mb*/
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name']) and $files[$filename]['name']) {
			if(has_malicious_field($files[$filename]['name']))
			{
				return array('error' => 'File name content is suspicious,please try another image');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'];
            $_FILES['userfile']['type'] = $files[$filename]['type'];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'];
            $_FILES['userfile']['error'] = $files[$filename]['error'];
            $_FILES['userfile']['size'] = $files[$filename]['size'];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array= $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink('./'.$name_array);
					return array('error' => 'File content is suspicious,please try another image');		
				}
                //remove old file
                if(isset($old_image) && !empty($old_image) && file_exists($old_image))
                {
                    unlink($old_image);    
                }
                
                return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            }
			
        }
         
    }

    public function callback_upload_image($filename, $user_id, $path) {
        $name_array = array();
        $this->create_image_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'img/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size'] = 2048;
        /* change by atul for max size of image allow to 2 mb*/
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name']) and $files[$filename]['name']) {
			if(has_malicious_field($files[$filename]['name']))
			{
				return array('error' => 'File name content is suspicious,please try another image');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'];
            $_FILES['userfile']['type'] = $files[$filename]['type'];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'];
            $_FILES['userfile']['error'] = $files[$filename]['error'];
            $_FILES['userfile']['size'] = $files[$filename]['size'];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array = $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink($config['upload_path'] . $data['file_name']);
					return array('error' => 'File content is suspicious,please try another image');		
				}
                unlink($config['upload_path'] . $data['file_name']);
            }
            return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
        }
         
    }
	
	
	
	 public function do_upload_image_multiple($filename,$key,$user_id,$path,$old_image=null) {
        $name_array = array();
        $this->create_image_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'img/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size'] = 2048;
		/* change by atul for max size of image allow to 2 mb*/
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name'][$key]) and $files[$filename]['name'][$key]) {
			if(has_malicious_field($files[$filename]['name'][$key]))
			{
				return array('error' => 'File name content is suspicious,please try another image');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'][$key];
            $_FILES['userfile']['type'] = $files[$filename]['type'][$key];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'][$key];
            $_FILES['userfile']['error'] = $files[$filename]['error'][$key];
            $_FILES['userfile']['size'] = $files[$filename]['size'][$key];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array= $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink('./'.$name_array);
					return array('error' => 'File content is suspicious,please try another file');		
				}
                //remove old file
                if(isset($old_image) && !empty($old_image) && file_exists($old_image))
                {
                    unlink($old_image);    
                }
                
                return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            }
			
        }
         
    }

	
    public function callback_upload_image_multiple($filename,$key,$user_id, $path) {
        $name_array = array();
        $this->create_image_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'img/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size'] = 2048;
        /* change by atul for max size of image allow to 2 mb*/
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name'][$key]) and $files[$filename]['name'][$key]) {
			if(has_malicious_field($files[$filename]['name']))
			{
				return array('error' => 'File name content is suspicious,please try another image');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'][$key];
            $_FILES['userfile']['type'] = $files[$filename]['type'][$key];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'][$key];
            $_FILES['userfile']['error'] = $files[$filename]['error'][$key];
            $_FILES['userfile']['size'] = $files[$filename]['size'][$key];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array = $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink('./'.$name_array);
					return array('error' => 'File content is suspicious,please try another file');		
				}
                unlink($config['upload_path'] . $data['file_name']);
            }
            return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
        }
         
    }


	
	
	 public function do_upload_pdf($filename, $user_id, $path,$old_pdf=null) {
        $name_array = array();
        $this->create_pdf_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'pdf/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name']) and $files[$filename]['name']) {
			if(has_malicious_field($files[$filename]['name']))
			{
				return array('error' => 'File name content is suspicious,please try another file');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'];
            $_FILES['userfile']['type'] = $files[$filename]['type'];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'];
            $_FILES['userfile']['error'] = $files[$filename]['error'];
            $_FILES['userfile']['size'] = $files[$filename]['size'];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array = $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink('./'.$name_array);
					return array('error' => 'File content is suspicious,please try another file');		
				}
                //remove old file
                if(isset($old_pdf) && !empty($old_pdf) && file_exists($old_pdf))
                {
                    unlink($old_pdf);    
                }
                return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            }
			 
        }
       
    }

    public function callback_upload_pdf($filename, $user_id, $path) {
        $name_array = array();
        $this->create_pdf_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'pdf/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name']) and $files[$filename]['name']) {
			if(has_malicious_field($files[$filename]['name']))
			{
				return array('error' => 'File name content is suspicious,please try another file');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'];
            $_FILES['userfile']['type'] = $files[$filename]['type'];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'];
            $_FILES['userfile']['error'] = $files[$filename]['error'];
            $_FILES['userfile']['size'] = $files[$filename]['size'];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array = $config['upload_path'] . $data['file_name'];  
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink('./'.$name_array);
					return array('error' => 'File content is suspicious,please try another file');		
				}
                unlink($config['upload_path'] . $data['file_name']);
            }
             return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
        }
       
    }
	
	
	
	 public function callback_upload_document($filename,$key,$user_id, $path) {
        $name_array = array();
        $this->create_pdf_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'pdf/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name'][$key]) and $files[$filename]['name'][$key]) {
			if(has_malicious_field($files[$filename]['name'][$key]))
			{
				return array('error' => 'File name content is suspicious,please try another file');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'][$key];
            $_FILES['userfile']['type'] = $files[$filename]['type'][$key];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'][$key];
            $_FILES['userfile']['error'] = $files[$filename]['error'][$key];
            $_FILES['userfile']['size'] = $files[$filename]['size'][$key];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array = $config['upload_path'] . $data['file_name'];  
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink('./'.$name_array);
					return array('error' => 'File content is suspicious,please try another file');		
				}
                unlink($config['upload_path'] . $data['file_name']);
            }
             return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
        }
       
    }
	
	
	
	public function do_upload_document($filename, $key,$user_id, $path,$old_pdf=null) {
        $name_array = array();
        $this->create_pdf_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'pdf/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name'][$key]) and !empty($files[$filename]['name'][$key])) {
			if(has_malicious_field($files[$filename]['name'][$key]))
			{
				return array('error' => 'File name content is suspicious,please try another file');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'][$key];
            $_FILES['userfile']['type'] = $files[$filename]['type'][$key];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'][$key];
            $_FILES['userfile']['error'] = $files[$filename]['error'][$key];
            $_FILES['userfile']['size'] = $files[$filename]['size'][$key];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array = $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink('./'.$name_array);
					return array('error' => 'File content is suspicious,please try another file');		
				}
                //remove old file
                if(isset($old_pdf) && !empty($old_pdf) && file_exists($old_pdf))
                {
                    unlink($old_pdf);    
                }
                $arr=array(
                    'file_name'=>$name_array,  
                    'tmp_name'=>$_FILES['userfile']['tmp_name'],  
                    'name'=>$_FILES['userfile']['name'],  
                );
                return $arr;
            }
        }
       
    }		
  

    function create_image_asset_dir($user_id, $dir = "") {
        if (!empty($dir) && !is_dir('img/uploads/' . $user_id . "/" . $dir)) {
            @mkdir('img/uploads/' . $user_id . "/" . $dir, 0777, TRUE);
        }
    }
	
	function create_pdf_asset_dir($user_id, $dir = "") {
        if (!empty($dir) && !is_dir('pdf/uploads/' . $user_id . "/" . $dir)) {
            @mkdir('pdf/uploads/' . $user_id . "/" . $dir, 0777, TRUE);
        }
    }
	
	

    function get_designation_list($id = ''){

     $result = $this->db->select('id,name');
               $this->db->from('designations');
               
    if($id){
        $this->db->where('id',$id);
    }
    $this->db->order_by('name');
    $query = $this->db->get();
    
    if($id){
        $data = $query->row_array();
        $return =  $data['name'];
    }else{
        $result = $query->result_array();
        $return = array();
        foreach($result as $row){
            $return[$row['id']] = $row['name'];
        }
    }
        return $return;
    }
        
    public function do_upload_zip($filename, $user_id, $path,$old_image=null) {
        $name_array = array();
        $this->create_image_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'img/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'zip|x-zip';
        // $config['max_size'] = 2048;
		/* change by atul for max size of image allow to 2 mb*/
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name']) and $files[$filename]['name']) {
			if(has_malicious_field($files[$filename]['name']))
			{
				return array('error' => 'File name content is suspicious,please try another image');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'];
            $_FILES['userfile']['type'] = $files[$filename]['type'];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'];
            $_FILES['userfile']['error'] = $files[$filename]['error'];
            $_FILES['userfile']['size'] = $files[$filename]['size'];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array= $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink('./'.$name_array);
					return array('error' => 'File content is suspicious,please try another image');		
				}
                //remove old file
                if(isset($old_image) && !empty($old_image) && file_exists($old_image))
                {
                    unlink($old_image);    
                }
                
                return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            }
			
        }
         
    }

    public function callback_upload_zip($filename, $user_id, $path) {
        $name_array = array();
        $this->create_image_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'img/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'zip|x-zip';
        // $config['max_size'] = 2048;
        /* change by atul for max size of image allow to 2 mb*/
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name']) and $files[$filename]['name']) {
			if(has_malicious_field($files[$filename]['name']))
			{
				return array('error' => 'File name content is suspicious,please try another image');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'];
            $_FILES['userfile']['type'] = $files[$filename]['type'];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'];
            $_FILES['userfile']['error'] = $files[$filename]['error'];
            $_FILES['userfile']['size'] = $files[$filename]['size'];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array = $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink($config['upload_path'] . $data['file_name']);
					return array('error' => 'File content is suspicious,please try another image');		
				}
                unlink($config['upload_path'] . $data['file_name']);
            }
            return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
        }
         
    }
    
    public function do_upload_pdf_doc($filename, $user_id, $path,$old_image=null) {
        $name_array = array();
        $this->create_image_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'img/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'pdf|doc|docx';
        // $config['max_size'] = 2048;
		/* change by atul for max size of image allow to 2 mb*/
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name']) and $files[$filename]['name']) {
			if(has_malicious_field($files[$filename]['name']))
			{
				return array('error' => 'File name content is suspicious,please try another image');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'];
            $_FILES['userfile']['type'] = $files[$filename]['type'];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'];
            $_FILES['userfile']['error'] = $files[$filename]['error'];
            $_FILES['userfile']['size'] = $files[$filename]['size'];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array= $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink('./'.$name_array);
					return array('error' => 'File content is suspicious,please try another image');		
				}
                //remove old file
                if(isset($old_image) && !empty($old_image) && file_exists($old_image))
                {
                    unlink($old_image);    
                }
                
                return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            }
			
        }
         
    }

    public function callback_upload_pdf_doc($filename, $user_id, $path) {
        $name_array = array();
        $this->create_image_asset_dir($user_id, $path);
        $this->load->library('image_lib');
        $config['upload_path'] = 'img/uploads/' . $user_id . '/' . $path . '/';
        $config['allowed_types'] = 'pdf|doc|docx';
        // $config['max_size'] = 2048;
        /* change by atul for max size of image allow to 2 mb*/
        $config['max_size'] = 2049;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        //print_r($files);die();
        if (isset($files[$filename]['name']) and $files[$filename]['name']) {
			if(has_malicious_field($files[$filename]['name']))
			{
				return array('error' => 'File name content is suspicious,please try another image');		
			}
            $_FILES['userfile']['name'] = $files[$filename]['name'];
            $_FILES['userfile']['type'] = $files[$filename]['type'];
            $_FILES['userfile']['tmp_name'] = $files[$filename]['tmp_name'];
            $_FILES['userfile']['error'] = $files[$filename]['error'];
            $_FILES['userfile']['size'] = $files[$filename]['size'];
            if (!$this->upload->do_upload()) {
                $error = $this->upload->display_errors();
                return array('error' => $error,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
            } else {
                $data = $this->upload->data();
                $name_array = $config['upload_path'] . $data['file_name'];
				if(file_exists('./'.$name_array) && has_malicious($name_array))
				{
					unlink($config['upload_path'] . $data['file_name']);
					return array('error' => 'File content is suspicious,please try another image');		
				}
                unlink($config['upload_path'] . $data['file_name']);
            }
            return array('file_name' => $name_array,'tmp_name'=>$_FILES['userfile']['tmp_name'],'name'=>$_FILES['userfile']['name']);
        }
         
    }
	
}
