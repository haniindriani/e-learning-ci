<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['judul'] = "Beranda";
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

	public function login()
	{
		$data['judul'] = "Login";
		$this->load->view('templates/header', $data);
		$this->load->view('home/login');
		$this->load->view('templates/footer');
	}

	public function registrasi()
	{
		$data['judul'] = "Registrasi";
		$this->load->view('templates/header', $data);
		$this->load->view('home/registrasi');
		$this->load->view('templates/footer');
	}

	public function pembelajaran()
	{
		$data['judul'] = "Registrasi";
		$this->load->view('templates/header', $data);
		$this->load->view('home/pembelajaran');
		$this->load->view('templates/footer');
	}

	public function keranjang()
	{
		$data['judul'] = "Paket Pembelajaran";
		$this->load->view('templates/header', $data);
		$this->load->view('home/keranjang');
		$this->load->view('templates/footer');
	}
}
