<?PHP
class Combobox_model extends CI_Model {

	function getDosen() {
		$data = array();
		$query = $this->db->get('table_dosen');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}
		$query->free_result();
		return $data;
	}

	function getMatkulAll() {
		$data = array();
		$query = $this->db->get('table_matkul');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}
		$query->free_result();
		return $data;
	}

	function getKelasAll() {
		$data = array();
		$query = $this->db->get('table_kelas');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}
		$query->free_result();
		return $data;
	}

	function getShiftAll() {
		$data = array();
		$query = $this->db->get('table_shift');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}
		$query->free_result();
		return $data;
	}

	function getHariAll() {
		$data = array();
		$query = $this->db->get('table_hari');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}
		$query->free_result();
		return $data;
	}

	function getlvl() {
		$data = array();
		$query = $this->db->get('tbl_level');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}
		$query->free_result();
		return $data;
	}

	function getRuanganAll() {
		$data = array();
		$query = $this->db->get('table_ruangan');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}
		$query->free_result();
		return $data;
	}
	
	function getPertemuanAll() {
		$data = array();
		$query = $this->db->get('table_pertemuan');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}
		$query->free_result();
		return $data;
	}
	
	function getKode($idMatkul) {
		$data = array();
		$query = $this->db->get_where('table_kodematkul', array('id_matkul' => $idMatkul));
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}	
		$query->free_result();
		return $data;	
	}



}
