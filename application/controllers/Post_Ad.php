<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Ad extends CI_Controller {

    /**
     * Index Page for this controller
     */
    public function __construct() {
        parent::__construct();

        if (!($this->session->userdata('login_user'))) {
//            var_dump($this->session->userdata('login_user'));
            redirect(base_url() . "Sign_In");
        }

//        die;
        /*
         * Load Database model
         */

        $this->load->model('Db_model', '', TRUE);
        $this->load->model('Generic_model', '', TRUE);
        $this->load->library('user_agent');
    }

    public function index() {



//        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon,Image', 'tbl_ad_category');
        $data['data_set_ad_cat'] = $this->Db_model->getfilteredData('SELECT Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon,Image FROM `tbl_ad_category` where Is_active=1');

        $data['data_set_city'] = $this->Db_model->getfilteredData('SELECT * FROM `tbl_city`');

//
//        $mobile = $this->agent->is_mobile();
//        if ($mobile) {
//            $this->load->view('Site/vw_Post_Ad.php', $data);
//        }
        $this->load->view('Site/vw_Post_Ad.php', $data);
    }

    public function myformAjax($id) {
        $result = $this->db->where("Ad_Cat_ID", $id)->get("tbl_ad_sub_category")->result();
        echo json_encode($result);
    }

    public function myformAjaxcity($id) {
        $result = $this->db->where("DST_ID", $id)->get("tbl_city")->result();
        echo json_encode($result);
    }

    public function Post_to() {

        /*
         * Data array
         */
        $cmb_category = $this->input->post('cmb_category');
        $cmb_sub_category = $this->input->post('cmb_sub_category');


        $data['data_brand'] = $this->Db_model->getfilteredData("select BRD_ID,BRD_Name from tbl_brand where Is_active =1 ");
        $data['data_trans'] = $this->Db_model->getData('TRNS_ID,TRNS_Name', 'tbl_transmission');
        $data['data_fual'] = $this->Db_model->getData('FUAL_ID,Fual_name', 'tbl_fuel_types');
        $data['data_dist'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        $data['data_l_type'] = $this->Db_model->getData('LND_TP_ID,LND_TP_Name', 'tbl_land_types');


        $data['cat'] = $cmb_category;
        $data['sb_cat'] = $cmb_sub_category;


        $data['sb_cat_nm'] = $this->Db_model->getfilteredData("select Ad_sub_Cat_ID,Ad_Sub_Cat_Name from tbl_ad_sub_category where Ad_sub_Cat_ID = $cmb_sub_category ");
        $data['cat_img'] = $this->Db_model->getfilteredData("SELECT Ad_Cat_ID,Image,Ad_Cat_Name FROM tbl_ad_category where Ad_Cat_ID = $cmb_category ");
//        var_dump($data);die;



        if ($cmb_category == 1) {
            $data['title'] = "Post Vehicle Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_vehicle.php', $data);
        } elseif ($cmb_category == 2) {
            $data['title'] = "Post Electronics Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        } elseif ($cmb_category == 3) {
            $data['title'] = "Post Property Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_land_house.php', $data);
        } elseif ($cmb_category == 4) {
            $data['title'] = "Post Fashion & Beauty Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        } elseif ($cmb_category == 5) {
            $data['title'] = "Post Hobby, Sport & Kids Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        } elseif ($cmb_category == 6) {
            $data['title'] = "Post Essentials Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        } elseif ($cmb_category == 7) {
            $data['title'] = "Post Home & Garden Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        } elseif ($cmb_category == 9) {
            $data['title'] = "Post Business & Industry Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        } elseif ($cmb_category == 10) {
            $data['title'] = "Post Services Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        } elseif ($cmb_category == 11) {
            $data['title'] = "Post Education Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        } elseif ($cmb_category == 12) {
            $data['title'] = "Post Agriculture Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        }elseif ($cmb_category == 13) {
            $data['title'] = "Post Agriculture Ads";
            $this->load->view('Site/vw_Post_Ad_Pst_electronic.php', $data);
        }
        
        

        
    }

    public function Publish_Post() {

        $this->load->library('upload');
        $this->load->library('image_lib');

        $Rand = (rand(10, 1000));


        date_default_timezone_set('Asia/Colombo');
        $date = date_create();
        $date_ps = date_format($date, 'Y-m-d');
        $time_ps = date_format($date, 'H:i:s');

        $currentUser = $this->session->userdata('login_user');
        $User = $currentUser[0]->U_ID;

        var_dump($date, $time_ps, $date_ps);

        $cmb_category = $this->input->post('txt_cat');
        $cmb_sub_category = $this->input->post('txt_sub_cat');
        $cmb_brand = $this->input->post('cmb_brand');

        $Brd_names = $this->Db_model->getfilteredData("select BRD_Name from tbl_brand where BRD_ID='$cmb_brand'");

        $Brd_name = $Brd_names[0]->BRD_Name;



        $Condition = $this->input->post('itemCondi');


        $Model = $this->input->post('txt_model');
        $M_Year = $this->input->post('txt_m_year');

        $Transmission = $this->input->post('cmb_transmi');
        $Fuel = $this->input->post('cmb_fuel');
        $KM = $this->input->post('txt_km');
        $CC = $this->input->post('txt_CC');
        $Price = $this->input->post('txt_price');
        $Negotiable = $this->input->post('txt_Negotiable');

        $dataAd_Cat = $this->Db_model->getfilteredData("select Ad_Cat_ID,Img_Folder from tbl_ad_category where Ad_Cat_ID = $cmb_category ");
        $AD_Folder = $dataAd_Cat[0]->Img_Folder;

        if ($Negotiable == '') {
            $Negotiable = 0;
        }

        $AC = $this->input->post('AC');

        var_dump($AC);

        if (empty($AC)) {
            $AC = '0';
        } else {
            $AC = 1;
        }


        $Remote = $this->input->post('Remote');
        if (empty($Remote)) {
            $Remote = '0';
        } else {
            $Remote = 1;
        }
        $Power_Mir = $this->input->post('Power_Mir');
        if (empty($Power_Mir)) {
            $Power_Mir = '0';
        } else {
            $Power_Mir = 1;
        }
        $Power_W = $this->input->post('Power_W');
        if (empty($Power_W)) {
            $Power_W = '0';
        } else {
            $Power_W = 1;
        }
        $Power_S = $this->input->post('Power_S');
        if (empty($Power_S)) {
            $Power_S = '0';
        } else {
            $Power_S = 1;
        }
        $MF_S = $this->input->post('MF_S');
        if (empty($MF_S)) {
            $MF_S = '0';
        } else {
            $MF_S = 1;
        }
        $Cruise = $this->input->post('Cruise');
        if (empty($Cruise)) {
            $Cruise = '0';
        } else {
            $Cruise = 1;
        }
        $AirBG = $this->input->post('AirBG');
        if (empty($AirBG)) {
            $AirBG = '0';
        } else {
            $AirBG = 1;
        }
        $Seat_H = $this->input->post('Seat_H');
        if (empty($Seat_H)) {
            $Seat_H = '0';
        } else {
            $Seat_H = 1;
        }


        $Description = $this->input->post('txt_desc');



        var_dump($Brd_name, $cmb_category, $Model, $M_Year, 'Condi' . $Condition, '$Negotiable' . $Negotiable, 'ACC' . $AC, $Description);
//        die;
//----------------------------------------------------------------------------------------------------------------------------------------------------
// 000111111111
//----------------------------------------------------------------------------------------------------------------------------------------------------        

        $dname = explode(".", $_FILES['img_pro1']['name']);
        $ext1 = end($dname);
        if ($ext1) {

            $config['upload_path'] = 'assets/Ad_Images/'.$AD_Folder.'/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 100000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;

            $config['image_library'] = 'gd';
            $config['quality'] = '50%';

            $config['file_name'] = $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_1';
            $this->upload->initialize($config);
            $this->upload->do_upload('img_pro1');
            $data = array(
                'image' => $config['file_name']
            );

            $path = 'assets/Ad_Images/'.$AD_Folder.'/' . $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_1.' . $ext1;
            $config['source_image'] = $path;


            var_dump($path);

            //The image path,which you would like to watermarking
            $config['wm_text'] = 'sellfree.lk';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = FCPATH . 'assets/fonts/Ubuntu-Regular.ttf';
            $config['wm_font_size'] = 20;
            $config['wm_font_color'] = '#000';
            $config['wm_opacity'] = 80;
            $config['wm_vrt_alignment'] = 'middle';
            $config['wm_hor_alignment'] = 'middle';
            $config['wm_padding'] = '20';

            $this->image_lib->initialize($config);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }




//----------------------------------------------------------------------------------------------------------------------------------------------------
//000222222222
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro2']['name']);
        $ext2 = end($dname);
        if ($ext2) {
            $config2['upload_path'] = 'assets/Ad_Images/'.$AD_Folder.'/';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';
            $config2['max_size'] = 100000;
            $config2['max_width'] = 10000;
            $config2['max_height'] = 10000;
            $config2['file_name'] = $Brd_name . '_' . $Model . '_' . $M_Year . $Rand . '_2';
            $this->upload->initialize($config2);
            $this->upload->do_upload('img_pro2');
            $data = array(
                'image' => $config['file_name']
            );

            $path2 = 'assets/Ad_Images/'.$AD_Folder.'/' . $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_2.' . $ext2;
            $config2['source_image'] = $path2;
            //The image path,which you would like to watermarking
            $config2['wm_text'] = 'sellfree.lk';
            $config2['wm_type'] = 'text';
            $config2['wm_font_size'] = 20;
            $config2['wm_font_color'] = '#000';
            $config2['wm_opacity'] = 80;
            $config2['wm_vrt_alignment'] = 'middle';
            $config2['wm_hor_alignment'] = 'middle';
            $config2['wm_padding'] = '20';

            $this->image_lib->initialize($config2);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }


//----------------------------------------------------------------------------------------------------------------------------------------------------
//00003333
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro3']['name']);
        $ext3 = end($dname);
        if ($ext3) {
            $config3['upload_path'] = 'assets/Ad_Images/'.$AD_Folder.'/';
            $config3['allowed_types'] = 'gif|jpg|png|jpeg';
            $config3['max_size'] = 100000;
            $config3['max_width'] = 10000;
            $config3['max_height'] = 10000;
            $config3['file_name'] = $Brd_name . '_' . $Model . '_' . $M_Year . $Rand . '_3';
            $this->upload->initialize($config3);
            $this->upload->do_upload('img_pro3');
            $data = array(
                'image' => $config['file_name']
            );

            $path3 = 'assets/Ad_Images/'.$AD_Folder.'/' . $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_3.' . $ext3;
            $config3['source_image'] = $path3;
            //The image path,which you would like to watermarking
            $config3['wm_text'] = 'sellfree.lk';
            $config3['wm_type'] = 'text';
            $config3['wm_font_size'] = 20;
            $config3['wm_font_color'] = '#000';
            $config3['wm_opacity'] = 80;
            $config3['wm_vrt_alignment'] = 'middle';
            $config3['wm_hor_alignment'] = 'middle';
            $config3['wm_padding'] = '20';

            $this->image_lib->initialize($config3);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }



        //----------------------------------------------------------------------------------------------------------------------------------------------------
        //00000444
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro4']['name']);
        $ext4 = end($dname);
        if ($ext4) {
            $config4['upload_path'] = 'assets/Ad_Images/'.$AD_Folder.'/';
            $config4['allowed_types'] = 'gif|jpg|png|jpeg';
            $config4['max_size'] = 100000;
            $config4['max_width'] = 10000;
            $config4['max_height'] = 10000;
            $config4['file_name'] = $Brd_name . '_' . $Model . '_' . $M_Year . $Rand . '_4';
            $this->upload->initialize($config4);
            $this->upload->do_upload('img_pro4');
            $data = array(
                'image' => $config['file_name']
            );

            $path4 = 'assets/Ad_Images/'.$AD_Folder.'/' . $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_4.' . $ext4;
            $config4['source_image'] = $path4;
            //The image path,which you would like to watermarking
            $config4['wm_text'] = 'sellfree.lk';
            $config4['wm_type'] = 'text';
            $config4['wm_font_size'] = 20;
            $config4['wm_font_color'] = '#000';
            $config4['wm_opacity'] = 80;
            $config4['wm_vrt_alignment'] = 'middle';
            $config4['wm_hor_alignment'] = 'middle';
            $config4['wm_padding'] = '20';

            $this->image_lib->initialize($config4);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }



        //----------------------------------------------------------------------------------------------------------------------------------------------------
        //0005555555
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro5']['name']);
        $ext5 = end($dname);
        if ($ext5) {
            $config5['upload_path'] = 'assets/Ad_Images/'.$AD_Folder.'/';
            $config5['allowed_types'] = 'gif|jpg|png|jpeg';
            $config5['max_size'] = 100000;
            $config5['max_width'] = 10000;
            $config5['max_height'] = 10000;
            $config5['file_name'] = $Brd_name . '_' . $Model . '_' . $M_Year . $Rand . '_5';
            $this->upload->initialize($config5);
            $this->upload->do_upload('img_pro5');
            $data = array(
                'image' => $config['file_name']
            );

            $path5 = 'assets/Ad_Images/'.$AD_Folder.'/' . $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_5.' . $ext5;
            $config5['source_image'] = $path5;
            //The image path,which you would like to watermarking
            $config5['wm_text'] = 'sellfree.lk';
            $config5['wm_type'] = 'text';
            $config5['wm_font_size'] = 20;
            $config5['wm_font_color'] = '#000';
            $config5['wm_opacity'] = 80;
            $config5['wm_vrt_alignment'] = 'middle';
            $config5['wm_hor_alignment'] = 'middle';
            $config5['wm_padding'] = '20';

            $this->image_lib->initialize($config5);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }


        if ($ext1) {
            $Img1 = $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_1.' . $ext1;
        } else {
            $Img1 = '';
        }
        if ($ext2) {
            $Img2 = $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_2.' . $ext2;
        } else {
            $Img2 = '';
        }
        if ($ext3) {
            $Img3 = $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_3.' . $ext3;
        } else {
            $Img3 = '';
        }
        if ($ext4) {
            $Img4 = $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_4.' . $ext4;
        } else {
            $Img4 = '';
        }
        if ($ext5) {
            $Img5 = $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year . $Rand . '_5.' . $ext5;
        } else {
            $Img5 = '';
        }







        /*
         * Data array
         */
        $data = array(
//            'P_Code' => $P_Name . '-' . $type_name . $P_Serial,
            'AD_Code' => $Brd_name . '_' . str_replace(' ', '_', $Model) . '_' . $M_Year,
            'Date' => $date_ps,
            'Time' => $time_ps,
            'Ad_Cat_ID' => $cmb_category,
            'Ad_sub_Cat_ID' => $cmb_sub_category,
            'Ad_Name' => $Brd_name . ' ' . $Model . ' ' . $M_Year,
            'U_ID' => $User,
            'DST_ID' => $this->input->post('cmb_dist'),
            'CTY_ID' => $this->input->post('cmb_city'),
            'Ad_Title' => $Brd_name . ' ' . $Model . ' ' . $M_Year,
            'BRD_ID' => $cmb_brand,
            'Brand_Condition' => $Condition,
            'Model' => $Model,
            'Year' => $M_Year,
            'U_ID' => $User,
            'CND_ID' => $Condition,
//            'BD_TP_ID' => $this->input->post('txt_warranty'),
            'TRNS_ID' => $Transmission,
            'FUAL_ID' => $Fuel,
            'Mileage' => $KM,
            'AC' => $AC,
            'Remote' => $Remote,
            'Power_Mir' => $Power_Mir,
            'Power_W' => $Power_W,
            'Power_S' => $Power_S,
            'MF_S' => $MF_S,
            'Cruise' => $Cruise,
            'AirBG' => $AirBG,
            'Seat_H' => $Seat_H,
            'Engine_Capacity' => $CC,
            'Description' => $Description,
            'Price' => $Price,
            'Negotiable' => $Negotiable,
            'IMG1' => $Img1,
            'IMG2' => $Img2,
            'IMG3' => $Img3,
            'IMG4' => $Img4,
            'IMG5' => $Img5,
            'Is_Free_Ad' => 1,
            'Is_active' => 1
        );





        //**********Transaction Start
        $this->db->trans_start();

        

        //Insert Data
//        $result = $this->Db_model->insertData("tbl_inventory", $data);


        $max_id = $this->Generic_model->insertData_New('tbl_ads', $data);






        //**********Transaction complate
        $this->db->trans_complete();




        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {

            $this->db->trans_commit();
            $this->session->set_flashdata('success_message', 'Your ad has been added successfully');
        }


        redirect(base_url() . 'Post_Ad/'); //*********Redirect form
    }

    public function Publish_Post_Elec() {

        $this->load->library('upload');
        $this->load->library('image_lib');

        $Rand = (rand(10, 1000));

        date_default_timezone_set('Asia/Colombo');
        $date = date_create();
        $date_ps = date_format($date, 'Y-m-d');
        $time_ps = date_format($date, 'H:i:s');

        $currentUser = $this->session->userdata('login_user');
        $User = $currentUser[0]->U_ID;

        $cmb_category = $this->input->post('txt_cat');
        $cmb_sub_category = $this->input->post('txt_sub_cat');
//        $Model = $this->input->post('txt_model');
//        $Brd_name = $this->input->post('txt_brand');

        $Title = $this->input->post('txt_title');

        $Title = $Title;

        $Condition = $this->input->post('itemCondi');

        if ($Condition == NULL) {
            $Condition = '0';
        }

//        var_dump($Condition);die;

        $dataAd_Cat = $this->Db_model->getfilteredData("select Ad_Cat_ID,Img_Folder from tbl_ad_category where Ad_Cat_ID = $cmb_category ");
        $AD_Folder = $dataAd_Cat[0]->Img_Folder;

//        var_dump($dataAd_Cat[0]->Img_Folder);die;


        $Price = $this->input->post('txt_price');
        $Negotiable = $this->input->post('txt_Negotiable');

        if ($Negotiable == '') {
            $Negotiable = 0;
        }
        $Description = $this->input->post('txt_desc');

        var_dump($cmb_category, 'Condi' . $Condition, '$Negotiable' . $Negotiable, $Description);
//        die;
//----------------------------------------------------------------------------------------------------------------------------------------------------
// 000111111111
//----------------------------------------------------------------------------------------------------------------------------------------------------        

        $dname = explode(".", $_FILES['img_pro1']['name']);
        $ext1 = end($dname);
        if ($ext1) {

            $config['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 100000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;

            $config['image_library'] = 'gd';
            $config['quality'] = '50%';

            $config['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_1';
            $this->upload->initialize($config);
            $this->upload->do_upload('img_pro1');
            $data = array(
                'image' => $config['file_name']
            );

            $path = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_1.' . $ext1;
            $config['source_image'] = $path;
            //The image path,which you would like to watermarking
            $config['wm_text'] = 'sellfree.lk';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = FCPATH . 'assets/fonts/Ubuntu-Regular.ttf';
            $config['wm_font_size'] = 20;
            $config['wm_font_color'] = '#000';
            $config['wm_opacity'] = 80;
            $config['wm_vrt_alignment'] = 'middle';
            $config['wm_hor_alignment'] = 'middle';
            $config['wm_padding'] = '20';

            $this->image_lib->initialize($config);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }

//        var_dump($path,$config);
//        die;
//----------------------------------------------------------------------------------------------------------------------------------------------------
//000222222222
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro2']['name']);
        $ext2 = end($dname);
        if ($ext2) {
            $config2['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';
            $config2['max_size'] = 100000;
            $config2['max_width'] = 10000;
            $config2['max_height'] = 10000;
            $config2['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_2';
            $this->upload->initialize($config2);
            $this->upload->do_upload('img_pro2');
            $data = array(
                'image' => $config['file_name']
            );

            $path2 = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_2.' . $ext2;
            $config2['source_image'] = $path2;
            //The image path,which you would like to watermarking
            $config2['wm_text'] = 'sellfree.lk';
            $config2['wm_type'] = 'text';
            $config2['wm_font_size'] = 20;
            $config2['wm_font_color'] = '#000';
            $config2['wm_opacity'] = 80;
            $config2['wm_vrt_alignment'] = 'middle';
            $config2['wm_hor_alignment'] = 'middle';
            $config2['wm_padding'] = '20';

            $this->image_lib->initialize($config2);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }


//----------------------------------------------------------------------------------------------------------------------------------------------------
//00003333
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro3']['name']);
        $ext3 = end($dname);
        if ($ext3) {
            $config3['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config3['allowed_types'] = 'gif|jpg|png|jpeg';
            $config3['max_size'] = 100000;
            $config3['max_width'] = 10000;
            $config3['max_height'] = 10000;
            $config3['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_3';
            $this->upload->initialize($config3);
            $this->upload->do_upload('img_pro3');
            $data = array(
                'image' => $config['file_name']
            );

            $path3 = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_3.' . $ext3;
            $config3['source_image'] = $path3;
            //The image path,which you would like to watermarking
            $config3['wm_text'] = 'sellfree.lk';
            $config3['wm_type'] = 'text';
            $config3['wm_font_size'] = 20;
            $config3['wm_font_color'] = '#000';
            $config3['wm_opacity'] = 80;
            $config3['wm_vrt_alignment'] = 'middle';
            $config3['wm_hor_alignment'] = 'middle';
            $config3['wm_padding'] = '20';

            $this->image_lib->initialize($config3);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }



        //----------------------------------------------------------------------------------------------------------------------------------------------------
        //00000444
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro4']['name']);
        $ext4 = end($dname);
        if ($ext4) {
            $config4['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config4['allowed_types'] = 'gif|jpg|png|jpeg';
            $config4['max_size'] = 100000;
            $config4['max_width'] = 10000;
            $config4['max_height'] = 10000;
            $config4['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_4';
            $this->upload->initialize($config4);
            $this->upload->do_upload('img_pro4');
            $data = array(
                'image' => $config['file_name']
            );

            $path4 = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_4.' . $ext4;
            $config4['source_image'] = $path4;
            //The image path,which you would like to watermarking
            $config4['wm_text'] = 'sellfree.lk';
            $config4['wm_type'] = 'text';
            $config4['wm_font_size'] = 20;
            $config4['wm_font_color'] = '#000';
            $config4['wm_opacity'] = 80;
            $config4['wm_vrt_alignment'] = 'middle';
            $config4['wm_hor_alignment'] = 'middle';
            $config4['wm_padding'] = '20';

            $this->image_lib->initialize($config4);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }



        //----------------------------------------------------------------------------------------------------------------------------------------------------
        //0005555555
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro5']['name']);
        $ext5 = end($dname);
        if ($ext5) {
            $config5['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config5['allowed_types'] = 'gif|jpg|png|jpeg';
            $config5['max_size'] = 100000;
            $config5['max_width'] = 10000;
            $config5['max_height'] = 10000;
            $config5['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_5';
            $this->upload->initialize($config5);
            $this->upload->do_upload('img_pro5');
            $data = array(
                'image' => $config['file_name']
            );

            $path5 = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_5.' . $ext5;
            $config5['source_image'] = $path5;
            //The image path,which you would like to watermarking
            $config5['wm_text'] = 'sellfree.lk';
            $config5['wm_type'] = 'text';
            $config5['wm_font_size'] = 20;
            $config5['wm_font_color'] = '#000';
            $config5['wm_opacity'] = 80;
            $config5['wm_vrt_alignment'] = 'middle';
            $config5['wm_hor_alignment'] = 'middle';
            $config5['wm_padding'] = '20';

            $this->image_lib->initialize($config5);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }


        if ($ext1) {
            $Img1 = str_replace(' ', '_', $Title) . $Rand . '_1.' . $ext1;
        } else {
            $Img1 = '';
        }
        if ($ext2) {
            $Img2 = str_replace(' ', '_', $Title) . $Rand . '_2.' . $ext2;
        } else {
            $Img2 = '';
        }
        if ($ext3) {
            $Img3 = str_replace(' ', '_', $Title) . $Rand . '_3.' . $ext3;
        } else {
            $Img3 = '';
        }
        if ($ext4) {
            $Img4 = str_replace(' ', '_', $Title) . $Rand . '_4.' . $ext4;
        } else {
            $Img4 = '';
        }
        if ($ext5) {
            $Img5 = str_replace(' ', '_', $Title) . $Rand . '_5.' . $ext5;
        } else {
            $Img5 = '';
        }







        /*
         * Data array
         */
        $data = array(
//            'P_Code' => $P_Name . '-' . $type_name . $P_Serial,
            'AD_Code' => str_replace(' ', '_', $Title),
            'Date' => $date_ps,
            'Time' => $time_ps,
            'Ad_Cat_ID' => $cmb_category,
            'Ad_sub_Cat_ID' => $cmb_sub_category,
            'Ad_Name' => $Title,
            'U_ID' => $User,
            'DST_ID' => $this->input->post('cmb_dist'),
            'CTY_ID' => $this->input->post('cmb_city'),
            'Ad_Title' => $Title,
//            'Brand_Name_Oth' => $Brd_name,
            'Brand_Condition' => $Condition,
//            'Model' => $Model,
            'U_ID' => $User,
            'CND_ID' => $Condition,
//            'BD_TP_ID' => $this->input->post('txt_warranty'),
            'Description' => $Description,
            'Price' => $Price,
            'Negotiable' => $Negotiable,
            'IMG1' => $Img1,
            'IMG2' => $Img2,
            'IMG3' => $Img3,
            'IMG4' => $Img4,
            'IMG5' => $Img5,
            'Is_Free_Ad' => 1,
            'Is_active' => 1
        );





        //**********Transaction Start
        $this->db->trans_start();

        //Insert Data
//        $result = $this->Db_model->insertData("tbl_inventory", $data);


        $max_id = $this->Generic_model->insertData_New('tbl_ads', $data);






        //**********Transaction complate
        $this->db->trans_complete();




        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {

            $this->db->trans_commit();
            $this->session->set_flashdata('success_message', 'Your ad has been added successfully');
        }


        redirect(base_url() . 'Post_Ad/'); //*********Redirect form
    }
    
    
       public function Publish_Post_Other() {

        $this->load->library('upload');
        $this->load->library('image_lib');

        $Rand = (rand(10, 1000));

        date_default_timezone_set('Asia/Colombo');
        $date = date_create();
        $date_ps = date_format($date, 'Y-m-d');
        $time_ps = date_format($date, 'H:i:s');

        $currentUser = $this->session->userdata('login_user');
        $User = $currentUser[0]->U_ID;

        $cmb_category = $this->input->post('txt_cat');
        $cmb_sub_category = $this->input->post('txt_sub_cat');
//        $Model = $this->input->post('txt_model');
//        $Brd_name = $this->input->post('txt_brand');

        $Title = $this->input->post('txt_title');

        $Title = $Title;

        $Condition = $this->input->post('itemCondi');

        if ($Condition == NULL) {
            $Condition = '0';
        }

//        var_dump($Condition);die;

        $dataAd_Cat = $this->Db_model->getfilteredData("select Ad_Cat_ID,Img_Folder from tbl_ad_category where Ad_Cat_ID = $cmb_category ");
        $AD_Folder = $dataAd_Cat[0]->Img_Folder;

//        var_dump($dataAd_Cat[0]->Img_Folder);die;


        $Price = $this->input->post('txt_price');
        $Negotiable = $this->input->post('txt_Negotiable');

        if ($Negotiable == '') {
            $Negotiable = 0;
        }
        $Description = $this->input->post('txt_desc');

        var_dump($cmb_category, 'Condi' . $Condition, '$Negotiable' . $Negotiable, $Description);
//        die;
//----------------------------------------------------------------------------------------------------------------------------------------------------
// 000111111111
//----------------------------------------------------------------------------------------------------------------------------------------------------        

        $dname = explode(".", $_FILES['img_pro1']['name']);
        $ext1 = end($dname);
        if ($ext1) {

            $config['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 100000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;

            $config['image_library'] = 'gd';
            $config['quality'] = '50%';

            $config['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_1';
            $this->upload->initialize($config);
            $this->upload->do_upload('img_pro1');
            $data = array(
                'image' => $config['file_name']
            );

            $path = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_1.' . $ext1;
            $config['source_image'] = $path;
            //The image path,which you would like to watermarking
            $config['wm_text'] = 'sellfree.lk';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = FCPATH . 'assets/fonts/Ubuntu-Regular.ttf';
            $config['wm_font_size'] = 20;
            $config['wm_font_color'] = '#000';
            $config['wm_opacity'] = 80;
            $config['wm_vrt_alignment'] = 'middle';
            $config['wm_hor_alignment'] = 'middle';
            $config['wm_padding'] = '20';

            $this->image_lib->initialize($config);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }

//        var_dump($path,$config);
//        die;
//----------------------------------------------------------------------------------------------------------------------------------------------------
//000222222222
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro2']['name']);
        $ext2 = end($dname);
        if ($ext2) {
            $config2['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';
            $config2['max_size'] = 100000;
            $config2['max_width'] = 10000;
            $config2['max_height'] = 10000;
            $config2['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_2';
            $this->upload->initialize($config2);
            $this->upload->do_upload('img_pro2');
            $data = array(
                'image' => $config['file_name']
            );

            $path2 = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_2.' . $ext2;
            $config2['source_image'] = $path2;
            //The image path,which you would like to watermarking
            $config2['wm_text'] = 'sellfree.lk';
            $config2['wm_type'] = 'text';
            $config2['wm_font_size'] = 20;
            $config2['wm_font_color'] = '#000';
            $config2['wm_opacity'] = 80;
            $config2['wm_vrt_alignment'] = 'middle';
            $config2['wm_hor_alignment'] = 'middle';
            $config2['wm_padding'] = '20';

            $this->image_lib->initialize($config2);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }


//----------------------------------------------------------------------------------------------------------------------------------------------------
//00003333
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro3']['name']);
        $ext3 = end($dname);
        if ($ext3) {
            $config3['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config3['allowed_types'] = 'gif|jpg|png|jpeg';
            $config3['max_size'] = 100000;
            $config3['max_width'] = 10000;
            $config3['max_height'] = 10000;
            $config3['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_3';
            $this->upload->initialize($config3);
            $this->upload->do_upload('img_pro3');
            $data = array(
                'image' => $config['file_name']
            );

            $path3 = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_3.' . $ext3;
            $config3['source_image'] = $path3;
            //The image path,which you would like to watermarking
            $config3['wm_text'] = 'sellfree.lk';
            $config3['wm_type'] = 'text';
            $config3['wm_font_size'] = 20;
            $config3['wm_font_color'] = '#000';
            $config3['wm_opacity'] = 80;
            $config3['wm_vrt_alignment'] = 'middle';
            $config3['wm_hor_alignment'] = 'middle';
            $config3['wm_padding'] = '20';

            $this->image_lib->initialize($config3);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }



        //----------------------------------------------------------------------------------------------------------------------------------------------------
        //00000444
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro4']['name']);
        $ext4 = end($dname);
        if ($ext4) {
            $config4['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config4['allowed_types'] = 'gif|jpg|png|jpeg';
            $config4['max_size'] = 100000;
            $config4['max_width'] = 10000;
            $config4['max_height'] = 10000;
            $config4['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_4';
            $this->upload->initialize($config4);
            $this->upload->do_upload('img_pro4');
            $data = array(
                'image' => $config['file_name']
            );

            $path4 = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_4.' . $ext4;
            $config4['source_image'] = $path4;
            //The image path,which you would like to watermarking
            $config4['wm_text'] = 'sellfree.lk';
            $config4['wm_type'] = 'text';
            $config4['wm_font_size'] = 20;
            $config4['wm_font_color'] = '#000';
            $config4['wm_opacity'] = 80;
            $config4['wm_vrt_alignment'] = 'middle';
            $config4['wm_hor_alignment'] = 'middle';
            $config4['wm_padding'] = '20';

            $this->image_lib->initialize($config4);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }



        //----------------------------------------------------------------------------------------------------------------------------------------------------
        //0005555555
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro5']['name']);
        $ext5 = end($dname);
        if ($ext5) {
            $config5['upload_path'] = 'assets/Ad_Images/' . $AD_Folder . '/';
            $config5['allowed_types'] = 'gif|jpg|png|jpeg';
            $config5['max_size'] = 100000;
            $config5['max_width'] = 10000;
            $config5['max_height'] = 10000;
            $config5['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_5';
            $this->upload->initialize($config5);
            $this->upload->do_upload('img_pro5');
            $data = array(
                'image' => $config['file_name']
            );

            $path5 = 'assets/Ad_Images/' . $AD_Folder . '/' . str_replace(' ', '_', $Title) . $Rand . '_5.' . $ext5;
            $config5['source_image'] = $path5;
            //The image path,which you would like to watermarking
            $config5['wm_text'] = 'sellfree.lk';
            $config5['wm_type'] = 'text';
            $config5['wm_font_size'] = 20;
            $config5['wm_font_color'] = '#000';
            $config5['wm_opacity'] = 80;
            $config5['wm_vrt_alignment'] = 'middle';
            $config5['wm_hor_alignment'] = 'middle';
            $config5['wm_padding'] = '20';

            $this->image_lib->initialize($config5);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }


        if ($ext1) {
            $Img1 = str_replace(' ', '_', $Title) . $Rand . '_1.' . $ext1;
        } else {
            $Img1 = '';
        }
        if ($ext2) {
            $Img2 = str_replace(' ', '_', $Title) . $Rand . '_2.' . $ext2;
        } else {
            $Img2 = '';
        }
        if ($ext3) {
            $Img3 = str_replace(' ', '_', $Title) . $Rand . '_3.' . $ext3;
        } else {
            $Img3 = '';
        }
        if ($ext4) {
            $Img4 = str_replace(' ', '_', $Title) . $Rand . '_4.' . $ext4;
        } else {
            $Img4 = '';
        }
        if ($ext5) {
            $Img5 = str_replace(' ', '_', $Title) . $Rand . '_5.' . $ext5;
        } else {
            $Img5 = '';
        }







        /*
         * Data array
         */
        $data = array(
//            'P_Code' => $P_Name . '-' . $type_name . $P_Serial,
            'AD_Code' => str_replace(' ', '_', $Title),
            'Date' => $date_ps,
            'Time' => $time_ps,
            'Ad_Cat_ID' => $cmb_category,
            'Ad_sub_Cat_ID' => $cmb_sub_category,
            'Ad_Name' => $Title,
            'U_ID' => $User,
            'DST_ID' => $this->input->post('cmb_dist'),
            'CTY_ID' => $this->input->post('cmb_city'),
            'Ad_Title' => $Title,
//            'Brand_Name_Oth' => $Brd_name,
            'Brand_Condition' => $Condition,
//            'Model' => $Model,
            'U_ID' => $User,
            'CND_ID' => $Condition,
//            'BD_TP_ID' => $this->input->post('txt_warranty'),
            'Description' => $Description,
            'Price' => $Price,
            'Negotiable' => $Negotiable,
            'IMG1' => $Img1,
            'IMG2' => $Img2,
            'IMG3' => $Img3,
            'IMG4' => $Img4,
            'IMG5' => $Img5,
            'Is_Free_Ad' => 1,
            'Is_active' => 1
        );





        //**********Transaction Start
        $this->db->trans_start();

        //Insert Data
//        $result = $this->Db_model->insertData("tbl_inventory", $data);


        $max_id = $this->Generic_model->insertData_New('tbl_ads', $data);






        //**********Transaction complate
        $this->db->trans_complete();




        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {

            $this->db->trans_commit();
            $this->session->set_flashdata('success_message', 'Your ad has been added successfully');
        }


        redirect(base_url() . 'Post_Ad/'); //*********Redirect form
    }

    public function Publish_Post_Lnd() {

        $this->load->library('upload');
        $this->load->library('image_lib');

        $Rand = (rand(10, 1000));


        date_default_timezone_set('Asia/Colombo');
        $date = date_create();
        $date_ps = date_format($date, 'Y-m-d');
        $time_ps = date_format($date, 'H:i:s');

        $currentUser = $this->session->userdata('login_user');
        $User = $currentUser[0]->U_ID;

        $cmb_category = $this->input->post('txt_cat');
        $cmb_sub_category = $this->input->post('txt_sub_cat');
//        $Model = $this->input->post('txt_model');
//        $Brd_name = $this->input->post('txt_brand');

        $Title = $this->input->post('txt_title');

        $Title = $Title;

//        $Condition = $this->input->post('itemCondi');





        $Price = $this->input->post('txt_price');
        $Negotiable = $this->input->post('txt_Negotiable');

        if ($Negotiable == '') {
            $Negotiable = 0;
        }
        $Description = $this->input->post('txt_desc');

        var_dump($cmb_category, 'Condi', '$Negotiable' . $Negotiable, $Description);
//        die;
//----------------------------------------------------------------------------------------------------------------------------------------------------
// 000111111111
//----------------------------------------------------------------------------------------------------------------------------------------------------        

        $dname = explode(".", $_FILES['img_pro1']['name']);
        $ext1 = end($dname);
        if ($ext1) {

            $config['upload_path'] = 'assets/Ad_Images/Property/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 100000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;

            $config['image_library'] = 'gd';
            $config['quality'] = '50%';

            $config['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_1';
            $this->upload->initialize($config);
            $this->upload->do_upload('img_pro1');
            $data = array(
                'image' => $config['file_name']
            );

            $path = 'assets/Ad_Images/Property/' . str_replace(' ', '_', $Title) . $Rand . '_1.' . $ext1;
            $config['source_image'] = $path;
            //The image path,which you would like to watermarking
            $config['wm_text'] = 'sellfree.lk';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = FCPATH . 'assets/fonts/Ubuntu-Regular.ttf';
            $config['wm_font_size'] = 20;
            $config['wm_font_color'] = '#000';
            $config['wm_opacity'] = 80;
            $config['wm_vrt_alignment'] = 'middle';
            $config['wm_hor_alignment'] = 'middle';
            $config['wm_padding'] = '20';

            $this->image_lib->initialize($config);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }




//----------------------------------------------------------------------------------------------------------------------------------------------------
//000222222222
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro2']['name']);
        $ext2 = end($dname);
        if ($ext2) {
            $config2['upload_path'] = 'assets/Ad_Images/Property/';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';
            $config2['max_size'] = 100000;
            $config2['max_width'] = 10000;
            $config2['max_height'] = 10000;
            $config2['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_2';
            $this->upload->initialize($config2);
            $this->upload->do_upload('img_pro2');
            $data = array(
                'image' => $config['file_name']
            );

            $path2 = 'assets/Ad_Images/Property/' . str_replace(' ', '_', $Title) . $Rand . '_2.' . $ext2;
            $config2['source_image'] = $path2;
            //The image path,which you would like to watermarking
            $config2['wm_text'] = 'sellfree.lk';
            $config2['wm_type'] = 'text';
            $config2['wm_font_size'] = 20;
            $config2['wm_font_color'] = '#000';
            $config2['wm_opacity'] = 80;
            $config2['wm_vrt_alignment'] = 'middle';
            $config2['wm_hor_alignment'] = 'middle';
            $config2['wm_padding'] = '20';

            $this->image_lib->initialize($config2);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }


//----------------------------------------------------------------------------------------------------------------------------------------------------
//00003333
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro3']['name']);
        $ext3 = end($dname);
        if ($ext3) {
            $config3['upload_path'] = 'assets/Ad_Images/Property/';
            $config3['allowed_types'] = 'gif|jpg|png|jpeg';
            $config3['max_size'] = 100000;
            $config3['max_width'] = 10000;
            $config3['max_height'] = 10000;
            $config3['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_3';
            $this->upload->initialize($config3);
            $this->upload->do_upload('img_pro3');
            $data = array(
                'image' => $config['file_name']
            );

            $path3 = 'assets/Ad_Images/Property/' . str_replace(' ', '_', $Title) . $Rand . '_3.' . $ext3;
            $config3['source_image'] = $path3;
            //The image path,which you would like to watermarking
            $config3['wm_text'] = 'sellfree.lk';
            $config3['wm_type'] = 'text';
            $config3['wm_font_size'] = 20;
            $config3['wm_font_color'] = '#000';
            $config3['wm_opacity'] = 80;
            $config3['wm_vrt_alignment'] = 'middle';
            $config3['wm_hor_alignment'] = 'middle';
            $config3['wm_padding'] = '20';

            $this->image_lib->initialize($config3);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }



        //----------------------------------------------------------------------------------------------------------------------------------------------------
        //00000444
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro4']['name']);
        $ext4 = end($dname);
        if ($ext4) {
            $config4['upload_path'] = 'assets/Ad_Images/Property/';
            $config4['allowed_types'] = 'gif|jpg|png|jpeg';
            $config4['max_size'] = 100000;
            $config4['max_width'] = 10000;
            $config4['max_height'] = 10000;
            $config4['file_name'] = str_replace(' ', '_', $Title) . '_4';
            $this->upload->initialize($config4);
            $this->upload->do_upload('img_pro4');
            $data = array(
                'image' => $config['file_name']
            );

            $path4 = 'assets/Ad_Images/Property/' . str_replace(' ', '_', $Title) . $Rand . '_4.' . $ext4;
            $config4['source_image'] = $path4;
            //The image path,which you would like to watermarking
            $config4['wm_text'] = 'sellfree.lk';
            $config4['wm_type'] = 'text';
            $config4['wm_font_size'] = 20;
            $config4['wm_font_color'] = '#000';
            $config4['wm_opacity'] = 80;
            $config4['wm_vrt_alignment'] = 'middle';
            $config4['wm_hor_alignment'] = 'middle';
            $config4['wm_padding'] = '20';

            $this->image_lib->initialize($config4);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }



        //----------------------------------------------------------------------------------------------------------------------------------------------------
        //0005555555
//----------------------------------------------------------------------------------------------------------------------------------------------------  

        $dname = explode(".", $_FILES['img_pro5']['name']);
        $ext5 = end($dname);
        if ($ext5) {
            $config5['upload_path'] = 'assets/Ad_Images/Property/';
            $config5['allowed_types'] = 'gif|jpg|png|jpeg';
            $config5['max_size'] = 100000;
            $config5['max_width'] = 10000;
            $config5['max_height'] = 10000;
            $config5['file_name'] = str_replace(' ', '_', $Title) . $Rand . '_5';
            $this->upload->initialize($config5);
            $this->upload->do_upload('img_pro5');
            $data = array(
                'image' => $config['file_name']
            );

            $path5 = 'assets/Ad_Images/Property/' . str_replace(' ', '_', $Title) . $Rand . '_5.' . $ext5;
            $config5['source_image'] = $path5;
            //The image path,which you would like to watermarking
            $config5['wm_text'] = 'sellfree.lk';
            $config5['wm_type'] = 'text';
            $config5['wm_font_size'] = 20;
            $config5['wm_font_color'] = '#000';
            $config5['wm_opacity'] = 80;
            $config5['wm_vrt_alignment'] = 'middle';
            $config5['wm_hor_alignment'] = 'middle';
            $config5['wm_padding'] = '20';

            $this->image_lib->initialize($config5);
            if (!$this->image_lib->watermark()) {
                echo $this->image_lib->display_errors();
            } else {
                echo 'Successfully updated image with watermark';
            }
        }


        if ($ext1) {
            $Img1 = str_replace(' ', '_', $Title) . $Rand . '_1.' . $ext1;
        } else {
            $Img1 = '';
        }
        if ($ext2) {
            $Img2 = str_replace(' ', '_', $Title) . $Rand . '_2.' . $ext2;
        } else {
            $Img2 = '';
        }
        if ($ext3) {
            $Img3 = str_replace(' ', '_', $Title) . $Rand . '_3.' . $ext3;
        } else {
            $Img3 = '';
        }
        if ($ext4) {
            $Img4 = str_replace(' ', '_', $Title) . $Rand . '_4.' . $ext4;
        } else {
            $Img4 = '';
        }
        if ($ext5) {
            $Img5 = str_replace(' ', '_', $Title) . $Rand . '_5.' . $ext5;
        } else {
            $Img5 = '';
        }







        /*
         * Data array
         */
        $data = array(
//            'P_Code' => $P_Name . '-' . $type_name . $P_Serial,
            'AD_Code' => str_replace(' ', '_', $Title),
            'Date' => $date_ps,
            'Time' => $time_ps,
            'Ad_Cat_ID' => $cmb_category,
            'Ad_sub_Cat_ID' => $cmb_sub_category,
            'Ad_Name' => $Title,
            'U_ID' => $User,
            'DST_ID' => $this->input->post('cmb_dist'),
            'CTY_ID' => $this->input->post('cmb_city'),
            'Ad_Title' => $Title,
//            'Brand_Name_Oth' => $Brd_name,
//            'Brand_Condition' => $Condition,
            'LND_TP_ID' => $this->input->post('cmb_land_tp'),
            'Land_Size' => $this->input->post('txt_size'),
            'Land_mesure' => $this->input->post('cmb_mesure'),
            'Land_address' => $this->input->post('txt_address'),
//            'BD_TP_ID' => $this->input->post('txt_warranty'),
            'Description' => $Description,
            'Price' => $Price,
            'Price_Type' => $this->input->post('cmb_price_unit'),
            'Negotiable' => $Negotiable,
            'IMG1' => $Img1,
            'IMG2' => $Img2,
            'IMG3' => $Img3,
            'IMG4' => $Img4,
            'IMG5' => $Img5,
            'Is_Free_Ad' => 1,
            'Is_active' => 1
        );





        //**********Transaction Start
        $this->db->trans_start();

        //Insert Data
//        $result = $this->Db_model->insertData("tbl_inventory", $data);


        $max_id = $this->Generic_model->insertData_New('tbl_ads', $data);






        //**********Transaction complate
        $this->db->trans_complete();




        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {

            $this->db->trans_commit();
            $this->session->set_flashdata('success_message', 'Your ad has been added successfully');
        }


        redirect(base_url() . 'Post_Ad/'); //*********Redirect form
    }

}
