<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Beranda";
        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/index');
        $this->load->view('templates/footer_admin');
    }

    public function login()
    {
        $data['judul'] = "Login Admin";
        $this->load->view('templates/header', $data);
        $this->load->view('admin/login');
        $this->load->view('templates/footer');
    }
}
