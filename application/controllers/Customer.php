<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Customer_model', 'customer');
        $this->load->model('Designer_model', 'designer');
        $this->load->model('User_model', 'akun');
        if ($this->session->userdata('role') != 'customer') {
            redirect('Home');
        }
    }

    public function index()
    {
        $data['header'] = 'dasboard';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
        $this->load->view('content/header', $data);
        $this->load->view('Customer/profil', $data);
    }

    public function profile()
    {
        $data['header'] = 'profile';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
        $this->load->view('content/header', $data);
        $this->load->view('Customer/profil', $data);
        $this->load->view('content/footer', $data);
    }

    public function edit_prodile()
    {
        $data['header'] = 'edit_profile';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
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
            $this->load->view('Customer/vw_edit_profil', $data);
            $this->load->view('content/footer', $data);
        } else {
            $data = [
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
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'aset/images/faces/' . $old_image, 0775);
                    }
                    $new_image = $this->upload->data('file_name');
                    $data2 = [
                        'gambar' => $new_image,
                    ];
                } else {
                    echo $this->upload->display_errors();
                }
            }
            try {
                $id = $this->session->userdata('id');

                $this->customer->update(['id' => $id], $data);
                $email = $this->session->userdata('email');
                $this->akun->update(['email' => $email], $data2);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
                if ($this->session->userdata('email') != $this->input->post('email')) {
                    redirect('Home/lougout');
                }else{
                    redirect('Customer');
                }
            } catch (\Throwable $th) {
                echo 'dfsdfds' . $th;
            }
        }
    }

    public function transaksi()
    {
        $data['header'] = 'transaksi';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
        $this->load->view('content/header', $data);
        $this->load->view('Customer/transaksi', $data);
        $this->load->view('content/footer', $data);
    }

    public function tentang()
    {
        $data['header'] = 'tentang';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
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
        $this->load->view('content/header', $data);
        $this->load->view('customer/view_designer', $data);
        $this->load->view('content/footer', $data);
    }

    public function detail_designer()
    {
        $data['header'] = 'designer';
        $data['user'] = $this->userrole->getBy();
        $data['user2'] = $this->customer->getByemail();
        $ambil = $_GET['id_d'];
        $idd = strval($ambil);
        $data['designer'] = $this->designer->getById($idd);
        $this->load->view('content/header', $data);
        $this->load->view('customer/profil_design', $data);
        $this->load->view('content/footer', $data);
    }
}
