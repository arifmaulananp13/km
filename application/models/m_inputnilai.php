<?php
class M_inputnilai extends CI_Model{
	
	function input_nilai($data,$table){
		$this->db->insert($table,$data);
	}
	public function tampil_nilai(){
	$this->db->select('*');
	$query= $this->db->get('input_nilai');
	return $query->result();
    }
    public function tampil_jadwal(){
	$this->db->select('*');
	$query= $this->db->get('input_jadwal');
	return $query->result();
    }
    public function tampil_data(){
	$this->db->select('*');
	$this->db->where('no_tanggal BETWEEN DATE_SUB(NOW(), INTERVAL 1 DAY) AND NOW()');	
	$query= $this->db->get('input_nilai');
	return $query->result();
    }
	
	function input_nilai2($where,$table){		
	return $this->db->get_where($table,$where);
	}

	public function tampil_nilai_akhir(){
	$this->db->select('*');
	$query= $this->db->get('eimport');
	return $query->result();
	}
}
