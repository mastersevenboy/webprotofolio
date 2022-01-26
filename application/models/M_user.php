<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	//get data admin
	function get_dt()
	{
		$admin = $this->db->query("SELECT * FROM `tb_login` WHERE level = 'Admin' ORDER BY 'nama' ASC");
		return $admin->result();
	}

	//get pengguna
	function terverifikasi()
	{
		$admin = $this->db->query("SELECT * FROM `tb_login` WHERE level = 'User' ORDER BY 'nama' ASC");
		return $admin->result();
	}

	//delet pegguna
	function delete($where)
	{
		# code...
		$this->db->where($where);
		$this->db->delete('tb_login');
		return true;
	}

	//hapus admin
	function hapus($where)
	{
		# code...
		$this->db->where($where);
		$this->db->delete('tb_login');
		return true;
	}

	//cek id admin
	function checkid($email) {

	    $this->db->where('email', $email);

	    $query = $this->db->get('tb_login');

	    $count_row = $query->num_rows();

	    if ($count_row > 0) {
	        return FALSE; // here I change TRUE to false.
	     } else {
	        return TRUE; // And here false to TRUE
	     }
	    return $email;
	}

	//tambah admin
	function simpan($data)
	{
		# code...
		$this->db->insert('tb_login', $data);
		return true;
	}

	//edit admin
	function update($data,$kondisi)
	{
		# code...
		$this->db->update('tb_login',$data,$kondisi);
		return true;
	}

	//reset password
	function checkpassword($email)
	{
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('email', $email);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows()==1) 
		{
			return $query->result();
		}else 
		{
			return false;
		}
	}
}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */