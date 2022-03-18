<?php
class tamu extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_tamu');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data tamu ";
        $data['kelas'] = $this->M_Kelas->data_kelas();
        $this->template->load_admin('index','tamu',$data);
    }
    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }
        $data['title'] = "Data Tamu";
        $data['subtitle'] = "Tambah Data Tamu";
        $this->template->load_admin('index','kelas_tambah',$data);
    }
    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Kelas->simpan();       
        redirect('tamu');
    }
    public function ubah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }
    
        $data['title'] = "Data Kelas";
        $data['subtitle'] = "Edit Data Kelas";
    
        $id = $this->uri->segment(3);
        $data['kelas'] = $this->M_Kelas->data_kelas_by_id($id);
        $this->template->load_admin('index','kelas_ubah',$data);
    }    
    public function update(){
        if ($this->session->userdata('login') != true) {
            redirect('login');
        }
    
        $this->M_kelas->update();
        redirect('kelas');
    }
    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }
        $id = $this->uri->segment(3);
        $this->M_Kelas->hapus_data_kelas($id);
        redirect('kelas');
    }


}
