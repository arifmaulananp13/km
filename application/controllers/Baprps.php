<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baprps extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('combobox_model');
		$this->load->model('m_inputbap');
		$this->load->model('m_login');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function input_bap(){
		if ($this->session->userdata('level') == 'Dosen Pengajar'){
		$data['title'] = "Input BAP";
		$data['active_1'] = "active";
		$data['data']=$this->m_inputbap->jadwal();
		view('rpsbap/input_bap',$data);
		}
		elseif($this->session->userdata('level') == 'Ketua Kelompok Keahlian'){
		$data['title'] = "Input BAP";
		$data['active_1'] = "active";
		$data['data']=$this->m_inputbap->jadwal();
		view('rpsbap/input_bap',$data);
		}
		elseif($this->session->userdata('level') == 'Sekretaris Kaprodi'){
		redirect('baprps/forum');
		} 	
		elseif($this->session->userdata('level') == 'Mahasiswa'){
		redirect('baprps/verif_bap');
		}
		else{
		redirect('baprps/grafik');	
		}
		}
	
		public function input_bap2($id){
		$where = array('id_jadwal' => $id);
		$data['data'] = $this->m_inputbap->verif_data($where,'input_jadwal')->result();
		$data['dosen'] = $this->combobox_model->getDosen();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		$data['kelas'] = $this->combobox_model->getKelasAll();		
		view('rpsbap/input_bap2',$data);
	}
	

	public function input_bap_post(){
		$dosen = $this->input->post('dosen');
		$matkul = $this->input->post('matkul');
		$tanggal = $this->input->post('tanggal');
		$kelas = $this->input->post('kelas');		
		$materi = $this->input->post('materi');

		$data = array(
			'dosen' => $dosen,
			'matkul' => $matkul,
			'no_tanggal' => $tanggal,
			'kelas' => $kelas,
			'materi' => $materi,
			);
		$this->m_inputbap->input_data($data,'input_bap');
		redirect('baprps/input_bap');
    }


	public function verif_bap(){
		if ($this->session->userdata('level') == 'Mahasiswa'){
		$data['title'] = "Verifikasi BAP";
		$data['active_2'] = "active";
		$this->load->model('m_inputbap');
		$data['data']=$this->m_inputbap->tampil_data();
		view('rpsbap/verif_bap',$data);
		}
		elseif ($this->session->userdata('level') == 'Ketua Kelompok Keahlian'){
		$data['title'] = "Verifikasi BAP";
		$data['active_2'] = "active";
		$this->load->model('m_inputbap');
		$data['data']=$this->m_inputbap->tampil_data();
		view('rpsbap/verif_bap',$data);
		}
		elseif($this->session->userdata('level') == 'Sekretaris Kaprodi'){
		redirect('baprps/forum');
		}				
		elseif($this->session->userdata('level') == 'Dosen Pengajar'){
		redirect('baprps/input_bap');
		}
		else{
		redirect('baprps/grafik');	
		}
	}
		

	public function input_rps(){
		if ($this->session->userdata('level') == 'Sekretaris Kaprodi'){
		$data['title'] = "Input RPS";
		$data['active_3'] = "active";
		$data['dosen'] = $this->combobox_model->getDosen();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		view('rpsbap/input_rps',$data);
		}
		elseif ($this->session->userdata('level') == 'Ketua Kelompok Keahlian'){
		$data['title'] = "Input RPS";
		$data['active_3'] = "active";
		$data['dosen'] = $this->combobox_model->getDosen();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		view('rpsbap/input_rps',$data);
		}		
		elseif($this->session->userdata('level') == 'Mahasiswa'){
		redirect('baprps/verif_bap');
		}
		elseif($this->session->userdata('level') == 'Dosen Pengajar'){
		redirect('baprps/input_bap');
		}
		else{
		redirect('baprps/grafik');	
		}
	}

	public function input_rps_post(){
        if($this->input->post('fileSubmit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'upload/rps';
                $config['allowed_types'] = 'xlsx|docx|pdf|jpg';
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
		$rps = $this->input->post('rps');

		$data = array(
			'dosen' => $dosen,
			'matkul' => $matkul,
			'rps' => $picture,
			);
		$this->m_inputbap->input_data($data,'input_rps');
		redirect('baprps/input_rps');		
	}
	}

	public function lihat_rps(){
		if ($this->session->userdata('level') == 'Sekretaris Kaprodi'){
		$data['title'] = "Lihat RPS";
		$data['active_4'] = "active";
		$data['data']=$this->m_inputbap->tampil_rps();
		view('rpsbap/lihat_rps',$data);
		}
		elseif ($this->session->userdata('level') == 'Mahasiswa'){
		$data['title'] = "Lihat RPS";
		$data['active_4'] = "active";
		$data['data']=$this->m_inputbap->tampil_rps();
		view('rpsbap/lihat_rps',$data);
		}		
		elseif ($this->session->userdata('level') == 'Ketua Kelompok Keahlian'){
		$data['title'] = "Lihat RPS";
		$data['active_4'] = "active";
		$data['data']=$this->m_inputbap->tampil_rps();
		view('rpsbap/lihat_rps',$data);
		}
		elseif($this->session->userdata('level') == 'Dosen Pengajar'){
		redirect('baprps/input_bap');
		}
		else{
		redirect('baprps/grafik');	
		}		
	}
	
	public function download($fileName = NULL) {
	$this->load->helper('download');
	if ($fileName) {
    $file = realpath ( "upload/rps" ) . "\\" . $fileName;
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
	
     

	public function grafik(){
		if ($this->session->userdata('level') == 'Dosen Koordinator'){
		$data['title'] = "Table";
		$data['active_5'] = "active";
		$data['dosen'] = $this->combobox_model->getDosen();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		view('rpsbap/grafik',$data);
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
		else{
		$data['title'] = "Table";
		$data['active_5'] = "active";
		$data['dosen'] = $this->combobox_model->getDosen();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		view('rpsbap/grafik',$data);
		}
		}
	

	public function jadwal(){
		if ($this->session->userdata('level') == 'Sekretaris Kaprodi'){
		$data['title'] = "Input Jadwal Dosen";
		$data['active_6'] = "active";
		$data['dosen'] = $this->combobox_model->getDosen();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		$data['kelas'] = $this->combobox_model->getKelasAll();
		$data['shift'] = $this->combobox_model->getShiftAll();		
		$data['hari'] = $this->combobox_model->getHariAll();		
		view('rpsbap/input_jadwal',$data);
		}
		elseif ($this->session->userdata('level') == 'Ketua Kelompok Keahlian'){
		$data['title'] = "Input Jadwal Dosen";
		$data['active_6'] = "active";
		$data['dosen'] = $this->combobox_model->getDosen();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		$data['kelas'] = $this->combobox_model->getKelasAll();
		$data['shift'] = $this->combobox_model->getShiftAll();		
		$data['hari'] = $this->combobox_model->getHariAll();		
		view('rpsbap/input_jadwal',$data);
		}
		elseif($this->session->userdata('level') == 'Mahasiswa'){
		redirect('baprps/verif_bap');
		}
		elseif($this->session->userdata('level') == 'Dosen Pengajar'){
		redirect('baprps/input_bap');
		}
		else{
		redirect('baprps/grafik');	
		}
	}
	
	public function input_jadwal_post(){
		$dosen = $this->input->post('dosen');
		$matkul = $this->input->post('matkul');
		$kelas = $this->input->post('kelas');		
		$hari = $this->input->post('hari');
		$shift = $this->input->post('shift');

		$data = array(
			'dosen' => $dosen,
			'matkul' => $matkul,
			'kelas' => $kelas,
			'hari' => $hari,
			'shift' => $shift,
			);
		$this->m_inputbap->input_data($data,'input_jadwal');
		redirect('baprps/jadwal');
    }
	
	
	function verif2($id){
		$data['title'] = "Verifikasi BAP";
		$data['active_7'] = "active";
		$where = array('id_bap' => $id);
		$data['data'] = $this->m_inputbap->verif_data($where,'input_bap')->result();
		view('rpsbap/verif2',$data);
	}

	public function verif_bap_post(){
		$dosen = $this->input->post('dosen');
		$matkul = $this->input->post('matkul');
		$tanggal = $this->input->post('tanggal');
		$kelas = $this->input->post('kelas');		
		$materi = $this->input->post('materi');
		$status = $this->input->post('status');
		$ket = $this->input->post ('ket');
		
		$data = array(
			'dosen' => $dosen,
			'matkul' => $matkul,
			'no_tanggal' => $tanggal,
			'kelas' => $kelas,
			'materi' => $materi,
			'status' => $status,
			'ket' => $ket,
			);
		$this->m_inputbap->input_data($data,'verif_bap');
		redirect('baprps/verif_bap');
	}

	public function forum(){
		$data['title'] = "Forum";
		$data['active_7'] = "active";
		$data['data']=$this->m_inputbap->post();		
		view('forum/forum',$data);
	}

	public function newpost(){
		$data['title'] = "Forum";
		view('forum/newpost',$data);		
		
	}
	
	public function newpost_post(){
		$nama_user = $this->input->post('nama_user');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$profile_picture = $this->input->post('profile_picture');
		
		$data = array(
			'nama_user'	=> $nama_user,
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'profile_picture' => $profile_picture,
			);
		$this->m_inputbap->newpost($data);
		redirect('baprps/forum');		
		
	}
	
	public function comment($id){
		$data['title'] = "Forum";
		$where = array('id_post' => $id);
		$data['data'] = $this->m_inputbap->verif_data($where,'table_post')->result();
		$data['comment'] = $this->m_inputbap->verif_data($where,'table_comment')->result();
		
		view('forum/comment',$data);
	}
	
	public function comment_post(){
		$nama_user = $this->input->post('nama_user');
		$comment = $this->input->post('comment');
		$id_post = $this->input->post('id_post');
		$profile_picture = $this->input->post('profile_picture');
		
		$where = array(
			'nama_user'	=> $nama_user,
			'comment' 	=> $comment,
			'id_post'	=> $id_post,
			'profile_picture' => $profile_picture,
			);
		$this->m_inputbap->input_comment($where,'table_comment');
			redirect($_SERVER['HTTP_REFERER']);
	}
		
}