<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
        $this->load->model('combobox_model');
        $this->load->model('m_inputnilai');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function input_nilai_akhir(){
        $data['title'] = "Input Nilai Akhir";
        $data['active_8'] = "active";
        $data['kelas'] = $this->combobox_model->getKelasAll();
    		$data['matkul'] = $this->combobox_model->getMatkulAll();
        view('nilai/input_nilai_akhir2',$data);
    }

    public function upload(){
        $fileName = time().$_FILES['file']['name'];
        $config['upload_path'] = FCPATH.'assets/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();

        $media = $this->upload->data('file');
        $inputFileName = FCPATH.'assets/'.$fileName;

        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                // echo '<pre>';
                // var_dump($media);
                // echo $inputFileName;
			$this->session->set_flashdata('category_error', 'File Tidak Sesuai!');
			redirect($_SERVER['HTTP_REFERER']);
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


                    "NAMA"=> $rowData[0][0],
                    "NIM"=> $rowData[0][1],
                    "UTS"=> $rowData[0][2],
                    "UAS"=> $rowData[0][3],
                    "TUGAS"=> $rowData[0][4],
                    "TOTAL"=> $rowData[0][5],
                    "GRADE"=> $rowData[0][6],
                    "DOSEN"=> $rowData[0][7],
                    "MATKUL"=> $rowData[0][8],
                    "KELAS"=> $rowData[0][9],
                    "DESKRIPSI"=> $rowData[0][10]



                );




                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("eimport",$data);
                //delete_files($media['file_path'],TRUE);

            }


        if(isset($_POST['materi'])){
        $this->session->set_flashdata('category_success', 'Submit Success');
        redirect('Excel/input_nilai_akhir');
        }else{
        $this->session->set_flashdata('category_error', 'Data Tidak Boleh Kosong!');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
}
