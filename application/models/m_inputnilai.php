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

	 function getNamaMatkul($id)
	 {
				$this->db-> select('matkul');
				$this->db-> from('table_matkul');
				$this->db-> where('id_matkul', $id);

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
	 function tampil_kelas($dosen)
	 {
		 $this->db-> select('*');
		 $this->db-> from('input_jadwal');
		 $this->db-> where('dosen', $dosen);
	   $this->db->join('table_matkul', 'table_matkul.matkul=input_jadwal.matkul', 'left');
		 $this->db->group_by('input_jadwal.matkul');
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
// baru 2 objek monitor_nilai
	 function tampil_monitor($dosen, $matkul, $kelas){
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

	 function tampil_monitor1($dosen1, $matkul1, $kelas1){
	    $this -> db -> select('*');
	    $this -> db -> from('eimport');
	    $this -> db -> where('dosen', $dosen1);
	    $this -> db -> where('matkul', $matkul1);
	    $this -> db -> where('kelas', $kelas1);
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
		// end

	 function tampil_kelas_dosen($dosen,$matkul)
	 {
		$this->db-> select('kelas');
		$this->db-> from('input_jadwal');
		$this->db-> where('dosen', $dosen);
		$this->db->where('matkul',$matkul);

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
