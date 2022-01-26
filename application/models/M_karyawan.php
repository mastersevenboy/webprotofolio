<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

	public function get_data()
	{
		$queri = $this->db->get('tb_karyawan');
		return $queri->result();
	}

	public function save($data)
	{
		$this->db->insert('tb_karyawan', $data);
		return true;
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

	public function hapus($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_karyawan');
		return true;
	}

	public function update($data,$kondisi)
	{
		$this->db->update('tb_karyawan',$data,$kondisi);
		return true;
	}

	public function cek($nama)
	{
		$this->db->where('nama', $nama);

	    	$query = $this->db->get('tb_karyawan');

	    	$count_row = $query->num_rows();

	    if ($count_row > 0) {
	      //if count row return any row; that means you have already this email address in the database. so you must set false in this sense.
	        return FALSE; // here I change TRUE to false.
	     } else {
	      // doesn't return any row means database doesn't have this email
	        return TRUE; // And here false to TRUE
	     }

	     // This returns your first inserts id
	    return $nama;
	}


}

/* End of file M_karyawan.php */
/* Location: ./application/models/M_karyawan.php */