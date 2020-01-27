<?php
//**************************without common_model*******************************//
if (!function_exists('status')) {
    function status($key = null) {
        $status = array(1 => 'Active', 2 => 'Inactive');
        if (isset($status) && !is_null($key)) {
            return $status[$key];
        } else {
            return $status;
        }
    }
}

if (!function_exists('status_par')) {
    function status_par($key = null) {
        $status_par = array(0 => 'Pending', 1 => 'Approved', 2 => 'Rejected');
        if (isset($status_par) && !is_null($key)) {
            return $status_par[$key];
        } else {
            return $status_par;
        }
    }
}

if (!function_exists('title_type')) {
    function title_type($key = null) {
        $title_type = array(1 => 'Sh.', 2 => "Smt.", 3 => "Ms.");
        if (isset($title_type) && !is_null($key)) {
            return $title_type[$key];
        } else {
            return $title_type;
        }
    }
}

if (!function_exists('passing_years')) {
    function passing_years($key = '') {
        $passing_years = array();
        for ($yi = 1950; $yi <= date('Y'); $yi++) {
            $passing_years[$yi] = $yi;
        }
        if (isset($passing_years) && !empty($key)) {
            return $passing_years[$key];
        } else {
            return $passing_years;
        }
    }
}

if (!function_exists('basic_education')) {
    function basic_education($key = null) {
        $basic_education = array(7 => 'VIII', 8 => 'X', 1 => 'XII', 2 => 'Graduation', 3 => 'Post-Graduation', 4 => 'MPhil', 5 => 'PhD', 6 => 'Others');
        if (isset($basic_education) && !is_null($key)) {
            return $basic_education[$key];
        } else {
            return $basic_education;
        }
    }
}

if (!function_exists('grad_duration')) {
    function grad_duration($key = null) {
        $grad_duration = array(12 => '12', 24 => '24', 36 => '36', 48 => '48');
        if (isset($grad_duration) && !is_null($key)) {
            return $grad_duration[$key];
        } else {
            return $grad_duration;
        }
    }
}

if (!function_exists('gender')) {
    function gender($key = null) {
        $gender = array(1 => 'Male', 2 => 'Female', 3 => 'Other');
        if (isset($gender) && !is_null($key)) {
            return $gender[$key];
        } else {
            return $gender;
        }
    }
}

if (!function_exists('marital_status')) {
    function marital_status($key = null) {
        $marital_status = array(1 => 'Married', 2 => 'Unmarried', 3 => 'Widow', 4 => 'Widower', 5 => 'Legally Separated');
        if (isset($marital_status) && !is_null($key)) {
            return $marital_status[$key];
        } else {
            return $marital_status;
        }
    }
}

if (!function_exists('religion')) {
    function religion($key = null) {
        $religion = array(1 => 'Buddhism', 2 => 'Christianity', 3 => 'Hinduism', 4 => 'Islam', 5 => 'Jainism', 6 => 'Sikhism', 7 => 'Others');
        if (isset($religion) && !is_null($key)) {
            return $religion[$key];
        } else {
            return $religion;
        }
    }
}

if (!function_exists('blood_group')) {
    function blood_group($key = null) {
        $blood_group = array(1 => 'A+', 2 => 'B+', 3 => 'O+', 4 => 'AB+', 5 => 'A-', 6 => 'B-', 7 => 'O-', 8 => 'AB-');
        if (isset($blood_group) && !is_null($key)) {
            return $blood_group[$key];
        } else {
            return $blood_group;
        }
    }
}

if (!function_exists('single_parent')) {
    function single_parent($key = null) {
        $single_parent = array(1 => 'Yes', 2 => 'No');
        if (isset($single_parent) && !is_null($key)) {
            return $single_parent[$key];
        } else {
            return $single_parent;
        }
    }
}

if (!function_exists('comp_prof')) {
    function comp_prof($key = null) {
        $comp_prof = array(1 => 'MS-Office', 10 => 'Others');
        if (isset($comp_prof) && !is_null($key)) {
            return $comp_prof[$key];
        } else {
            return $comp_prof;
        }
    }
}

