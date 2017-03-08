<?php
class M_inputbap extends CI_Model{
	
	function input_data($data,$table){
	$this->db->insert($table,$data);
	}
	
   public function tampil_data(){
	$this->db->select('*');
	$this->db->where('no_tanggal BETWEEN DATE_SUB(NOW(), INTERVAL 1 DAY) AND NOW()');	
	$query= $this->db->get('input_bap');
	return $query->result();
    }
	
	function verif_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	
	public function tampil_rps(){
	$this->db->select('*');
	$query= $this->db->get('input_rps');
	return $query->result();
    }
	
	public function table(){
	$this->db->select('*');
	$query= $this->db->get('verif_bap');
	return $query->result();
    }
	
	public function jadwal(){
	$this->db->select('*');
	$query= $this->db->get('input_jadwal');
	return $query->result();
    }
	
	function newpost($data){
	$this->db->set('tanggal', 'NOW()', FALSE);
	$this->db->set('waktu', 'NOW()', FALSE);
	$this->db->insert('table_post', $data);
	}
	
	public function post(){
	$this->db->select('*');
	$query= $this->db->get('table_post');
	return $query->result();
    }
	
	function input_comment($where,$table){
	$this->db->set('tanggal', 'NOW()', FALSE);	
	$this->db->insert($table,$where);
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function user(){
	$this->db->select('*');
	$query= $this->db->get('user');
	return $query->result();
    }	
		
}
 
