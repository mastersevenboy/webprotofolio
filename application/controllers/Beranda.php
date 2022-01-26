<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('M_login');
		$this->load->model('M_beranda');
		$this->load->model('Notifikasi_model');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->library('image_lib');

		if ($this->session->userdata('level')==null) {
						redirect('Login','refresh');
					}
	}

	public function index()
	{
		$this->load->view('page/beranda');
	}

// function menu profil
	public function profil()
	{
		$data ['profil'] = $this->M_beranda->get_all();
		$this->load->view('page/profil', $data);
	}

	function h_profil($id)
	{
		$where = array('id' => $id);
		$del = $this->M_beranda->hapus($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('Beranda/profil','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('Beranda/profil','refresh');
		}
	}

	function update()
	{
		$email 	 = $this->input->post('email');
		$no_tlp  = $this->input->post('no_tlp');
		$wa		 = $this->input->post('wa');
		$web 	 = $this->input->post('web');
		$sejarah = $this->input->post('sejarah');
		$alamat  = $this->input->post('alamat');
		$created_at = date('Ymd_His');
		$foto_lama = $this->input->post('filelama');
		

		if (!empty($_FILES['input_gambar']['name'])) {
			@unlink('./assets/adds/images/profil/'.$foto_lama);
		}

		// $kondisi = array('id_karyawan' => $id );

		$config['upload_path'] = './assets/adds/images/profil/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '5000';
		$config['file_name'] = $created_at.'.png';

		$foto = array(
			'foto'  => $config['file_name']
		);

		$this->upload->initialize($config);

		if (!empty($_FILES['input_gambar']['name'])) {
			@unlink('./assets/adds/images/profil/'.$foto_lama);
	            
			$this->upload->do_upload('input_gambar');

			$data = array(  'email' => $email ,
							'no_tlp' => $no_tlp ,
							'wa' => $wa ,
							'web' => $web,
							'sejarah' => $sejarah ,
							'alamat' => $alamat,
							'foto' 	=> $config['file_name']
			);

			$path = './assets/adds/images/profil/'.$created_at.'.png';

						
			$upload_data = $this->upload->data();
			$upload_img_data = getimagesize($upload_data['full_path']);
	        $water_mark = "";
	        $configrez['image_library'] = 'gd2';
	        $configrez['source_image'] = $path;
	        $configrez['create_thumb'] = FALSE;
	        $configrez['maintain_ratio'] = FALSE;
	        
	        if ($upload_img_data[0] > $upload_img_data[1]) {
	            
	            $configrez['width'] = $upload_img_data[1];
	            $configrez['height'] = $upload_img_data[1];
	            $configrez['x_axis'] = ($upload_img_data[0] - $upload_img_data[1]) / 2;
	            $configrez['y_axis'] = 0;
	            $water_mark = $upload_img_data[1];
	            
	        } else {
	            
	            $configrez['width'] = $upload_img_data[0];
	            $configrez['height'] = $upload_img_data[0];
	            $configrez['x_axis'] = 0;
	            $configrez['y_axis'] = ($upload_img_data[1] - $upload_img_data[0]) / 2;
	            $water_mark = $upload_img_data[0];
	            
	        }

	        $this->image_lib->initialize($configrez);
	        // $this->image_lib->crop();

	        $configrez2['image_library'] = 'gd2';
	        $configrez2['source_image'] = $path;
	        $configrez2['create_thumb'] = FALSE;
	        $configrez2['maintain_ratio'] = FALSE;
	        $configrez2['width'] = "1000";
	        $configrez2['height'] = "550";
	        $this->image_lib->initialize($configrez2);
	        $this->image_lib->resize();


			$sukses = $this->M_beranda->update($data);
			if ($sukses) {
				$this->Notifikasi_model->notifupdate();
				redirect('Beranda/profil','refresh');
			}else{
				$this->Notifikasi_model->notifgagalupdate();
				redirect('Beranda/profil','refresh');
			}

		}else {
			$data = array(  'email' => $email ,
							'no_tlp' => $no_tlp ,
							'wa' => $wa ,
							'web' => $web,
							'sejarah' => $sejarah ,
							'alamat' => $alamat,
							'foto' 	=> $config['file_name']
			);

			$this->M_beranda->update($data,$kondisi);
			$this->Notifikasi_model->notifupdate();
			redirect('Beranda/profil','refresh');
		}
	}


// function menu slider

	function slider()
	{
		$data ['slider'] = $this->M_beranda->get_dt();
		$this->load->view('page/slider', $data);
	}

	function h_slider($id)
	{
		$where = array('id' => $id);
		$del = $this->M_beranda->delete($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('Beranda/slider','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('Beranda/slider','refresh');
		}
	}

	function s_update($id)
	{
		$nama = $this->input->post('nama');
		$created_at = date('Ymd_His');
		$foto_lama = $this->input->post('filelama');
		
		if (!empty($_FILES['input_gambar']['name'])) {
			@unlink('./assets/adds/images/slider/'.$foto_lama);
		}

		$kondisi = array('id' => $id );

		$config['upload_path'] = './assets/adds/images/slider/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '5000';
		$config['file_name'] = $created_at.'.png';

		$foto = array(
			'foto'  => $config['file_name']
		);

		$this->upload->initialize($config);

		if (!empty($_FILES['input_gambar']['name'])) {
			if ($this->upload->do_upload('input_gambar')) {
				$slide = $this->upload->data();
				

				$data = array(  
					'id'        => $id,
					'nama' 		=> $nama,
					'slide' 	=> $config['file_name']
				 );

				@unlink($path.$this->input->post('filelama'));
				// @unlink($path.$this->input->post('filelama2'));
				// @unlink($path.$this->input->post('filelama3'));

				$this->M_beranda->s_update($data,$kondisi);
				redirect('Beranda/slider','refresh');
			}else{
				die("errors/cli/error_404");
			}
		}else {
			
				$data = array( 
					'id'   => $id,
					'nama' => $nama
				 ); 

			$this->M_beranda->s_update($data,$kondisi);
			redirect('Beranda/slider','refresh');
		}
	}


// function Menu Komentar

	public function Komentar()
	{
		$data ['ab'] = $this->M_beranda->get_komen();
		$this->load->view('page/komentar', $data);
	}

	// public function hapus_komentar()
	// {
	// 	$url=base_url('Beranda/h_komen');
 //        redirect($url);
	// }

	public function h_komen($id)
	{
		$where = array('id_komentar' => $id);
		$del = $this->M_beranda->del_komen($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('Beranda/Komentar','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('Beranda/Komentar','refresh');
		}
	}
}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */