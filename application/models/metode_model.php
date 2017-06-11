<?PHP
class Metode_model extends CI_Model {

	function getMetodeAll(){
		$data = array();
		$query = $this->db->get('table_metode');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
		         	$data[] = $row;
		        }
		}
		$query->free_result();
		return $data;
	}
}