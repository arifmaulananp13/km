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


	function tampil_nilai_akhir($dosen, $matkul, $kelas){
	   $this -> db -> select('*');
	   $this -> db -> from('eimport');
	   $this -> db -> where('dosen', $dosen);
	   $this -> db -> where('matkul', $matkul);
	   $this -> db -> where('kelas', $kelas);
	   $this -> db -> limit(100);

	   $query = $this -> db -> get();

	   if($query -> num_rows() > 0)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	 }

	 //BARU
	 function tampil_nilai_akhir_perdosen($dosen,$matkul){
		 $this -> db -> select('*');
	   $this -> db -> from('eimport');
	   $this -> db -> where('dosen', $dosen);
	   $this -> db -> where('matkul', $matkul);
 	   $this -> db -> limit(100);

		 $query = $this -> db -> get();

		 if($query -> num_rows() > 0)
		 {
			 return $query->result();
		 }
		 else
		 {
			 return false;
		 }
	 }
}
