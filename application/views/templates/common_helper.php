<?php 

	

	
	function pr($arr)
	{
		echo "<pre>";print_r($arr);
	}
        
   

	function send_mail($email,$subject,$message,$name=null) 
	{
		$ci=& get_instance();
		$data['name']=$name;
		$data['message']=$message;
		

		
		//==========Code Added on 14-Nov-2018============
		$message=$ci->load->view('templates/email_template',$data,true);
        $config = Array('protocol' => 'sendmail','mailtype' => 'html', 'charset' => 'utf-8','wordwrap' => TRUE);
        $ci->load->library('email',$config);
        $ci->email->set_newline("\r\n");
        $ci->email->from('admin@hpl.com', WEBSITE_TITLE);
        $ci->email->to($email);
        $ci->email->subject($subject);
        $ci->email->message($message);
        $ci->email->set_mailtype("html");
        $ci->email->send();

        
		//============================================
		//=======SMTP & mail configuration(Uncomment for SMTP Email)============
		/*$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 	465,
		    'smtp_user' => 'anuragkrgupta14@gmail.com',
		    'smtp_pass' => 'password',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);
		$ci->load->library('email', $config);
		$ci->email->set_mailtype("html");
		$ci->email->set_newline("\r\n");
		//Email content
		$ci->email->to($email);
		$ci->email->from('anuragkrgupta14@gmail.com','DBT');
		$ci->email->subject($subject);
		$ci->email->message($message);
		//Send email
		$ci->email->send();*/
    }
	

  	/*
	CALCULATE TIME DIFFERENCE BETWEEN CURRENT DATE AND OTHER DATE
	INPUT PARAMETER REQUIRED TIMESTAMP ,FORMAT EXAMPLE '2018-09-27 12:33:55'
  	*/
  	function show_time_ago($timestamp)  
	{  
		date_default_timezone_set('Asia/Calcutta'); //Change as per your default time
		$timestamp=date('Y-m-d',strtotime($timestamp));
		
        $str = strtotime($timestamp);
        $today = strtotime(date('Y-m-d'));

        // It returns the time difference in Seconds...
        $time_differnce = $today-$str;

        // To Calculate the time difference in Years...
        $years = 60*60*24*365;

        // To Calculate the time difference in Months...
        $months = 60*60*24*30;

        // To Calculate the time difference in Days...
        $days = 60*60*24;

        // To Calculate the time difference in Hours...
        $hours = 60*60;

        // To Calculate the time difference in Minutes...
        $minutes = 60;

        if(intval($time_differnce/$years) > 1)
        {
            return intval($time_differnce/$years)." Years ago";
        }else if(intval($time_differnce/$years) > 0)
        {
            return intval($time_differnce/$years)." Year ago";
        }else if(intval($time_differnce/$months) > 1)
        {
            return intval($time_differnce/$months)." Months ago";
        }else if(intval(($time_differnce/$months)) > 0)
        {
            return intval(($time_differnce/$months))." Month ago";
        }else if(intval(($time_differnce/$days)) > 1)
        {
            return intval(($time_differnce/$days))." Days ago";
        }else if (intval(($time_differnce/$days)) > 0) 
        {
            return intval(($time_differnce/$days))." Day ago";
        }else
        {
            return "1 Day ago";
        }/*else if (intval(($time_differnce/$hours)) > 1) 
        {
            return intval(($time_differnce/$hours))." Hours ago";
        }else if (intval(($time_differnce/$hours)) > 0) 
        {
            return intval(($time_differnce/$hours))." Hour ago";
        }else if (intval(($time_differnce/$minutes)) > 1) 
        {
            return intval(($time_differnce/$minutes))." Min. ago";//minutes
        }else if (intval(($time_differnce/$minutes)) > 0) 
        {
            return intval(($time_differnce/$minutes))." Min. ago";//minute
        }else if (intval(($time_differnce)) > 1) 
        {
            return intval(($time_differnce))." Sec. ago";
        }else
        {
            return "Just Now";
        }*/
	}
	  
	function getcaptcha()
    {
        $ci=& get_instance();
        $ci->load->helper('captcha');
        $config = array(
            'img_url'  => base_url() . 'captcha/',
            'img_path' => './captcha/',
            'img_width'     => '160',
            'img_height'    => 40,
            'word_length'   => 5,
            'font_size'     => 18,
            'font_path' =>'system/fonts/texb.ttf',
            'pool'	=> 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'colors'    => array(
                'background'=> array(255,255,255),
                'border'    => array(204,204,204),
                'text'      => array(100,100,153),
                'grid'      => array(180,182,182)
            )

        );
		//pr($config);die;
        $captcha = create_captcha($config);
        $ci->session->unset_userdata('captcha');
        $ci->session->set_userdata('captcha', $captcha['word']);
        return $captcha['image'];
    }
	/* ====================================================== */
	
	if(!function_exists('countries_lists')){
		function countries_lists($countries_ids=null){
			$ci=& get_instance();
			$ci->load->model("common_model");
			return $ci->common_model->get_countries_list($countries_ids);
		}
	   }
	   if(!function_exists('state_lists')){
		function state_lists($countries_ids=null,$state_ids=null){
			$ci=& get_instance();
			$ci->load->model("common_model");
			return $ci->common_model->get_state_list($countries_ids,$state_ids);
		}
	   }
	   if(!function_exists('cities_lists')){
		function cities_lists($countries_ids=null,$state_ids=null,$cities_ids=null){
			$ci=& get_instance();
			$ci->load->model("common_model");
			return $ci->common_model->get_cities_list($countries_ids,$state_ids,$cities_ids);
	   }
	  }
	  
	  if(!function_exists('nature_of_users_list')){
		function nature_of_users_list($nature_of_users_id=null){
			$ci=& get_instance();
			$ci->load->model("common_model");
			return $ci->common_model->get_nature_of_users_list($nature_of_users_id);
	  }
	  }
      function get_states($country_id=null)
      {
            $ci=& get_instance();
            $ci->db->select('id,name');
            $ci->db->from('ci_states');
            if ($country_id) {
                $ci->db->where('country_id',$country_id);
            }
            $qry=$ci->db->get();
            if($qry->num_rows()){
                return $qry->result_array();
            }else{
                return false;
            }
      }
      function get_districts($state_id=null)
      {
            $ci=& get_instance();
            $ci->db->select('id,name');
            $ci->db->from('ci_cities');
            if ($state_id) {
                $ci->db->where('state_id',$state_id);
            }
            $qry=$ci->db->get();
            if($qry->num_rows()){
                return $qry->result_array();
            }else{
                return false;
            }
      }
	function user_data($user_id)
    {
        $ci=& get_instance();
        $qry=$ci->db->get_where('ci_users',array('id'=>$user_id));
        if($qry->num_rows())
        {
            return $qry->row();
        }
    }
	function status($status)
    {
        switch ($status) {
            case '1':
                $status='Approved';
                break;
            case '2':
                $status='Rejected';
                break;
            case '0':
                $status='Pending';
                break;
            default:
                $status='Pending';
                break;
        }
        return $status;
    }
	function usertype($type)
    {
        switch ($type) {
            case '1':
                $user_type='Admin';
                break;
            case '2':
                $user_type='Subadmin';
                break;
            case '3':
                $user_type='Registered User';
                break;
            default:
                $user_type='Registered User';
                break;
        }
        return $user_type;
    }
	function all_user_type()
    {
        $ci=& get_instance();
        $ci->db->where('status',1);
        $qry=$ci->db->get('ci_users_role');
        return $qry->result_array();
    }
    function get_all_form_ids()
    {
        $ci=& get_instance();
        $ci->db->select('*');
        $ci->db->from('ci_forms');
        $qry=$ci->db->get();   
        $form_ids=array();
        if($qry->num_rows()){
            foreach ($qry->result() as $key => $row) {
                $form_ids[]=$row->id;
            }
            return $form_ids;
        }
    }
    function get_forms_name($form_arr)
    {
        $ci=& get_instance();
        $ci->db->select('*');
        $ci->db->from('ci_forms');
        if(is_array($form_arr) && !empty($form_arr)){
            $ci->db->where_in('id',$form_arr);
        }
        $qry=$ci->db->get();
        $form_names=array();
        if($qry->num_rows()){
            foreach ($qry->result() as $key => $row) {
                $form_names[]=$row->form_name;
            }
            return implode(',', $form_names);
        }

    }
	//**************************without model*******************************//
	if(!function_exists('college_status')){
		  function college_status($key =null){
				$status = array(''=>'Select Status',1=>'Active', 0=>'Inactive');
				if(isset($status) && !is_null($key)){
					return $status[$key];
				}else{
					return $status;
				}
			}
	}
    function check_form_role($form_id=null)
    {
        $ci=& get_instance();
        $form_ids=$ci->form_access_ids;
        $user_type=$ci->user_type;
        if($user_type==ADMIN)
        {
            return true;   
        }
        if(empty($form_ids))
        {
            return false;
        }
        $form_arr=explode(',',$form_ids);
        if(in_array($form_id, $form_arr))
        {
            return true;
        }else{
            return false;
        }
    }
    

    function has_permission($module)
    {
        $ci=& get_instance();
        /*if($ci->user_type==ADMIN)
        {
            return true;
        }*/
        if($ci->user_permissions !='')
        {
            $user_permissions=json_decode($ci->user_permissions);
            
            if(in_array($module,$user_permissions))
            {
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
	
	if(!function_exists('get_user_name_by_id')){
		function get_user_name_by_id($user_id=null){
			$ci=& get_instance();
			$ci->load->model("common_model");
			return $ci->common_model->get_user_name_by_id($user_id);
		}
	}

    if(!function_exists('drug_category')){
        function drug_category(){
            $ci=& get_instance();
            $ci->load->model("common_model");
            return $ci->common_model->drug_category();
        }
    }
	function drug_status()
	{
		$data=array(
			'0'=>'Pending',
			'1'=>'Closed',
			'2'=>'Rejected',
			'3'=>'Sample Report Dispatched',
			'4'=>'Sample Reported updated',
		);
		return $data;
	}
    function get_field_value($field,$row)
    {
        if(isset($_POST[$field]))
        {
            $val=$_POST[$field];
        }else if(isset($row[$field])){
            $val=$row[$field];
        }else{
            $val='';
        }
        return $val;
    }
    function encode_str($string)
    {
        $ci=& get_instance();
        return $ci->encrypt->encode($string);
    }
    function decode_str($string)
    {
        $ci=& get_instance();
        return $ci->encrypt->decode($string);
    }
     function add_user_activity($data)
    {
        $ci=& get_instance();
        if(!empty($data))
        {
            $ci->db->insert('ci_users_activity',$data);
        }
    }
    function student_registration_status($status)
    {
        switch ($status) {
            case '1':
                $status='Approved';
                break;
            case '2':
                $status='Rejected';
                break;
            case '3':
                $status='Visited';
                break;
            case '4':
                $status='Not Visited';
                break; 
            case '5':
                $status='Cancelled';
                break;      
            default:
                $status='Pending';
                break;
        }
        return $status;
    }
	function medicine_types()
	{
		$ci=& get_instance();
        
        $ci->load->model("common_model");
        return $ci->common_model->medicine_types();
        
		
        
	}