if (!function_exists('physically_abled')) {
    function physically_abled($key = null) {
        $physically_abled = array(1 => 'Yes(Only if Disability percent is more than 40)', 2 => 'No');
        if (isset($physically_abled) && !is_null($key)) {
            return $physically_abled[$key];
        } else {
            return $physically_abled;
        }
    }
}

if (!function_exists('shift')) {
    function shift($key = null) {
        $shift = array(1 => 'I', 2 => 'II', 3 => 'N/A');
        if (isset($shift) && !is_null($key)) {
            return $shift[$key];
        } else {
            return $shift;
        }
    }
}

if (!function_exists('region_type')) {
    function region_type($key = null) {
        $region_type = array('RO_5' => 'Region', 'ZT_2' => 'ZIET', 'KV_3' => 'KV ABROAD');
        if (isset($region_typeshift) && !is_null($key)) {
            return $region_type[$key];
        } else {
            return $region_type;
        }
    }
}

if (!function_exists('zone')) {
    function zone($key = null) {
        $zone = array(1 => 'East', 2 => 'West', 3 => 'North', 4 => 'South');
        if (isset($zone) && !is_null($key)) {
            return $zone[$key];
        } else {
            return $zone;
        }
    }
}

if (!function_exists('direct_recruitment')) {
    function direct_recruitment($key = null) {
        $direct_recruitment = array(1 => 'Direct Recruitment', 2 =>'Promotion', 3=>'Absorption', 4=>'Deputation', 5 => 'LDE', 6=>'Notional');
        if (isset($direct_recruitment) && !is_null($key)) {
            return $direct_recruitment[$key];
        } else {
            return $direct_recruitment;
        }
    }
}

if (!function_exists('reserve_post')) {
    function reserve_post($key = null) {
        $reserve_post = array(1 => 'Unreserved', 2 => 'SC', 3 => 'ST', 4 => 'OBC Non-Creamy', 5 => 'PH', 6=>'Ex  Servicemen', 7=>'Unreserved(EWS)');
        if (isset($reserve_post) && !is_null($key)) {
            return $reserve_post[$key];
        } else {
            return $reserve_post;
        }
    }
}

if (!function_exists('disciplinary_action')) {
    function disciplinary_action($key = null) {
        $disciplinary_action = array(1 => '81-B', 2 => '81-D', 3 => 'Penalty');
        if (isset($disciplinary_action) && !is_null($key)) {
            return $disciplinary_action[$key];
        } else {
            return $disciplinary_action;
        }
    }
}

if (!function_exists('leave_type')) {
    function leave_type($key = null) {
        $leave_type = array(1 => 'Child Care', 2 => 'Extra Ordinary on Medical Ground',3 => 'Extra Ordinary on Private Affair', 4 => 'Study Leave',5 => 'N/A');
        if (isset($leave_type) && !is_null($key)) {
            return $leave_type[$key];
        } else {
            return $leave_type;
        }
    }
}

if (!function_exists('intial_recruitment')) {
    function intial_recruitment($key = null) {
        $direct_recruitment = array(1 => 'Direct Recruitment', 2 => 'On Compassionate Ground',3=>'Absorption',4=>"Deputation");
        if (isset($direct_recruitment) && !is_null($key)) {
            return $direct_recruitment[$key];
        } else {
            return $direct_recruitment;
        }
    }
}

if (!function_exists('transfer_reason')) {
    function transfer_reason($key = null) {
        $direct_recruitment = array(1 => 'Public Interest', 2 => 'Request Transfer', 3 => 'Direct Recruitment', 4 => 'Promotion', 5 => 'Other');
        if (isset($direct_recruitment) && !is_null($key)) {
            return $direct_recruitment[$key];
        } else {
            return $direct_recruitment;
        }
    }
}

if (!function_exists('level')) {
    function level($key = null) {
        $promotion_type = array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10', 11 => '11', 12 => '12', 13 => '13', '13-A' => '13-A', 14 => '14', 15 => '15', 16 => '16', 17 => '17', 18 => '18');
        if (isset($promotion_type) && !is_null($key)) {
            return $promotion_type[$key];
        } else {
            return $promotion_type;
        }
    }
}

