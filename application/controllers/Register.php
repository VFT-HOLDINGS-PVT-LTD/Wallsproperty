<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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

    public function index() {
        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');

        $data['data_set_city'] = $this->Db_model->getfilteredData('SELECT * FROM `tbl_city`');

        $this->load->view('Site/vw_Register.php', $data);
    }

    function check_email_avalibility() {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';
        } else {
//            $this->load->model("main_model");
            if ($this->Db_model->is_email_available($_POST["email"])) {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';
            } else {
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';
            }
        }
    }
    
    function check_email_avalibility_for() {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';
        } else {
//            $this->load->model("main_model");
            if ($this->Db_model->is_email_available($_POST["email"])) {
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Already register click Reset Password</label>';
            } else {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-ok"></span> This Email not registered</label>';
            }
        }
    }
    
    
    
    function check_phone_avalibility() {
//        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
//            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';
//        } else {
//            $this->load->model("main_model");
            if ($this->Db_model->is_phone_available($_POST["phone"])) {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Phone Already register</label>';
            } else {
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';
            }
//        }
    }
    
    

    public function Register_user() {

        /*
         * Data array
         */
        $password = $this->input->post('txt_password');



        $data = array(
            'Users_Name' => $this->input->post('txt_name'),
            'Email' => $this->input->post('txt_mail'),
            'Password' => hash('sha512', $password),
            'Phone_No' => $this->input->post('txt_mobile'),
//            'CTY_ID' => $this->input->post('txt_city'),
            'alter_p' => $this->input->post('txt_password'),
            'is_allow_login' => 1,
            'user_p_id' => 1
        );


//        var_dump($data['Email']);

        if ($this->Db_model->is_email_available($data['Email'])) {
            $this->session->set_flashdata('error_message', 'This Email already Registered');
            redirect(base_url() . 'Register'); //*********Redirect to designation form
        } elseif ($this->Db_model->is_phone_available($data['Phone_No'])) {
           $this->session->set_flashdata('error_message', 'This Phone number already Registered');
            redirect(base_url() . 'Register'); //*********Redirect to designation form
        }
//die;
        

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

        redirect(base_url() . 'Home'); //*********Redirect to designation form
    }

    public function delete_user() {
        $user_id = $this->input->post('user_id');
        if($user_id) {
            $this->Db_model->delete_user($user_id);
            echo "success"; 
        } else {
            echo "error"; 
        }
    }
    

}
