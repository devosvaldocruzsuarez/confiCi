<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }
    public function get_db_host()
    {
        return $_ENV['DB_HOST'];
    }
}