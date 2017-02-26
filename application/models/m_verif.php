<?PHP
class M_verif extends CI_Model {

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
	
	function getMatkul($idDosen) {
		$data = array();
		$query = $this->db->get_where('table_matkul', array('id_dosen' => $idDosen));
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
	
	
	function getKelas2($idMatkul) {
		$data = array();
		$query = $this->db->get_where('input_bap', array('id_matkul' => $idMatkul));
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}	
		$query->free_result();
		return $data;	
	}
	
	function getMateri($tanggal,$dosen,$matkul,$kelas)
	{
		$data = array();
		$query = $this->db->get_where('input_bap', array('tanggal' => $tanggal, 'matkul' => $matkul, 'dosen'=> $dosen, 'kelas'=>$kelas));
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}	
		$query->free_result();
		return $data;	
	}
	
}