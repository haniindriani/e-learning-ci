<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['judul'] = "Beranda";
		$this->load->view('templates/header', $data);
		$this->load->view('index');
		$this->load->view('templates/footer');
	}


	public function pembelajaran()
	{
		$data['judul'] = "Registrasi";
		$this->load->view('templates/header', $data);
		$this->load->view('home/pembelajaran');
		$this->load->view('templates/footer');
	}

	public function materi(Type $var = null)
	{
		$data['judul'] = "Materi";
		$this->load->view('templates/header', $data);
		$this->load->view('home/materi');
		$this->load->view('templates/footer');
	}
}
