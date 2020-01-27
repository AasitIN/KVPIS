<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        if (!$this->is_logged_in()) {
            redirect(base_url());
        }
    }

    public function index() {
        $view = 'users/index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Users List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function get_users() {
        $columns = array(
            0 => 'id',
            1 => 'email',
            2 => 'role_name',
            3 => 'status',
            4 => 'username',
            5 => 'created',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->user_model->get_all_users_list_json();
       
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->user_model->get_all_users_list_json($limit, $start, $order, $dir, $search, $post_data);
        
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['email'] = $user->email_id;
                $nestedData['role_name'] = $user->role_name;
                $nestedData['role_id'] = $user->role_id;
                $nestedData['status'] = $user->status;
                $nestedData['username'] = $user->username;
                $nestedData['created'] = $user->created;
                $nestedData['serial_no'] = $serial;
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        echo json_encode($json_data);
    }

    /* public function change_status(){
      if($this->input->is_ajax_request())
      {
      $post=$this->input->post(null,true);
      if(!empty($post['user_id']) && !empty($post['status']))
      {
      //$status_reason=$post['status_reason'];
      $this->db->where('id',$post['user_id']);
      $qry=$this->db->update(' ci_users',array('status'=>$post['status']));
      if($qry)
      {

      echo '1';
      }
      }
      }
      } */

    public function change_status() {
        if ($this->input->is_ajax_request()) {
            $post = $this->input->post(null, true);
            if (!empty($post['user_id']) && !empty($post['status'])) {
                $status_reason = ($post['status_reason']) ? $post['status_reason'] : '';
                $this->db->where('id', $post['user_id']);
                $qry = $this->db->update('ci_users', array('status' => $post['status'], 'status_reason' => $status_reason));
                if ($qry) {
                    add_user_activity($this->session->userdata('user_id'),$post['user_id'], 'Status', 'Changed User Status','User Module');
                    echo '1';
                }
            }
        }
    }
    public function admin_reset_password() {
        if ($this->input->is_ajax_request()) {
            $post = $this->input->post(null, true);
            if (!empty($post['user_id_forpass']) && !empty($post['new_password'])) {
                echo $ResetSussess=$this->user_model->admin_reset_password($this->input->post());
            }
        }
    }

    public function details($id) {
        $view = 'users/view';
        if (isset($id) || !empty($id)) {
            
            $view_data['users'] = $this->user_model->get_user_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - User List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function activities_logs() {
        $view = 'users/activities_logs';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Users Activities Log List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function get_activities_logs() {
        $columns = array(
            0 => 'uac.id',
            1 => 'username',
            2 => 'us.email',
            3 => 'r.name',
            4 => 'time',
            5 => 'us.last_login',
            6 => 'time',
            7 => 'activity_type',
            8 => 'us.status',
            9 => 'form_type',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->user_model->get_all_activities_logs();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->user_model->get_all_activities_logs($limit, $start, $order, $dir, $search, $post_data);
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                switch ($user->status) {
                    case '1':
                        $status = 'Active';
                        break;
                    case '2':
                        $status = 'Rejected';
                        break;

                    default:
                        $status = 'Pending';
                        break;
                }
                $nestedData['id'] = $user->id;
                $nestedData['username'] = $user->username;
                $nestedData['email'] = $user->email_id;
                $nestedData['role'] = $user->role;
                $nestedData['last_login'] = $user->last_login;
                $nestedData['status'] = $status;
                $nestedData['time'] = $user->time;
                $nestedData['ipaddress'] = $user->ipaddress;
                $nestedData['form_type'] = $user->form_type;
                $nestedData['activity_type'] = $user->activity_type;
                $nestedData['activity_data'] = $user->activity_data;
                $nestedData['serial_no'] = $serial;
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add() {
        if ($post_data = $this->input->post(null, true)) {
            $this->form_validation->set_rules('role_id', 'Role Id', 'required|xss_clean|callback_regex_check');
           // $this->form_validation->set_rules('role_category', 'Role Category', 'required|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|is_unique[users.username]|callback_regex_check');
            $this->form_validation->set_rules('password', 'Password', 'required|xss_clean|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->user_model->add_user($post_data);
                if ($response['status'] == 'success') {
                    $this->session->set_flashdata('success', 'User Added Successfully');
                    redirect(base_url('admin/users'));
                } else {
                    $view_data['error_msg'] = isset($response['error']) ? $response['error'] : 'User Id or password does not match';
                }
            }
        }

        $view = 'users/add';
        
        $data = array(
            'title' => WEBSITE_TITLE . ' - Add User',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function edit($id = null) {
        if (isset($id) || !empty($id)) {
            $view_data['users'] = $this->user_model->get_user_by_id($id);
        }
        if ($post_data = $this->input->post(null, true)) {
            $this->form_validation->set_rules('role_id', 'Role Id', 'required|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('role_category', 'Role Category', 'required|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|callback_check_unique_username|callback_regex_check');
            $this->form_validation->set_rules('password', 'Password', 'xss_clean|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->user_model->edit_user($post_data, $id);
                if ($response['status'] == 'success') {
                    add_user_activity($this->session->userdata('user_id'),$id, 'Edit', 'Edited User Successfully','User Module');
                    $this->session->set_flashdata('success', 'User Updated Successfully');
                    redirect('admin/users');
                } else {
                    $view_data['error_msg'] = isset($response['error']) ? $response['error'] : 'User Not Updated Successfully';
                }
            }
        }

        $view = 'users/edit';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Add User
			',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function check_unique_username() {
        $id = $this->input->post('user_id');
        $username = $this->input->post('username');
        $this->db->select("us.id");
        $this->db->from("users us");
        if (!empty($id) && $id != 0) {
            $this->db->where('us.id !=', $id);
        }
        $this->db->where('us.username', $username);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_username', 'This username already existed');
            return false;
        } else {
            return true;
        }
    }

    public function cheque_unique_email() {
        if ($this->input->is_ajax_request()) {
            $user_id = $_GET['user_id'];
            $email = $_GET['email'];
            $response = $this->user_model->cheque_unique_email($email, $user_id);
            if ($response) {
                echo 'false';
            } else {
                echo 'true';
            }
        }
    }

    public function cheque_unique_username() {
        if ($this->input->is_ajax_request()) {
            $user_id = $_GET['user_id'];
            $username = $_GET['username'];
            $response = $this->user_model->cheque_unique_username($username, $user_id);
            if ($response) {
                echo 'false';
            } else {
                echo 'true';
            }
        }
    }

    public function cheque_uniqueness($str, $val) {
        if ($str == '') {
            $this->form_validation->set_message('cheque_uniqueness', 'The %s  is required');
            return FALSE;
        }
        $user_id = $this->uri->segment(4);
        list($table, $column) = explode('.', $val, 2);
        $this->db->select('id');
        $this->db->from('ci_users');
        $this->db->where($column, $str);
        if ($user_id) {
            $this->db->where('id !=', $user_id);
        }
        $qry = $this->db->get();

        if ($qry->num_rows()) {
            $this->form_validation->set_message('cheque_uniqueness', 'The %s already existed');
            return FALSE;
        } else {
            return true;
        }
    }

    public function delete() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $user_id = $post['user_id'];
            if ($user_id) {
                $this->db->where('id', $user_id);
                $qry = $this->db->delete('ci_users');
                if ($qry) {
                    add_user_activity($this->session->userdata('user_id'),$user_id, 'Delete', 'User Deleted Successfully','User Module');
                    $this->session->set_flashdata('success', 'Users Deleted successfully');
                    echo '1';
                }
            }
        }
    }

    public function get_region() {
        if ($this->input->is_ajax_request()) {
            $options = '<option value="">Select</option>';
            if (!empty($_POST['r_id'])) {
                
                $this->db->select('*');
                //if($_POST['r_id'] == ROLE_KVS_HQ){
                //   $this->db->from('ci_regions'); 
                //}
                $this->db->from('ci_regions');
                if ($_POST['r_id'] == ROLE_ZIET) {
                    $this->db->where('label=', 'ZT');
                } else if($_POST['r_id'] == ROLE_KVS_HQ) {
                    $this->db->where('label=', 'KV');
                } else{
                    $this->db->where('label=', 'RO');
                }
                $qry = $this->db->get();
                if ($qry->num_rows()) {
                    $regions = $qry->result();
                    if (!empty($regions)) {
                        foreach ($regions as $key => $region) {
                           $options .='<option value="' . $region->id . '">' . ucwords($region->name) . '</option>';
                        }
                    }
                }
            }

            echo $options;
        }
    }
    //=================================== UPDATED FOR USER CREATION START ========================================//
    public function get_roles() {
        if ($this->input->is_ajax_request()) {
            $options = '<option value="">Select</option>';
            if (!empty($_POST['r_id'])) {
                
                $this->db->select('*');
                if($_POST['r_id'] == ROLE_KVS_HQ){
                    $this->db->from('ci_role_category'); 
                }else{
                    $this->db->from('ci_regions');
                    if ($_POST['r_id'] == ROLE_ZIET) {
                        $this->db->where('label=', 'ZT');
                    }else{
                        $this->db->where('label=', 'RO');
                    }
                }
                $qry = $this->db->get();
                if ($qry->num_rows()) {
                    $regions = $qry->result();
                    if (!empty($regions)) {
                        foreach ($regions as $key => $region) {
                           $options .='<option value="' . $region->id . '">' . ucwords($region->name) . '</option>';
                        }
                    }
                }
            }
            echo $options;
        }
    }
     //=================================== UPDATED FOR USER CREATION START ========================================//
    public function get_school() {
        if ($this->input->is_ajax_request()) {
            $options = '<option value="">Select</option>';
            if (!empty($_POST['r_id'])) {
                $schools = getwhere('ci_schools', '*', array('reg_id' => $_POST['r_id']));
                if (!empty($schools)) {
                    foreach ($schools as $key => $school) {
                        $options .='<option value="' . $school->id . '">' . ucwords($school->name) . '</option>';
                    }
                }
            }
            echo $options; 
        }
    }
    
    public function get_section() {
        if ($this->input->is_ajax_request()) {
            $options = '<option value="">Select</option>';
            if (!empty($_POST['r_id'])) {
                $this->db->select('*');
                $this->db->from('ci_role_category'); 
                $qry = $this->db->get();
                $schools = $qry->result();
                if (!empty($schools)) {
                    foreach ($schools as $key => $school) {
                        $options .='<option value="' . $school->id . '">' . ucwords($school->name) . '</option>';
                    }
                }
            }
            echo $options; 
        }
    }
    
    public function get_schoolcode() {
        if ($this->input->is_ajax_request()) {
            if (!empty($_POST['s_id'])) {
                $this->db->select("CONCAT(code, '#',zone,'#',station) AS `code_zone`");
                $this->db->from('ci_schools');
                $this->db->where('id=', $_POST['s_id']);
                $qry = $this->db->get()->row();
                $options =$qry->code_zone;
                echo trim($options);     
            }
            
        }
    }
    
    public function get_zone() {
        if ($this->input->is_ajax_request()) {
            if (!empty($_POST['r_id'])) {
                $this->db->select("CONCAT(code, '#',parent) AS `code_zone`");
                $this->db->from('ci_regions');
                $this->db->where('id=', $_POST['r_id']);
                $qry = $this->db->get()->row();
                $options =$qry->code_zone;
                echo $options;   
            }
            
        }
    }
    public function get_designationcat() {
        if ($this->input->is_ajax_request()) {
            if (!empty($_POST['d_id'])) {
                $this->db->select('cat_id');
                $this->db->from('ci_designations');
                $this->db->where('id=', $_POST['d_id']);
                $qry = $this->db->get()->row();
                $options =$qry->cat_id;
                echo $options;   
            }
            
        }
    }

}
