<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cronfunction extends MY_Controller {

    public function __construct() {
        parent::__construct();
        
    }
    
    public function retirements()
    {
        $month = date('m', strtotime('+1 month'));
        $year = date('Y', strtotime('+1 month'));
        $fromdate = $year.'-'.$month.'-1';
        $todate = $year.'-'.$month.'-31';
        $query= $this->db->query("SELECT * FROM `ci_other_service_details` WHERE `due_date_retirement` BETWEEN '".$fromdate."' AND '".$todate."'");
        $employee=$query->result_array();
        if(!empty($employee))
        {
            foreach ($employee as $val)
            {
                $sql= $this->db->query("SELECT emp_code,emp_first_name,emp_middle_name,emp_last_name,emp_createdby,emp_code FROM `ci_employee_details` WHERE `emp_code`=".$val[emp_id]);
                $ids=$sql->row();
                $msg='The retirement of '.$ids->emp_first_name.' '.$ids->emp_middle_name.' '.$ids->emp_last_name.'('.$ids->emp_code.') is in next month';
                $this->db->query("insert into ci_notifications(message,receiverid) values('".$msg."',".$ids->emp_createdby.")  ");
            }
        }
        
    }
    
    public function lien()
    {
        $month = date('m', strtotime('+1 month'));
        $year = date('Y', strtotime('+1 month'));
        $fromdate = '2019-11-01';//$year.'-'.$month.'-1';
        $todate = '2019-11-31';//$year.'-'.$month.'-31';
        $lienquery = $this->db->query("SELECT c.emp_id,e.emp_code,e.emp_first_name,e.emp_middle_name,e.emp_last_name,e.emp_createdby "
                . "FROM `ci_initial_service_details` as c join ci_employee_details as e on c.emp_id=e.emp_code WHERE `initial_lienedate` "
                . "BETWEEN '".$fromdate."' AND '".$todate."'");
        $lienemployee=$lienquery->result_array();
        if(!empty($lienemployee))
        {
            foreach ($lienemployee as $val)
            {
                $msg='The lien date of '.$val[emp_first_name].' '.$val[emp_middle_name].' '.$val[emp_last_name].'('.$val[emp_code].') ends in next month';
                $this->db->query("insert into ci_notifications(message,receiverid) values('".$msg."',".$val[emp_createdby].")  ");
            }
        }
    }

    

}
