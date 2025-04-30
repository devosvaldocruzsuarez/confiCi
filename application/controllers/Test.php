<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Test_model');
    }
    
    public function index()
    {
        // $data_get = $this->Test_model->get_db_host();
        echo $_ENV['DB_HOST'];
        $data['title'] =  $_ENV['DB_HOST'];
        $this->load->view('test_view', $data);
        // phpinfo();
    }
}