<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Autocomplete_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function fetch_data($query) {
        $this->db->like('name', $query);
        $query = $this->db->get('designations');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $output[] = array(
                    'name' => $row["name"],
                 );
            }
            echo json_encode($output);
        }
        else{
            echo 0;
        }
    }
    
    function fetchDesignationList($designation) {
        if ($designation != '') {
            $this->db->select('*');
            $this->db->where('name', $designation);
            $query = $this->db->get('designations');
            $designations = array();
            if ($query->result()) {
                foreach ($query->result() as $value) {
                    $designations[$value->id] = $value->name;
                }
                return $designations;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

}
