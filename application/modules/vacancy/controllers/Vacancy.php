<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vacancy extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('vacancy_model');
        //$this->load->model('employee/employee_model');
        if (!$this->is_logged_in()) {
            redirect(base_url());
        }
        $this->load->library('Excel');
    }
    
    public function index() {
         $view = 'index';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Academic Details',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }

    public function add() {
         $view = 'add';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Vacancy',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    
    public function addbulkvacancy() {
        if(isset($_FILES['VacancyFile'])){
            $new_name = date('YmdHis').'_'.$_FILES["VacancyFile"]['name'];
            $config['file_name'] = $new_name;
            $config['upload_path'] = "./Excel";
            $config['allowed_types'] = 'xls|xlsx';
            $config['max_size']      = 5120; // 5MB
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('VacancyFile')) {
                $data['error_msg'] = isset($response['error']) ? $response['error'] : $this->upload->display_errors();
            }else { 
                $uploadedSheet = $this->upload->data();//File Uploaded
                
                $path = $_FILES["VacancyFile"]["tmp_name"];
                $object = PHPExcel_IOFactory::load($path);
                $worksheet=$object->getSheet(0);
                $highestRow = $worksheet->getHighestRow();
                $Response=array();
                for($row=3; $row<=$highestRow; $row++){
                    $ExData=array(
                        'sno'           => trim($worksheet->getCellByColumnAndRow(0, $row)->getValue()),
                        'code'          => trim($worksheet->getCellByColumnAndRow(1, $row)->getValue()),
                        'role_type'     => trim($worksheet->getCellByColumnAndRow(2, $row)->getValue()),
                        'designation'   => trim($worksheet->getCellByColumnAndRow(3, $row)->getValue()),
                        'designation_type'   => trim($worksheet->getCellByColumnAndRow(4, $row)->getValue()),
                        'subject'       => trim($worksheet->getCellByColumnAndRow(5, $row)->getValue()),
                        'sanctioned_post'    => trim($worksheet->getCellByColumnAndRow(6, $row)->getValue())

                     );
                     //print_r($ExData); die;
                     $response = $this->vacancy_model->AddToVacancyMaster($ExData);
                     if($response['status'] == 'success'){
                         $ExData['status']='Success';
                         array_push($Response, $ExData);
                     } else {
                         $ExData['status']='Failed';
                         array_push($Response, $ExData);
                     } 
                }
                $view_data['Resp']=$Response;
            }
        }
        $view = 'addbulkvacancy';
        $data = array(
            'title' => WEBSITE_TITLE . ' - Add Bulk Vacancy',
            'javascripts' => array(),
            'style_sheets' => array(),
            'content' => $this->load->view($view, ( isset($view_data) ) ? $view_data : '', TRUE)
        );
        $this->load->view($this->template, $data);
    }
    //===================================== View Vacancy =======================================//
    public function get_all_vacancy() {
       
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];

        $totalData = $this->vacancy_model->getAllRegisteredProfile();
        $post_data = $this->input->post(null, true);
        $search    = $this->input->post('search')['value'];
        $response  = $this->vacancy_model->getAllRegisteredProfile($limit, $start, $order, $dir, $search, $post_data);
        //show($response);
        
        $users = isset($response['result']) ? $response['result'] : array();
        $totalFiltered = isset($response['count']) ? $response['count'] : 0;

        $data = array();
        if (!empty($users)) {
            $serial = $start;
            foreach ($users as $user) {
                ++$serial;
                $nestedData['KV_CODE'] = $user->KV_CODE;
                $nestedData['ROLE'] = $user->ROLE;
                $nestedData['KV_REGION_ZEIT'] = $user->KV_REGION_ZEIT;
                $nestedData['IN_POST'] = $user->IN_POST;
                $nestedData['DESI_TYPE'] = $user->DESI_TYPE;
                $nestedData['IN_SUBJECT'] = $user->IN_SUBJECT;
                $nestedData['SANCTION_POST'] = $user->SANCTION_POST;
                $nestedData['IN_POSITION'] = $user->IN_POSITION;
                $nestedData['TOTAL_VACANCY'] = $user->TOTAL_VACANCY;
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
 
   

}
