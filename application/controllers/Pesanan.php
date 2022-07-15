<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
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
        if ($this->session->userdata('role') != 'customer') {
            redirect('Home/login');
        }
    }

    public function Pesanan()
    {
        $jumlah =  $this->input->post('jumlah');
        $bayar =  $this->input->post('bayar');
        $idbarang = strval($this->input->post('id_barang'));
        $data2['barang'] = $this->Barang->getById($idbarang);
        $data2['user2'] = $this->customer->getByemail();
        $harga = $data2['barang']['harga'];
        $kembalian = $bayar - ($jumlah * $harga) . "<br>";

        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|*';
            $config['max_size'] = '6048';
            $config['upload_path'] = './aset/images/tf/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $old_image = $this->session->userdata('gambar');
                $new_image = $this->upload->data('file_name');
                $data = [
                    'id_customer' => $data2['user2']['id'],
                    'id_designer' => $this->input->post('id_design'),
                    'id_barang' => $this->input->post('id_barang'),
                    'nama_penerima' => $this->input->post('namapembeli'),
                    'alamat' => $this->input->post('alamat'),
                    'no_telp' => $this->input->post('no_telp'),
                    'jumlah' => $this->input->post('jumlah'),
                    'total' => ($jumlah * $harga),
                    'bayar' => $this->input->post('bayar'),
                    'kembalian' => $kembalian,
                    'status' => "Menunggu",
                    'tanggal' => time(),
                    'gambar' => $new_image,
                ];
            } else {
                echo $this->upload->display_errors();
            }
        }
        try {
            $this->Pesanan->insert($data);
            $id = $this->input->post('id_barang');
            $where = ($sisa = $data2['barang']['stok']) - $jumlah;
            $this->Barang->updatestok(['id' => $id], ['stok' => $where]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Berhasil Dikirim!</div>');
            redirect('Customer/profile');
        } catch (\Throwable $th) {
            echo 'Eror Pada :' . $th;
        }
    }

    public function stterima()
    {
        $data['header'] = 'tentang';
        $status = $_GET['id_pesanan'];
        $data['pesanan'] = $this->Pesanan->getById($status);
        $data['designer'] = $this->designer->getById($data['pesanan']['id_designer']);
        $hitung = round(($data['designer']['rating'] + $_GET['r'])/2);
        $status = $_GET['id_pesanan'];
        $data2 = "";
        $data2['id'] == '0';
        $data2['tanggal'] == time();
        
        $this->Pesanan->terima(['id' => $status], ['status' => 'Terima']);
        $data2 = $this->Pesanan->getById($status);
        $this->designer->update(['id' => $data['pesanan']['id_designer']],['rating' => $hitung]);
        $this->Transaksi->insert($data2);
        $this->Pesanan->delete($status);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Transaksi Berhasil !!</div>');
        redirect('Customer/transaksi');
    }

    public function belum()
    {
        $status = $_GET['id_pesanan'];
        $this->Pesanan->terima(['id' => $status], ['status' => 'Belum Diterima']);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pesanan Berhasil Diubah!</div>');
        redirect('Customer/profile');
    }
}
