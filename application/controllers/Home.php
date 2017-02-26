<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		switch ($this->session->userdata('level')) {
			case 'dosen':
				redirect('baprps/input_bap');
				break;
			case 'dosen koordinator':
				redirect('baprps/grafik');
				break;
			case 'dekanat':
				redirect('baprps/grafik');
				break;
			case 'mahasiswa':
				redirect('baprps/verif_bap');
				break;
			case 'sekretaris kaprodi':
				redirect('baprps/input_rps');
				break;
			case 'ketua kk':
				redirect('baprps/input_bap');
				break;

		}
	}
}
