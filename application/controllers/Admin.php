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
        $this->load->model('Barang_model', 'Barang');
        $this->load->model('Pesanan_model', 'Pesanan');
        $this->load->model('User_model', 'akun');
        $this->load->model('Transaksi_model', 'Transaksi');
        if ($this->session->userdata('role') != 'admin') {
            redirect('Home/logout');
        }
    }
    public function index()
    {
        redirect('Admin/dasboard');
    }

    public function dasboard()
    {
        $data['user2'] = $this->akun->getByemail();
        $data['Barang'] = $this->Barang->get();
        $data['penjualan'] =  $this->Transaksi->getpenjualan();
        $data['designer'] =  $this->designer->getpresentasi();
        $data['header'] = "dasbordd";
        $this->load->view('content/header_admin', $data);
        $this->load->view('Admin/dasboard', $data);
        $this->load->view('content/footer', $data);
    }

    public function designer()
    {
        $data['designer'] = $this->designer->getonadmin();
        $data['header'] = "lihatdesigner";
        $this->load->view('content/header_admin', $data);
        $this->load->view('Admin/designer', $data);
        $this->load->view('content/footer', $data);
    }
    public function customer()
    {
        $data['customer'] = $this->customer->get();
        $data['header'] = "lihatcustomer";
        $this->load->view('content/header_admin', $data);
        $this->load->view('Admin/customer', $data);
        $this->load->view('content/footer', $data);
    }
    public function detail_barang()
    {
        $data['header'] = 'berbelanja';
        $idbarang = strval($_GET['id_barang']);
        $data['barang'] = $this->Barang->getById($idbarang);
        $idd = $data['barang']['id_design'];
        $data['designer'] = $this->designer->getById($idd);
        $this->load->view('content/header_admin', $data);
        $this->load->view('Admin/vw_detail', $data);
        $this->load->view('content/footer', $data);
    }
    public function Hapus()
    {
        $status = $_GET['id_barang'];
        $this->Barang->hapus(['id' => $status], ['status' => 'delete']);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil dihapus!</div>');
        redirect('Admin/dasboard');
    }
    public function detail_designer()
    {
        $data['header'] = 'designer';
        $ambil = $_GET['id_d'];
        $idd = strval($ambil);
        $data['designer'] = $this->designer->getById($idd);
        $where['id_design'] = $data['designer']['id'];
        $data['Barang'] = $this->Barang->get_where($where);
        $this->load->view('content/header_admin', $data);
        $this->load->view('Admin/detail_designer', $data);
        $this->load->view('content/footer', $data);
    }
    public function Hapus_d()
    {
        $status = $_GET['id_d'];
        $this->designer->hapusbyadmin(['id' => $status], ['status' => 'nonactive']);
        $this->session->set_flashdata('message', '<div class="alert alert-danger m-4" role="alert">Designer Berhasil Di Non-Activekan!</div>');
        redirect('Admin/designer');
    }
    public function Hapus_customer()
    {
        $status = $_GET['id_d'];
        $this->customer->hapusbyadmin(['id' => $status], ['status' => 'delete']);
        $this->session->set_flashdata('message', '<div class="alert alert-success m-4" role="alert">Customer Berhasil Dihapus!</div>');
        redirect('Admin/customer');
    }
    public function active_d()
    {
        $status = $_GET['id_d'];
        $this->designer->hapusbyadmin(['id' => $status], ['status' => 'active']);
        $this->session->set_flashdata('message', '<div class="alert alert-primary m-4" role="alert">Designer Berhasil Di Active-kan!</div>');
        redirect('Admin/designer');
    }

    public function Bonus_d()
    {
        $status = $_GET['id_d'];
        $data['designer'] =  $this->designer->getpresentasi();

        //Perhitungan Bonus Berdasarkan Rating dan penjualan
        $rating = 0;
        $jmljual = 0;
        $sumalljual = 0;
        foreach ($data['designer'] as $d) {
            $sumalljual += $d['jumlah'];
            if ($status == $d['id']) {
                $jmljual += $d['jumlah'];
                $rating = $d['rating'];
            }
        }
        $jual = ($jmljual / $sumalljual) * 100;
        $bonus = $jual * (100000 * $rating);
        //Perhitungan Bonus Berdasarkan Rating dan penjualan
        
        $this->designer->hapusbyadmin(['id' => $status], ['bonus' => $bonus]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger m-4" role="alert">Bonus Berhasil diberikan Kepada Designer!</div>');
        redirect('Admin/designer');
    }
}
