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
            $utilisateur = new User();
            $utilisateur->setIdUser($row->id_utilisateur);
            $utilisateur->setNom($row->Nom);
            $utilisateur->setEmail($row->email);
            $utilisateur->setMotDePasse($row->mdp);
            $utilisateur->setIdentification($row->identification);
            return $utilisateur;
        }
        return null;
    }

    // Getter and Setter methods for the properties

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }

    public function getIdentification()
    {
        return $this->identification;
    }

    public function setIdentification($identification)
    {
        $this->identification = $identification;
    }
}
?>
