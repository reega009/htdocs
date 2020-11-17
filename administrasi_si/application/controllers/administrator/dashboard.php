<?php
    class dashboard extends CI_Controller
    {
        public function index()
        {
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/dashboard.php');
            $this->load->view('templates_administrator/footer.php');
        }
    }
?>