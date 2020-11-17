<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $id = $this->session->userdata('email');
        $where = array('email'=>$id);
        $data['user'] = $this->pendaftaran_model->detail_data($where,'user')->row();
        $this->load->view('dashboard/template/header.php');
        $this->load->view('dashboard/template/sidebar.php',$data);
        $this->load->view('user/index.php',$data);
        $this->load->view('dashboard/template/footer.php');
    }

    public function pendaftaran_csa()
    {
        $data['pendaftaran_csa']=$this->pendaftaran_csa_model->lihat_data('pendataran_csa')->result();
        $this->load->view('View File', $data);
        
    }
}
