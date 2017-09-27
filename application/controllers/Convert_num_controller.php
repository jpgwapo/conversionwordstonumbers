<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Convert_num_controller extends CI_Controller {

    public function index() {
        $this->load->view('convert_num_view');
    }

    public function convertToNum() {
         $num = $this->input->post('toNum');
        //echo $num . "<br>";
        $toNum = convertToNumber($num);
        $data['to_num'] = $toNum;
    $this->load->view('to_words_view', $data);
    }

public function convertToWord() {
         $words = $this->input->post('toWord');
        // echo $words . "<br>";
        $toNum = convertToWord($words);

    $data['to_num'] = $toNum;
    $this->load->view('to_numbers_view', $data);

    }
  

 

}