<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeri extends CI_Model {

// function upload gambar
   public function upload(){
		$config['upload_path'] = './gambar/';
		$config['allowed_types'] = 'jpg|png|jpeg|bmp';
		$config['max_size']	= '5120';
		$config['remove_space'] = TRUE;
		$config['create_thumb']= FALSE;
        $config['maintain_ratio']= FALSE;
        $config['quality']= '50%';
        $config['width']= 630;
        $config['height']= 800;
		$this->image_lib->resize();
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

// function Menu Kategori toko
	function get_k_toko()
	{
		$queri = $this->db->get('tb_k_toko');
		return $queri->result();
	}

	function simpan($data)
	{
		# code...
		$this->db->insert('tb_k_toko', $data);
		return true;
	}

	function update($data,$kondisi)
	{
		$this->db->update('tb_k_toko',$data,$kondisi);
		return true;
	}

	function hapus($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_k_toko');
		return true;
	}

// function Menu kategori Barang

	function get_k_barang()
	{
		$queri = $this->db->get('tb_k_barang');
		return $queri->result();
	}

	function save($data)
	{
		# code...
		$this->db->insert('tb_k_barang', $data);
		return true;
	}

	function edit($data,$kondisi)
	{
		$this->db->update('tb_k_barang',$data,$kondisi);
		return true;
	}

	function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_k_barang');
		return true;
	}

// function menu get galery barang
	function get_g_barang()
	{
		$queri = $this->db->query('SELECT id,foto,id_k_barang,kategori from tb_g_barang join tb_k_barang on id_k_barang = id_kategori');
		return $queri->result();
	}

	function get_g_barang_v()
	{
		$queri = $this->db->query('SELECT id,foto,id_k_barang,kategori from tb_g_barang join tb_k_barang on id_k_barang = id_kategori WHERE kategori order by kategori');
		return $queri->result();
	}

	function tampil_kat()
	{
		$query = $this->db->query('SELECT * FROM `tb_k_barang` order by id_kategori desc');
		return $query->result();
	}

	function s($data)
	{
		# code...
		$this->db->insert('tb_g_barang', $data);
		return true;
	}

	function b_hapus($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_g_barang');
		return true;
	}

	function limit()
	{
		$query = $this->db->query('SELECT * FROM `tb_g_barang` order by id limit 3');
		return $query->result();
	}

	function anting()
	{
		$queri = $this->db->query("SELECT id,foto,id_k_barang,kategori from tb_g_barang join tb_k_barang on id_k_barang = id_kategori where kategori = 'Anting' ORDER by kategori");
		return $queri->result();
	}

	function gelang()
	{
		$queri = $this->db->query("SELECT id,foto,id_k_barang,kategori from tb_g_barang join tb_k_barang on id_k_barang = id_kategori where kategori = 'Gelang' ORDER by kategori");
		return $queri->result();
	}

	function kalung()
	{
		$queri = $this->db->query("SELECT id,foto,id_k_barang,kategori from tb_g_barang join tb_k_barang on id_k_barang = id_kategori where kategori = 'Kalung' ORDER by kategori");
		return $queri->result();
	}

	function cincin()
	{
		$queri = $this->db->query("SELECT id,foto,id_k_barang,kategori from tb_g_barang join tb_k_barang on id_k_barang = id_kategori where kategori = 'Cincin' ORDER by kategori");
		return $queri->result();
	}



// function menu get galeri toko
	function get_g_tk()
	{
		$queri = $this->db->query('SELECT id,foto,id_k_toko,kategori from tb_g_toko join tb_k_toko on id_k_toko = id_kat_tk ');
		return $queri->result();
	}

	function kategori()
	{
		$query = $this->db->query('SELECT * FROM `tb_k_toko` order by id_kat_tk desc');
		return $query->result();
	}

	function simpen($data)
	{
		$query = $this->db->insert('tb_g_toko', $data);
		return true;
	}

	function buang($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_g_toko');
		return true;
	}


	// function pemilihan slider
	public function slider1()
	{
		$query = $this->db->query("SELECT * FROM `tb_slider` where nama = 'Slider 1'");
		return $query->result();
	}

	public function slider2()
	{
		$query = $this->db->query("SELECT * FROM `tb_slider` where nama = 'Slider 2'");
		return $query->result();
	}

	public function slider3()
	{
		$query = $this->db->query("SELECT * FROM `tb_slider` where nama = 'Slider 3'");
		return $query->result();
	}

}

/* End of file M_galeri.php */
/* Location: ./application/models/M_galeri.php */