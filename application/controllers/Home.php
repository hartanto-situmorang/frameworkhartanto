<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('content/header');
        $this->load->view('admin/about');
        $this->load->view('content/footer');
    }
}
