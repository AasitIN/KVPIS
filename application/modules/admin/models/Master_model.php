<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*
      function for getting all users listing with searching and ordering
     */

    public function get_all_designation_category_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(id) as total');
            $this->db->from('designation_category');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS dc.*", false);
        $this->db->from('designation_category dc');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(dc.name) LIKE '%$search%' ");
        }

        $qry = $this->db->get();

        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }

    public function get_all_designation_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(id) as total');
            $this->db->from('designations');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS d.*,dc.name as category_name", false);
        $this->db->from('designations d');
        $this->db->join('designation_category dc', 'd.cat_id=dc.id', 'LEFT');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(d.name) LIKE '%$search%' ");
        }

        $qry = $this->db->get();

        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }

    public function get_designation_by_id($id) {
        $this->db->select('d.id as designation_id, d.name as designation_name, dc.id as category_id, dc.name as category_name ,d.zt,d.ro,d.kv,d.hq');
        $this->db->from('designations d');
        $this->db->join('designation_category dc', 'd.cat_id=dc.id', 'LEFT');
        $this->db->where('d.id', $id);
        return $this->db->get()->row();
    }

    public function get_designation_category_by_id($id) {
        $this->db->select('*');
        $this->db->from('designation_category');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function designation_is_exists($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("designations");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function designation_category_is_exists($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("designation_category");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function add_designation($post_data, $id) {

        if (!empty($id) && !empty($id)) {
            $post_data['name'] = $post_data['name'];
            $this->db->where('id', $id);
            $qry = $this->db->update('designations', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Updated', json_encode($post_data), 'Designation Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        } else {
            $post_data['name'] = $post_data['name'];
            $post_data['created'] = date("Y-m-d H:i:s");
            $qry = $this->db->insert('designations', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Added', json_encode($post_data), 'Designation Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        }
    }

    public function add_designation_category($post_data, $id) {

        if (!empty($id) && !empty($id)) {
            $post_data['name'] = $post_data['name'];
            $this->db->where('id', $id);
            $qry = $this->db->update('designation_category', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Updated', json_encode($post_data), 'Designation Category Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        } else {
            $post_data['name'] = $post_data['name'];
            $post_data['created'] = date("Y-m-d H:i:s");
            $qry = $this->db->insert('designation_category', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Added', json_encode($post_data), 'Designation Category Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        }
    }

    /*
      function for getting all users listing with searching and ordering
     */

    public function get_all_category_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(id) as total');
            $this->db->from('category');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS rl.*", false);
        $this->db->from('category rl');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(rl.name) LIKE '%$search%' ");
        }

        $qry = $this->db->get();

        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }

    public function get_category_by_id($id) {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function category_is_exists($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("category");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function add_category($post_data, $id) {

        if (!empty($id) && !empty($id)) {
            $post_data['name'] = $post_data['name'];
            $this->db->where('id', $id);
            $qry = $this->db->update('category', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Updated', json_encode($post_data), 'Category Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        } else {
            $post_data['name'] = $post_data['name'];
            $post_data['created'] = date("Y-m-d H:i:s");
            $qry = $this->db->insert('category', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Added', json_encode($post_data), 'Category Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        }
    }

    public function get_all_region_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        $arr=array(2,3,5);
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(id) as total');
            $this->db->from('regions');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
    
        $this->db->select("SQL_CALC_FOUND_ROWS rl.*,z.name as zone", false);
        $this->db->from('regions rl');
        $this->db->join('regions z', 'z.id=rl.parent', 'LEFT');
        $this->db->where_in('rl.type', $arr);
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(rl.name) LIKE '%$search%' ");
        }
        
        $qry = $this->db->get();
        //show($this->db->last_query());
        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }

    public function add_region($post_data, $id) {
        if (!empty($id) && !empty($id)) {
            $string= explode('_', $post_data['region_type']);
            $label=$string[0];
            $type=$string[1];
            $insert_data['name'] = $post_data['name'];
            $insert_data['code'] = $post_data['code'];
            $insert_data['website'] = $post_data['website'];
            $insert_data['email'] = $post_data['email'];
            $insert_data['type'] = $type;
            $insert_data['label'] = $label;
            $insert_data['parent'] = $post_data['zone'];
            $insert_data['status'] = 1;
            unset($post_data['region_type']);
            $this->db->where('id', $id);
            $qry = $this->db->update('regions', $insert_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Updated', json_encode($insert_data), 'Region Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        } else {
            
            $string= explode('_', $post_data['region_type']);
            $label=$string[0];
            $type=$string[1];
            $insert_data['name'] = $post_data['name'];
            $insert_data['code'] = $post_data['code'];
            $insert_data['website'] = $post_data['website'];
            $insert_data['email'] = $post_data['email'];
            $insert_data['type'] = $type;
            $insert_data['label'] = $label;
            $insert_data['parent'] = $post_data['zone'];
            $insert_data['created'] = date("Y-m-d H:i:s");
            $insert_data['status'] = 1;
            unset($post_data['region_type']);
            $qry = $this->db->insert('regions', $insert_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Added', json_encode($insert_data), 'Region Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        }
    }

    public function get_region_by_id($id) {
        $this->db->select('r.*,r.parent as zone,concat(r.label,"_",r.type) as region_type,z.name as zonename');
        $this->db->from('regions r');
        $this->db->join('regions z', 'z.id=r.parent', 'LEFT');
        $this->db->where('r.id', $id);
        return $this->db->get()->row();
    }

    public function region_is_exists($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("regions");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_all_school_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(id) as total');
            $this->db->from('schools');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS s.*,r.name as region_name,z.name as zone_name,(CASE WHEN s.station='0' THEN 'NA' ELSE s.station END) AS station_name", false);
        $this->db->from('schools s');
        $this->db->join('regions r', 'r.id=s.reg_id', 'LEFT');
        $this->db->join('regions z', 'z.id=s.zone', 'LEFT');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(s.name,s.code,s.station,r.name,z.name) LIKE '%$search%' ");
        }

        $qry = $this->db->get();
        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }

    public function add_school($post_data, $id) {

        if (!empty($id) && !empty($id)) {
            $post_data['name'] = $post_data['name'];
            $post_data['code'] = $post_data['code'];
            $post_data['reg_id'] = $post_data['reg_id'];
            $post_data['zone'] = $post_data['zone'];
            $post_data['station'] = $post_data['station'];
            $post_data['status'] = 1;
            $this->db->where('id', $id);
            $qry = $this->db->update('schools', $post_data);
            //echo $this->db->last_query(); die;
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Updated', json_encode($post_data), 'School Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        } else {

            $post_data['name'] = $post_data['name'];
            $post_data['code'] = $post_data['code'];
            $post_data['reg_id'] = $post_data['reg_id'];
            $post_data['created'] = date("Y-m-d H:i:s");
            $post_data['status'] = 1;
            $qry = $this->db->insert('schools', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Added', json_encode($post_data), 'School Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        }
    }

    public function get_school_by_id($id) {
        $this->db->select('s.*,r.id as regid,r.name as regionname,z.name as zone_name,(CASE WHEN s.station="0" THEN "NA" ELSE s.station END) AS station_name');
        $this->db->from('schools as s');
        $this->db->join('regions as r', 'r.id=s.reg_id');
        $this->db->join('regions z', 'z.id=s.zone', 'LEFT');
        $this->db->where('s.id', $id);
        return $this->db->get()->row();
    }

    public function school_is_exists($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("schools");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_all_subject_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(id) as total');
            $this->db->from('subjects');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS rl.*", false);
        $this->db->from('subjects rl');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(rl.name) LIKE '%$search%' ");
        }

        $qry = $this->db->get();

        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }

    public function get_subject_by_id($id) {
        $this->db->select('*');
        $this->db->from('subjects');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function subject_is_exists($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("subjects");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function add_subject($post_data, $id) {

        if (!empty($id) && !empty($id)) {
            $post_data['name'] = $post_data['name'];
            $post_data['status'] = 1;
            $this->db->where('id', $id);
            $qry = $this->db->update('subjects', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Updated', json_encode($post_data), 'Subject Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        } else {
            $post_data['name'] = $post_data['name'];
            $post_data['status'] = 1;
            $post_data['created'] = date("Y-m-d H:i:s");
            $qry = $this->db->insert('subjects', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Added', json_encode($post_data), 'Subject Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        }
    }

    public function get_all_qualification_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(id) as total');
            $this->db->from('qualification');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS rl.*", false);
        $this->db->from('qualification rl');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(rl.name) LIKE '%$search%' ");
        }

        $qry = $this->db->get();

        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }

    public function get_qualification_by_id($id) {
        $this->db->select('*');
        $this->db->from('qualification');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function qualification_is_exists($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("qualification");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function promotion_is_exists($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("promotions");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_promotion_by_id($id) {
        $this->db->select('*');
        $this->db->from('promotions');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function add_promotion($post_data, $id) {
        if (!empty($id) && !empty($id)) {
            $post_data['name'] = $post_data['name'];
            //$post_data['status'] = 1;
            $this->db->where('id', $id);
            $qry = $this->db->update('promotions', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Updated', json_encode($post_data), 'Promotion Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        } else {
            $post_data['name'] = $post_data['name'];
            //$post_data['status'] = 1;
            $post_data['created'] = date("Y-m-d H:i:s");
            $qry = $this->db->insert('promotions', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Added', json_encode($post_data), 'Promotion Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        }
    }

    public function add_qualification($post_data, $id) {

        if (!empty($id) && !empty($id)) {
            $post_data['name'] = $post_data['name'];
            $post_data['status'] = 1;
            $this->db->where('id', $id);
            $qry = $this->db->update('qualification', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Updated', json_encode($post_data), 'Qualification Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        } else {
            $post_data['name'] = $post_data['name'];
            $post_data['status'] = 1;
            $post_data['created'] = date("Y-m-d H:i:s");
            $qry = $this->db->insert('qualification', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Added', json_encode($post_data), 'Qualification Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        }
    }

    /*
      function for getting all users listing with searching and ordering
     */

    public function get_all_promotion_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(id) as total');
            $this->db->from('promotions');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        $this->db->select("SQL_CALC_FOUND_ROWS rl.*", false);
        $this->db->from('promotions rl');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(rl.name) LIKE '%$search%' ");
        }

        $qry = $this->db->get();

        if ($qry->num_rows()) {
            $data['result'] = $qry->result();
        } else {
            $data['result'] = array();
        }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;
        return $data;
    }

    public function add_range($post_data, $id) {

        if (!empty($id) && !empty($id)) {
            $post_data['level_name'] = $post_data['level_name'];
            $post_data['range_from'] = $post_data['range_from'];
            $post_data['range_to'] = $post_data['range_to'];
            $post_data['status'] = 1;
            $this->db->where('id', $id);
            $qry = $this->db->update('level_range', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Updated', json_encode($post_data), 'Range Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        } else {
            $post_data['level_name'] = $post_data['level_name'];
            $post_data['range_from'] = $post_data['range_from'];
            $post_data['range_to'] = $post_data['range_to'];
            $post_data['status'] = 1;
            $post_data['created'] = date("Y-m-d H:i:s");
            $qry = $this->db->insert('level_range', $post_data);
            if ($qry) {
                $response['status'] = 'success';
                add_user_activity($this->auth_user_id, 'Added', json_encode($post_data), 'Range Module');
            } else {
                $response['status'] = 'error';
                $response['error'] = 'Some Error Occured';
            }
            return $response;
        }
    }

    /*
      function for getting all users listing with searching and ordering
     */

    public function get_all_range_list_json($limit = null, $start = null, $col = null, $dir = null, $search = null, $post_data = null) {
        if (func_num_args() == 0) {//this is used for getting total number of records
            $this->db->select('count(id) as total');
            $this->db->from('ci_level_range');
            $qry = $this->db->get();
            return $qry->row()->total;
        }
        
        $this->db->select("SQL_CALC_FOUND_ROWS L.id,L.level_name,L.range_from,L.range_to,L.status", false);
        $this->db->from('level_range L');
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }
        if ($col) {
            $this->db->order_by($col, $dir);
        }
        if ($search && !empty($search)) {
            $this->db->where("CONCAT(L.level_name) LIKE '%$search%' ");
        }
        $x=$this->db->last_query();
        $qry = $this->db->get();

            if ($qry->num_rows()) {
                $data['result'] = $qry->result();
            } else {
                $data['result'] = array();
            }

        $total = $this->db->query("SELECT FOUND_ROWS() AS count");
        $data['count'] = isset($total->row()->count) ? $total->row()->count : 0;

        return $data;
    }

    public function level_is_exists($id) {
        $this->db->where("id", $id);
        $query = $this->db->get("level_range");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_range_by_id($id) {
        $this->db->select('*');
        $this->db->from('level_range');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

}

?>
