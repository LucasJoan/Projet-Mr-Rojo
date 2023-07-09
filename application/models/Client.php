<?php 
      class client extends CI_Model
      {
            public function __construct()
            {
                  parent::__construct();
                  $this->load->database();
            }

            public function insert_client($data)
            {
                  $this->db->insert('user',$data);
            }
      }
?>