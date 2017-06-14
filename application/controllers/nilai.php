<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('combobox_model');
		$this->load->model('m_inputnilai');
		$this->load->model('m_inputbap');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function input_nilai(){
		$data['title'] = "Input Nilai";
		$data['active_11'] = "active";
		$dosen = $this->session->userdata('nama_user');
		$where = array('dosen' => $dosen);
		$data['data'] = $this->m_inputbap->verif_data($where,'input_jadwal')->result();
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
		$this->session->set_flashdata('category_success', 'Submit Success');
		redirect('nilai/input_nilai');
		}else{
		$this->session->set_flashdata('category_error', 'Data Tidak Boleh Kosong!');
		redirect($_SERVER['HTTP_REFERER']);


	}
	}

	public function lihat_nilai(){
		$data['title'] = "Lihat Nilai Harian";
		$data['active_9'] = "active";
		$data['data']=$this->m_inputnilai->tampil_nilai();
		view('nilai/lihat_nilai',$data);
	}


	public function pre_nilai_akhir(){
		$data['title'] = "Table";
		$data['dosen'] = $this->combobox_model->getDosen();
		view('nilai/pre_nilai_akhir',$data);
		}

		public function lihat_nilai_akhir(){
		$data['title'] = "Lihat Nilai Akhir";
		$dosen	= $this->input->post('dosen');
		$matkul	= $this->input->post('matkul');
		$kelas	= $this->input->post('kelas');
		$data['data'] = $this->m_inputnilai->tampil_nilai_akhir($dosen, $matkul, $kelas);
		view('nilai/lihat_nilai_akhir',$data);
		}

		//BARU
		public function perbandingan_nilai_akhir(){
				$data['title'] = "Table Perbandingan";
				$data['matkul'] = $this->combobox_model->getMatkulAll();
				view('nilai/perbandingan_nilai_akhir',$data);
		}

		public function lihat_perbandingan_nilai_akhir(){
				$data['title'] = "Lihat Perbandingan Nilai Akhir";
				$matkul = $this->input->post('matkul');
				$dosen1	= $this->input->post('dosen');
			  $dosen2  = $this->input->post('dosen2');
				$data['dosen1'] = $this->m_inputnilai->tampil_nilai_akhir_perdosen($dosen1, $matkul);
				$data['dosen2'] = $this->m_inputnilai->tampil_nilai_akhir_perdosen($dosen2, $matkul);
				view('nilai/lihat_perbandingan_nilai_akhir',$data);
		}

		public function filter_nilai_akhir(){
				$data['title'] = "Filter";
				$data['matkul'] = $this->combobox_model->getMatkulAll();
				$data['dosen'] = $this->combobox_model->getDosen();

				view('nilai/filter_nilai_akhir',$data);
		}

		public function lihat_filter_nilai_akhir()
		{
				$data['title'] = "Hasil Filter Nilai Akhir";
				$dosen	= $this->input->post('dosen');
				$matkul	= $this->m_inputnilai->getNamaMatkul($this->input->post('matkul'));

				$kelas = $this->m_inputnilai->tampil_kelas_dosen($dosen,$matkul[0]->matkul);
				$output = '';

				$t = $this->m_inputnilai->tampil_nilai_akhir($dosen, $matkul[0]->matkul, $kelas[0]->kelas);

				// for ($i=0; $i<sizeof($kelas); $i++) {
				// 	$data['data'] = $this->m_inputnilai->tampil_nilai_akhir($dosen, $matkul[0]->nama_matkul, $kelas[$i]->kelas);
				// 	var_dump($data);
				// 	$output .= $this->load->view('nilai/lihat_nilai_akhir',$data,TRUE);
				// }

				for ($i=0; $i<sizeof($kelas); $i++) {
					$hasilKelas = $this->m_inputnilai->tampil_nilai_akhir($dosen, $matkul[0]->matkul, $kelas[$i]->kelas);
					$hasil[] = $hasilKelas;
				}
				$data['data'] = $hasil;
				// $data['data'] = $data['data'][0];
				view('nilai/lihat_filter_nilai_akhir',$data);
		}

		public function pilihCombobox()
		{
				$input = $this->input->post('pilihan');
				$matkul = $this->m_inputnilai->tampil_kelas($input);
				$hasil = '';

				foreach ($matkul as $m) {
					$hasil .= "<option value=".$m->id_matkul.">".$m->matkul."</option>";
				}
				echo $hasil;
		}

		//buat monitor_nilai
		public function monitor(){
			if ($this->session->userdata('level') == 'Dosen Koordinator'){
			$data['title'] = "Table";
			$data['active_5'] = "active";
			$data['dosen'] = $this->combobox_model->getDosen();
			$data['matkul'] = $this->combobox_model->getMatkulAll();
			$data['kelas'] = $this->combobox_model->getKelasAll();
			view('nilai/monitor_nilai',$data);
			}
			elseif($this->session->userdata('level') == 'Mahasiswa'){
			redirect('baprps/verif_bap');
			}
			elseif($this->session->userdata('level') == 'Dosen Pengajar'){
			redirect('baprps/input_bap');
			}
			elseif($this->session->userdata('level') == 'Sekretaris Kaprodi'){
			redirect('baprps/forum');
			}
			elseif($this->session->userdata('level') == 'Belum Aktif'){
			redirect('baprps/forum');
			}
			else{
			$data['title'] = "Table";
			$data['active_5'] = "active";
			$data['dosen'] = $this->combobox_model->getDosen();
			$data['matkul'] = $this->combobox_model->getMatkulAll();
			$data['kelas'] = $this->combobox_model->getKelasAll();
			view('nilai/monitor_nilai',$data);
			}
			}

			public function aksi_monitor(){
			$data['title'] = "Table";
			$dosen	= $this->input->post('dosen');
			$matkul	= $this->input->post('matkul');
			$kelas	= $this->input->post('kelas');
			$data['data'] = $this->m_inputnilai->tampil_monitor($dosen, $matkul, $kelas);
			$dosen1		= $this->input->post('dosen1');
			$matkul1	= $this->input->post('matkul1');
			$kelas1		= $this->input->post('kelas1');
			$data['data1'] = $this->m_inputnilai->tampil_monitor1($dosen1, $matkul1, $kelas1);
			view('nilai/monitor_nilai2',$data);
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
