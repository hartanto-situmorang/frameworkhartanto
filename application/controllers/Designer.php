<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Designer extends CI_Controller
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
    public function index()
    {
        redirect('Designer/profil');
    }

    public function tampil()
    {
        $data['header'] = 'profil';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['Transaksi'] = $this->Transaksi->getbycustomer($data['user2']['id']);
        $data['barang'] = $this->Barang->getByIdDesign($data['user2']['id']);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);

        $this->load->view('content/header', $data);
        $this->load->view('designer/vwbarang', $data);
        $this->load->view('content/footer', $data);
    }

    public function pesanan()
    {
        $data['header'] = 'profile';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['Pesanan'] = $this->Pesanan->getbydesigner($data['user2']['id']);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('Designer/pemesanan', $data);
        $this->load->view('content/footer', $data);
    }


    public function profil()
    {
        $data['header'] = 'profil';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['Transaksi'] = $this->Transaksi->getbycustomer($data['user2']['id']);
        $data['Pesanan'] = $this->Pesanan->getbydesigner($data['user2']['id']);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('designer/profil', $data);
        $this->load->view('content/footer', $data);
    }
    public function dasboard()
    {
        $data['header'] = 'profil';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['Transaksi'] = $this->Transaksi->getbycustomer($data['user2']['id']);
        $data['presentasi']['total'] = $this->Transaksi->hasil($data['user2']['id']);
        $data['presentasi']['jml'] = $this->Transaksi->barangterjual($data['user2']['id']);
        $data['Transaksi2'] = $this->Transaksi->presentasi($data['user2']['id']);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);

        //HItung persentasi Berdasarkan harga
        $cel = $pak = $aks = $jmlcel = $jmlpak = $jmlaks = 0;

        // chek transaksi untuk celana
        if (array_key_exists(1, $data['Transaksi2'])) {
            $cel = $data['Transaksi2'][1]['total'];
            $jmlcel = $data['Transaksi2'][1]['jumlah'];
        }
        // chek transaksi untuk pakaian
        if (array_key_exists(2, $data['Transaksi2'])) {
            $pak = $data['Transaksi2'][2]['total'];
            $jmlpak = $data['Transaksi2'][2]['jumlah'];
        }
        // chek transaksi untuk aksespries
        if (array_key_exists(0, $data['Transaksi2'])) {
            $aks = $data['Transaksi2'][0]['total'];
            $jmlaks = $data['Transaksi2'][0]['jumlah'];
        }

        // start hitung
        if ($cel != 0 || $pak != 0 || $aks != 0) {
            $data['persentcelana'] = number_format($cel / ($aks + $pak + $cel) * 100, 2);
            $data['persentaksesories'] = number_format($aks / ($aks + $pak + $cel) * 100, 2);
            $data['persentpakaian'] = number_format($pak / ($aks + $pak + $cel) * 100, 2);
        } else {
            $data['persentcelana'] = 0;
            $data['persentaksesories'] = 0;
            $data['persentpakaian'] = 0;
        }
        $data['jmlcelana'] = $jmlcel;
        $data['jmlpakaian'] = $jmlpak;
        $data['jmlaks'] = $jmlaks;
        //end hitung

        //print_r($data['Transaksi']);
        $this->load->view('content/header', $data);
        $this->load->view('designer/dasboard', $data);
        $this->load->view('content/footer', $data);
    }


    public function transaksi()
    {
        $data['header'] = 'none';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['Transaksi'] = $this->Transaksi->getbydesigner($data['user2']['id']);
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $this->load->view('content/header', $data);
        $this->load->view('designer/transaksi', $data);
        $this->load->view('content/footer', $data);
    }

    public function edit_profile()
    {
        $data['header'] = 'dasboard';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $data['NotifPesanan'] = $this->Pesanan->notif($data['user2']['id']);
        $data['jmlnotif'] = $this->Pesanan->notifcount($data['user2']['id']);
        $data['user'] = $this->db->get_where('akun', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required', [
            'required' => 'No. Telepon Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('content/header', $data);
            $this->load->view('designer/edit_profile', $data);
            $this->load->view('content/footer', $data);
        } else {
            $data5 = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
            ];
            $data2 = [
                'email' => $this->input->post('email'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|*';
                $config['max_size'] = '6048';
                $config['upload_path'] = './aset/images/faces/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $this->session->userdata('gambar');
                    $old_image = $this->session->userdata('gambar');
                    if ($old_image != 'default.jpg') {
                        unlink('C:/xampp/htdocs/FrameworkHart/aset/images/faces/' . $old_image);
                        echo $old_image;
                    }
                    $new_image = $this->upload->data('file_name');
                    $data2 = [
                        'gambar' => $new_image,
                    ];
                    $data5 = [
                        'gambar' => $new_image,
                    ];
                } else {
                    echo $this->upload->display_errors();
                }
            }
            try {
                $data['user2'] = $this->designer->getByemail();
                $id = $data['user2']['id'];
                $this->designer->update(['id' => $id], $data5);

                $email = $this->session->userdata('email');
                $this->akun->update(['email' => $email], $data2);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
                if ($this->session->userdata('email') != $this->input->post('email')) {
                    redirect('Home/lougout');
                } else {
                    redirect('Designer/profil');
                }
            } catch (\Throwable $th) {
                echo 'dfsdfds' . $th;
            }
        }
    }
    public function baca()
    {

        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->designer->getByemail();
        $id = $_GET['id_pesanan'];
        $where['id'] = ['sudah'];
        $this->Pesanan->baca(['id' => $id], ['baca' => 'sudah']);
        redirect('Designer/pesanan');
    }
}
