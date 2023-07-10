<?php 
      class InsertUtilisateur extends CI_Model
      {
            public function __construct()
            {
                  parent::__construct();
                  $this->load->database();
            }

            public function InsertUtilisateur($data)
            {
                  $this->db->insert('utilisateur',$data);
            }
      }
?>