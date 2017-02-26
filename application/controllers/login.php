<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->model('combobox_model');
		$this->load->database();
		$this->load->library('session');
	}

	function index(){

		$data['level'] = $this->combobox_model->getlvl();
		$this->load->view('v_login',$data);
		}

	public function aksi_login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','UserName','trim|required|callback_check_user_login');
        $this->form_validation->set_rules('password','Password','trim|required|md5');
		
		if($this->form_validation->run() == False){
			$this->index();
		}else{
			if($this->session->userdata('level') == 'Mahasiswa'){
				redirect ('baprps/verif_bap');
			}elseif($this->session->userdata('level') == 'Dosen Pengajar'){
				redirect ('baprps/input_bap');
			}elseif($this->session->userdata('level') == 'Sekretaris Kaprodi'){
				redirect ('baprps/jadwal');
			}else{
				redirect ('baprps/forum');
			}
			
		}
	}		
	
	public function check_user_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('m_login');
		$result = $this->m_login->is_logged_in($username,$password);
		if($result){
			foreach ($result as $user){
				$s = array();
				$s['id']					= $user->id_user;
				$s['nama_user']				= $user->nama_user;
				$s['username']				= $user->username;
				$s['password']				= $user->password;
				$s['level']					= $user->level;
				$s['profile_picture']		= $user->profile_picture;			
				$this->session->set_userdata($s);
			}
		}else{
			$this->form_validation->set_message('check_user_login','incorrect username and password');
			return false;
		}
	}



	public function getvalue(){
	$data['data']=$this->m_login->value();
	$this->load->view('header',$data);
		
	
	}
	

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	

	
}
?>