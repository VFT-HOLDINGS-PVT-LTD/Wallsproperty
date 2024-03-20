<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    /**
     * Index Page for this controller
     */
    public function __construct() {
        parent::__construct();

        /*
         * Load Database model
         */
//$this->output->enable_profiler(TRUE);
        $this->load->model('Db_model', '', TRUE);
    }

    public function index() {

        $currentUser = $this->session->userdata('login_user');
        $User = $currentUser[0]->U_ID;

//        var_dump($currentUser);die;

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');

        $data['data_set_city'] = $this->Db_model->getfilteredData('SELECT * FROM `tbl_city`');

        $data['data_ad_count'] = $this->Db_model->getfilteredData("select count(AD_ID) as AdC from tbl_ads where U_ID =$User ");

        $limit = 1000;


        $result = $this->Db_model->get_user_ads($limit, $User);

        $data['ad_list'] = $result['rows'];

        $this->load->view('Site/vw_profile.php', $data);
    }

    public function change_to_password() {
        $currentUser = $this->session->userdata('login_user');
        $User = $currentUser[0]->U_ID;

        $data['data_ad_count'] = $this->Db_model->getfilteredData("select count(AD_ID) as AdC from tbl_ads where U_ID =$User ");
        $this->load->view('Site/vw_change_password.php', $data);
    }

    public function password_change() {

        $currentUser = $this->session->userdata('login_user');
        $User = $currentUser[0]->U_ID;



        $password12 = $this->input->post('txt_confirm_password');

//        var_dump($password12);

        $data = array(
            'Password' => hash('sha512', $this->input->post('txt_confirm_password')),
            'New_Password' => hash('sha512', $password12)
        );

//        var_dump($data, $User);
//        die;

        $this->db->trans_start();
        $this->db->trans_complete();

//        $whereArr = array("U_ID" => 1);
//        $result = $this->Db_model->updateData("tbl_users", $data, $whereArr);


        $this->db->where('U_ID', 1);
        $this->db->update('tbl_users', $data);


//        echo $this->db->last_query();



//          die;
//        var_dump($whereArr);die;
//        var_dump($result);die;

        $data['data_ad_count'] = $this->Db_model->getfilteredData("select count(AD_ID) as AdC from tbl_ads where U_ID =$User ");



        $this->db->trans_commit();

        $this->session->set_flashdata('success_message', 'Your password changed successfully');

        $this->load->view('Site/vw_change_password.php', $data);
    }

    public function user_login() {

        /*
         * Get Username and Password from data
         */

        date_default_timezone_set('Asia/Colombo');
        $date = date_create();
        $timestamp = date_format($date, 'Y-m-d H:i:s');


        $username = $this->input->post('txt_username', TRUE);
        $password = $this->input->post('txt_password', TRUE);


        $fieldset = array('Email', 'Email', 'Phone_No', 'Is_member');
        $whereArr = array("Email" => $username, "Password" => hash('sha512', $password), "is_allow_login" => 1);

        $result = $this->Db_model->verification($fieldset, 'tbl_users', $whereArr);

        // Function to get the client IP address
        function get_client_ip() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP')) {
                $ipaddress = getenv('HTTP_CLIENT_IP');
            } else if (getenv('HTTP_X_FORWARDED_FOR')) {
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            } else if (getenv('HTTP_X_FORWARDED')) {
                $ipaddress = getenv('HTTP_X_FORWARDED');
            } else if (getenv('HTTP_FORWARDED_FOR')) {
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            } else if (getenv('HTTP_FORWARDED')) {
                $ipaddress = getenv('HTTP_FORWARDED');
            } else if (getenv('REMOTE_ADDR')) {
                $ipaddress = getenv('REMOTE_ADDR');
            } else {
                $ipaddress = 'UNKNOWN';
            }
            return $ipaddress;
        }

        //*** Get Ip Address
        $ip = get_client_ip();


        $dataArray = array(
            'log_user' => $username,
            'ip_address' => $ip,
            'trans_time' => $timestamp,
            'action' => 'Login to System'
        );

        $this->Db_model->insertData("tbl_audit_log", $dataArray);

        if ($result == "success") {
            $this->session->set_flashdata('success_message', 'Login successfull....');
            redirect(base_url() . 'Post_Ad/');
        } else {
            $this->session->set_flashdata('error_message', 'Check Username or Password');
            redirect(base_url() . 'Sign_In/');
        }
    }

    public function logout() {

        if (!($this->session->userdata('login_user'))) {
            redirect(base_url() . "");
        }

        date_default_timezone_set('Asia/Colombo');
        $date = date_create();
        $timestamp = date_format($date, 'Y-m-d H:i:s');

        $currentUser = $this->session->userdata('login_user');
        $User = $currentUser[0]->Email;

        function get_client_ips() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP')) {
                $ipaddress = getenv('HTTP_CLIENT_IP');
            } else if (getenv('HTTP_X_FORWARDED_FOR')) {
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            } else if (getenv('HTTP_X_FORWARDED')) {
                $ipaddress = getenv('HTTP_X_FORWARDED');
            } else if (getenv('HTTP_FORWARDED_FOR')) {
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            } else if (getenv('HTTP_FORWARDED')) {
                $ipaddress = getenv('HTTP_FORWARDED');
            } else if (getenv('REMOTE_ADDR')) {
                $ipaddress = getenv('REMOTE_ADDR');
            } else {
                $ipaddress = 'UNKNOWN';
            }
            return $ipaddress;
        }

        //*** Get Ip Address
        $ip = get_client_ips();


        $dataArray = array(
            'log_user' => $User,
            'ip_address' => $ip,
            'trans_time' => $timestamp,
            'action' => 'Logout in System'
        );

        $this->Db_model->insertData("tbl_audit_log", $dataArray);


        $this->session->sess_destroy();
        redirect(base_url() . "");
    }

}
