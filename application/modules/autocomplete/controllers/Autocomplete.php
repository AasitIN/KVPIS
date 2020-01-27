<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Autocomplete extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('autocomplete_model');
        if (!$this->is_logged_in()) {
            redirect(base_url());
        }
    }

    function index() {
        $view = 'autocomplete';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Personal Details',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    function fetch() {
        $this->load->model('autocomplete_model');
        echo $this->autocomplete_model->fetch_data($this->uri->segment(3));
    }

    public function get_designation() {
        if ($this->input->is_ajax_request()) {
        header('Content-Type: application/x-json; charset=utf-8');
        $designation = $this->input->post('designation');
        echo(json_encode($this->autocomplete_model->fetchDesignationList($designation)));
   
        }
    }

}
