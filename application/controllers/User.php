<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function dashboard()
    {
        $data['judul'] = "dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('user/index');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $data['judul'] = "Login";
        $this->load->view('templates/header', $data);
        $this->load->view('user/login');
        $this->load->view('templates/footer');
    }

    public function registrasi()
    {
        $data['judul'] = "Registrasi";
        $this->load->view('templates/header', $data);
        $this->load->view('user/registrasi');
        $this->load->view('templates/footer');
    }

    public function keranjang()
    {
        $data['judul'] = "Paket Pembelajaran";
        $this->load->view('templates/header', $data);
        $this->load->view('user/keranjang');
        $this->load->view('templates/footer');
    }

    public function checkout()
    {
        $data['judul'] = "Checkout";
        $this->load->view('templates/header', $data);
        $this->load->view('user/payment');
        $this->load->view('templates/footer');
    }
}
