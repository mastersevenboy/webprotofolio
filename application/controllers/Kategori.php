<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('M_login');
		$this->load->model('M_galeri');
		$this->load->model('Notifikasi_model');
		$this->load->library('session');
		// $this->load->library('upload');

		if ($this->session->userdata('level')==null) {
						redirect('Login','refresh');
					}
	}

	// function menu kategori toko
	
	public function toko()
	{
		$data ['xx'] = $this->M_galeri->get_k_toko();
		$this->load->view('page/v_k_toko', $data);
	}

	public function k_simpan()
	{
		$kategori = $this->input->post('kategori');

		$data = array('kategori' => $kategori , );

		$simpan = $this->M_galeri->simpan($data);
			
			if ($simpan) {
				# code...
				$this->Notifikasi_model->notifsuksessimpan();
				redirect('Kategori/toko','refresh');
			}else{
			$this->Notifikasi_model->notifgagalsimpan();
			redirect('Kategori/toko','refresh');
			}

	}

	public function k_update($id)
	{
		$kategori = $this->input->post('kategori');

		$data = array('kategori' => $kategori , );

		$kondisi = array('id_kat_tk' => $id , );

		$simpan = $this->M_galeri->update($data,$kondisi);
			
			if ($simpan) {
				# code...
				$this->Notifikasi_model->notifupdate();
				redirect('Kategori/toko','refresh');
			}else{
			$this->Notifikasi_model->notifgagalupdate();
			redirect('Kategori/toko','refresh');
			}
	}

	public function h_kateg($id)
	{
		$where = array('id_kat_tk' => $id);
		$del = $this->M_galeri->hapus($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('Kategori/toko','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('Kategori/toko','refresh');
		}
	}

// function menu kategori barang

	public function barang()
	{
		$data ['bb'] = $this->M_galeri->get_k_barang();
		$this->load->view('page/v_k_barang', $data);
	}

	public function k_save()
	{
		$kategori = $this->input->post('kategori');

		$data = array('kategori' => $kategori , );

		$simpan = $this->M_galeri->save($data);
			
			if ($simpan) {
				# code...
				$this->Notifikasi_model->notifsuksessimpan();
				redirect('Kategori/barang','refresh');
			}else{
			$this->Notifikasi_model->notifgagalsimpan();
			redirect('Kategori/barang','refresh');
			}

	}

	public function k_edit($id)
	{
		$kategori = $this->input->post('kategori');

		$data = array('kategori' => $kategori , );

		$kondisi = array('id_kategori' => $id , );

		$simpan = $this->M_galeri->edit($data,$kondisi);
			
			if ($simpan) {
				# code...
				$this->Notifikasi_model->notifupdate();
				redirect('Kategori/barang','refresh');
			}else{
			$this->Notifikasi_model->notifgagalupdate();
			redirect('Kategori/barang','refresh');
			}
	}

	public function k_hapus($id)
	{
		$where = array('id_kategori' => $id);
		$del = $this->M_galeri->delete($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('Kategori/barang','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('Kategori/barang','refresh');
		}
	}
}


/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */