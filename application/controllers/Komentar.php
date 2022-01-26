<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('M_beranda');
		$this->load->model('Notifikasi_model');
	}

	public function simpan()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');

		$data = array( 'pesan' => $pesan,
					   'nama' => $nama ,
					   'email' => $email, );

		$simpan = $this->M_beranda->save($data);
		if ($simpan) {
			$this->Notifikasi_model->notifsuksessimpan();
		    redirect('Home','refresh');
		}else{
			$this->Notifikasi_model->notifgagalsimpan();
			redirect('Home','refresh');
		}
	}

}

/* End of file Komentar.php */
/* Location: ./application/controllers/Komentar.php */