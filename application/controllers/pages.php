<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enos
 * Date: 20/06/13
 * Time: 15:37
 * To change this template use File | Settings | File Templates.
 */

class pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
//        $this->load->model('joze_model');
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
        $data['title'] = "Queries";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/queries');
        $this->load->view('templates/footer');
    }

    public function responses()
    {
        $data['title'] = "Responses";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/responses');
        $this->load->view('templates/footer');
    }

}