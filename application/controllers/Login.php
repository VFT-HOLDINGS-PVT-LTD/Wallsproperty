<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        /*
         * Load Database model
         */
        $this->load->model('Db_model', '', TRUE);
    }

    public function index() {
        $data['title'] = "Login To System | ERP System";

        $this->load->view('login/login', $data);
    }

    /*
     * User Verification
     */

    public function checkUser() {
        // **** Getting user name and password entering by user
        $username = $this->input->post('txt_username');
        $password = sha512($this->input->post('txtpassword'));

        // **** Getting All Details reguarding to the user  
        $user = $this->Generic_model->getData("tbl_user", '', array("username" => $username, "password" => $password, "status" => '0'));
        $employee = $this->Generic_model->getData("tbl_employee", '', array("emp_id" => $user[0]->u_id));
        $user_level = $this->Generic_model->getData("tbl_access_level", array('ac_level'), array("ac_id" => $user[0]->user_level));

        date_default_timezone_set('Asia/Colombo');
        $date = date('Y-M-d   h:i:s a', time());
        //Creating Session array
        $user_data = array(
            "user_id" => $user[0]->u_id,
            "user_name" => $user[0]->username,
            "employee_name" => $employee[0]->emp_name,
            "employee_number" => $employee[0]->emp_no,
            'is_logged' => TRUE,
            "user_level" => $user_level[0]->ac_level,
            "log_time" => $date
        );
        $this->session->set_userdata($user_data);

        // **** If user name and password is in the database directing to the dash board ****
        if (count($user) > 0) {
            header("location:" . base_url() . "dashboard/index");
        }
        // **** If user name and password is not in the database directing to the Login with error ****
        else {
            header("location:" . base_url() . "login/index?err=1");
        }
    }

    /*
     * User login verification
     */

    public function verifyUser() {

        /*
         * Get Username and Password from data
         */
        
        date_default_timezone_set('Asia/Colombo');
        $date = date_create();
        $timestamp = date_format($date, 'Y-m-d H:i:s');
        
        
        $username = $this->input->post('txt_username', TRUE);
        $password = $this->input->post('txt_password', TRUE);


        $fieldset = array('Users_Name','Email', 'user_p_id');
        $whereArr = array("Email" => $username, "Password" => hash('sha512', $password), "is_allow_login" => 1);

        $result = $this->Db_model->verification($fieldset, 'tbl_users', $whereArr);
        
//        var_dump($result);die;

        // Function to get the client IP address
        function get_client_ip() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP')){
                $ipaddress = getenv('HTTP_CLIENT_IP');
            }
            else if (getenv('HTTP_X_FORWARDED_FOR')){
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            
            }
            else if (getenv('HTTP_X_FORWARDED')){
                $ipaddress = getenv('HTTP_X_FORWARDED');
            }
            else if (getenv('HTTP_FORWARDED_FOR')){
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            }
            else if (getenv('HTTP_FORWARDED')){
                $ipaddress = getenv('HTTP_FORWARDED');
            }
            else if (getenv('REMOTE_ADDR')){
                $ipaddress = getenv('REMOTE_ADDR');
            }
            else{
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
        
        
//        var_dump($result);die;

        if ($result == "success") {
            $this->session->set_flashdata('success_message', 'Login successfull....');
            redirect(base_url() . 'Dashboard/');
        } else {
            $this->session->set_flashdata('error_message', 'Check Username or Password');
            redirect(base_url() . 'Login');
        }
    }
    
    
     function get_client_ip() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP')){
                $ipaddress = getenv('HTTP_CLIENT_IP');
            }
            else if (getenv('HTTP_X_FORWARDED_FOR')){
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            
            }
            else if (getenv('HTTP_X_FORWARDED')){
                $ipaddress = getenv('HTTP_X_FORWARDED');
            }
            else if (getenv('HTTP_FORWARDED_FOR')){
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            }
            else if (getenv('HTTP_FORWARDED')){
                $ipaddress = getenv('HTTP_FORWARDED');
            }
            else if (getenv('REMOTE_ADDR')){
                $ipaddress = getenv('REMOTE_ADDR');
            }
            else{
                $ipaddress = 'UNKNOWN';
            }
            return $ipaddress;
        }

    /*
     * System logout
     */

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
