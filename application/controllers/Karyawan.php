<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('M_login');
		$this->load->model('M_beranda');
		$this->load->model('M_galeri');
		$this->load->model('M_karyawan');
		$this->load->model('Notifikasi_model');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->library('image_lib');

		// if ($this->session->userdata('level')==null) {
		// 				redirect('Login','refresh');
		// 			}
	}

	// pemanggilan data karywan di front end
	public function index()
	{
		$data ['profil'] = $this->M_beranda->get_all();
		$data ['ax'] = $this->M_karyawan->get_data();
		$data ['gb'] = $this->M_galeri->get_g_barang();
		$data ['limit'] = $this->M_galeri->limit();
		$this->load->view('user/v_karyawan',$data);
	}


	public function data()
	{
		if ($this->session->userdata('level')==null) {
		redirect('Login','refresh');
		}	
		$data ['ax'] = $this->M_karyawan->get_data();
		$this->load->view('page/karyawan', $data);
	}

	public function h_karya($id)
	{
		$where = array('id_karyawan' => $id);

		$del = $this->M_karyawan->hapus($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('Karyawan/data','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('Karyawan/data','refresh');
		}
	}

	// function fix rezise gambar
	public function simpan2()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$jabatan = $this->input->post('jabatan');
		$created_at = date('Ymd_His');

		$config['upload_path'] = './assets/adds/images/karyawan/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['file_name'] = $created_at.'.png';

		$foto = array(
			'foto'  => $config['file_name']
		);

		$cekkaryawan = $this->M_karyawan->cek($nama);

		$this->upload->initialize($config);

		if ($cekkaryawan) {

			$this->upload->do_upload('input_gambar');
			$data = array(
				'nama' => $nama,
				'no_hp' => $no_hp,
				'alamat' => $alamat,
				'jabatan' => $jabatan,
				'foto'  => $config['file_name'],
			);

			$path = './assets/adds/images/karyawan/'.$created_at.'.png';

			$upload_data = $this->upload->data();
			$upload_img_data = getimagesize($upload_data['full_path']);
	        $water_mark = "Toko Emas Adil";
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
	        $configrez2['width'] = "520";
	        $configrez2['height'] = "640";
	        $this->image_lib->initialize($configrez2);
	        $this->image_lib->resize();
							
			$save = $this->M_karyawan->save($data);
			$this->Notifikasi_model->notifsuksessimpan();
			redirect('Karyawan/data','refresh');
			
		}else{
			$this->Notifikasi_model->notifgagalsimpan();
			redirect('Karyawan/data','refresh');
		}
	}

	public function update($id)
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$jabatan = $this->input->post('jabatan');
		$created_at = date('Ymd_His');
		$foto_lama = $this->input->post('filelama');

		if (!empty($_FILES['input_gambar']['name'])) {
			@unlink('./assets/adds/images/karyawan/'.$foto_lama);
		}

		$kondisi = array('id_karyawan' => $id );

		$config['upload_path'] = './assets/adds/images/karyawan/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['file_name'] = $created_at.'.png';

		$foto = array(
			'foto'  => $config['file_name']
		);

		$this->upload->initialize($config);

		if (!empty($_FILES['input_gambar']['name'])) {
			@unlink('./assets/adds/images/karyawan/'.$foto_lama);
	            
			$this->upload->do_upload('input_gambar');

			$data = array(
				'nama' => $nama,
				'no_hp' => $no_hp,
				'alamat' => $alamat,
				'jabatan' => $jabatan,
				'foto'  => $config['file_name'],
			);

			$path = './assets/adds/images/karyawan/'.$created_at.'.png';

						
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
	        $configrez2['width'] = "520";
	        $configrez2['height'] = "640";
	        $this->image_lib->initialize($configrez2);
	        $this->image_lib->resize();


			$sukses = $this->M_karyawan->update($data,$kondisi);
			if ($sukses) {
				$this->Notifikasi_model->notifupdate();
				redirect('Karyawan/data','refresh');
			}else{
				$this->Notifikasi_model->notifgagalupdate();
				redirect('Karyawan/data','refresh');
			}

		}else {
			$data = array(
				'nama' => $nama,
				'no_hp' => $no_hp,
				'alamat' => $alamat,
				'jabatan' => $jabatan,
			);

			$this->M_karyawan->update($data,$kondisi);
			$this->Notifikasi_model->notifupdate();
			redirect('Karyawan/data','refresh');
		}
	}

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/Karyawan.php */