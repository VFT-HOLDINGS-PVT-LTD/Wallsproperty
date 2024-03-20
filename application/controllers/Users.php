<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

        /**
         * Index Page for this controller
         */
        public function __construct()
        {
                parent::__construct();
                if (!($this->session->userdata('login_user'))) {
                        redirect(base_url() . "Login");
                }


                $this->load->helper('url_helper');
                $this->load->library('pagination');
                $this->load->helper('url');
                /*
                 * Load Database model
                 */

                $this->load->model('Db_model', '', TRUE);
        }

        public function lists()
        {
                $data['data_set_ad_cat'] = $this->Db_model->getData('Ad_Cat_ID,Ad_Cat_Name,ad_cat_icon', 'tbl_ad_category');

                $data['data_set_users'] = $this->Db_model->getfilteredData('SELECT * FROM tbl_users;');

                $this->load->view('Users/index.php', $data);
        }

        public function index($offset = 0)
        {

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
        }

        public function View_Cat1($offset = 0)
        {


                //        var_dump($ID);die;
                $cat = 1;
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

        public function View_Cat2($offset = 0)
        {


                //        var_dump($ID);die;
                $cat = 2;
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

        public function View_Cat3($offset = 0)
        {


                //        var_dump($ID);die;
                $cat = 3;
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

        public function View_Cat4($offset = 0)
        {
                $cat = 4;
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

        public function View_Cat5($offset = 0)
        {
                $cat = 5;
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

        public function View_Cat6($offset = 0)
        {
                $cat = 6;
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

        public function View_Cat7($offset = 0)
        {
                $cat = 7;
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

        public function View_Cat9($offset = 0)
        {
                $cat = 9;
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

        public function View_Cat10($offset = 0)
        {
                $cat = 10;
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

        public function View_Cat11($offset = 0)
        {
                $cat = 11;
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

        public function View_Cat12($offset = 0)
        {
                $cat = 12;
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

        public function Filter($offset = 0)
        {

                $cat = $this->input->post('cmb_cat');
                $dist = $this->input->post('cmb_dist');
                $key = $this->input->post('txt_key');

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

        public function Get_Ad_cat()
        {

        }
        public function Edit($id)
        {
                $getdata['email'] = $this->Db_model->getfilteredData("select  * from  tbl_users where U_ID = $id ");
                $this->load->view('Users/Edit_user.php', $getdata);
                // $this->load->view('Users/Edit_user');
        }
        public function u_edit($user_id)
        {
                // Fetch user data
                $data['user'] = $this->Db_Model->getUser($user_id);

                // Load the update form view
                $this->load->view('Users/Edit_user', $data);
        }

        public function update()
        {

                $user_id = $this->input->post('u_id');
                $Users_Name = $this->input->post('txt_name');
                $Email = $this->input->post('txt_mail');
                $Phone_No = $this->input->post('txt_mobile');


                // Prepare data array for updating
                $data = array(
                        'Users_Name' => $Users_Name,
                        'Email' => $Email,
                        'Phone_No' => $Phone_No,
                );

                // Update user data
                $result = $this->Db_model->updateUser($user_id, $data);

                if ($result) {
                        // Store success message in session
                        $this->session->set_flashdata('success_message', 'User updated successfully!');
                        redirect(base_url() . 'Users/lists');
                    } else {
                        // Store error message in session
                        $this->session->set_flashdata('error_message', 'Error occurred during update.');
                        redirect(base_url() . 'Users/lists');
                    }
                 
               
        }

}
