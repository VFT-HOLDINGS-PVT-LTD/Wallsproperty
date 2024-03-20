<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Single_Ad extends CI_Controller {

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

        $data['data_set_all_ads'] = $this->Db_model->getfilteredData('SELECT * FROM tbl_ads
INNER JOIN `tbl_ad_category`
ON `tbl_ads`.`Ad_Cat_ID` = `tbl_ad_category`.`Ad_Cat_ID`
INNER JOIN `tbl_users`
ON `tbl_users`.`U_ID` = `tbl_ads`.`U_ID`
INNER JOIN `tbl_districts`
ON `tbl_districts`.`DST_ID` =`tbl_ads`.`DST_ID`
inner join `tbl_city`
on `tbl_city`.`CTY_ID` = `tbl_ads`.`CTY_ID`
INNER JOIN `tbl_ad_sub_category`
ON `tbl_ad_sub_category`.`Ad_sub_Cat_ID`= `tbl_ads`.`Ad_sub_Cat_ID`');

        $this->load->view('Site/vw_single_ad.php', $data);
    }

    public function Get_Ad_details($id) {


//        ini_set('default_charset', 'UTF-8');
        $id = implode(' ', explode('_', urldecode($id)));

        $id = str_replace(' ', '_', $id);


//        var_dump($name_to_pass,$id);die;

        $ad_name_array = $this->Db_model->getfilteredData("SELECT AD_ID,Ad_Title,Ad_sub_Cat_ID,Ad_Cat_ID FROM `tbl_ads` WHERE `AD_Code`='$id'");

//        var_dump($ad_name_array);die;

        $ad_name = $ad_name_array[0]->Ad_Title;
        $ad_cat = $ad_name_array[0]->Ad_Cat_ID;
        $ad_sub_cat = $ad_name_array[0]->Ad_sub_Cat_ID;
        $ad_id = $ad_name_array[0]->AD_ID;



        $filter = '';


        if ($ad_cat == 1) {
            $filter = 'inner join tbl_brand
on tbl_ads.BRD_ID = tbl_brand.BRD_ID
inner join tbl_transmission
on tbl_ads.TRNS_ID =  tbl_transmission.TRNS_ID
inner join tbl_fuel_types
on tbl_ads.FUAL_ID = tbl_fuel_types.FUAL_ID';
        }

        if ($ad_cat == 3) {
            $filter = 'inner join tbl_land_types
on tbl_ads.LND_TP_ID = tbl_land_types.LND_TP_ID';
        }

        $data['data_set_all_ads'] = $this->Db_model->getfilteredData("SELECT * FROM tbl_ads
INNER JOIN `tbl_ad_category`
ON `tbl_ads`.`Ad_Cat_ID` = `tbl_ad_category`.`Ad_Cat_ID`
INNER JOIN `tbl_users`
ON `tbl_users`.`U_ID` = `tbl_ads`.`U_ID`
INNER JOIN `tbl_districts`
ON `tbl_districts`.`DST_ID` =`tbl_ads`.`DST_ID`
inner join `tbl_city`
on `tbl_city`.`CTY_ID` = `tbl_ads`.`CTY_ID`
INNER JOIN `tbl_ad_sub_category`
ON `tbl_ad_sub_category`.`Ad_sub_Cat_ID`= `tbl_ads`.`Ad_sub_Cat_ID` 
{$filter}
where tbl_ads.AD_Code='$id'");





//          $data['data_set_all_ads'] = $this->Db_model->getfilteredData("");

//        die;






        $data['data_similar_ads'] = $this->Db_model->getfilteredData("SELECT * FROM tbl_ads
INNER JOIN `tbl_ad_category`
ON `tbl_ads`.`Ad_Cat_ID` = `tbl_ad_category`.`Ad_Cat_ID`
INNER JOIN `tbl_users`
ON `tbl_users`.`U_ID` = `tbl_ads`.`U_ID`
INNER JOIN `tbl_districts`
ON `tbl_districts`.`DST_ID` =`tbl_ads`.`DST_ID`
INNER JOIN `tbl_city`
ON `tbl_city`.`CTY_ID` = `tbl_ads`.`CTY_ID`
INNER JOIN `tbl_ad_sub_category`
ON `tbl_ad_sub_category`.`Ad_sub_Cat_ID`= `tbl_ads`.`Ad_sub_Cat_ID` WHERE tbl_ads.Ad_sub_Cat_ID =$ad_sub_cat  ORDER BY RAND()  
LIMIT 5");


//         var_dump($data);die;


        date_default_timezone_set('Asia/Colombo');
        $datef = date_create();
        $date_ps = date_format($datef, 'Y-m-d H:i:s');

        $data1 = array(

            'AD_ID' => $ad_id,
            'DateTime' => $date_ps
        );




        $this->Db_model->insertData("tbl_ad_clicks", $data1);




        $this->load->view('Site/vw_single_ad.php', $data);
    }

}
