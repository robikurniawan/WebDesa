<?php
class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('profil/profil_model','profil');
  }

  function index()
  {
    $this->load->helper('form');
    $data['get'] = $this->profil->get_all();
    $this->load->view('login',$data);
  }

}