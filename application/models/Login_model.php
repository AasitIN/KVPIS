<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_model {

    public function construct() {
        parent::__construct();
    }
    public function login() {
        $response = array();
        $post = $this->input->post(null, true);

        $qry = $this->db->select('*')->from('users')->where(array('username' => $post['username'], 'status' => 1))->get();
        if ($qry->num_rows()) {

            $db_password = hash_hmac('sha512', $qry->row()->password, $this->session->userdata('secKey'));
            if ($db_password == $post['password']) {
                $session = $this->session->all_userdata();
                $this->db->where('session_id', $session['__ci_last_regenerate']);
                $this->db->delete('ci_secret_key');
                session_regenerate_id();
                $user_info = array(
                                    'user_id'       => $qry->row()->id, 
                                    'user_name'     => $qry->row()->username, 
                                    'role_id'       => $qry->row()->role_id,
                                    'role_category' => $qry->row()->role_category,
                                    'region_id'     => $qry->row()->region_id,
                                    'school_id'     => $qry->row()->school_id
                                );
                $this->session->set_userdata($user_info);
                add_user_activity($user_info['user_id'],'', 'Login', 'Login Successfully');
                $this->db->where('username', $post['username']);
                $this->db->update('users', array('last_login' => date('Y-m-d H:i:s')));
                $response = $user_info;
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['error'] = 'User Id or password does not match';
            }
        } else {
            $response['status'] = 'error';
            $response['error'] = 'User Id or password does not match';
        }
        return $response;
    }

}
