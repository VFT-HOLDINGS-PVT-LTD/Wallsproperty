<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        /*
         * Load Database model
         */
//$this->output->enable_profiler(TRUE);
        $this->load->model('Db_model', '', TRUE);
    }

    public function index() {

        // $this->load->helper('url');
        // $this->load->library('user_agent');

        // $data['browser'] = $this->agent->browser();
        // $data['browserVersion'] = $this->agent->version();
        // $data['platform'] = $this->agent->platform();

        // function get_client_ip() {
        //     $ipaddress = '';
        //     if (getenv('HTTP_CLIENT_IP')) {
        //         $ipaddress = getenv('HTTP_CLIENT_IP');
        //     } else if (getenv('HTTP_X_FORWARDED_FOR')) {
        //         $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        //     } else if (getenv('HTTP_X_FORWARDED')) {
        //         $ipaddress = getenv('HTTP_X_FORWARDED');
        //     } else if (getenv('HTTP_FORWARDED_FOR')) {
        //         $ipaddress = getenv('HTTP_FORWARDED_FOR');
        //     } else if (getenv('HTTP_FORWARDED')) {
        //         $ipaddress = getenv('HTTP_FORWARDED');
        //     } else if (getenv('REMOTE_ADDR')) {
        //         $ipaddress = getenv('REMOTE_ADDR');
        //     } else {
        //         $ipaddress = 'UNKNOWN';
        //     }
        //     return $ipaddress;
        // }

        //*** Get Ip Address
        // $ip = get_client_ip();

//         var_dump($ip);die;
//        $data['full_user_agent_string'] = $_SERVER['HTTP_USER_AGENT'];

        // date_default_timezone_set('Asia/Colombo');
        // $datef = date_create();
        // $date_ps = date_format($datef, 'Y-m-d H:i:s');


        // $this->load->library('user_agent');
        // if ($this->agent->is_mobile()) {
        //     $type = 'M';
        // } else {
        //     $type = 'B';
        // }
//        ("http://ipinfo.io/{$ip}/geo");
//        $getloc = json_decode(file_get_contents("http://ipinfo.io/{$ip}/geo"));
//         $getloc = json_decode(file_get_contents("https://www.iplocate.io/api/lookup/$ip"));

// //        var_dump($getloc);die;

//         if ($getloc->city) {
//             $loc = $getloc->city;
//         } else {
//             $loc = '0';
//         }
        
//         if($getloc->org){
//             $isp = $getloc->org;
//         }
//  else {
//      $isp = '';
//  }
//         $data = array(
// //            'P_Code' => $P_Name . '-' . $type_name . $P_Serial,
//             'browser' => $data['browser'],
//             'browserVersion' => $data['browserVersion'],
//             'platform' => $data['platform'],
//             'DateTime' => $date_ps,
//             'ip_address_cli' => $ip,
//             'type_bm' => $type,
//             'location' => $loc,
//             'ISP' => $isp
//         );




        // $this->Db_model->insertData("tbl_user_details", $data);




        // $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1 WHERE `CLK_ID` = 3";
        // $this->db->query($sql);

        $data['data_set_cat'] = $this->Db_model->getfilteredData("SELECT * FROM `tbl_ads` WHERE `Ad_sub_Cat_ID` = '27'");

        $data['data_set_cat_sale'] = $this->Db_model->getfilteredData("SELECT * FROM `tbl_ads` WHERE `Ad_sub_Cat_ID` = '28'");

        // $data['data_set_ad_cat'] = $this->Db_model->getfilteredData('SELECT Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon from tbl_ad_category where Is_Active = 1');

//        var_dump($data)
//        echo '<pre>'; var_dump($data); echo '</pre>';die;
//        var_dump($data);die;

        $this->load->view('Site/index.php', $data);
    }

    public function Help() {

        $data['data_faq'] = $this->Db_model->getfilteredData('SELECT * from tbl_faq');

        $this->load->view('Site/vw_help.php', $data);
    }

    public function favorite($ID) {

        date_default_timezone_set('Asia/Colombo');
        $date = date_create();
        $date_ps = date_format($date, 'Y-m-d');

        $currentUser = $this->session->userdata('login_user');
        $User = $currentUser[0]->U_ID;


        $data = array(
//            'P_Code' => $P_Name . '-' . $type_name . $P_Serial,
            'AD_Code' => $ID,
            'U_ID' => $User,
            'FAV_Date' => $date_ps
        );



        $this->db->trans_start();
        $this->Db_model->insertData("tbl_favorite", $data);


        $this->db->trans_complete();



        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {

            $this->db->trans_commit();
            $this->session->set_flashdata('success_message', 'Ad has been saved successfully');
        }


        redirect(base_url() . 'Single_Ad/Get_Ad_details/' . $ID . ' '); //*********Redirect form
    }

    public function report() {

        $AD_Code = $this->input->post('txt_ad_code');

//        var_dump($expression);die;

        date_default_timezone_set('Asia/Colombo');
        $date = date_create();
        $date_ps = date_format($date, 'Y-m-d');

        $data = array(
//            'P_Code' => $P_Name . '-' . $type_name . $P_Serial,
            'AD_Code' => $AD_Code,
            'RPT_TP_ID' => $this->input->post('txt_r_type'),
            'FL_Name' => $this->input->post('txt_name'),
            'RPT_Telephone' => $this->input->post('txt_mobile'),
            'RPT_Email' => $this->input->post('txt_mail'),
            'RPT_Message' => $this->input->post('txt_message'),
            'Is_Solve' => 0,
            'RPT_Date' => $date_ps
        );



        $this->db->trans_start();
        $this->Db_model->insertData("tbl_report_ad", $data);


        $this->db->trans_complete();



        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {

            $this->db->trans_commit();
            $this->session->set_flashdata('success_message', 'Ad has been reported successfully');
        }


        redirect(base_url() . ''); //*********Redirect form
    }

}
