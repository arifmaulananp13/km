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
                    
                    "nama"=> $rowData[0][0],
                    "nim"=> $rowData[0][1],
                    "uts"=> $rowData[0][2],
                    "uas"=> $rowData[0][3],
                    "quiz"=> $rowData[0][4],
                    "quiz"=> $rowData[0][5]

 
                );
                 



                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("eimport",$data);
                //delete_files($media['file_path'],TRUE);        
            }

        
        redirect('Excel/input_nilai_akhir');
    }
}