<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('M_login');
		$this->load->model('M_galeri');
		$this->load->model('Notifikasi_model');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->library('image_lib');

		if ($this->session->userdata('level')==null) {
						redirect('Login','refresh');
					}
	}

// function menu galeri toko
	public function toko()
	{
		$data ['kat'] = $this->M_galeri->kategori();
		$data ['gt'] = $this->M_galeri->get_g_tk();
		$this->load->view('page/v_g_toko', $data);
	}

	public function t_simpan()
	{
		$kategori = $this->input->post('kategori');
		$created_at = date('Ymd_His');

		$config['upload_path'] = './assets/adds/images/toko/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '5000';
		$config['file_name'] = $created_at.'.png';

		$foto = array(
			'foto'  => $config['file_name']
		);

		$this->upload->initialize($config);

		$this->upload->do_upload('input_gambar');
			$data = array(	'id_k_toko' => $kategori,
							'foto'	   => $config['file_name']
			);
			$path = './assets/adds/images/toko/'.$created_at.'.png';

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

	        $configrez2['image_library'] = 'gd2';
	        $configrez2['source_image'] = $path;
	        $configrez2['create_thumb'] = FALSE;
	        $configrez2['maintain_ratio'] = FALSE;
	        $configrez2['width'] = "800";
	        $configrez2['height'] = "640";
	        $this->image_lib->initialize($configrez2);
	        $this->image_lib->resize();

	        $save = $this->M_galeri->simpen($data);
	        if ($save) {
	        	$this->Notifikasi_model->notifsuksessimpan();
				redirect('Galeri/toko','refresh');	
	        }else{
				$this->Notifikasi_model->notifgagalsimpan();
				redirect('Galeri/toko','refresh');
			}
	}

	public function h_toko($id)
	{
		$where = array('id' => $id);
		$del = $this->M_galeri->buang($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('Galeri/toko','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('Galeri/toko','refresh');
		}
	}


// function menu galeri barang
	public function barang()
	{
		$data ['kat'] = $this->M_galeri->tampil_kat();
		$data ['gb'] = $this->M_galeri->get_g_barang();
		$this->load->view('page/v_g_barang', $data);
	}

	public function b_simpan()
	{
		$kategori = $this->input->post('kategori');
		$created_at = date('Ymd_His');

		$config['upload_path'] = './assets/adds/images/produk/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['file_name'] = $created_at.'.png';

		$foto = array(
			'foto'  => $config['file_name']
		);

		$this->upload->initialize($config);

		$this->upload->do_upload('input_gambar');
			$data = array(	'id_k_barang' => $kategori,
							'foto'	   => $config['file_name']
			);
			$path = './assets/adds/images/produk/'.$created_at.'.png';

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

	        $configrez2['image_library'] = 'gd2';
	        $configrez2['source_image'] = $path;
	        $configrez2['create_thumb'] = FALSE;
	        $configrez2['maintain_ratio'] = FALSE;
	        $configrez2['width'] = "800";
	        $configrez2['height'] = "640";
	        $this->image_lib->initialize($configrez2);
	        $this->image_lib->resize();

	        $save = $this->M_galeri->s($data);
	        if ($save) {
	        	$this->Notifikasi_model->notifsuksessimpan();
				redirect('Galeri/barang','refresh');	
	        }else{
				$this->Notifikasi_model->notifgagalsimpan();
				redirect('Galeri/barang','refresh');
			}
	}

	public function b_hapus($id)
	{
		$where = array('id' => $id);
		$del = $this->M_galeri->b_hapus($where);
		if ($del) {
			$this->Notifikasi_model->notifsukseshapus();
				redirect('Galeri/barang','refresh');
		}else {
			$this->Notifikasi_model->notifgagalhapus();
				redirect('Galeri/barang','refresh');
		}
	}


}

/* End of file Galeri.php */
/* Location: ./application/controllers/Galeri.php */