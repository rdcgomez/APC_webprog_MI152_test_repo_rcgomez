<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypage extends CI_Controller {

    public function __construct() {
      parent:: __construct();
      $this->load->helper('url');
      $this->load->helper('array');
      $this->load->model("mypageModel");
    }

    public function index(){
      //load view and pass the data
      $this->load->model("mypageModel");
      $data ['query'] = $this->mypageModel->save_button_pressed();
      $this->load->view('my_page');



    }

    /*public function data_submitted() {
    $data = array(
    '$first_name' => $this->input->post('first_name'),
    '$last_name' => $this->input->post('last_name')
    );
    // Show submitted data in visitors database
    $this->load->view("my_page_checkdatabase", $data);
    }*/

}
?>
