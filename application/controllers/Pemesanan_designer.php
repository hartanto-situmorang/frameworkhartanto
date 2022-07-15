<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_designer extends CI_Controller
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
        if ($this->session->userdata('role') != 'designer') {
            redirect('Home/login');
        }
    }

    public function detail()
    {
        $data['header'] = 'profil';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['Pesanan'] = $this->Pesanan->getById($_GET['id_pesanan']);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('designer/detailpesan', $data);
        $this->load->view('content/footer', $data);
    }

    public function detail_transaksi()
    {
        $data['header'] = 'transaksi';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['Transaksi'] = $this->Transaksi->getById($_GET['id_transaksi']);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('designer/detailtransaksi', $data);
        $this->load->view('content/footer', $data);
    }

    public function dikirim()
    {
        $status = $_GET['id_pesanan'];
        $this->Pesanan->terima(['id' => $status], ['status' => 'Proses Pengiriman']);
        $this->Pesanan->baca(['id' => $status], ['baca_customer' => 'belum']);
        $this->Pesanan->baca(['id' => $status], ['baca' => 'sudah']);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pesanan Berhasil Diubah!</div>');
        redirect('Designer/Pesanan');
    }

    public function packing()
    {
        $status = $_GET['id_pesanan'];
        $this->Pesanan->terima(['id' => $status], ['status' => 'Proses Packing']);
        $this->Pesanan->baca(['id' => $status], ['baca_customer' => 'belum']);
        $this->Pesanan->baca(['id' => $status], ['baca' => 'sudah']);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pesanan Berhasil Diubah!</div>');
        redirect('Designer/Pesanan');
    }
}
