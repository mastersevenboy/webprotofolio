<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		$this->load->model('M_user');
		$this->load->model('Notifikasi_model');
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index($error = NULL)
	{
		$data = array(
            'error' => $error
        );
		$this->load->view('c_login',$data);
	}

	//function login
	function proses_login()
	{
		$email = strip_tags(stripslashes($this->input->post('email',TRUE)));
		$password = strip_tags(stripslashes(md5($this->input->post('password',TRUE))));

		$cekuser = $this->M_login->cekuser($email);

		if ($cekuser) {
			
			$ceklogin = $this->M_login->login($email,$password);

			if ($ceklogin) {
				foreach ($ceklogin as $row);

				if (($row->status)==1) {
					$this->session->set_userdata('status', $row->status);
					$this->session->set_userdata('nama', $row->nama);
					$this->session->set_userdata('level', $row->level);
					$this->session->set_userdata('email', $row->email);
					// $this->session->set_userdata('no_tlp', $row->no_tlp);

					if (($this->session->userdata('level')=="Admin"))
					{
						redirect('Beranda','refresh');
					/*}elseif ($this->session->userdata('level')=="Organisasi") {
						redirect('Home/index','refresh');
					}elseif ($this->session->userdata('level')=="Akademik") {
						redirect('Home/index','refresh');*/
					}else{
						$this->session->sess_destroy();
						$error = '<div id="notifikasi" class="custom-control custom-control-alternative custom-checkbox" align="center">
		                  <p class="text-lead text-red" >Anda tidak memiliki akses masuk.!</p>
		                </div>';
						$this->index($error);
					}
				}else{
					$error = '<div id="notifikasi"><center><font color="red">Data belum terverifikasi. Hubungi admnistrator.</font></center></div>';
		            $this->index($error);
					/*$data['pesan']="gagal";
					$this->load->view('page/login', $data);*/
				}

			}else {
				$this->Notifikasi_model->notifsalahusername();
				redirect('Login','refresh');
			}
		}else{
			$this->Notifikasi_model->notifbelumdaftar();
			redirect('Login','refresh');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('Login/index','refresh');
	}

	function reset_pass()
	{
		$email = $this->input->post('email');
		$no_tlp = $this->input->post('no_tlp');

		$cekuser = $this->M_login->cekuser($email);

		if ($cekuser) {
			foreach ($cekuser as $row);
			$this->session->set_userdata('email', $row->email);
			redirect('Login/reset_password','refresh');
		}
		else{
			$this->Notifikasi_model->notifgagalupdate();
			redirect('Login/reset_pass','refresh');
		}
	}

	function lupa_pass()
	{
		$this->load->view('c_reset');
	}

	function reset_password()
	{
		$data['admin'] = $this->M_user->get_dt();
		$this->load->view('reset_password',$data);
	}

	function pass_baru()
	{
		$email 		= $this->input->post('email');
		// $pass 		= $this->input->post('passlama');
		$passbaru 	= md5($this->input->post('passwordbaru'));
		$konpass 	= md5($this->input->post('konfirmasipass'));


		$kondisi = array('email' => $email);

		$cekpassword = $this->M_user->checkpassword($email);

		if ($passbaru != $konpass) {
			echo 'Password tidak sama';
		}elseif($cekpassword) {
			$data = array(
				'password' => $passbaru,
			);
			$this->M_user->update($data,$kondisi);
			$this->Notifikasi_model->notifsuksesreset();
			redirect('Login','refresh');

			/*User/profil/$this->session->userdata('username');*/
		}else{
			$this->Notifikasi_model->notifgagalreset();
			redirect('Login','refresh');

		}
	}

}


		


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */