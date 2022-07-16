<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Customer_model', 'customer');
        $this->load->model('Designer_model', 'Designer');
        $this->load->model('Barang_model', 'Barang');
        $this->load->model('User_model', 'akun');
    }

    public function index()
    {
        if ($this->session->userdata('role') == 'customer') {
            redirect('Customer');
        } elseif ($this->session->userdata('role') == 'designer') {
            redirect('Designer');
        } elseif ($this->session->userdata('role') == 'admin') {
            redirect('Admin');
        }
        $data['header'] = 'tentang';
        $data['designer'] = $this->Designer->get();
        $this->load->view('login/header', $data);
        $this->load->view('admin/about', $data);
        $this->load->view('login/footer', $data);
    }


    // Pendaftaran
    public function regis()
    {
        $data['designer'] = $this->Designer->get();
        if ($this->session->userdata('email')) {
            redirect('Home');
        }
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => 'Nama / Username Harus Diisi'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus disi'
        ]);

        $this->form_validation->set_rules('role', 'role', 'required|trim', [
            'required' => 'Silahkan Pilih Role'
        ]);

        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', [
            'required' => 'Alamat Harus disi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['header'] = 'none';
            $data['header'] = 'tentang';
            $this->load->view('login/header', $data);
            $this->load->view('login/regis', $data);
            $this->load->view('login/footer', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'alamat' => $this->input->post('alamat'),
                'gambar' => 'default.jpg',
                'password' =>  password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'tgl_bergabung' => time(),
            ];
            $data2 = [
                'gambar' => htmlspecialchars($this->input->post('gambar', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'role' => $this->input->post('role'),
                'gambar' => 'default.jpg',
                'password' =>  password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            if ($this->input->post('role') == 'customer') {
                $this->customer->insert($data);
            } elseif ($this->input->post('role') == 'designer') {
                $this->Designer->insert($data);
            }
            $this->userrole->insert($data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akunmu telah berhasil terdaftar, Silahkan Login! </div>');
            redirect('Home/login');
        }
    }

    public function login()
    {
        $data['designer'] = $this->Designer->get();
        if ($this->session->userdata('email')) {
            redirect('Home');
        }
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email', [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['header'] = 'none';
            $data['header'] = 'tentang';
            $this->load->view('login/header', $data);
            $this->load->view('login/login', $data);
            $this->load->view('login/footer', $data);
        } else {
            $this->login2();
        }
    }

    public function login2()
    {
        $data['designer'] = $this->Designer->get();
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('akun', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'customer') {
                    redirect('Customer/profile');
                } elseif ($user['role'] == 'designer') {
                    $data['user'] = $this->userrole->getBy();
                    $data['user2'] = $this->Designer->getByemail();
                    if ($data['user2']['status'] == 'nonactive') {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger m-4 p-4 " role="alert">MAAF AKUN ANDA DI NON-ACTIVE OLEH ADMINISTRATOR!</div>');
                        $this->session->unset_userdata('email');
                        $this->session->unset_userdata('role');
                        $this->session->unset_userdata('user');
                        redirect('Home');
                    }
                    redirect('Designer/profil');
                } else {
                    redirect('Admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger m-4 p-4 " role="alert">Password Salah!</div>');
                redirect('Home/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger m-4 p-4" role="alert"> Email Belum Terdaftar! </div>');
            redirect('Home/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout! </div>');
        redirect('Home');
    }
}
