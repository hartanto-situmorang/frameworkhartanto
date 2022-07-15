<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Barang_designer extends CI_Controller
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
    }

    public function tampil()
    {
        $data['header'] = 'Barang';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['barang'] = $this->Barang->getByIdDesign($data['user2']['id']);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('designer/vwbarang', $data);
        $this->load->view('content/footer', $data);
    }

    public function beli()
    {
        $data['header'] = 'berbelanja';
        $idbarang = strval($_GET['id_barang']);
        $data['barang'] = $this->Barang->getById($idbarang);
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('Barang/vw_beli', $data);
        $this->load->view('content/footer', $data);
    }

    public function edit()
    {
        $data['header'] = 'edit_barang';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['barang'] = $this->Barang->getById($_GET['id_barang']);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi',
        ]);
        $this->form_validation->set_rules('stok', 'stok', 'required|integer', [
            'required' => 'harga Wajib di isi',
            'integer' => 'Harus format Angka'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required|integer', [
            'required' => 'stok Wajib di isi',
            'integer' => 'Harus format Angka'
        ]);
        $this->form_validation->set_rules('jenis', 'jenis', 'required', [
            'required' => 'jenis Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('content/header', $data);
            $this->load->view('designer/edit_barang', $data);
            $this->load->view('content/footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'jenis' => $this->input->post('jenis'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|*';
                $config['max_size'] = '6048';
                $config['upload_path'] = './aset/images/barang/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $this->session->userdata('gambar');
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'aset/images/barang/' . $old_image, 0775);
                    }
                    $new_image = $this->upload->data('file_name');
                    $data = [
                        'nama' => $this->input->post('nama'),
                        'stok' => $this->input->post('stok'),
                        'harga' => $this->input->post('harga'),
                        'jenis' => $this->input->post('jenis'),
                        'gambar' => $new_image,
                    ];
                } else {
                    echo $this->upload->display_errors();
                }
            }
            try {
                $id = $_GET['id_barang'];
                $this->Barang->update(['id' => $id], $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil Diubah!</div>');
                redirect('Designer/tampil');
            } catch (\Throwable $th) {
                echo 'Ada Eror' . $th;
            }
        }
    }

    public function transaksi()
    {
        $data['header'] = 'transaksi';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('Customer/transaksi', $data);
        $this->load->view('content/footer', $data);
    }

    public function tentang()
    {
        $data['header'] = 'tentang';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('admin/about', $data);
        $this->load->view('content/footer', $data);
    }


    public function designer()
    {
        $data['header'] = 'designer';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
        $data['designer'] = $this->designer->get();
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('customer/view_designer', $data);
        $this->load->view('content/footer', $data);
    }

    public function detail_designer()
    {
        $data['header'] = 'designer';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $ambil = $_GET['id_d'];
        $idd = strval($ambil);
        $data['designer'] = $this->designer->getById($idd);
        $this->load->view('content/header', $data);
        $this->load->view('customer/profil_design', $data);
        $this->load->view('content/footer', $data);
    }

    public function detail_barang()
    {
        $data['header'] = 'berbelanja';
        $idbarang = strval($_GET['id_barang']);
        $data['barang'] = $this->Barang->getById($idbarang);
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
        $idd = $data['barang']['id_design'];
        $data['designer'] = $this->designer->getById($idd);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('Barang/vw_detail', $data);
        $this->load->view('content/footer', $data);
    }

    public function hapus($id)
    {
        $status = $_GET['id_barang'];
        $this->Barang->hapus(['id' => $status], ['status' => 'delete']);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil dihapus!</div>');
        redirect('Customer/profile');
    }

    public function tambah()
    {
        $data['header'] = 'barang';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi',
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required|integer', [
            'required' => 'harga Wajib di isi',
            'integer' => 'Harus format Angka'
        ]);
        $this->form_validation->set_rules('stok', 'stok', 'required|integer', [
            'required' => 'stok Wajib di isi',
            'integer' => 'Harus format Angka'
        ]);
        $this->form_validation->set_rules('jenis', 'jenis', 'required', [
            'required' => 'jenis Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Check Data dengan benar !!!</div>');
            redirect('Barang_designer/tampil');
        } else {
            try {
                $upload_image = $_FILES['gambar']['name'];
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|*';
                    $config['max_size'] = '6048';
                    $config['upload_path'] = './aset/images/barang/';
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('gambar')) {
                        $new_image = $this->upload->data('file_name');
                        $data = [
                            'nama' => $this->input->post('nama'),
                            'id_design' => $data['user2']['id'],
                            'stok' => $this->input->post('stok'),
                            'harga' => $this->input->post('harga'),
                            'jenis' => $this->input->post('jenis'),
                            'gambar' => $new_image,
                            'status' => 'ready',
                        ];
                        $this->Barang->insert($data);
                        redirect('Designer/tampil');
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil Diubah!</div>');
                    } else {
                        redirect('Designer/tampil');
                        echo $this->upload->display_errors();
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Check Data dengan benar !!!</div>');
                    }
                }
            } catch (\Throwable $th) {
                echo 'Ada Eror' . $th;
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Input Data!</div>');
                redirect('Designer/tampil');
            }
        }
    }
}
