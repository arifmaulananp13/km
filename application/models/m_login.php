<?php 

class M_login extends CI_Model{	
	function is_logged_in($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$this->db->from('user');
		$query	= $this->db->get();
		if($query->num_rows() ==1){
			return $query->result();
		}else{
			return false;
		}
	}		

	function sesuai($dosen,$matkul){
		$this->db->select('*');
		$this->db->where('dosen',$dosen);
		$this->db->where('matkul',$matkul);
		$this->db->from('verif_bap');
		$query	= $this->db->get();
		if($query->num_rows() ==1){
			return $query->result();
		}else{
			return false;
		}
	}
}

?>