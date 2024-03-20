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
ON `tbl_ad_images`.`IMG_ID` = `tbl_ads`.`IMG_ID`');

        $this->load->view('Site/vw_all_ads.php', $data);
    }

    public function index($offset = 0) {

        $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');

        //how many blogs will be shown in a page
        $limit = 2;

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
        $config['total_rows'] =1000;
        $config['per_page'] = $limit;

        //which uri segment indicates pagination number

//        $config['total_rows'] =550;
//        $config['per_page'] = 20;

        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        //max links on a page will be shown
        $config['num_links'] = 10;

        //various pagination configuration
        
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '<div>';
        
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

    public function Get_Ad_cat() {
        
    }

}
