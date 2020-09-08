<?php
defined('BASEPATH') OR exit('No Direct!!!');

class Statistik extends CI_Controller {

    function __construct()
    {
     parent::__construct();
     $this->load->model('Visitor_model','visitor_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');

    }

    public function index(){
        $site = $this->site_model->get_site_data()->row_array();
		$data['site_name'] = $site['site_name'];
		$data['site_title'] = $site['site_title'];
		$data['site_desc'] = $site['site_description'];
		$data['site_twitter'] = $site['site_twitter'];
		$data['post_header'] = $this->home_model->get_post_header();
		$data['post_header_2'] = $this->home_model->get_post_header_2();
		$data['post_header_3'] = $this->home_model->get_post_header_3();
		$data['latest_post'] = $this->home_model->get_latest_post();
		$data['popular_post'] = $this->home_model->get_popular_post();
		$data['header'] = $this->load->view('header','',TRUE);
		$data['footer'] = $this->load->view('footer','',TRUE);
		$this->load->view('statistik_view',$data);
    }

    public function halo(){
        $this->load->view('statistik_view');
    }
}