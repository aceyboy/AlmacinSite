<?php
  class HomeController extends CI_Controller {
    public function index() {
      $data['test'] = 'Testing data.';
      $this->load->view('HomeView', $data);
    }
  }
?>
