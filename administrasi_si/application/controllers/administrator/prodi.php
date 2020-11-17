<?php 
    class prodi extends CI_Controller
    {
        public function index()
        {
            $data['prodi']=$this->prodi_model->tampil_data('prodi')->result();
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/prodi.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }
// INPUT DATA
        public function tambah_prodi()
        {
            $data['jurusan'] = $this->prodi_model->tampil_data('jurusan')->result();
            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/prodi_form.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }   
        
        public function tambah_prodi_aksi()
        {
            $this->_rules();

            if($this->form_validation->run() == false)
            {
                $this->tambah_prodi();
            }else{
                $kode_prodi = $this->input->post('kode_prodi');
                $nama_prodi = $this->input->post('nama_prodi');
                $nama_jurusan = $this->input->post('nama_jurusan');

                $data = array(
                    'kode_prodi' => $kode_prodi,
                    'nama_prodi' => $nama_prodi,
                    'nama_jurusan' => $nama_jurusan
                );

                $this->prodi_model->insert_data($data,'prodi');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Data Prodi Berhasil Di Tambahkan!</div>');
                redirect('administrator/prodi');
            }
        }

        public function _rules()
        {
            $this->form_validation->set_rules('kode_prodi', 'kode_prodi', 'required',['required' =>'Kode Prodi Wajib Diisi!']);
            $this->form_validation->set_rules('nama_prodi', 'nama_prodi', 'required',['required' =>'Nama Prodi Wajib Diisi!']);
            $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required',['required' =>'Nama Jurusan Wajib Diisi!']);
        }

        public function update($id)
        {
            // Memasukan query untuk menampilkan data dari  Table Jurusan dan Prodi
            $data['prodi'] = $this->db->query(
                "select * from prodi prd,jurusan jrs where prd.nama_jurusan=jrs.nama_jurusan and prd.id_prodi='$id'")->result();
            $data['jurusan']=$this->prodi_model->tampil_data('jurusan')->result();

            $this->load->view('templates_administrator/header.php');
            $this->load->view('templates_administrator/sidebar.php');
            $this->load->view('administrator/prodi_update.php',$data);
            $this->load->view('templates_administrator/footer.php');
        }

        public function update_aksi()
        {
            $id = $this->input->post('id_jurusan');
            $kode_prodi = $this->input->post('kode_prodi');
            $nama_prodi = $this->input->post('nama_prodi');
            $nama_jurusan = $this->input->post('nama_jurusan');

            $data = array(
                'kode_prodi'=>$kode_prodi,
                'nama_prodi'=>$nama_prodi,
                'nama_jurusan'=>$nama_jurusan
            );

            $where=array(
                'id_prodi'=>$id
            );
            $this->prodi_model->update_data($where,$data,'prodi');
            $this->session->flashdata('pesan','<div class="alert alert-success" role="alert">Data Prodi Berhasil Di Update</div>');
            redirect('administrator/prodi');
        }

        public function hapus_data($id)
        {
            $where=array('id_prodi'=>$id);
            $this->prodi_model->hapus_data($where,'prodi');
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Data Jurusan Berhasil Di Hapus!</div>');
            redirect('administrator/prodi');
        }
    } 
?>