<?php
    class Jurusan extends CI_controller{
        public function index()
        {
            $data['jurusan'] = $this->jurusan_model->tampil_data('jurusan')->result();
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/jurusan.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }
// INSERT DATA
        public function input()
        {
            $data['jenjang']=$this->prodi_model->tampil_data('jenjang')->result();
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/jurusan_form.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }

        public function input_aksi()
        {
            $this->_rules();

            if($this->form_validation->run() == FALSE){
                $this->input();
            }else {
                $data = array (
                    'kode_jurusan'=> $this->input->post('kode_jurusan', TRUE),
                    'nama_jurusan'=> $this->input->post('nama_jurusan', TRUE),
                    'kode_jenjang'=>$this->input->post('kode_jenjang', TRUE)
                );
                $this->jurusan_model->input_data($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Data Jurusan Berhasil Di Tambahkan!</div>');
                
                
                redirect('administrator/jurusan');
            }
        }
        public function _rules()
        {
            $this->form_validation->set_rules('kode_jurusan','kode_jurusan','required',['required'=>'Kode Jurusan Wajib Diisi!']);
            $this->form_validation->set_rules('nama_jurusan','nama_jurusan','required',['required'=>'Nama Jurusan Wajib Diisi!']);
            $this->form_validation->set_rules('kode_jenjang','kode_jenjang','required',['required'=>'Kode Wajib Diisi!']);
        }
// UPDATE DATA 
        public function update($id)
        {
            $where = array('id_jurusan'=>$id);
            $data['jurusan'] = $this->jurusan_model->edit_data($where,'jurusan')->result();
            $data['jenjang']=$this->prodi_model->tampil_data('jenjang')->result();

            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/jurusan_update.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }

        public function update_aksi()
        {
            $id = $this->input->post('id_jurusan');
            $kode_jurusan = $this->input->post('kode_jurusan');
            $nama_jurusan = $this->input->post('nama_jurusan');
            $kode_jenjang = $this->input->post('kode_jenjang');

            $data = array(
                'kode_jurusan' => $kode_jurusan,
                'nama_jurusan' => $nama_jurusan,
                'kode_jenjang' => $kode_jenjang
            );
            $where = array(
                'id_jurusan'=>$id
            );
            $this->jurusan_model->update_data($where,$data,'jurusan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Data Jurusan Berhasil Di Update!</div>');
            redirect('administrator/jurusan');
        }
// DELETE DATA
        public function delete($id)
        {
            $where = array('id_jurusan' => $id);
            $this->jurusan_model->hapus_data($where,'jurusan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Data Jurusan Berhasil Di Hapus!</div>');
            redirect('administrator/jurusan');
        }
     }
?>