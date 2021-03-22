<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
  class Api extends CI_Controller{
      public function __construct()
      {
          parent::__construct();
          //$this->load->library('session');
          //$this->load->model('taskone_model');
      }
      public function index()
    {
        //$this->load->view('users_data');
        //$this->load->view('login');
        $this->load->view('admin_login');
    }
  }
?>