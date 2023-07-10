<?php
    class ControllerLogin extends CI_Controller
      {
            public function __construct() 
            {
                  parent::__construct();
            }
            public function Login()
        {
            $this->load->library('session');
            $this->load->helper('url');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = new User(null,null,$email,$password,null);
            $user = $user->login();
            if($user != null){
                $this->session->set_userdata('idUser',$user->getIdUser());
            }
            if($this->session->userdata('idUser') == null){
                $this->load->view('Login');
            }else{
                redirect('');
            }
        }
      }
?>
