<?php
    class mahasiswa extends CI_Controller{

        public function index()
        {
            $data['mahasiswa'] = $this->mahasiswa_model->tampil_data('mahasiswa')->result();
            $data['prodi']=$this->prodi_model->tampil_data('prodi')->result();
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/mahasiswa.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }

        public function detail($id)
        {
            $data['detail']=$this->mahasiswa_model->ambil_id_mahasiswa($id);
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/mahasiswa_detail.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }
        public function input_data(){
            $data['prodi']=$this->mahasiswa_model->tampil_data('prodi')->result();
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/mahasiswa_form.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }
    }
?>