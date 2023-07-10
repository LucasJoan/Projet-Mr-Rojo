<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class InsertUtilisateur extends CI_Model {

    public function getUserByEmail($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('utilisateur');
        return $query->row();
    }
}

?>