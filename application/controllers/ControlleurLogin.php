<?php
<<<<<<< HEAD
<<<<<<< HEAD
class ControllerLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('User');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = new User(null, null, $email, $password, null);
        $user = $user->login();

        if ($user != null) {
            $this->session->set_userdata('idUser', $user->getIdUser());
            redirect('');
        } else {
            $this->load->view('Projet-Mr-Rojo/views/index');
=======
=======
>>>>>>> d250d4d7f1bc9fc55ce4934e47f332d9c6d93efb
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
                $this->load->view('index');
            }else{
                redirect('');
            }
<<<<<<< HEAD
>>>>>>> 090bd552c9892e74366eeaf2c3248d6eb82c015c
=======
>>>>>>> d250d4d7f1bc9fc55ce4934e47f332d9c6d93efb
        }
      }
?>
