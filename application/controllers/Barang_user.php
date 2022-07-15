<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        customer();
        $this->load->model('Barang_model','Barang');
        $this->load->model('Customer_model','customer');
        $this->load->model('Designer_model','Designer');
        $this->load->model('Pesanan_model','Pesanan');
        $this->load->model('User_model','akun');
    }
    public function index()
    {
        $data['header'] = "belanja";
        $data['user'] = $this->db->get_where('akun', ['email' => $this->session->userdata('email')])->row_array();
        $data['user2'] = $this->customer->getByemail();
        $data['Barang'] = $this->Barang->get();
        $data['NotifPesanan'] = $this->Pesanan->notifc($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcountc($data['user2']['id']);
        $this->load->view("Content/header", $data);
        $this->load->view("Barang/barang_user", $data);
        $this->load->view("Content/footer", $data);
    }
    public function pakaian()
    {
        $data['header'] = "berbelanja";
        $data['user'] = $this->db->get_where('akun', ['email' => $this->session->userdata('email')])->row_array();
        $data['user2'] = $this->customer->getByemail();
        $where['jenis'] = 'pakaian';
        $data['Barang'] = $this->Barang->get_where($where);
        $data['NotifPesanan'] = $this->Pesanan->notifc($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcountc($data['user2']['id']);
        $data['NotifPesanan'] = $this->Pesanan->notifc($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcountc($data['user2']['id']);
        $this->load->view("Content/header", $data);
        $this->load->view("Barang/pakaian", $data);
        $this->load->view("Content/footer", $data);
    }
    public function celana()
    {
        $data['header'] = "berbelanja";
        $data['user'] = $this->db->get_where('akun', ['email' => $this->session->userdata('email')])->row_array();
        $data['user2'] = $this->customer->getByemail();
        $data['NotifPesanan'] = $this->Pesanan->notifc($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcountc($data['user2']['id']);
        $where['jenis'] = 'celana';
        $data['Barang'] = $this->Barang->get_where($where);
        $this->load->view("Content/header", $data);
        $this->load->view("Barang/Celana", $data);
        $this->load->view("Content/footer", $data);
    }
    public function aksesories()
    {
        $data['header'] = "berbelanja";
        $data['user'] = $this->db->get_where('akun', ['email' => $this->session->userdata('email')])->row_array();
        $data['user2'] = $this->customer->getByemail();
        $where ['jenis'] = 'aksesories';
        $data['Barang'] = $this->Barang->get_where($where);
        $data['NotifPesanan'] = $this->Pesanan->notifc($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcountc($data['user2']['id']);
        $this->load->view("Content/header", $data);
        $this->load->view("Barang/aksesories", $data);
        $this->load->view("Content/footer", $data);
    }
}