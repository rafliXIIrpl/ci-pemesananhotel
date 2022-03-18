<?php

    class DataTamu extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('M_DataTamu');
        }

        public function index() {
            if($this->session->userdata('login')!= TRUE){
                redirect('login');
            }
    
            $data['title'] = "Data Tamu";
            $data['tamu'] = $this->M_DataTamu->data_tamu();
            $this->template->load_admin('index','datatamu',$data);
        }

        public function simpan()
        {
            if($this->session->userdata('login')!= TRUE)
            {
                redirect('login');
            }

            $this->M_DataTamu->simpan();
            redirect('');
        }
    }