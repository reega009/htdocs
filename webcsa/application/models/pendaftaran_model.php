<?php
    class pendaftaran_model extends CI_Model{
        public function tampil_data($table)
        {
            return $this->db->get($table);
        }

        public function detail_data($where,$table)
        {
            return $this->db->get_where($table,$where);
        }
    }
?>