<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

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

        echo "ok";

        // $this->load->view('Site/vw_Sign_In.php', $data);
    }

    public function contact() {

        $this->load->view('Site/vw_contact_us.php');
    }

    public function contact_send() {


        $Email = $this->input->post('txt_mail');


        $Name = $this->input->post('txt_name');
        $Tele = $this->input->post('txt_mobile');
        $Email = $this->input->post('txt_mail');
        $Message = $this->input->post('txt_message');



        date_default_timezone_set('Asia/Colombo');

        $User = $Email;
        $receiver_email = 'support@sellfree.lk';
        $sender_email = 'support@sellfree.lk';
        $user_password = 'MYpasslS&7*&!@';
        $username = 'sellfree.lk';
        $subject = 'Customer Contact '.$Email.' ' ;
        $message = " <p>Customer Contact Message<br /><br />Name : $Name</p>
<p>Email : $Email</p>
<p>Phone : $Tele</p>
<p>Message : $Message</p><br>
<img style='height: 100px;display: block;
                                      
                                         width: 295px;' src='http://sellfree.lk/assets/Site/images/sellfree.png'>
";


        // Configure email library
        $config = Array(
            $config['protocol'] = 'smtp',
            $config['smtp_host'] = 'a2plcpnl0479.prod.iad2.secureserver.net',
            $config['smtp_port'] = 465,
            $config['smtp_user'] = $sender_email,
            $config['smtp_pass'] = $user_password,
            $config['mailtype'] = 'html'
        );

        // Load email library and passing configured values to email library
        $this->load->library('Email', $config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

        // Sender email address
        $this->email->from($sender_email, $username);
        // Receiver email address
        $this->email->to($receiver_email);
        // Subject of email
        $this->email->subject($subject);
        // Message in email
        $this->email->message($message);

        if ($this->email->send()) {
            $this->session->set_flashdata('success_message', 'Email Send successfully');
//                  var_dump($data);die;
        } else {
            $this->session->set_flashdata('success_message', 'Email Send successfully');
//            var_dump($data);die;
//            die;
        }




        $this->session->set_flashdata('success_message', 'Your password reset email send successfully please check your email.');



//        die;




        $this->load->view('Site/vw_contact_us.php');
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
