<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('M_beranda');
		$this->load->model('M_galeri');
		$this->load->model('M_karyawan');
		// $this->load->model('Notifikasi_model');
		// $this->load->library('session');
		// $this->load->library('upload');
	}

	public function index()
	{
		$data ['profil'] = $this->M_beranda->get_all();
		$data ['ax'] = $this->M_karyawan->get_data();
		$data ['gb'] = $this->M_galeri->get_g_barang_v();
		$data ['slide1'] = $this->M_galeri->slider1();
		$data ['slide2'] = $this->M_galeri->slider2();
		$data ['slide3'] = $this->M_galeri->slider3();
		$data ['limit'] = $this->M_galeri->limit();
		$data ['anting'] = $this->M_galeri->anting();
		$data ['kalung'] = $this->M_galeri->kalung();
		$data ['gelang'] = $this->M_galeri->gelang();
		$data ['cincin'] = $this->M_galeri->cincin();
		$this->load->view('user/index',$data);
	}

	function login()
	{
		redirect('Login','refresh');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */