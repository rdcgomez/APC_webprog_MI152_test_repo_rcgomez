<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypagecheckdatabase extends CI_Controller {

    public function __construct() {
      parent:: __construct();
      $this->load->helper('url');
    }


    public function index(){


      // Show submitted data in visitors database
      $this->load->model("mypageModel");
      //pass the data
      $data array(
        $data ['query'] = $this->load->show_data_in_visitorspage()
        $row = $data
      );

      //load view
      $this->load->view("my_page_checkdatabase", $row);

    }


}
?>