if (!function_exists('performance_years')) {
    function performance_years($key = '') {
        $performance_years = array();
        $tenth_year = date('Y') - 9;
        for ($yi = $tenth_year; $yi <= date('Y'); $yi++) {
            $performance_years[$yi] = $yi;
        }
        if (isset($performance_years) && !empty($key)) {
            return $performance_years[$key];
        } else {
            return $performance_years;
        }
    }
}

if (!function_exists('awards_years')) {
    function awards_years($key = '') {
        $awards_years = array();
        for ($yi = 1975; $yi <= date('Y'); $yi++) {
            $awards_years[$yi] = $yi;
        }
        if (isset($awards_years) && !empty($key)) {
            return $awards_years[$key];
        } else {
            return $awards_years;
        }
    }
}

if (!function_exists('panel_years')) {
    function panel_years($key = '') {
        $awards_years = array();
        for ($yi = 1963; $yi <= date('Y'); $yi++) {
            $awards_years[$yi] = $yi;
        }
        if (isset($awards_years) && !empty($key)) {
            return $awards_years[$key];
        } else {
            return $awards_years;
        }
    }
}

if (!function_exists('last5_years')) {
    function last5_years($key = '') {
        $last5_years = array();
        $tenth_year = date('Y') - 4;
        for ($yi = $tenth_year; $yi <= date('Y'); $yi++) {
            $last5years[$yi] = $yi;
        }
        if (isset($last5years) && !empty($key)) {
            return $last5years[$key];
        } else {
            return $last5years;
        }
    }
}

if (!function_exists('training_role')) {
    function training_role($key = null) {
        $training_role = array(1 => 'Course Director', 2 => 'Associate Director', 3 => 'Resource Person', 4 => 'Participants');
        if (isset($training_role) && !is_null($key)) {
            return $training_role[$key];
        } else {
            return $training_role;
        }
    }
}

if (!function_exists('master_station_lists')) {
    function master_station_lists($key = null) {
        $master_station_lists = array('H' => 'Hard', 'V' => 'Very Hard', 'NER' => 'North East', '0' => 'Not Applicable');
        if (isset($master_station_lists) && !is_null($key)) {
            return $master_station_lists[$key];
        } else {
            return $master_station_lists;
        }
    }
}

if (!function_exists('promotion_type')) {
    function promotion_type($key = null) {
        $training_role = array(1 => 'Promotion(LDE)', 2 => 'Promotion(DPC)');
        if (isset($training_role) && !is_null($key)) {
            return $training_role[$key];
        } else {
            return $training_role;
        }
    }
}

if (!function_exists('financial_type')) {
    function financial_type($key = null) {
        $financial_type = array(1 => 'Senior Scale', 2 => 'Selection Scale',3=>'MACP I',4=>'MACP II',5=>'MACP III',6=>'NA');
        if (isset($financial_type) && !is_null($key)) {
            return $financial_type[$key];
        } else {
            return $financial_type;
        }
    }
}

if (!function_exists('awards')) {
    function awards($key = null) {
        $awards = array('KVS National Incentive Award' => 'KVS National Incentive Award',
                        'KVS Regional Incentive Award' => 'KVS Regional Incentive Award', 
                        'National Award' => 'National Award', 
                        'Innovation and Experimentation Award' => 'Innovation and Experimentation Award', 
                        'Other' => 'Any Other');
        if (isset($awards) && !is_null($key)) {
            return $awards[$key];
        } else {
            return $awards;
        }
    }
}

if (!function_exists('relation')) {
    function relation($key = null) {
        $relation = array('Father' => 'Father',
                        'Mother' => 'Mother', 
                        'Son' => 'Son', 
                        'Daughter' => 'Daughter', 
                        'Not Applicable' => 'Not Applicable');
        if (isset($relation) && !is_null($key)) {
            return $relation[$key];
        } else {
            return $relation;
        }
    }
}

if (!function_exists('title')) {
    function title($key = null) {
        $title = array('Sh' => 'Sh','Smt.' => 'Smt.','Ms.' => 'Ms.','Late' => 'Late');
        if (isset($title) && !is_null($key)) {
            return $title[$key];
        } else {
            return $title;
        }
    }
}

if (!function_exists('course_type')) {
    function course_type($key = null) {
        $course_type = array(1 => 'Induction', 2 => 'Short Duration',3=>'In Service',4=>'Orientation',5=>'CEPT',6=>'CPPDPT');
        if (isset($course_type) && !is_null($key)) {
            return $course_type[$key];
        } else {
            return $course_type;
        }
    }
}

