<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel2 extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
        $this->load->model('combobox_model');
        $this->load->model('m_inputnilai');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
	public function input_rps(){
		if ($this->session->userdata('level') == 'Sekretaris Kaprodi'){
		$data['title'] = "Input RPS";
		$data['active_3'] = "active";
		view('rpsbap/input_rps',$data);
		}
		elseif ($this->session->userdata('level') == 'Ketua Kelompok Keahlian'){
		$data['title'] = "Input RPS";
		$data['active_3'] = "active";
		view('rpsbap/input_rps',$data);
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

    public function upload(){
        $fileName = time().$_FILES['file']['name'];
        $config['upload_path'] = FCPATH.'upload/rps/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();

        $media = $this->upload->data('file');
        $inputFileName = FCPATH.'upload/rps/'.$fileName;

        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                // echo '<pre>';
                // var_dump($media);
                // echo $inputFileName;
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }

            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);

                //Sesuaikan sama nama kolom tabel di database
                 $data = array(

                    
                    "PERTEMUAN"=> $rowData[0][0],
                    "MATERI"=> $rowData[0][1],
                    "DOSEN"=> $rowData[0][2],
                    "MATKUL"=> $rowData[0][3]
                );




                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("input_rps",$data);
                //delete_files($media['file_path'],TRUE);
            }


        redirect('excel2/input_rps');
    }
}
