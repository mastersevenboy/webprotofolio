<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi_model extends CI_Model {

	function notifsalahusername()
	{
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-inner--text"><strong>Error!</strong> Email atau password salah!</span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
	}

	function notifbelumdaftar()
	{
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-inner--text"><strong>Error!</strong> Email belum terdaftar!</span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
	}

	function notifsukseshapus()
	{
		$this->session->set_flashdata('message', 
			'<div class="alert bg-green alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Sukses!</strong> Data berhasil dihapus.
            </div>');
		
	}
	
	function notifgagalhapus()
	{
		$this->session->set_flashdata('message', 
			'<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Error!</strong> Data gagal dihapus!
            </div>');
	}

	function notifduplikat()
	{
		$this->session->set_flashdata('message', 
			'<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Error!</strong> Pengguna sudah terdaftar!
            </div>');
	}

	function notifsuksessimpan()
	{
		$this->session->set_flashdata('message', 
			'<div class="alert bg-green alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Sukses!</strong> Data berhasil disimpan.
            </div>');
	}

	function notifupdate(){
		$this->session->set_flashdata('message', 
			'<div class="alert bg-green alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Sukses!</strong> Data berhasil diupdate.
            </div>');
	}
	
	function notifgagalupdate(){
		$this->session->set_flashdata('message', 
			'<div class="alert bg-red alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Sukses!</strong> Data tidak berhasil diupdate.
            </div>');
	}

	function notifgagalsimpan(){
		$this->session->set_flashdata('message', 
			'<div class="alert bg-red alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Sukses!</strong> Data tidak berhasil disimpan.
            </div>');
	}

	function notifsuksesreset()
	{
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-inner--text"><strong>Success!</strong> password berhasil direset!</span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
	}

	function notifgagalreset()
	{
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-inner--text"><strong>Error!</strong> email atau kode verifikasi salah!</span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
	}
}

/* End of file Notifikasi_model.php */
/* Location: ./application/models/Notifikasi_model.php */