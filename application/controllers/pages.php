<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enos
 * Date: 20/06/13
 * Time: 15:37
 * To change this template use File | Settings | File Templates.
 */
$per_page = 15;
class pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('airtel_model');
        $this->load->library('table');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('calendar');
        $this->load->library('encrypt');
        $this->load->dbutil();
        $this->load->dbforge();
    }

    public function index()
    {
        $data['title'] = 'Home';

        $this->load->view('templates/header', $data);
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    public function queries()
    {
        global $per_page;
        $config = array();
        $config["base_url"] = site_url('pages/queries');
        $config["total_rows"] = $this->airtel_model->record_count("query");
        $config["per_page"] = $per_page;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->airtel_model->get_data("query",'','',$config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['title'] = "Queries";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/queries', $data);
        $this->load->view('templates/footer');
    }

    public function responses()
    {
        global $per_page;
        $config = array();
        $config["base_url"] = site_url('pages/responses');
        $config["total_rows"] = $this->airtel_model->record_count("response");
        $config["per_page"] = $per_page;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->airtel_model->get_data("response",'','',$config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['title'] = "Responses";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/responses');
        $this->load->view('templates/footer');
    }

}