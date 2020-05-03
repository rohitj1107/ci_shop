<?php

/**
 *
 */
class Home extends CI_Controller{

  function __construct(){
      parent::__construct();
  }

  public function index(){
    $data['header'] = 'common/header';
    $data['footer'] = 'common/footer';
    $this->load->view('Home_view',$data);
  }
}




 ?>
