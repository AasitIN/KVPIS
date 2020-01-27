<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * TheTraining - TNG_Controller
 * @package     TheTraining
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 **/
class MY_Controller extends CI_Controller {
    public $template = 'templates/template';
    public $front_template = 'templates/front_template';
    public $auth_data;
    public $role_id;
    public $auth_user_id;
    public $is_password_changed;
    public $user_type;

    public function __construct() {
        parent::__construct();
        $this->load->library('my_form_validation');
        $this->load->helper('file');
        $this->is_logged_in();
        $session = $this->session->all_userdata();
        if (!isset($session['user_id']) || empty($session['user_id'])) {
            //$this->session->set_flashdata('error','Please login in');   
            //redirect(base_url());
        } else {
            $user_info = $this->get_user_info($session['user_id']);
            $this->auth_data = $user_info;
            $this->role_id = $user_info->role_id;
            $this->user_type = $user_info->role_id;
            $this->auth_user_id = $user_info->id;
            $this->is_password_changed = $user_info->is_password_changed;
            $this->user_permissions = $user_info->permissions;
            $this->check_permission();
        }
    }

    public function get_user_info($user_id) {
        $this->db->select('us.*,rs.permissions,rs.name,rs.label');
        $this->db->from('users us');
        $this->db->join('roles rs', 'us.role_id=rs.id');
        $this->db->where('us.id', $user_id);
        $this->db->where('us.status', APPROVED);
        $this->db->where('rs.status', ACTIVE);
        $qry = $this->db->get();
        if ($qry->num_rows()) {
            return $qry->row();
        } else {
            $this->session->set_flashdata('success', 'Please login in');
            redirect(base_url());
        }
    }

    public function is_logged_in() {
        return (bool) $this->session->userdata('user_id');
    }

    function regex_check($str) {
        if (!empty($str)) {
            if (preg_match('/^[a-z0-9A-Z .!@#$%&*()_-]+$/', $str)) {
                return TRUE;
            } else {
                $this->form_validation->set_message('regex_check', 'The %s field is not is correct format.');
                return FALSE;
            }
        } else {
            return TRUE;
        }
    }

    function regex_check_url($str) {
        if (!empty($str)) {
            if (preg_match('/^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/', $str)) {
                return TRUE;
            } else {
                $this->form_validation->set_message('regex_check_url', 'The %s field is not is correct format.');
                return FALSE;
            }
        } else {
            return TRUE;
        }
    }

    function check_permission() {
        $role = $this->user_type;
        $user_permissions = $this->user_permissions;
        $module = $this->router->fetch_module();
        $controller = $this->router->fetch_class();
        $method = $this->router->fetch_method();
        $access_path = $controller . '/' . $method;

        if ($this->input->is_ajax_request()) {
            return true;
        }
        $allowed_methods = array('activities_logs', 'set_permission');

        if ($method == 'activities_logs' || $controller == 'permission_denied') {
            return true;
        }
        if ($module == 'admin') {
            if ($user_permissions == '') {
                redirect(base_url() . 'permission_denied');
            } else {
//                $user_permission = json_decode($user_permissions);
//                if (!in_array($access_path, $user_permission)) {
//                    redirect(base_url() . 'permission_denied');
//                }
            }
        }
    }

    public function file_photo_validation() {
        if (isset($_FILES['photo']['name']) && $_FILES['photo']['name']!= "") {

            if (has_malicious_field($_FILES['photo']['name'])) {
                $this->form_validation->set_message('file_photo_validation', 'File name content is suspicious,please try another image');
                return false;
            }
            $photo = $this->common_model->callback_upload_image('photo', $this->auth_user_id, 'common/photo');

            if (isset($photo['error']) && !empty($photo['error'])) {
                $this->form_validation->set_message('file_photo_validation', $photo['error']);
                return false;
            }

            $mime_content_type = mime_content_type($_FILES['photo']['tmp_name']);
            $allowed_mime_type_arr = array('image/gif', 'image/jpg', 'image/jpeg', 'image/png', 'image/x-png');
            $mime = get_mime_by_extension($_FILES['photo']['name']);
            $explode = explode(".", $_FILES['photo']['name']);
            if (count($explode) > 2) {
                $this->form_validation->set_message('file_photo_validation', 'Multiple Extension Not Allow');
                return false;
            } else {
                if (in_array($mime_content_type, $allowed_mime_type_arr)) {
                    if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != "") {
                        if (in_array($mime, $allowed_mime_type_arr)) {
                            return true;
                        } else {
                            $this->form_validation->set_message('file_photo_validation', 'Please select only gif/jpg/png photo.');
                            return false;
                        }
                    }
                } else {
                    $this->form_validation->set_message('file_photo_validation', 'The filetype you are attempting to upload is not allowed.');
                    return false;
                }
            }
        } else {
            $allowed_mime_type_arr = array('image/gif', 'image/jpg', 'image/jpeg', 'image/png', 'image/x-png');
            $mime_content_type = mime_content_type($_POST['update_photo']);
            $mime = get_mime_by_extension($_POST['update_photo']);
            if (in_array($mime_content_type, $allowed_mime_type_arr)) {
                if (isset($_POST['update_photo']) && $_POST['update_photo'] != "") {
                    if (in_array($mime, $allowed_mime_type_arr)) {
                        return true;
                    } else {
                        $this->form_validation->set_message('file_photo_validation', 'The filetype you are attempting to upload is not allowed.');
                        return false;
                    }
                }
            } else {
                return true;
            }
        }
    }

    /* public function file_photo_validation($str) {
      if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != "") {
      $photo = $this->common_model->callback_upload_image('photo', $this->auth_user_id, 'common/photo');

      if (isset($photo['error']) && !empty($photo['error'])) {
      $this->form_validation->set_message('file_photo_validation', $photo['error']);
      return false;
      }
      $mime_content_type = mime_content_type($_FILES['photo']['tmp_name']);
      $allowed_mime_type_arr = array('image/gif', 'image/jpg', 'image/jpeg', 'image/png', 'image/x-png');
      $mime = get_mime_by_extension($_FILES['photo']['name']);
      $explode = explode(".", $_FILES['photo']['name']);
      if (count($explode) > 2) {
      $this->form_validation->set_message('file_photo_validation', 'Multiple Extension Not Allow');
      return false;
      } else {
      if (in_array($mime_content_type, $allowed_mime_type_arr)) {
      if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != "") {
      if (in_array($mime, $allowed_mime_type_arr)) {
      return true;
      } else {
      $this->form_validation->set_message('file_photo_validation', 'Please select only gif/jpg/png photo.');
      return false;
      }
      }
      } else {
      $this->form_validation->set_message('file_photo_validation', 'The filetype you are attempting to upload is not allowed.');
      return false;
      }
      }
      }
      } */

    function file_err($str) {
        $this->form_validation->set_message('file_err', 'The file is not in correct format');
        return FALSE;
    }
    function sendMail(){
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'aasit.analyst@gmail.com', // change it to yours
            'smtp_pass' => '', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

            $message = '';
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('xxx@gmail.com'); // change it to yours
            $this->email->to('xxx@gmail.com');// change it to yours
            $this->email->subject('Resume from JobsBuddy for your Job posting');
            $this->email->message($message);
            if($this->email->send()){
                echo 'Email sent.';
            }else{
                show_error($this->email->print_debugger());
            }
    }

}
