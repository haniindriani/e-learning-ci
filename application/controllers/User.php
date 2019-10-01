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
}
