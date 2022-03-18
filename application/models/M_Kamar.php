
<?php
class M_Kamar extends CI_Model{
  function data_kamar(){
    $query = $this->db->query("select * from kamar");
    return $query;
  }
  function simpan(){
        $data = array('id_kamar' => $this->input->post('id_kamar'),
                'nama_kamar' => ($this->input->post('nama_kamar')),
                'fasilitas_kamar' => ($this->input->post('fasilitas_kamar')),
                'status_kamar' => ($this->input->post('status_kamar')),
                'tarif_kamar' => ($this->input->post('tarif_kamar')));
        $insert = $this->db->insert('kamar',$data);
    }

  function hapus_data_kamar($id){
  $query = $this->db->query("delete from kamar where id_kamar = '$id'");
  if ($query > 0) {
    $this->session->set_flashdata('suksessimpan','Data kamar Berhasil Dihapus');
  }else{
    $this->session->set_flashdata('gagalsimpan','Data kamar Gagal Dihapus');
  }
}
   function update(){
        $where = array('id_kamar'=> $this->input->post('id_kamar'));
        
        
        $data1 = array(
        'nama_kamar' => $this->input->post('nama_kamar'),
        'fasilitas_kamar' => $this->input->post('fasilitas_kamar'),
        'status_kamar' => $this->input->post('status_kamar'),
        'tarif_kamar' => $this->input->post('tarif_kamar')
        );
        
       $data2 = array(
        'nama_kamar' => $this->input->post('nama_kamar'),
        'kompetensi_keahlian' => $this->input->post('fasilitas_kamar'));
            if (empty($this->input->post('nama_kamar'))) {
                $this->db->where($where);
                $query = $this->db->update('kamar',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('kamar',$data1);
            }
          }
           function data_kamar_by_id($id){
        $query = $this->db->query("select * from kamar where id_kamar = '$id'");
        return $query;
    }

}
