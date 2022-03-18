<?php 

    class M_DataTamu extends CI_Model {
        function data_tamu() {
            $query = $this->db->query("select * from tamu");
            return $query;
        }

        function simpan(){
            $data = array('id_tamu' => $this->input->post('id_tamu'),
                    'nama_tamu' => $this->input->post('nama_tamu'),
                    'alamat_tamu' => $this->input->post('alamat_tamu'),
                    'no_hp' => $this->input->post('no_hp'),
                    'nama_tipe_kamar' => $this->input->post('nama_tipe_kamar'));
            $insert = $this->db->insert('tamu',$data);
        }
    }