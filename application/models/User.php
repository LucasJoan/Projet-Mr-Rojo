<?php 
    class User extends CI_Model
      {
            private $idUser;
            private $nom;
            private $email;
            private $motDePasse;
            private $identification;
      public function login()
      {
        $this->db->where('email', $this->getEmail());
        $this->db->where('mdp', $this->getMotDePasse());
        $query = $this->db->get('utilisateur');

        foreach ($query->result() as $row) {
            $utilisateur = new utilisateur();
            $utilisateur->setId_utilisateur($row->id_utilisateur);
            $utilisateur->setNom($row->nom);
            $utilisateur->setEmail($row->email);
            $utilisateur->setMotDePasse($row->motDePasse);
            $utilisateur->setIdentification($row->identification);
            return $user;
        }
        return null;
      }
}
?>
