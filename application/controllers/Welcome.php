<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
{
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('Insertutilisateur');
    
    // Récupérer les valeurs des champs
    $nom = $this->input->post('nom');
    $Prenom = $this->input->post('Prenom');
    $email = $this->input->post('email');
    $mdp = $this->input->post('mdp');
    
    // Vérifier si le champ 'nom' n'est pas vide
    if (!empty($nom)) {
        $data = array(
            'nom' => $nom,
            'Prenom' => $Prenom,
            'email' => $email,
            'mdp' => $mdp,
        );
        
        // Insérer les données dans la base de données
        $this->Insertutilisateur->insertUtilisateur($data);
    }
    
    $this->load->view('inscription');
    // redirect('Login');
}

public function lien()
{
    $this->load->view('Login');
}	


	
		// model
		
	
	
}