if (!function_exists('spell')) {
    function spell($key = null) {
        $spell = array(1 => 'Single', 2 => 'Double',3=>'12+3+3+3');
        if (isset($spell) && !is_null($key)) {
            return $spell[$key];
        } else {
            return $spell;
        }
    }
}

if (!function_exists('conductedfor')) {
    function conductedfor($key = null) {
        $conductedfor = array(1 => 'PRT', 2 => 'TGT',3=>'PGT');
        if (isset($conductedfor) && !is_null($key)) {
            return $conductedfor[$key];
        } else {
            return $conductedfor;
        }
    }
}

if (!function_exists('training_agency')) {
    function training_agency($key = null) {
        $training_agency = array(1 => 'Govt. Agency', 2 => 'Non Govt. Agency');
        if (isset($training_agency) && !is_null($key)) {
            return $training_agency[$key];
        } else {
            return $training_agency;
        }
    }
}

if (!function_exists('govt_org')) {
    function govt_org($key = null) {
        $govt_org = array(1 => 'KVS', 2 => 'ZEIT', 3 => 'NCERT', 4 => 'CBSE', 5 =>'ISTM', 6 => 'NUEPA', 7 => 'RIEs', 8 => 'SCERT', 9 => 'NIFM', 10 => 'NCUI', 11 => 'IIT');
        if (isset($govt_org) && !is_null($key)) {
            return $govt_org[$key];
        } else {
            return $govt_org;
        }
    }
}

if (!function_exists('mother_title')) {
    function mother_title($key = null) {
        $title_type = array(1 => 'Smt.', 2 => "Late.");
        if (isset($title_type) && !is_null($key)) {
            return $title_type[$key];
        } else {
            return $title_type;
        }
    }
}

if (!function_exists('father_title')) {
    function father_title($key = null) {
        $title_type = array(1 => 'Sh.', 2 => "Late.");
        if (isset($title_type) && !is_null($key)) {
            return $title_type[$key];
        } else {
            return $title_type;
        }
    }
}

if (!function_exists('provident_fund')) {
    function provident_fund($key = null) {
        $title_type = array(1 => 'GPF', 2 => "CPF", 3 => "NPS");
        if (isset($title_type) && !is_null($key)) {
            return $title_type[$key];
        } else {
            return $title_type;
        }
    }
}

if (!function_exists('phtype')) {
    function phtype($key = null) {
        $title_type = array(1 => 'OH', 2 => "VH", 3 => "HH", 4 => "Others");
        if (isset($title_type) && !is_null($key)) {
            return $title_type[$key];
        } else {
            return $title_type;
        }
    }
}

//=========================== Captcha Generate / Re-Generate Function ===========================//
function getcaptcha() {
    $ci = & get_instance();
    $ci->load->helper('captcha');
    $config = array(
        'img_url'   => base_url() . 'captcha/',
        'img_path'  => './captcha/',
        'img_width' => '160',
        'img_height'=> 40,
        'word_length'   => 5,
        'font_size'     => 18,
        'font_path' => 'system/fonts/texb.ttf',
        'pool'      => '123456789',
        'colors'    => array(
                        'background'=> array(255, 255, 255),
                        'border'    => array(204,204,204),
                        'text'  => array(100, 100, 153),
                        'grid'  => array(180, 182, 182)
        )
    );
    //pr($config);die;
    $captcha = create_captcha($config);
    $ci->session->unset_userdata('captcha');
    $ci->session->set_userdata('captcha', $captcha['word']);
    $session = $ci->session->all_userdata();
    $time = $session['__ci_last_regenerate'];
    $secret = array(
        'session_id' => $time,
        'captcha' => $captcha['word'],
    );
    $check = $ci->db->get_where('ci_secret_key', array('session_id' => $time));
    if ($check->num_rows()) {
        $ci->db->where('session_id', $time);
        $ci->db->update('ci_secret_key', array('captcha' => $captcha['word']));
    } else {
        $ci->db->insert('ci_secret_key', $secret);
    }
    return $captcha['image'];
}
function show($arr) {
    echo "<pre>";
    print_r($arr);
}
/*
#===================================================================================================================//
#                                                                                                                   #
#              ##################### Helper Function Using Database (Common_Model) ######################           #
#                                                                                                                   #
#===================================================================================================================//
*/
 
