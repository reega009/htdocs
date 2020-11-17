<?php
    class prodi_model extends CI_Model
    {
        public function tampil_data($table)
        {
            return $this->db->get($table);
        }
// INPUT DATA
        public function insert_data($data,$table)
        {
            $this->db->insert($table,$data);
        }
// UPDATE DATA
    public function update_data($where,$data,$table)
    {
       $this->db->where($where);
        $this->db->update($table,$data);
        
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    }
?>