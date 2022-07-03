<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Customer_model', 'customer');
        $this->load->model('Designer_model', 'designer');
    }

    public function index()
    { 
 
    }
}
