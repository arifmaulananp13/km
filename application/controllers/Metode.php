<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metode extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('combobox_model');
		$this->load->model('metode_model');
		$this->load->model('m_inputbap');
		$this->load->model('m_login');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
public function input_metode(){
		if ($this->session->userdata('level') == 'Sekretaris Kaprodi'){
		$data['title'] = "Input Metode";
		$data['pertemuan'] = $this->combobox_model->getPertemuanAll();
		$data['data'] = $this->combobox_model->getMatkulAll();
		
		view('metodeview/input_metode',$data);
		}
		elseif($this->session->userdata('level') == 'Mahasiswa'){
		redirect('baprps/verif_bap');
		}
		elseif($this->session->userdata('level') == 'Dosen Pengajar'){
		redirect('baprps/input_bap');
		}
		elseif($this->session->userdata('level') == 'Belum Aktif'){
		redirect('baprps/forum');
		}
		else{
		redirect('baprps/grafik');	
		}
	}
}