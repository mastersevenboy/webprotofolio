<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function login($email,$password)
	{
		$query = $this->db->query("SELECT * FROM tb_login where email = '$email' and password = '$password'");
		
		if ($query->num_rows()==1) 
		{
			return $query->result();
		}else 
		{
			return false;
		}
	}

	function cekuser($email)
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



/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */