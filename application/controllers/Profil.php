<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
		$data ['gb'] = $this->M_galeri->get_g_barang();
		$data ['limit'] = $this->M_galeri->limit();
		$this->load->view('user/profil',$data);
	}

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */