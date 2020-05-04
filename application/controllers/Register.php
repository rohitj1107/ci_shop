<?php

/**
 *
 */
class Register extends CI_Controller{

  function __construct(){
      parent::__construct();
  }

  public function index(){
    $data['header'] = 'common/header';
    $data['footer'] = 'common/footer';
    $data['sidebar'] = 'common/sidebar';
    $this->load->view('Register_view',$data);
  }

  public function signup(){
    $data = $this->input->post();
    var_dump($data);
  }
}


?>
