<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model {


// function Model Menu profil
	public function get_all()
	{
		$queri = $this->db->get('tb_profil');
		return $queri->result();
	}

	public function upload(){
		$config['upload_path'] = './gambar/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	function update($data)
	{
		$this->db->update('tb_profil', $data);
		return true;
	}


	function hapus($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_profil');
		return true;
	}

// function Model Menu Slider

	function get_dt()
	{
		$queri = $this->db->get('tb_slider');
		return $queri->result();
	}

	function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_slider');
		return true;
	}

	function s_update($data,$kondisi)
	{
		$this->db->update('tb_slider', $data,$kondisi);
		return true;
	}


// function menu komentar

	public function get_komen()
	{
		$queri = $this->db->get('tb_komentar');
		return $queri->result();
	}

	public function del_komen($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_komentar');
		return true;
	}

	public function save($data)
	{
		$this->db->insert('tb_komentar', $data);
		return true;
	}
}

/* End of file M_beranda.php */
/* Location: ./application/models/M_beranda.php */