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

function sesuai($dosen, $matkul, $kelas){
   $this -> db -> select('*');
   $this -> db -> from('verif_bap');
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
 
function sesuai1($dosen1, $matkul1, $kelas1){
   $this -> db -> select('*');
   $this -> db -> from('verif_bap');
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


function sesuai2($pertemuan){
   $this -> db -> select('*');
   $this -> db -> from('verif_bap');
   $this -> db -> where('pertemuan', $pertemuan);
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
 
 function sesuai3($pertemuan,$matkul){
   $this -> db -> select('*');
   $this -> db -> from('verif_bap');
   $this -> db -> where('pertemuan', $pertemuan);  
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



?>