if (!function_exists('retirement_date')) {
    function retirement_date($dob) {
        $ci = & get_instance();
        $sql="IF( DAYOFWEEK( LAST_DAY( DATE_ADD( '$dob' , INTERVAL 60 YEAR ) ) ) = 1 , DATE_SUB( LAST_DAY( DATE_ADD( '$dob', INTERVAL 60 YEAR ) ) ,INTERVAL 1 DAY ) , LAST_DAY( DATE_ADD( '$dob', INTERVAL 60 YEAR ) ) ) as retirement_date";
        $data = $ci->db->select( $sql)->get()->row();
        //$date = new DateTime($data ->retirement_date);
        //return  $date->format('d-m-Y');
        return $data ->retirement_date;
    }
}

if (!function_exists('user_name')) {
    function user_name($user_id) {
        $ci = & get_instance();
        return $ci->db->select("first_name")->from('users')->where("id", $user_id)->get()->row("first_name");
    }
}

//Newly Added for Result Section 30072019
if(!function_exists('subject_lists_tgt')){
	function subject_lists_tgt($key = null){		
            $ci = & get_instance();
            $ci->db->select('id,name');
            $ci->db->from('subjects');
            $ci->db->where('find_in_set("8", in_classes) <> 0');
            $ci->db->order_by('name');
            $query = $ci->db->get();
            $result = $query->result_array();
            $return = array();
            foreach ($result as $row) {
                $return[$row['id']] = $row['name'];
            }
            return $return;	
        }		
}

if(!function_exists('subject_lists_headmaster_prt')){		
	function subject_lists_headmaster_prt($key = null){		
            $ci = & get_instance();
            $ci->db->select('id,name');
            $ci->db->from('subjects');
            $ci->db->where('find_in_set("3", in_classes) <> 0');
            $ci->db->order_by('name');
            $query = $ci->db->get();
            $result = $query->result_array();
            $return = array();
            foreach ($result as $row) {
                $return[$row['id']] = $row['name'];
            }
            return $return;		
        }		
}

if(!function_exists('subject_lists_pgt')){		
	function subject_lists_pgt($key = null){		
            $ci = & get_instance();
            $ci->db->select('id,name');
            $ci->db->from('subjects');
            $ci->db->where('find_in_set("6", in_classes) <> 0');
            $ci->db->order_by('name');
            $query = $ci->db->get();
            $result = $query->result_array();
            $return = array();
            foreach ($result as $row) {
                $return[$row['id']] = $row['name'];
            }
            return $return;		
        }		
}
if(!function_exists('get_designated_post')){		
	function get_designated_post($key = null){		
            $ci = & get_instance();
            $ignore = [4,5,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,32,33,34,35,36,46,47,48,51,52];
            $ci->db->select('id,name');
            $ci->db->from('designations');
            $ci->db->where('cat_id',2);
            $ci->db->where_not_in('id',$ignore);
            $ci->db->order_by('name');
            $query = $ci->db->get();
            $result = $query->result_array();
            $return = array();
            foreach ($result as $row) {
                $strtolower = strtolower($row['name']);
                $return[$row['id']] = ucfirst($strtolower);
            }
            return $return;		
        }		
}


function add_user_activity($user_id,$act_user_id = null,$activity_type, $activity_data, $form_type = null) {
    $ci = & get_instance();
    $activity = array(
        'user_id' => $user_id,
        'act_user_id' => $act_user_id,
        'time' => date('Y-m-d H:i:s'),
        'ipaddress' => $_SERVER['REMOTE_ADDR'],
        'activity_type' => $activity_type,
        'activity_data' => $activity_data,
        'form_type' => $form_type,
    );
    $ci->db->insert('user_activities', $activity);
}

function category() {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('category');
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}

function designation_category_lists() {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('designation_category');
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}

function masterregion_lists() {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('regions');
    $ci->db->where("status", 1);
    $ci->db->where("label", 'RO');
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}

