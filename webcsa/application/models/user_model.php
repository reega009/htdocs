<?php
    class user_model extends CI_Model
    {
        public function tampil_data()
        {
            return $this->db->get('user');
        }
    }
?>