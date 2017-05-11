<?php
class input_jadwal extends CI_Model{
	public function get_matkul($dosen)
	{
		$this->db->select('matkul');
		$this->db->where('dosen', $dosen);
		$this->db->distinct();

		$query = $this->db->get('input_jadwal');
		return $query->result();
	}

	public function get_kelas($dosen, $matkul)
	{
		$this->db->select('kelas');
		$this->db->where('dosen', $dosen);
		$this->db->where('matkul', $matkul);
		$this->db->distinct();

		$query = $this->db->get('input_jadwal');
		return $query->result();
	}
}