function role_lists($role_id=null) {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('roles');
    $ci->db->where("status", ACTIVE);
    if($role_id){
	$ci->db->where("id",$role_id);
    }
    $ci->db->where("id !=", ROLE_ADMIN);
    $ci->db->where("id !=", ROLE_EMPLOYEE);
    $ci->db->order_by('id');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}


    function zone() {
        $ci = & get_instance();
        $ci->db->select('id,name');
        $ci->db->from('regions');
        $ci->db->where("type", 4);
        $query = $ci->db->get();
        $result = $query->result_array();
        $return = array();
        foreach ($result as $row) {
            $strtolower = $row['name'];
            $return[$row['id']] = ucfirst($strtolower);
        }
        return $return;
    }

function region_lists($region_id=null,$zit=null) {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('regions');
    $ci->db->where("status", 1);
	if($region_id){
		$ci->db->where("id",$region_id);
	}
	if($zit){
		$ci->db->where("label=",$zit);
	}
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}

function region_lists_filter() {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('regions');
    $ci->db->where("status", 1);
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}

function school_lists($region_id=null) {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('schools');
    $ci->db->where("status", 1);
    if($region_id){
	$ci->db->where("reg_id",$region_id);
    }
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}
function school_lists_name($school_id=null) {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('schools');
    $ci->db->where("status", 1);
    if($school_id){
	$ci->db->where("id",$school_id);
    }
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}
function section_lists($section_id=null) {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('role_category');
    if($section_id){
        $ci->db->where('id',$section_id);
    }
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}

function state_lists() {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('states');
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = strtolower($row['name']);
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}

function subject_lists() {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('subjects');
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = strtolower($row['name']);
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}

function user_info($user_id) {
    $ci = & get_instance();
    $qry = $ci->db->get_where('users', array('id' => $user_id));
    if ($qry->num_rows()) {
        return $qry->row();
    }
}



function getwhere($table, $fields, $where = array()) {
    $ci = & get_instance();
    $ci->db->select($fields);
    $ci->db->from($table);
    if (!empty($where)) {
        $ci->db->where($where);
    }
    $qry = $ci->db->get();
    if ($qry->num_rows()) {
        return $qry->result();
    }
}

function get_field_value($field, $row) {
    if (isset($_POST[$field])) {
        $val = $_POST[$field];
    } else if (isset($row[$field])) {
        $val = $row[$field];
    } else {
        $val = '';
    }
    return $val;
}

function user_data($user_id) {

    $ci = & get_instance();
    $qry = $ci->db->get_where('ci_users', array('id' => $user_id));
    if ($qry->num_rows()) {
        return $qry->row();
    }
}

function state_name_by_id($state_id) {

    $ci = & get_instance();
    $ci->db->select('name');
    $ci->db->from('ci_states');
    $ci->db->where('id', $state_id);
    $name = $ci->db->get()->row()->name;
    return $name;
}

function sex($key = null) {
    $data[1] = 'Male';
    $data[2] = 'Female';
    if ($key) {
        return $data[$key];
    }
}

function has_malicious($file) {
    return '0';
    $file = base_url() . $file;
    $z = '0';
    $string = file_get_contents($file);
    //$forbidden = array("<html","/XObject","<?php","<form","<script","prompt(","onmouseover(","java","<div","alert(","<table","<span","<tr","<td","<th","submit","<body","<head","var","function");
    $forbidden = array("<script");
    foreach ($forbidden as $row) {
        if (stripos($string, $row) !== false) {
            $z = '1';
            return $z;
        }
    }
    return $z;
}

function has_malicious_field($string) {
    return '0';
    $z = '0';
    //$forbidden = array("<html","/XObject","<?php","<form","<script","prompt(","onmouseover(","java","<div","alert(","<table","<span","<tr","<td","<th","submit","<body","<head","var","function","|");
    $forbidden = array("<script");
    foreach ($forbidden as $row) {
        if (stripos($string, $row) !== false) {
            $z = '1';
            return $z;
        }
    }
    return $z;
}

