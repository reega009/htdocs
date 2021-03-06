<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); //trim untuk menghilangkan spasi //
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/Login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['email' => $email])->row_array(); // Row array untuk satu baris

            //usernya ada
            if ($user) {
                // Jika Email Aktif
                if ($user['is_active'] == 1) {
                    // Cek password
                    if (password_verify($password, $user['password'])) { //password verify untuk menyamakan password input dengan password db //
                        // Jika password benar
                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];
                        $this->session->set_userdata($data);
                        redirect('user');
                    } else {
                        $this->session->flashdata('message', '<div class="alert alert-danger" role="alert">
                        Wrong Password!</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->flashdata('message', '<div class="alert alert-danger" role="alert">
                    This is email has not been Activated!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->flashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered!</div>');
                redirect('auth');
            }
        }
    }
    public function registration()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has already Registered!'
        ]);
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password To Short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/Registration');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)), // true untuk security //
                'email' => htmlspecialchars($this->input->post('email', true)), //htmlspecialchars untuk mengantisipasi sanitasi //
                'image' => 'default2.gif',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! Your Account has been created. Please Login!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->flashdata('message', '<div class="alert alert-success" role="alert">
            You Have Been Logged Out!</div>');
        redirect('auth');
    }
}


/* End of file Controllername.php */
