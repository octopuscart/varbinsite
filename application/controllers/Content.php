<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_obj = $this->session->userdata('logged_in');
        if ($this->user_obj) {
            $this->user_id = $this->session->userdata('logged_in')['login_id'];
        }
    }

    public function index() {
        $data = array();

        $this->load->view('home', $data);
    }

    public function pages($uri) {
        $data = array();
        $data["metaData"] = [];
        $this->db->where('uri', $uri);
        $query = $this->db->get("content_pages");
        $contentData = $query->row_array();
        $data["contentData"] = $contentData;

        $this->db->where('page_id', $contentData["id"]);
        $query = $this->db->get("content_page_meta");
        $contentDataMeta = $query->result_array();
        $metaDataList = [];
        if ($contentDataMeta) {
            foreach ($contentDataMeta as $key => $value) {
                $this->db->where('id', $value["meta_value"]);
                $query = $this->db->get("content_pages");
                $contentMetaData = $query->row_array();
                array_push($metaDataList, $contentMetaData);
            }
            $data["metaData"] = $metaDataList;
        }
        $this->load->view('pages/' . $contentData["template"], $data);
    }

    public function madrasaadmission() {
        if (isset($_POST["submit"])) {
            $fieldinput = $this->input->post();
            $fieldinput["form_date"] = date("Y-m-d");
            $fieldinput["form_time"] = date("h:i:s a");
            $fieldinput["form_id"] = date("ymdhis");
            unset($fieldinput["submit"]);
            $this->db->insert('madrasa_admission', $fieldinput);
            redirect(site_url("madrasa-admission"));
        }
        $this->load->view('pages/madrasaadmission');
    }

    public function contactus() {

        $this->load->view('pages/contactus');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function error404() {
        $this->load->view('pages/error404');
    }

    public function faq() {
        // $this->load->view('pages/faq');
    }

    public function catalogue() {
        //  $this->load->view('pages/catalogue');
    }

    function privacy_policy() {
        $this->load->view('pages/pp');
    }

}
