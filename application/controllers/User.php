<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		$this->load->model('M_user');
		$this->load->model('Notifikasi_model');
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function Admin()
	{
		$data['admin'] = $this->M_user->get_dt();
		$this->load->view('page/admin',$data);
	}

	public function Pengguna()
	{
		$data['terverifikasi'] = $this->M_user->terverifikasi();
		$this->load->view('page/p_terverifikasi',$data);
	}

	// hapus pengguna
	function hapus($id_user)
	{
		# code...
		$where = array('id_user' => $id_user);
		$del = $this->M_user->delete($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('User/Pengguna','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('User/Pengguna','refresh');
		}
	}

	//hapus admin
	function h_admin($id_user)
	{
		# code...
		$where = array('id_user' => $id_user);
		$del = $this->M_user->hapus($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('User/Admin','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('User/Admin','refresh');
		}
	}

	//simpan admin
	public function simpan()
	{
		# code...
		$nama = $this->input->post('nama');
		$password = md5($this->input->post('password'));
		$email = $this->input->post('email');
		$no_tlp = $this->input->post('no_tlp');
		$level = $this->input->post('level');
		$status = $this->input->post('status');
		// $password = md5($this->input->post('password'));
		$checkid = $this->M_user->checkid($email);

		if ($checkid) {

			$data = array(
				'nama' => $nama,
				'email' => $email,
				'no_tlp' => $no_tlp,
				'level' => $level,
				'status' => $status,
				'password' => $password,
				);
			$simpan = $this->M_user->simpan($data);
			
			if ($simpan) {
				# code...
				$this->Notifikasi_model->notifsuksessimpan();
				redirect('User/Admin','refresh');
			}else{
			$this->Notifikasi_model->notifgagalsimpan();
			redirect('User/Admin','refresh');
			}
		}
		else{
			$this->Notifikasi_model->notifduplikat();
			redirect('User/Admin','refresh');
		}
	}

	//function edit admin
	function update()
		# code...
	{
		// $id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$no_tlp = $this->input->post('no_tlp');
		$level = $this->input->post('level');
		$status = $this->input->post('status');
			
		// $kondidi = array('email' => $email);	
		$kondisi = array('email' => $email);

			$data = array(
				'nama' => $nama,
				// 'email' => $email,
				'no_tlp' => $no_tlp,
				'level' => $level,
				'status' => $status,
				'password' => $password,
				);
				# code...
			$update = $this->M_user->update($data,$kondisi);
			if ($update) {
				/**/
			 	# code...
			 	$this->Notifikasi_model->notifupdate();
				redirect('User/Admin','refresh');
			 } 
			else{
			$this->Notifikasi_model->notifgagalupdate();
			redirect('User/Admin','refresh');
			}
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */