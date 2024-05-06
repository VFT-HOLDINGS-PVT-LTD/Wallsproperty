<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Sign_In extends CI_Controller
{

	/**
	 * Index Page for this controller
	 */
	public function __construct()
	{
		parent::__construct();

		/*
		 * Load Database model
		 */

		$this->load->model('Db_model', '', TRUE);
	}

	public function index()
	{

		$data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');

		$data['data_set_city'] = $this->Db_model->getfilteredData('SELECT * FROM `tbl_city`');

		$this->load->view('Site/vw_Sign_In.php', $data);
	}

	public function user_login()
	{

		/*
		 * Get Username and Password from data
		 */

		date_default_timezone_set('Asia/Colombo');
		$date = date_create();
		$timestamp = date_format($date, 'Y-m-d H:i:s');


		$username = $this->input->post('txt_username', TRUE);
		$password = $this->input->post('txt_password', TRUE);


		$fieldset = array('U_ID', 'Email', 'Phone_No', 'Is_member');
		$whereArr = array("Email" => $username, "Password" => hash('sha512', $password), "is_allow_login" => 1);

		$result = $this->Db_model->verification($fieldset, 'tbl_users', $whereArr);



		// die;

		// Function to get the client IP address
		function get_client_ip()
		{
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
			// $userData = $this->Db_model->getfilteredData("SELECT * FROM `tbl_users` ");
			// foreach ($userData as $adminValueData) {
			if ("admin@gmail.com" == $username) {
				$this->session->set_flashdata('success_message', 'Login successfull....');
				redirect(base_url() . 'Dashboard');
			} else {
				$this->session->set_flashdata('success_message', 'Login successfull....');
				redirect(base_url() . 'Profile');
			}

			// }

		} else {
			$this->session->set_flashdata('error_message', 'Check Username or Password');
			redirect(base_url() . 'Sign_In');
		}
	}

	public function logout()
	{

		if (!($this->session->userdata('login_user'))) {
			redirect(base_url() . "");
		}

		date_default_timezone_set('Asia/Colombo');
		$date = date_create();
		$timestamp = date_format($date, 'Y-m-d H:i:s');

		$currentUser = $this->session->userdata('login_user');
		$User = $currentUser[0]->Email;

		function get_client_ips()
		{
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

	public function forgot()
	{


		$this->load->view('Site/vw_Forgot.php');
	}

	public function reset_request()
	{


		$Email = $this->input->post('txt_mail');

		$data1 = $this->Db_model->getfilteredData("SELECT U_ID,Users_Name,Email FROM `tbl_users` where Email ='$Email' ");

		$Username = $data1[0]->Users_Name;



		if (empty ($data1[0]->Email)) {


			$this->session->set_flashdata('error_message', 'Your email not registered in system');
		} elseif (!empty ($data1[0]->Email)) {


			$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
			$password = array();
			$alpha_length = strlen($alphabet) - 1;
			for ($i = 0; $i < 8; $i++) {
				$n = rand(0, $alpha_length);
				$password[] = $alphabet[$n];
			}


			$passwords = implode($password);


			$data = array(
				'Password' => hash('sha512', $passwords),
			);

			$whereArr = array("U_ID" => $data1[0]->U_ID);
			$result = $this->Db_model->updateData("tbl_users", $data, $whereArr);

			date_default_timezone_set('Asia/Colombo');

			$User = $data1[0]->Email;
			$receiver_email = $data1[0]->Email;
			$sender_email = 'support@sellfree.lk';
			$user_password = 'MYpasslS&7*&!@';
			$username = 'sellfree.lk';
			$subject = 'How to reset your sellfree.lk password';
			$message = " <p>Hello $Username,</p>
<p>Your login details</p>
<p>&nbsp;</p>
<p>Username: " . $User . "<br />Temporary Password: $passwords</p>
<p>&nbsp;</p>
<p>Login url: http://sellfree.lk/Sign_In</p>
<p>This mail was sent because you requested the login details, if you did not request your login details please contact us.</p>
<p>Sellfree.lk Team<br />Thank you,</p>
<p>Good Day.</p><br>
<img style='height: 100px;display: block;
                                      
                                         width: 295px;' src='http://sellfree.lk/assets/Site/images/sellfree.png'>
";



			//            $localhosts = array(
//                '::1',
//                '127.0.0.1',
//                'localhost'
//            );
//
//            $protocol = 'mail';
//            if (in_array($_SERVER['REMOTE_ADDR'], $localhosts)) {
//                $protocol = 'smtp';
//            }
			// Configure email library
			$config = array(
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
		}


		//        die;




		$this->load->view('Site/vw_Forgot.php');
	}

}
