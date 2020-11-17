<?php 
    class Matakuliah extends CI_Controller
    {
        public function index()
        {
            $data['matakuliah'] = $this->matakuliah_model->tampil_data('matakuliah')->result();
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/matakuliah.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }

        public function tambah_matakuliah()
        {
            $data['prodi']=$this->matakuliah_model->tampil_data('prodi')->result();
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/matakuliah_form.php',$data);
            $this->load->view('templates_administrator/footer.php');

        }
    }

?>