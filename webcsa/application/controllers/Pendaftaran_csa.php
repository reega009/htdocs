<?php
    class Pendaftaran_csa extends CI_Controller
    {
        public function daftar()
        {
            $data['pendaftaran_csa']=$this->pendaftaran_model->tampil_data('pendaftaran_csa')->result();
            $this->load->view('frontweb/daftar_sekarang');
        }
        public function input_aksi()
        {
            $this->_rules();
            if($this->form_validation->run() == FALSE)
            {
                $this->daftar();
            }else{
                $nim = $this->input->post('nim');
                $nama_lengkap = $this->input->post('nama_lengkap');
                $tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $agama = $this->input->post('agama');
                $alamat = $this->input->post('alamat');
                $hobby = $this->input->post('hobby');
                $program_studi = $this->input->post('program_studi');
                $email = $this->input->post('email');
                $no_hp = $this->input->post('no_hp');
                $pengalaman_organisasi = $this->input->post('pengalaman_organisasi');
                $quis_1 = $this->input->post('quis_1');
                $quis_2 = $this->input->post('quis_2');
                $quis_3 = $this->input->post('quis_3');
                $quis_4 = $this->input->post('quis_4');
                $quis_5 = $this->input->post('quis_5');

                $data = array(
                    'nim'=>$nim,
                    'nama_lengkap'=>$nama_lengkap,
                    'tempat_tanggal_lahir'=>$tempat_tanggal_lahir,
                    'jenis_kelamin'=>$jenis_kelamin,
                    'agama'=>$agama,
                    'alamat'=>$alamat,
                    'hobby'=>$hobby,
                    'program_studi'=>$program_studi,
                    'email'=>$email,
                    'no_hp'=>$no_hp,
                    'pengalaman_organisasi'=>$pengalaman_organisasi,
                    'quis_1'=>$quis_1,
                    'quis_2'=>$quis_2,
                    'quis_3'=>$quis_3,
                    'quis_4'=>$quis_4,
                    'quis_5'=>$quis_5,
                );

                $this->pendaftaran_model->insert_data($data,'pendaftaran_csa');
                redirect('Main/index');
            }
        }

        public function _rules()
        {
            $this->form_validation->set_rules('nim', 'nim', 'required',['required' =>'NIM Wajib Diisi!']);
            $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required',['required' =>'Nama Lengkap Wajib Diisi!']);
            $this->form_validation->set_rules('program_studi', 'program_studi', 'required',['required' =>'Program Studi Wajib Diisi!']);
        }
    }
?>