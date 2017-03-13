<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('combobox_model');
		$this->load->model('m_inputbap');
		$this->load->model('m_login');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function registrasi(){
		$this->load->view('register');
	}

	public function registrasi_post(){
         if($this->input->post('fileSubmit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'upload/image';
                $config['allowed_types'] = 'png|jpeg|jpg';
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
					
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$profile_picture = $this->input->post('picture');
		$level = $this->input->post('level');
		
		$data = array(
			'nama_user' => $nama_user,
			'username' => $username,
			'password' => md5($password),
			'profile_picture' => $picture,
			'level' => 'Belum Aktif',
			);
		$this->m_inputbap->input_data($data,'user');
		redirect('login/index');		
	}
	}
}