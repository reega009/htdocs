<?php
    Class dashboard extends CI_Controller
    {
        public function index()
        {
            $this->load->view('dashboard/dashboard');
        }

        public function daftar_sekarang()
        {
            $data['pendaftaran_csa']=$this->pendaftaran_model->tampil_data('pendaftaran_csa')->result();
            $this->load->view('dashboard/template/header.php');
            $this->load->view('dashboard/template/sidebar.php');
            $this->load->view('dashboard/pendaftaran_csa.php',$data);
            $this->load->view('dashboard/template/footer.php');    
        }

        public function detail($id)
        {
            $where = array('nim'=>$id);
            $data['pdfcsa'] = $this->pendaftaran_model->detail_data($where,'pendaftaran_csa')->row();
            $this->load->view('dashboard/template/header.php');
            $this->load->view('dashboard/template/sidebar.php');
            $this->load->view('dashboard/pendaftaran_detail_csa.php',$data);
            $this->load->view('dashboard/template/footer.php');    
        }
        public function hapus_data($id)
        {
            $where=array('nim'=>$id);
            $this->pendaftaran_model->hapus_data($where,'pendaftaran_csa');
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Berhasil Di Hapus</div> ');
            redirect('Dashboard/daftar_sekarang');
        }
    }
?>
