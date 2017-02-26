<?php
class M_inputrps extends CI_Model{
	
	function input_rps($data,$table){
		$this->db->insert($table,$data);
	}
}
