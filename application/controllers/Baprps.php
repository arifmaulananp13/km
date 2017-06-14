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
		$dosen = $this->session->userdata('nama_user');
		$where = array('dosen' => $dosen);
		$data['data'] = $this->m_inputbap->verif_data($where,'input_jadwal')->result();
		view('rpsbap/input_bap',$data);
		}
		elseif($this->session->userdata('level') == 'Mahasiswa'){
		redirect('baprps/verif_bap');
		}
		elseif($this->session->userdata('level') == 'Belum Aktif'){
		redirect('baprps/forum');
		}		
		else{
		$data['title'] = "Input BAP";
		$data['active_1'] = "active";
		$dosen = $this->session->userdata('nama_user');
		$where = array('dosen' => $dosen);
		$data['data'] = $this->m_inputbap->verif_data($where,'input_jadwal')->result();
		view('rpsbap/input_bap',$data);
		}
		}
	
		public function input_bap2($id,$kode_matkul){
		$data['title'] = "Input BAP";
		$where = array('id_jadwal' => $id);
		$data['data'] = $this->m_inputbap->verif_data($where,'input_jadwal')->result();
		$data['kode_matkul'] = $this->m_inputbap->getrps($kode_matkul)->result();
		$data['pertemuan'] = $this->combobox_model->getPertemuanAll();
		view('rpsbap/input_bap2',$data);	
	}

	public function input_bap_post(){
		if(isset($_POST['tanggal']) && isset($_POST['pertemuan']) && isset($_POST['materitambahan'])){
		$checked_arr = $_POST['materi'];
		$count = count($checked_arr);
		$dosen = $this->input->post('dosen');
		$matkul = $this->input->post('matkul');
		$tanggal = $this->input->post('tanggal');
		$shift = $this->input->post('shift');
		$ruangan = $this->input->post('ruangan');
		$kelas = $this->input->post('kelas');		
		$checkbox = implode(',', $_POST['materi']);
		$materitambahan = $this->input->post('materitambahan');
		$pertemuan = $this->input->post('pertemuan');
		$kode_matkul = $this->input->post('kode_matkul');
		
		$data = array(
			'dosen' => $dosen,
			'matkul' => $matkul,
			'no_tanggal' => $tanggal,
			'shift' => $shift,
			'ruangan' => $ruangan,
			'kelas' => $kelas,
			'materi' => $checkbox,
			'materitambahan' => $materitambahan,
			'pertemuan' => $pertemuan,
			'kode_matkul' => $kode_matkul,
			'totalmateri' => $count
			);
		$this->m_inputbap->input_data($data,'input_bap');
		$this->session->set_flashdata('category_success', 'Submit Success');
		redirect('baprps/input_bap');
		}else{
		$this->session->set_flashdata('category_error', 'Data Tidak Boleh Kosong!');
			redirect($_SERVER['HTTP_REFERER']);

		}
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
		elseif($this->session->userdata('level') == 'Belum Aktif'){
		redirect('baprps/forum');
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
		$data['kelas'] = $this->combobox_model->getKelasAll();
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
		elseif($this->session->userdata('level') == 'Belum Aktif'){
		redirect('baprps/forum');
		}
		else{
		$data['title'] = "Table";
		$data['active_5'] = "active";
		$data['dosen'] = $this->combobox_model->getDosen();
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		$data['kelas'] = $this->combobox_model->getKelasAll();
		view('rpsbap/grafik',$data);
		}
		}

	public function aksi_grafik(){
	$data['title'] = "Table";
	$dosen	= $this->input->post('dosen');
	$matkul	= $this->input->post('matkul');
	$kelas	= $this->input->post('kelas');	
	$data['data'] = $this->m_login->sesuai($dosen, $matkul, $kelas);
	$dosen1		= $this->input->post('dosen1');
	$matkul1	= $this->input->post('matkul1');
	$kelas1		= $this->input->post('kelas1');
	$data['data1'] = $this->m_login->sesuai1($dosen1, $matkul1, $kelas1);
	view('rpsbap/tabel',$data);
	}

	public function satuobjek(){
		if ($this->session->userdata('level') == 'Dosen Koordinator'){
		$data['title'] = "Table";
		$data['active_5'] = "active";
		$data['dosen'] = $this->combobox_model->getDosen();
		view('rpsbap/1objek',$data);
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
		view('rpsbap/1objek',$data);
		}
		}
		
	public function aksi_satuobjek(){
	$data['title'] = "Table";
	$dosen	= $this->input->post('dosen');
	$matkul	= $this->input->post('matkul');
	$kelas	= $this->input->post('kelas');	
	$data['data'] = $this->m_login->sesuai($dosen, $matkul, $kelas);
	view('rpsbap/1objek2',$data);
	}
		
	public function perpertemuan(){
		if ($this->session->userdata('level') == 'Dosen Koordinator'){
		$data['title'] = "Table";
		$data['active_5'] = "active";
		$data['pertemuan'] = $this->combobox_model->getPertemuanAll();
		view('rpsbap/per_pertemuan',$data);
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
		$data['pertemuan'] = $this->combobox_model->getPertemuanAll();
		view('rpsbap/per_pertemuan',$data);
		}
		}
		
	public function aksi_perpertemuan(){
		$data['title'] = "Table";
		$pertemuan	= $this->input->post('pertemuan');
		$data['data'] = $this->m_login->sesuai2($pertemuan);
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		view('rpsbap/per_pertemuan2',$data);
	}
	
	public function filter(){
		$data['title'] = "Table";
		$pertemuan	= $this->input->post('pertemuan');
		$matkul	= $this->input->post('matkul');
		$data['data'] = $this->m_login->sesuai3($pertemuan,$matkul);
		$data['matkul'] = $this->combobox_model->getMatkulAll();
		view('rpsbap/per_pertemuan3',$data);
	}
	
	public function detailperpertemuan($id){
		$data['title'] = "Table";
		$where = array('id_verif' => $id);
		$data['data'] = $this->m_inputbap->verif_data($where,'verif_bap')->result();
		view('rpsbap/per_pertemuan_detail',$data);
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
		$data['ruangan'] = $this->combobox_model->getRuanganAll();
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
		$data['ruangan'] = $this->combobox_model->getRuanganAll();
		view('rpsbap/input_jadwal',$data);
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
	
	public function input_jadwal_post(){
		$dosen = $this->input->post('dosen');
		$matkul = $this->input->post('matkul');
		$kelas = $this->input->post('kelas');		
		$hari = $this->input->post('hari');
		$shift = $this->input->post('shift');
		$ruangan = $this->input->post('ruangan');
		$kode_matkul = $this->input->post('kode_matkul');
		
		$data = array(
			'dosen' => $dosen,
			'matkul' => $matkul,
			'kelas' => $kelas,
			'hari' => $hari,
			'shift' => $shift,
			'ruangan' => $ruangan,
			'kode_matkul'=> $kode_matkul
			);
		if(isset($_POST['dosen']) && isset($_POST['matkul']) && isset($_POST['kelas']) && isset($_POST['hari']) && isset($_POST['shift']) && isset($_POST['ruangan'])){	
		$this->m_inputbap->input_data($data,'input_jadwal');
		$this->session->set_flashdata('category_success', 'Submit Success');
		redirect('baprps/jadwal');
		}else{
		$this->session->set_flashdata('category_error', 'Data Tidak Boleh Kosong!');
			redirect($_SERVER['HTTP_REFERER']);
		}
    }
	
	public function verif2($id,$kode_matkul){
		$data['title'] = "Verifikasi BAP";
		$data['active_7'] = "active";
		$where = array('id_bap' => $id);
		$data['data'] = $this->m_inputbap->verif_data($where,'input_bap')->result();
		$data['kode_matkul'] = $this->m_inputbap->getrps($kode_matkul)->result();
		view('rpsbap/verif2',$data);
	}
	
	public function verif_bap_post(){
		if(isset($_POST['submit'])){
		$checked_arr = $_POST['materi'];
		$count = count($checked_arr);
		$checked_arr2 = $_POST['totalrps'];
		$count2 = count($checked_arr2);
		$dosen = $this->input->post('dosen');
		$matkul = $this->input->post('matkul');
		$tanggal = $this->input->post('tanggal');
		$kelas = $this->input->post('kelas');		
		$shift = $this->input->post('shift');
		$ruangan = $this->input->post('ruangan');
		$checkbox = implode(',', $_POST['materi']);
		$materitambahan = $this->input->post ('materitambahan');
		$namauser = $this->input->post ('namauser');
		$pertemuan = $this->input->post ('pertemuan');
		$totalmateri_d = $this->input->post ('totalmateri_d');
		
		$data = array(
			'dosen' => $dosen,
			'matkul' => $matkul,
			'no_tanggal' => $tanggal,
			'kelas' => $kelas,	
			'shift' => $shift,
			'ruangan' => $ruangan,
			'materi' => $checkbox,			
			'materitambahan' => $materitambahan,
			'namauser' => $namauser,
			'pertemuan' => $pertemuan,
			'totalmateri' => $count,
			'totalrps' => $count2,
			'totalmateri_d' => $totalmateri_d
			);
		$this->m_inputbap->input_data($data,'verif_bap');
		$this->session->set_flashdata('category_success', 'Submit Success');
		redirect('baprps/verif_bap');

		}
	}
	

	public function forum(){
		if ($this->session->userdata('level') == 'Mahasiswa'){
		redirect('baprps/verif_bap');
		}else{		
		$data['title'] = "Forum";
		$data['active_7'] = "active";
		$data['data']=$this->m_inputbap->post();		
		view('forum/forum',$data);
	}
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
	
	public function edit(){
		if ($this->session->userdata('level') == 'Sekretaris Kaprodi'){
		$data['title'] = "User Management";
		$data['active_12'] = "active";
		$data['data']=$this->m_inputbap->user();
		view('kkpage',$data);
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
	
	public function edit2($id){
		$where = array('id_user' => $id);
		$data['data'] = $this->m_inputbap->verif_data($where,'user')->result();		
		$data['level'] = $this->combobox_model->getlvl();
		$data['title'] = "User Management";
		view('kkpage2',$data);
	}
	
	public function update($id){
		$id	= $this->input->post('id_user');
		$level	= $this->input->post('level');
		$where = array('id_user' => $id);
		$data = array('level' => $level);

	$this->m_inputbap->update_data($where, $data,'user');
	redirect('baprps/edit');
	}

	public function chart(){
		$data['title'] = "Grafik";
		$data['active_13'] = "active";
		view('rpsbap/chart',$data);
		}	
	
		
}