function has_permission($module) {
    $ci = & get_instance();
    if ($ci->user_permissions != '') {
        $user_permissions = json_decode($ci->user_permissions);

        if (in_array($module, $user_permissions)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function lang_text($key) {
    $ci = & get_instance();
    return $ci->lang->line($key);
}

function subject_name_by_id($subjectID) {
    $ci = & get_instance();
    $ci->db->select('name');
    $ci->db->from('subjects');
    $ci->db->where('id',$subjectID);
    $query = $ci->db->get();
    $result = $query->row_array();
    return $result['name'];
}

function role_lists_by_id($roleID) {
    $ci = & get_instance();
    $ci->db->select('name');
    $ci->db->from('roles');
    $ci->db->where("id", $roleID);
    $query = $ci->db->get();
    $result = $query->row_array();
    return $result['name'];
}

function region_lists_by_id($regionID) {
    $ci = & get_instance();
    $ci->db->select('name');
    $ci->db->from('regions');
    $ci->db->where("id", $regionID);
    $query = $ci->db->get();
    $result = $query->row_array();
   
    return $result['name'];
}

function school_lists_by_id($schoolID) {
    $ci = & get_instance();
    $ci->db->select('name');
    $ci->db->from('schools');
    $ci->db->where("id", $schoolID);
    $query = $ci->db->get();
    $result = $query->row_array();
   
    return $result['name'];
}

if (!function_exists('designation_list')) {
    function designation_list($key = null) {
        $ci = & get_instance();
        $ci->load->model("common_model");
        if (!is_null($key)) {
            return $ci->common_model->get_designation_list($key);
        } else{
            return $ci->common_model->get_designation_list();
        }
    }
}

//=============================== Added for Transfer Modules ==============================//
if(!function_exists('all_designations')){		
	function all_designations($key = null){		
            $ci = & get_instance();
            $ignore = [0];
            $ci->db->select('id,name');
            $ci->db->from('designations');
            $ci->db->where_not_in('id',$ignore);
            $ci->db->order_by('name');
            $query = $ci->db->get();
            $result = $query->result_array();
            $return = array();
            foreach ($result as $row) {
                $strtolower = $row['name'];
                $return[$row['id']] = $strtolower;
            }
            return $return;		
        }		
}
if(!function_exists('all_unit_region')){		
	function all_unit_region($key = null){		
            $ci = & get_instance();
            $ignore = [0];
            $ci->db->select('id,name');
            $ci->db->from('regions');
            $ci->db->where_not_in('id',$ignore);
            $ci->db->order_by('name');
            $query = $ci->db->get();
            $result = $query->result_array();
            $return = array();
            foreach ($result as $row) {
                $strtolower = strtoupper($row['name']);
                $return[$row['id']] = ucfirst($strtolower);
            }
            return $return;		
        }		
}
if(!function_exists('all_unit_region')){		
	function all_unit_region($key = null){		
            $ci = & get_instance();
            $ignore = [0];
            $ci->db->select('id,name');
            $ci->db->from('regions');
            $ci->db->where_not_in('id',$ignore);
            $ci->db->order_by('name');
            $query = $ci->db->get();
            $result = $query->result_array();
            $return = array();
            foreach ($result as $row) {
                $strtolower = strtolower($row['name']);
                $return[$row['id']] = ucfirst($strtolower);
            }
            return $return;		
        }		
}

if(!function_exists('pr')){
    function pr($data){
        echo '<pre>' ;
        print_r($data);
        die;

    }
}
function GetRegionNameById($id) {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('ci_regions');
    $ci->db->where('id',$id);
    $q = $ci->db->get();
    if($q->num_rows() > 0) {
            return $q->row()->name;
        } else {
            return '';
    }
}

function GetTotalRegionalVacancyRegionId($id){
    $ci = & get_instance();
    $ci->db->select('code');
    $ci->db->from('ci_regions');
    $ci->db->where('id',$id);
    $q = $ci->db->get();
	$code = $q->row()->code ;
	if($code){
		$ci = & get_instance();
		$ci->db->select('SUM(sanctioned_post) as total_reg_vacancy');
		$ci->db->from('ci_vacancy_master');
		$ci->db->where('code',$code);
        $q = $ci->db->get();
		if($q->num_rows() > 0) {
            return $q->row()->total_reg_vacancy;;
        } else {
            return '';
		}
   }
	
}
// Designation List
function designation_lists($role_id=null) {
    $ci = & get_instance();
    $ci->db->select('id,name');
    $ci->db->from('ci_designations');
	if($role_id==2){
		 $ci->db->where('hq',1);
	}else if($role_id==3){
		$ci->db->where('ro',1);
	}else if($role_id==4){
		$ci->db->where('zt',1) ;
	}else if($role_id==5){
		$ci->db->where('kv',1);
	}else{
		//admin
	}
    $ci->db->order_by('name');
    $query = $ci->db->get();
    $result = $query->result_array();
    $return = array();
    foreach ($result as $row) {
        $strtolower = $row['name'];
        $return[$row['id']] = ucfirst($strtolower);
    }
    return $return;
}
/* get school name and regional name by type and code */

function get_scholl_name_by_ccde_and_type($code=null,$type=null){
	$ci = & get_instance();
	if($type==5){
		$ci->db->select('id,name');
		$ci->db->from('ci_schools');
		$ci->db->where('code',$code);
	}else{
		$ci->db->select('id,name');
		$ci->db->from('ci_regions');
		$ci->db->where('code',$code);
	}
    $q = $ci->db->get();
    if($q->num_rows() > 0) {
            return $q->row()->name;
        }else{
            return '';
    }
}
// P-15_11_19
function GetNotificationCount($id) {
    $ci = & get_instance();
    $ci->db->select('count(id) as counts');
    $ci->db->from('ci_notifications');
    $ci->db->where(array('receiverid'=>$id,'readstatus'=>0));
    
    $q = $ci->db->get();
    if($q->num_rows() > 0) {
            return $q->row()->counts;
        } else {
            return '';
    }

}

if(!function_exists('subject_lists_designationwise')){
    function subject_lists_designationwise($key = null){		
        $ci = & get_instance();
        $ci->db->select('id,name');
        $ci->db->from('subjects');
        $ci->db->where('find_in_set("'.$key.'", in_classes) <> 0');
        $ci->db->order_by('name');
        $query = $ci->db->get();
        $result = $query->result_array();
        $return = array();
        foreach ($result as $row) {
            //$strtolower = strtolower($row['name']);
            $return[$row['id']] = $row['name'];//ucfirst($strtolower);
        }
        return $return;	
    }		
}
function get_name_by_code($code=null) {
	$ci = & get_instance();
    $ci->db->select('id');
    $ci->db->from('ci_regions');
    $ci->db->where("code",$code);
	$query = $ci->db->get();
    $region_id = $query->row()->id;
	if($region_id){
			$ci->db->select('name,label');
			$ci->db->from('ci_regions');
			$ci->db->where("code",$code);
			$query = $ci->db->get();
			$result = $query->row();
			$results['name']= $result->name ; 
			$results['label']= ($result->label=='KV') ? 'HQ': $result->label  ;
            $results['status']= ($region_id)? 1 :0 ; 			
			 
	}else{
		$ci->db->select('id,name');
			$ci->db->from('ci_schools');
			$ci->db->where("code",$code);
			$query = $ci->db->get();
			$result = $query->row();
			$results['name']= $result->name ; 
			$results['label']= 'School' ; 
			$results['status']= ($result->id) ? 1 : 0 ; 
	}
	return $results ;
}
if(!function_exists('getCodeBySchoolId')){
    function getCodeBySchoolId($school_id = null){
		    $ci = & get_instance();
            $ci->db->select('code')->from('ci_schools');
			$ci->db->where('id=',$school_id);
			$query = $ci->db->get();
			if($query->num_rows()){
				return $query->row()->code ;
			}
		}
}
if(!function_exists('getCodeByRegionId')){
    function getCodeByRegionId($region_id = null){
        $ci = & get_instance();
            $ci->db->select('code')->from('ci_regions');
            $ci->db->where('id=',$region_id);
            $query = $ci->db->get();
                    if($query->num_rows()){
                    return $query->row()->code ;
            }
    }
}

if(!function_exists('getEmployeeidByEmpcode')){
    function getEmployeeidByEmpcode($emp_id = null){
        $ci = & get_instance();
            $ci->db->select('id')->from('ci_users');
            $ci->db->where('username=',$emp_id);
            $query = $ci->db->get();
                    if($query->num_rows()){
                    return $query->row()->id ;
            }
    }
}