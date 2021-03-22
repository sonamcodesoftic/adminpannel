<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Register extends CI_controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('session');
        $this->load->model('taskone_model');
    }
    public function index()
    {
        $this->load->view('register');
    }
    public function add()
    {
       if($this->input->post())
       {
           $data['name'] = $this->input->post('first_name');
           $data['email'] = $this->input->post('email');
           $data['phone'] = $this->input->post('phone');
           $data['password'] = $this->input->post('password');
           $this->taskone_model->insertdata('register', $data);
           //echo '<script>alert("Successfully saved")</script>';
           $this->load->view('login');
       }
       else{
           echo '<script>alert("Try Again")</script>';
           $this->load->view('register');
       }
    }
    
    public function userlogin()
    {
        if($this->input->post('submit'))
        {
            $data_email = $this->input->post('email');
            $data_password = $this->input->post('password');
            $login_query_var = $this->db->query('select * from register where email = "'.$data_email.'" and password = "'.$data_password.'"');
            $row_check = $login_query_var->num_rows();
            if($row_check)
            {
                echo '<script>alert("Login Successfully")</script>';
                $session_data = $this->session->set_userdata('name', $data_email);
                $session_data = $this->session->set_userdata('password', $data_password);
                echo $this->session->userdata('name');
                //echo $this->session->userdata('password');
                $this->load->view('users_data');
            }
            else{
                echo '<script>alert("Please check your code")</script>';
                $this->load->view('login');
            }
        }


    }
    public function login_page()
    {
        $this->load->view('login');
    }

    
 }

?>