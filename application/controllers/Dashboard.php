<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('login_user'))) {
            redirect(base_url() . "");
        }
        $this->load->model('Db_model', '', TRUE);
    }

    public function index() {

        $data['title'] = "Dashboard | ERP System";
        
//        $data['cheque'] = $this->Db_model->getfilteredData('select COUNT(CQ_ID) as CQ_Count, SUM(Amount) as Amount from tbl_receive_cheque where Is_Deposit = 0');
        
//        $data['count_today'] = $this->Db_model->getfilteredData('select count(F_ID) as count from tbl_feed_data where WRK_Date = curdate()');
//        
//        $data['count_all'] = $this->Db_model->getfilteredData('select count(F_ID) as count from tbl_feed_data ');
        
     
        
        
        date_default_timezone_set('Asia/Colombo');
//        $date = date_create();
//        $timestamp = date_format($date, 'Y-m-d H:i:s');
        $cr_m = date("m");
        
//        var_dump($cr_m);die;
        
//        $data['job_complete'] = $this->Db_model->getfilteredData('SELECT COUNT(`tbl_job_history`.`Job_No`) AS Jobs, 
//`tbl_job_status`.`ST_Name` ,
//`tbl_job_status`.`ST_ID`
//FROM `tbl_job_history`
//INNER JOIN `tbl_job_status`
//ON `tbl_job_status`.`ST_ID` = `tbl_job_history`.`ST_ID` WHERE `tbl_job_history`.`ST_ID` IN (4) AND MONTH(tbl_job_history.`Date`)= '.$cr_m.'
//GROUP BY `tbl_job_status`.`ST_ID`');
        
//        
//        $query = $this->db->query('SELECT COUNT(*) FROM `tbl_job_history` WHERE `tbl_job_history`.`ST_ID`=3 AND MONTH(tbl_job_history.`Date`)= MONTH(CURRENT_DATE()) GROUP BY `tbl_job_history`.`Job_No`');
////echo die;
//        
//            $data['ssss'] = $query->num_rows();

//        
//        $number_of_rows = $query->num_rows('SELECT COUNT(*) FROM `tbl_job_history` WHERE `tbl_job_history`.`ST_ID`=3 AND MONTH(tbl_job_history.`Date`)= MONTH(CURRENT_DATE()) GROUP BY `tbl_job_history`.`Job_No`'); 
//        var_dump($number_of_rows);

        $this->load->view('Dashboard/index', $data);
    }

    

}
