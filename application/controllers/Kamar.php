<?php
class Kamar extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Kamar');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Kamar ";
        $data['siswa'] = $this->M_Kamar->data_kamar();
        $this->template->load_admin('index','kamar',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }
        $data['title'] = "Data Kamar";
        $data['subtitle'] = "Tambah Data Kamar";
        $this->template->load_admin('index','kamar_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }
       $this->M_Kamar->simpan();
       redirect('kamar');
    }

     public function hapus(){
    if($this->session->userdata('login')!= TRUE){
    redirect('login');
    }

    $id = $this->uri->segment(3);
    $this->M_Kamar->hapus_data_kamar($id);
    redirect('kamar');
    }

     public function ubah()
    {
      if($this->session->userdata('login')!= TRUE)
      {
        redirect('login');      
      }

      $data['title'] = "Data kamar";
      $data['subtitle'] = "Edit Data kamar";

      $id = $this->uri->segment(3);
      $data['kamar'] = $this->M_Kamar->data_kamar_by_id($id);
      $this->template->load_admin('index','kamar_ubah',$data);
    }
        public function update(){
        if ($this->session->userdata('login') != true) {
            redirect('login');
        }
    
        $this->M_Kamar->update();
        redirect('Kamar');
    }
}
