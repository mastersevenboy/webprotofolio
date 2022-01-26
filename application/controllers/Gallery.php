<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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

	public function produk()
	{
		$data ['profil'] = $this->M_beranda->get_all();
		$data ['gb'] = $this->M_galeri->get_g_barang_v();
		$data ['limit'] = $this->M_galeri->limit();
		$data ['anting'] = $this->M_galeri->anting();
		$data ['kalung'] = $this->M_galeri->kalung();
		$data ['gelang'] = $this->M_galeri->gelang();
		$data ['cincin'] = $this->M_galeri->cincin();
		$this->load->view('user/v_gbarang',$data);
	}

	public function toko()
	{
		$data ['profil'] = $this->M_beranda->get_all();
		$data ['gb'] = $this->M_galeri->get_g_tk();
		$data ['limit'] = $this->M_galeri->limit();
		$this->load->view('user/v_gtoko',$data);
	}

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */