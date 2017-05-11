<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('input_jadwal');
	}

	public function list_matkul()
	{
		$nama_dosen = $this->input->get('dosen');

		header('Content-Type: application/json');
    	echo json_encode($this->input_jadwal->get_matkul($nama_dosen));
	}

	public function list_kelas()
	{
		$dosen = $this->input->get('dosen');
		$matkul = $this->input->get('matkul');

		header('Content-Type: application/json');
		echo json_encode($this->input_jadwal->get_kelas($dosen,  $matkul));
	}
}