<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        if (!$this->is_logged_in()) {
            redirect(base_url());
        }
    }

    public function designation_category() {
        $view = 'master/designation_category';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Designation Category List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function designation() {
        $view = 'master/designation';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Designation List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function get_designation_list() {
        $columns = array(
            0 => 'id',
            1 => 'name',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->master_model->get_all_designation_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->master_model->get_all_designation_list_json($limit, $start, $order, $dir, $search, $post_data);
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['decode_id'] = base64_encode($user->id);
                $nestedData['name'] = $user->name;
                $nestedData['category_name'] = $user->category_name;
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

    public function get_designation_category_list() {
        $columns = array(
            0 => 'id',
            1 => 'name',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->master_model->get_all_designation_category_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->master_model->get_all_designation_category_list_json($limit, $start, $order, $dir, $search, $post_data);
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['decode_id'] = base64_encode($user->id);
                $nestedData['name'] = $user->name;
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

    public function designation_details($id) {
        $view = 'admin/master/designation_view';
        if (isset($id) || !empty($id)) {
            $view_data['designation'] = $this->master_model->get_designation_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - Designation List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function designation_category_details($id) {
        $view = 'admin/master/designation_category_view';
        if (isset($id) || !empty($id)) {
            $view_data['designation_category'] = $this->master_model->get_designation_category_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - Designation Category List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function add_designation($id=NULL) {
        if (!empty($id) && !is_numeric($id)) {
            redirect('admin/master/designation');
        }

        if (!is_null($id) && !$this->master_model->designation_is_exists($id)) {
            $this->session->set_flashdata('error', 'Designation does not exists.');
            redirect('admin/master/designation');
        }

        if (isset($id) && !empty($id)) {
            $view_data['designation'] = $this->master_model->get_designation_by_id($id);
        }
        if ($post_data = $this->input->post(null, true)) {

            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|callback_check_unique_desination_name|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->master_model->add_designation($post_data, $id);
                if ($response['status'] == 'success') {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Designation Updated Successfully.');
                        redirect('admin/master/designation');
                    } else {
                        $this->session->set_flashdata('success', 'Designation  Added Successfully.');
                        redirect('admin/master/designation');
                    }
                } else {
                    if (!empty($id)) {
                        $this->session->set_flashdata('error', 'Designation Not Updated Successfully.');
                        redirect('admin/master/add_designation' . $id);
                    } else {
                        $this->session->set_flashdata('error', 'Designation Not Added Successfully.');
                        redirect('admin/master/add_designation' . $id);
                    }
                }
            }
        }
        $view = 'master/add_designation';


        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Designation',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function add_designation_category($id=NULL) {
        if (!empty($id) && !is_numeric($id)) {
            redirect('admin/master/designation_category');
        }

        if (!is_null($id) && !$this->master_model->designation_category_is_exists($id)) {
            $this->session->set_flashdata('error', 'Designation Category does not exists.');
            redirect('admin/master/designation_category');
        }

        if (isset($id) && !empty($id)) {
            $view_data['designation_category'] = $this->master_model->get_designation_category_by_id($id);
        }
        if ($post_data = $this->input->post(null, true)) {

            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|callback_check_unique_desination_category_name|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->master_model->add_designation_category($post_data, $id);
                if ($response['status'] == 'success') {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Designation Category Updated Successfully.');
                        redirect('admin/master/designation_category');
                    } else {
                        $this->session->set_flashdata('success', 'Designation Category Added Successfully.');
                        redirect('admin/master/designation_category');
                    }
                } else {
                    if (!empty($id)) {
                        $this->session->set_flashdata('error', 'Designation Category Not Updated Successfully.');
                        redirect('admin/master/add_designation_category' . $id);
                    } else {
                        $this->session->set_flashdata('error', 'Designation Category Not Added Successfully.');
                        redirect('admin/master/add_designation_category' . $id);
                    }
                }
            }
        }
        $view = 'master/add_designation_category';


        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Designation Category',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function check_unique_desination_name() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->db->select("dc.id");
        $this->db->from("designations dc");
        if (!empty($id) && $id != 0) {
            $this->db->where('dc.id !=', $id);
        }
        $this->db->where('dc.name', $name);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_desination_name', 'This name already existed');
            return false;
        } else {
            return true;
        }
    }

    public function check_unique_desination_category_name() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->db->select("dc.id");
        $this->db->from("designation_category dc");
        if (!empty($id) && $id != 0) {
            $this->db->where('dc.id !=', $id);
        }
        $this->db->where('dc.name', $name);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_desination_category_name', 'This name already existed');
            return false;
        } else {
            return true;
        }
    }

    public function delete_designation_category() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $category_id = $post['category_id'];
            if ($category_id) {
                $this->db->where('id', $category_id);
                $qry = $this->db->delete('ci_designation_category');
                if ($qry) {
                    $this->session->set_flashdata('success', 'Designation Category Deleted successfully');
                    echo '1';
                }
            }
        }
    }

    public function delete_designation() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $designation_id = $post['designation_id'];
            if ($designation_id) {
                $this->db->where('id', $designation_id);
                $qry = $this->db->delete('ci_designations');
                if ($qry) {
                    $this->session->set_flashdata('success', 'Designation Deleted successfully');
                    echo '1';
                }
            }
        }
    }

    public function category() {
        $view = 'master/category/index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Category List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function get_category() {
        $columns = array(
            0 => 'id',
            1 => 'name',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->master_model->get_all_category_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->master_model->get_all_category_list_json($limit, $start, $order, $dir, $search, $post_data);
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['decode_id'] = base64_encode($user->id);
                $nestedData['name'] = $user->name;
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

    public function categorydetails($id) {
        $view = 'master/category/view';
        if (isset($id) || !empty($id)) {
            $view_data['category'] = $this->master_model->get_category_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - Category List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function addcategory($id=NULL) {
        if (!empty($id) && !is_numeric($id)) {
            redirect('admin/master/category');
        }

        if (!is_null($id) && !$this->master_model->category_is_exists($id)) {
            $this->session->set_flashdata('success', 'Category does not exists.');
            redirect('admin/master/category');
        }

        if (isset($id) && !empty($id)) {
            $view_data['category'] = $this->master_model->get_category_by_id($id);
        }
        if ($post_data = $this->input->post(null, true)) {

            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|callback_check_unique_category_name|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->master_model->add_category($post_data, $id);
                if ($response['status'] == 'success') {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Category Updated Successfully.');
                        redirect('admin/master/category');
                    } else {
                        $this->session->set_flashdata('success', 'Category Added Successfully.');
                        redirect('admin/master/category');
                    }
                } else {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Category Not Updated Successfully.');
                        redirect('admin/master/addcategory' . $id);
                    } else {
                        $this->session->set_flashdata('success', 'Category Not Added Successfully.');
                        redirect('admin/master/addcategory' . $id);
                    }
                }
            }
        }
        $view = 'master/category/add';


        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Category',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function check_unique_category_name() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->db->select("ca.id");
        $this->db->from("category ca");
        if (!empty($id) && $id != 0) {
            $this->db->where('ca.id !=', $id);
        }
        $this->db->where('ca.name', $name);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_category_name', 'This name already existed');
            return false;
        } else {
            return true;
        }
    }

    public function region() {
        $view = 'master/region/index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Region List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function get_region() {
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'code',
            3 => 'zone',
            4 => 'website',
            5 => 'email',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->master_model->get_all_region_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->master_model->get_all_region_list_json($limit, $start, $order, $dir, $search, $post_data);

        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['decode_id'] = base64_encode($user->id);
                $nestedData['name'] = $user->name;
                $nestedData['code'] = $user->code;
                $nestedData['zone'] = $user->zone;
                $nestedData['website'] = $user->website;
                $nestedData['email'] = $user->email;
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

    public function regiondetails($id) {
        $view = 'master/region/view';
        if (isset($id) || !empty($id)) {
            $view_data['region'] = $this->master_model->get_region_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - Region List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function addregion($id=NULL) {
        if (!empty($id) && !is_numeric($id)) {
            redirect('admin/master/region');
        }

        if (!is_null($id) && !$this->master_model->region_is_exists($id)) {
            $this->session->set_flashdata('success', 'Region does not exists.');
            redirect('admin/master/region');
        }

        if (isset($id) && !empty($id)) {
            $view_data['region'] = $this->master_model->get_region_by_id($id);
            //show($view_data['region']);
        }
        if ($post_data = $this->input->post(null, true)) {
            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|callback_check_unique_region_name|callback_regex_check');
            $this->form_validation->set_rules('code', 'Code', 'required|xss_clean|callback_regex_check');
            $this->form_validation->set_rules('email', 'Email', 'xss_clean|callback_check_unique_region_email|callback_regex_check');
            $this->form_validation->set_rules('website', 'Website', 'xss_clean|callback_regex_check_url');
            $this->form_validation->set_rules('region_type', 'Type', 'required|xss_clean');
            $this->form_validation->set_rules('zone', 'Zone', 'required|xss_clean|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->master_model->add_region($post_data, $id);
                if ($response['status'] == 'success') {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Region Updated Successfully.');
                        redirect('admin/master/region');
                    } else {
                        $this->session->set_flashdata('success', 'Region Added Successfully.');
                        redirect('admin/master/region');
                    }
                } else {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Region Not Updated Successfully.');
                        redirect('admin/master/addregion/' . $id);
                    } else {
                        $this->session->set_flashdata('success', 'Region Not Added Successfully.');
                        redirect('admin/master/addregion/' . $id);
                    }
                }
            }
        }
        $view = 'master/region/add';


        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Region',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function check_unique_region_name() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->db->select("ca.id");
        $this->db->from("regions ca");
        if (!empty($id) && $id != 0) {
            $this->db->where('ca.id !=', $id);
        }
        $this->db->where('ca.name', $name);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_region_name', 'This name already existed');
            return false;
        } else {
            return true;
        }
    }

    public function check_unique_region_email() {
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        if (isset($email) && $email != '') {
            $this->db->select("ca.id");
            $this->db->from("regions ca");
            if (!empty($id) && $id != 0) {
                $this->db->where('ca.id !=', $id);
            }
            $this->db->where('ca.email', $email);
            $q = $this->db->get();
            if ($q->num_rows()) {
                $this->form_validation->set_message('check_unique_region_email', 'This email already existed');
                return false;
            } else {
                return true;
            }
        } else {
            return true;
        }
    }

    public function school() {
        $view = 'master/school/index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - School List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function get_school() {
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'region',
            3 => 'code',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];
        $totalData = $this->master_model->get_all_school_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->master_model->get_all_school_list_json($limit, $start, $order, $dir, $search, $post_data);

        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['decode_id'] = base64_encode($user->id);
                $nestedData['region'] = $user->region_name;
                $nestedData['station'] = $user->station_name;
                $nestedData['zone'] = $user->zone_name;
                $nestedData['name'] = $user->name;
                $nestedData['code'] = $user->code;
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

    public function schooldetails($id) {
        $view = 'master/school/view';
        if (isset($id) || !empty($id)) {
            $view_data['school'] = $this->master_model->get_school_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - School List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function addschool($id=NULL) {
        if (!empty($id) && !is_numeric($id)) {
            $this->session->set_flashdata('error', 'Invalid Argument.');
            redirect('admin/master/school');
        }
        if (!is_null($id) && !$this->master_model->school_is_exists($id)) {
            $this->session->set_flashdata('error', 'School does not exists.');
            redirect('admin/master/school');
        }
        if (isset($id) && !empty($id)) {
            $view_data['school'] = $this->master_model->get_school_by_id($id);
        }
        if ($post_data = $this->input->post(null, true)) {

            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|callback_check_unique_school_name|callback_regex_check');
            $this->form_validation->set_rules('code', 'Code', 'required|xss_clean|callback_check_unique_school_code|callback_regex_check');
            $this->form_validation->set_rules('reg_id', 'Region', 'required|xss_clean');
            $this->form_validation->set_rules('station', 'Station', 'required|xss_clean');
            $this->form_validation->set_rules('zone', 'Zone', 'required|xss_clean');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->master_model->add_school($post_data, $id);
                if ($response['status'] == 'success') {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'School Updated Successfully.');
                        redirect('admin/master/school');
                    } else {
                        $this->session->set_flashdata('success', 'School Added Successfully.');
                        redirect('admin/master/school');
                    }
                } else {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'School Not Updated Successfully.');
                        redirect('admin/master/addschool/' . $id);
                    } else {
                        $this->session->set_flashdata('success', 'School Not Added Successfully.');
                        redirect('admin/master/addschool/' . $id);
                    }
                }
            }
        }
        $view = 'master/school/add';


        $data = array(
            'title' => WEBSITE_TITLE . ' - Add School',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function check_unique_school_name() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->db->select("ca.id");
        $this->db->from("schools ca");
        if (!empty($id) && $id != 0) {
            $this->db->where('ca.id !=', $id);
        }
        $this->db->where('ca.name', $name);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_school_name', 'This name already existed');
            return false;
        } else {
            return true;
        }
    }

    public function check_unique_school_code() {
        $id = $this->input->post('id');
        $name = $this->input->post('code');
        $this->db->select("ca.id");
        $this->db->from("schools ca");
        if (!empty($id) && $id != 0) {
            $this->db->where('ca.id !=', $id);
        }
        $this->db->where('ca.code', $name);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_school_code', 'This Code already existed');
            return false;
        } else {
            return true;
        }
    }

    public function subject() {
        $view = 'master/subject/index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Subject List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function get_subject() {
        $columns = array(
            0 => 'id',
            1 => 'name',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->master_model->get_all_subject_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->master_model->get_all_subject_list_json($limit, $start, $order, $dir, $search, $post_data);
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['decode_id'] = base64_encode($user->id);
                $nestedData['name'] = $user->name;
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

    public function subjectdetails($id) {
        $view = 'master/subject/view';
        if (isset($id) || !empty($id)) {
            $view_data['subject'] = $this->master_model->get_subject_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - Subject List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function addsubject($id=NULL) {
        if (!empty($id) && !is_numeric($id)) {
            redirect('admin/master/subject');
        }

        if (!is_null($id) && !$this->master_model->subject_is_exists($id)) {
            $this->session->set_flashdata('success', 'Subject does not exists.');
            redirect('admin/master/subject');
        }

        if (isset($id) && !empty($id)) {
            $view_data['subject'] = $this->master_model->get_subject_by_id($id);
        }
        if ($post_data = $this->input->post(null, true)) {

            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|callback_check_unique_subject_name|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->master_model->add_subject($post_data, $id);
                if ($response['status'] == 'success') {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Subject Updated Successfully.');
                        redirect('admin/master/subject');
                    } else {
                        $this->session->set_flashdata('success', 'Subject Added Successfully.');
                        redirect('admin/master/subject');
                    }
                } else {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Subject Not Updated Successfully.');
                        redirect('admin/master/addsubject/' . $id);
                    } else {
                        $this->session->set_flashdata('success', 'Subject Not Added Successfully.');
                        redirect('admin/master/addsubject/' . $id);
                    }
                }
            }
        }
        $view = 'master/subject/add';


        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Subject',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function check_unique_subject_name() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->db->select("ca.id");
        $this->db->from("subjects ca");
        if (!empty($id) && $id != 0) {
            $this->db->where('ca.id !=', $id);
        }
        $this->db->where('ca.name', $name);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_subject_name', 'This name already existed');
            return false;
        } else {
            return true;
        }
    }

    public function qualification() {
        $view = 'master/qualification/index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Qualification List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function get_qualification() {
        $columns = array(
            0 => 'id',
            1 => 'name',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->master_model->get_all_qualification_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->master_model->get_all_qualification_list_json($limit, $start, $order, $dir, $search, $post_data);
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['id'] = $user->id;
                $nestedData['decode_id'] = base64_encode($user->id);
                $nestedData['name'] = $user->name;
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

    public function qualificationdetails($id) {
        $view = 'master/qualification/view';
        if (isset($id) || !empty($id)) {
            $view_data['qualification'] = $this->master_model->get_qualification_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - Qualification List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function addqualification($id=NULL) {
        if (!empty($id) && !is_numeric($id)) {
            redirect('admin/master/qualification');
        }

        if (!is_null($id) && !$this->master_model->qualification_is_exists($id)) {
            $this->session->set_flashdata('success', 'Subject does not exists.');
            redirect('admin/master/qualification');
        }

        if (isset($id) && !empty($id)) {
            $view_data['qualification'] = $this->master_model->get_qualification_by_id($id);
        }
        if ($post_data = $this->input->post(null, true)) {

            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|callback_check_unique_qualification_name|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->master_model->add_qualification($post_data, $id);
                if ($response['status'] == 'success') {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Qualification Updated Successfully.');
                        redirect('admin/master/qualification');
                    } else {
                        $this->session->set_flashdata('success', 'Qualification Added Successfully.');
                        redirect('admin/master/qualification');
                    }
                } else {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Qualification Not Updated Successfully.');
                        redirect('admin/master/addqualification/' . $id);
                    } else {
                        $this->session->set_flashdata('success', 'Qualification Not Added Successfully.');
                        redirect('admin/master/addqualification/' . $id);
                    }
                }
            }
        }
        $view = 'master/qualification/add';


        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Qualification',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function check_unique_qualification_name() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->db->select("ca.id");
        $this->db->from("qualification ca");
        if (!empty($id) && $id != 0) {
            $this->db->where('ca.id !=', $id);
        }
        $this->db->where('ca.name', $name);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_qualification_name', 'This name already existed');
            return false;
        } else {
            return true;
        }
    }

    public function delete_school() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $school_id = $post['school_id'];
            if ($school_id) {
                $this->db->where('id', $school_id);
                $qry = $this->db->delete('ci_schools');
                if ($qry) {
                    $this->session->set_flashdata('success', 'School Deleted successfully');
                    echo '1';
                }
            }
        }
    }

    public function delete_region() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $region_id = $post['region_id'];
            if ($region_id) {
                $this->db->where('id', $region_id);
                $qry = $this->db->delete('ci_regions');
                if ($qry) {
                    $this->session->set_flashdata('success', 'Region Deleted successfully');
                    echo '1';
                }
            }
        }
    }

    public function delete_category() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $category_id = $post['category_id'];
            if ($category_id) {
                $this->db->where('id', $category_id);
                $qry = $this->db->delete('ci_category');
                if ($qry) {
                    $this->session->set_flashdata('success', 'Category Deleted successfully');
                    echo '1';
                }
            }
        }
    }

    public function delete_subject() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $subject_id = $post['subject_id'];
            if ($subject_id) {
                $this->db->where('id', $subject_id);
                $qry = $this->db->delete('ci_subjects');
                if ($qry) {
                    $this->session->set_flashdata('success', 'Subject Deleted successfully');
                    echo '1';
                }
            }
        }
    }

    public function delete_qualification() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $qualification_id = $post['qualification_id'];
            if ($qualification_id) {
                $this->db->where('id', $qualification_id);
                $qry = $this->db->delete('ci_qualification');
                if ($qry) {
                    $this->session->set_flashdata('success', 'Qualification Deleted successfully');
                    echo '1';
                }
            }
        }
    }
    
    public function promotions() {
        $view = 'master/promotion/index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Promotion List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function get_promotion() {
        $columns = array(
            0 => 'id',
            1 => 'name',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];
        $totalData = $this->master_model->get_all_promotion_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->master_model->get_all_promotion_list_json($limit, $start, $order, $dir, $search, $post_data);
       
        $promotions = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($promotions)) {
            $serial = $start;
            foreach ($promotions as $promotion) {
                ++$serial;
                $nestedData['id'] = $promotion->id;
                $nestedData['decode_id'] = base64_encode($promotion->id);
                $nestedData['name'] = $promotion->name;
                $nestedData['serial_no'] = $serial;
                $data[] = $nestedData;
            }
        }
        //print_r($nestedData);die;
        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        echo json_encode($json_data);
    }
    
    public function addpromotion($id=NULL) {
        if (!empty($id) && !is_numeric($id)) {
            redirect('admin/master/promotion');
        }

        if (!is_null($id) && !$this->master_model->promotion_is_exists($id)) {
            $this->session->set_flashdata('success', 'Promotion does not exists.');
            redirect('admin/master/promotion');
        }

        if (isset($id) && !empty($id)) {
            $view_data['promotion'] = $this->master_model->get_promotion_by_id($id);
        }
        if ($post_data = $this->input->post(null, true)) {
            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|callback_check_unique_promotion_name|callback_regex_check');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->master_model->add_promotion($post_data, $id);
                if ($response['status'] == 'success') {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Promotion Updated Successfully.');
                        redirect('admin/master/promotions');
                    } else {
                        $this->session->set_flashdata('success', 'Promotion Added Successfully.');
                        redirect('admin/master/promotions');
                    }
                } else {
                    if (!empty($id)) {
                        $this->session->set_flashdata('error', 'Promotion Not Updated Successfully.');
                        redirect('admin/master/addpromotion' . $id);
                    } else {
                        $this->session->set_flashdata('error', 'Promotion Not Added Successfully.');
                        redirect('admin/master/addpromotion' . $id);
                    }
                }
            }
        }
        $view = 'master/promotion/add';


        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Promotion',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function check_unique_promotion_name() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->db->select("ca.id");
        $this->db->from("promotions ca");
        if (!empty($id) && $id != 0) {
            $this->db->where('ca.id !=', $id);
        }
        $this->db->where('ca.name', $name);
        $q = $this->db->get();
        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_promotion_name', 'This name already existed');
            return false;
        } else {
            return true;
        }
    }
    public function promotiondetails($id) {
        $view = 'master/promotion/view';
        if (isset($id) || !empty($id)) {
            $view_data['promotion'] = $this->master_model->get_promotion_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - Promotion List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function delete_promotion() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $promotion_id = $post['promotion_id'];
            if ($promotion_id) {
                $this->db->where('id', $promotion_id);
                $qry = $this->db->delete('ci_promotions');
                if ($qry) {
                    $this->session->set_flashdata('success', 'Promotion Deleted successfully');
                    echo '1';
                }
            }
        }
    }

    public function level_range() {
        $view = 'master/level-range/index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Level Range List',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function addrange($id=NULL) {
        if (!empty($id) && !is_numeric($id)) {
            redirect('admin/master/level_range');
        }

        if (!is_null($id) && !$this->master_model->level_is_exists($id)) {
            $this->session->set_flashdata('success', 'Data does not exists.');
            redirect('admin/master/level_range');
        }

        if (isset($id) && !empty($id)) {
            $view_data['range'] = $this->master_model->get_range_by_id($id);
        }
        if ($post_data = $this->input->post(null, true)) {
            $this->form_validation->set_rules('level_name', 'Level Name', 'required|xss_clean|callback_check_unique_level');
            $this->form_validation->set_rules('range_from', 'Range From', 'required|xss_clean');
            $this->form_validation->set_rules('range_to', 'Range To', 'required|xss_clean');
            if ($this->form_validation->run($this) !== FALSE) {
                $response = $this->master_model->add_range($post_data, $id);
                if ($response['status'] == 'success') {
                    if (!empty($id)) {
                        $this->session->set_flashdata('success', 'Data Updated Successfully.');
                        redirect('admin/master/level_range');
                    } else {
                        $this->session->set_flashdata('success', 'Data Added Successfully.');
                        redirect('admin/master/level_range');
                    }
                } else {
                    if (!empty($id)) {
                        $this->session->set_flashdata('error', 'Data Not Updated Successfully.');
                        redirect('admin/master/level_range' . $id);
                    } else {
                        $this->session->set_flashdata('error', 'Data Not Added Successfully.');
                        redirect('admin/master/level_range');
                    }
                }
            }
        }
        $view = 'master/level-range/add';


        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Range',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function check_unique_level() {
        
        $id = $this->input->post('id');
        $level_name = $this->input->post('level_name');
        $this->db->select("cr.id");
        $this->db->from("ci_level_range cr");
        if (!empty($id) && $id != 0) {
            $this->db->where('cr.id !=', $id);
        }
        $this->db->where('cr.level_name', $level_name);
        $q = $this->db->get();

        if ($q->num_rows()) {
            $this->form_validation->set_message('check_unique_level', 'This level already existed');
            return false;
        } else {
            return true;
        }
    }
    
    public function get_range(){
        $columns = array(
            0 => 'id',
            1 => 'level_name',
            2 => 'range_from',
            3 => 'range_to',
            4 => 'status'
            );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];
       
        $totalData = $this->master_model->get_all_range_list_json();
        $post_data = $this->input->post(null, true);
        $search = $this->input->post('search')['value'];
        $response = $this->master_model->get_all_range_list_json($limit, $start, $order, $dir, $search, $post_data);
       
        $ranges = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($ranges)) {
            $serial = $start;
            foreach ($ranges as $range) {
                ++$serial;
                $nestedData['id'] = $range->id;
                $nestedData['level_name'] = $range->level_name;
                $nestedData['range_from'] = $range->range_from;
                $nestedData['range_to'] = $range->range_to;
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

    public function rangedetails($id) {
        $view = 'master/level-range/view';
        if (isset($id) || !empty($id)) {
            $view_data['data'] = $this->master_model->get_range_by_id($id);
        }

        $data = array(
            'title' => WEBSITE_TITLE . ' - Range View',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function delete_range() {
        if ($this->input->is_ajax_request()) {

            $post = $this->input->post(null, true);
            $range_id = $post['range_id'];
            if ($range_id) {
                $this->db->where('id', $range_id);
                $qry = $this->db->delete('ci_level_range');
                if ($qry) {
                    $this->session->set_flashdata('success', 'Data Deleted successfully');
                    echo '1';
                }
            }
        }
    }

}
?>