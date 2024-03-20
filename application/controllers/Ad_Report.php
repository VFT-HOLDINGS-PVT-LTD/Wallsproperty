<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_Report extends CI_Controller {

    /**
     * Index Page for this controller
     */
    public function __construct() {
        parent::__construct();
        
        /*
         * Load Database model
         */
       
        $this->load->model('Db_model', '', TRUE);
    }

    public function Rpt_Ad($ID) {
        
        
        
        $data['data_rpt_cat'] = $this->Db_model->getData('RPT_TP_ID,RPT_Type_Name', 'tbl_report_types');
        
        $data['data_ad'] = $this->Db_model->getfilteredData("select AD_Code,Ad_Name from tbl_ads where AD_Code ='$ID'");
        
        $this->load->view('Site/vw_Report.php', $data);
    }

    public function Rpt_Ad11($ID) {
        
        /*
         * Data array
         */
        $password = $this->input->post('txt_password');
        
        
        
        $data = array(
            'Users_Name' => $this->input->post('txt_name'),
            'Email' => $this->input->post('txt_mail'),
            'Password' => hash('sha512', $password),
            'Phone_No' => $this->input->post('txt_mobile'),
            'CTY_ID' => $this->input->post('txt_city'),
            'alter_p' => $this->input->post('txt_password'),
            
        );

        //**********Transaction Start
        $this->db->trans_start();

        //Insert Data
        $result = $this->Db_model->insertData("tbl_users", $data);

        //**********Transaction complate
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {

            $this->db->trans_commit();
            $this->session->set_flashdata('success_message', 'New Customer has been added successfully');
        }

        redirect(base_url() . 'Register/'); //*********Redirect to designation form
        
        
    }

}
