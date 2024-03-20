<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class All_Ads extends CI_Controller {

    /**
     * Index Page for this controller
     */
    public function __construct() {
        parent::__construct();



        $this->load->helper('url_helper');
        $this->load->library('pagination');
        $this->load->helper('url');
        /*
         * Load Database model
         */

        $this->load->model('Db_model', '', TRUE);
    }

    public function index_p() {
        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');

        $data['data_set_all_ads'] = $this->Db_model->getfilteredData('SELECT * FROM tbl_ads
INNER JOIN `tbl_ad_category`
ON `tbl_ads`.`Ad_Cat_ID` = `tbl_ad_category`.`Ad_Cat_ID`
INNER JOIN `tbl_users`
ON `tbl_users`.`U_ID` = `tbl_ads`.`U_ID`
INNER JOIN `tbl_districts`
ON `tbl_districts`.`DST_ID` =`tbl_ads`.`DST_ID`
INNER JOIN `tbl_city`
ON `tbl_city`.`CTY_ID` = `tbl_ads`.`CTY_ID`
INNER JOIN `tbl_ad_sub_category`
ON `tbl_ad_sub_category`.`Ad_sub_Cat_ID`= `tbl_ads`.`Ad_sub_Cat_ID`
LEFT JOIN `tbl_ad_images`
ON `tbl_ad_images`.`IMG_ID` = `tbl_ads`.`IMG_ID` where tbl_ads.Is_approve=1');

        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function index($offset = 0) {



        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1 WHERE `CLK_ID` = 1";
        $this->db->query($sql);

//      
//        echo $this->db->last_query();
//        



        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');

        //how many blogs will be shown in a page
        $limit = 20;

        $result = $this->Db_model->get_blogs($limit, $offset);


        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');

//        var_dump($getdata[0]->AdCount);die;
//        var_dump($result);die;

        $data['ad_list'] = $result['rows'];

        $data['num_results'] = $result['num_rows'];

//        var_dump($data);die;
        // load pagination library
        $this->load->library('pagination');

        $config = array();

        $config['base_url'] = site_url("All_Ads/index");
        $config['total_rows'] = $this->Db_model->get_adcount();
        ;
        $config['per_page'] = $limit;

        //which uri segment indicates pagination number
//        $config['total_rows'] =550;
//        $config['per_page'] = 20;

        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;

        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';


        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('Site/vw_all_ads.php', $data);
//                die;
    }

    public function View_Cat1($offset = 0) {


//        var_dump($ID);die;
        $cat = 1;


        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1 ,Ad_Cat_ID=1 WHERE `CLK_ID` = 4";
        $this->db->query($sql);


//        $dist = $this->input->post('cmb_dist');
//        $key = $this->input->post('txt_key');
//        var_dump($cat,$dist);die;
        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');

        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
//        var_dump($getdata[0]->AdCount);die;
//        var_dump($result);die;

        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];

//        var_dump($data);die;
        // load pagination library
        $this->load->library('pagination');

        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat1   ");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;

        //which uri segment indicates pagination number
//        $config['total_rows'] =550;
//        $config['per_page'] = 20;

        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;

        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat2($offset = 0) {


//        var_dump($ID);die;
        $cat = 2;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 5";
        $this->db->query($sql);

//        $dist = $this->input->post('cmb_dist');
//        $key = $this->input->post('txt_key');
//        var_dump($cat,$dist);die;
        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');

        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
//        var_dump($getdata[0]->AdCount);die;
//        var_dump($result);die;

        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];

//        var_dump($data);die;
        // load pagination library
        $this->load->library('pagination');

        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat2");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;

        //which uri segment indicates pagination number
//        $config['total_rows'] =550;
//        $config['per_page'] = 20;

        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;

        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat3($offset = 0) {







//        var_dump($ID);die;
        $cat = 3;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 6";
        $this->db->query($sql);

//        $dist = $this->input->post('cmb_dist');
//        $key = $this->input->post('txt_key');
//        var_dump($cat,$dist);die;
        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');

        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
//        var_dump($getdata[0]->AdCount);die;
//        var_dump($result);die;

        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];

//        var_dump($data);die;
        // load pagination library
        $this->load->library('pagination');

        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;

        //which uri segment indicates pagination number
//        $config['total_rows'] =550;
//        $config['per_page'] = 20;

        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;

        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat4($offset = 0) {
        $cat = 4;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 7";
        $this->db->query($sql);

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;
        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat5($offset = 0) {
        $cat = 5;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 8";
        $this->db->query($sql);

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;
        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat6($offset = 0) {
        $cat = 6;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 9";
        $this->db->query($sql);

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;
        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat7($offset = 0) {
        $cat = 7;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 10";
        $this->db->query($sql);

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;
        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat9($offset = 0) {
        $cat = 9;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 12";
        $this->db->query($sql);

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;
        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat10($offset = 0) {
        $cat = 10;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 13";
        $this->db->query($sql);

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;
        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat11($offset = 0) {
        $cat = 11;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 14";
        $this->db->query($sql);

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;
        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function View_Cat12($offset = 0) {
        $cat = 12;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 15";
        $this->db->query($sql);

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;
        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }
    
    
    
     public function View_Cat13($offset = 0) {
        $cat = 13;

        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 16";
        $this->db->query($sql);

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');
        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filterCat($limit, $offset, $cat);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("All_Ads/View_Cat3");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;
        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Site/vw_all_ads.php', $data);
    }
    

    public function Filter($offset = 0) {

        $cat = $this->input->post('cmb_cat');
        $dist = $this->input->post('cmb_dist');
        $key = $this->input->post('txt_key');

        if ($cat == '') {
            $cat = 0;
        }
        if ($dist == '') {
            $dist = 0;
        }
        if ($key == '') {
            $key = '';
        }


        $data = array(
//            'P_Code' => $P_Name . '-' . $type_name . $P_Serial,
            'Word' => $key,
            'Ad_Cat_ID' => $cat,
//            'Ad_sub_Cat_ID' => $data['platform'],
            'DST_ID' => $dist,
        );




        $this->Db_model->insertData("tbl_searches", $data);



        $sql = "UPDATE `tbl_clicks` SET `PG_Count` = PG_Count+1  WHERE `CLK_ID` = 2";
        $this->db->query($sql);



//        var_dump($cat,$dist);die;

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');
        $data['data_set_city'] = $this->Db_model->getData('DST_ID,DST_Name', 'tbl_districts');

        //how many blogs will be shown in a page
        $limit = 20;
        $result = $this->Db_model->get_filter($limit, $offset, $cat, $dist, $key);

        $getdata = $this->Db_model->getfilteredData('    select  count(*) as AdCount from  tbl_ads where Is_active =1');
//        var_dump($getdata[0]->AdCount);die;
//        var_dump($result);die;

        $data['ad_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];

//        var_dump($data);die;
        // load pagination library
        $this->load->library('pagination');

        $config = array();
        $config['base_url'] = site_url("All_Ads/index");
        $config['total_rows'] = $this->Db_model->get_adcount();
        $config['per_page'] = $limit;

        //which uri segment indicates pagination number
//        $config['total_rows'] =550;
//        $config['per_page'] = 20;

        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;

        //various pagination configuration
        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';


        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->output->set_header('HTTP/1.0 200 OK');
        $this->output->set_header('HTTP/1.1 200 OK');
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function Get_Ad_cat() {
        
    }

}
