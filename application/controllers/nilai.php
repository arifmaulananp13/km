<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('combobox_model');
		$this->load->model('m_inputnilai');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function input_nilai(){
		$data['title'] = "Input Nilai";
		$data['active_11'] = "active";
		$data['data'] = $this->m_inputnilai->tampil_jadwal();
		view('nilai/input_nilai',$data);
	}



	public function input_nilai2($id){
		$data['title'] = "Input Nilai";
		$data['active_11'] = "active";
		$where = array('id_jadwal' => $id);
		$data['data'] = $this->m_inputnilai->input_nilai2($where,'input_jadwal')->result();
		$data['dosen'] = $this->combobox_model->getDosen();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		$data['kelas'] = $this->combobox_model->getKelasAll();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		view('nilai/input_nilai2',$data);
	}


	public function input_nilai_post(){
        if($this->input->post('fileSubmit')){

            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'upload/nilai/';
                $config['allowed_types'] = 'xlsx|docx|pdfx';
                $config['file_name'] = $_FILES['picture']['name'];

                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);

                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

		$dosen = $this->input->post('dosen');
		$matkul = $this->input->post('matkul');
		$nilai = $this->input->post('picture');
		$kelas = $this->input->post('kelas');
		$tanggal = $this->input->post('tanggal');
		$deskripsi = $this->input->post('deskripsi');


		$data = array(
		'dosen' => $dosen,
		'matkul' => $matkul,
		'nilai' => $picture,
		'kelas' => $kelas,
		'no_tanggal' => $tanggal,
		'deskripsi' => $deskripsi,
		);
		$this->m_inputnilai->input_nilai($data,'input_nilai');
		redirect('nilai/input_nilai');
	}
	}

	public function lihat_nilai(){
		$data['title'] = "Lihat Nilai Harian";
		$data['active_9'] = "active";
		$data['data']=$this->m_inputnilai->tampil_nilai();
		view('nilai/lihat_nilai',$data);
	}


	public function lihat_nilai_akhir(){
		$data['title'] = "Lihat Nilai Akhir";
		$data['active_10'] = "active";
		$data['data']=$this->m_inputnilai->tampil_nilai_akhir();
		view('nilai/lihat_nilai_akhir',$data);
	}

		//IF download/upload,
	public function download($fileName = NULL) {
	$this->load->helper('download');
	if ($fileName) {
    $file = realpath ( "upload/nilai/" ) . "\\" . $fileName;
    // check file exists
    if (file_exists ( $file )) {
     // get file content
     $data = file_get_contents ( $file );
     //force download
     force_download( $fileName, $data );
    } else {
     // Redirect to base url
     redirect ( base_url () );
    }
	}
	}
	}
