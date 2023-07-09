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
		$this->load->model('Client');
		
		// Récupérer les valeurs des champs
		$nom = $this->input->post('nom');
		$email = $this->input->post('email');
		$mdp = $this->input->post('mdp');
		$identification = $this->input->post('identification');
		
		// Vérifier si le champ 'nom' n'est pas vide
		if (!empty($nom)) {
			$data = array(
				'nom' => $nom,
				'email' => $email,
				'mdp' => $mdp,
				'identification' => $identification
			);
			
			// Insérer les données dans la base de données
			$this->Client->insert_client($data);
		}
		
		$this->load->view('index');
	}

	
		// model
		
	
	
}
