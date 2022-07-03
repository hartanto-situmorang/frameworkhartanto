<?php
function customer() //Halaman Customer
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Home/login');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "customer") {
            redirect('Customer');
        }
    }
}
function admin() //membatasi akses ke halaman user
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Home/login');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "admin") {
            redirect('Admin');
        }
    }
}
function designer() //membatasi akses ke halaman user
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Home/Login');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "designer") {
            redirect('Designer');
        }
    }
}
