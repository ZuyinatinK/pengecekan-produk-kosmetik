<?php
class m_komposisi extends CI_Model
{
    public function getAllKomposisi(){
        return $this->db->get('tb_komposisi')->result_array();    
    }

    public function tambahDataKomposisi(){
        $nama_komposisi = $this->input->post('nama_komposisi', true); 
        $deskripsi = $this->input->post('deskripsi', true);
        $fungsi = $this->input->post('fungsi', true);
        $efek = $this->input->post('efek', true);
        $keterangan = $this->input->post('keterangan', true);
        $status_aman = $this->input->post('status_aman');
        $status_halal = $this->input->post('status_halal');
        $id_produk = $this->input->post('id_produk', true);

        $data = [
            "nama_komposisi"=>$nama_komposisi,
            "deskripsi"=>$deskripsi, 
            "fungsi"=>$fungsi, 
            "efek"=>$efek, 
            "keterangan"=>$keterangan,
            "status_aman"=>$status_aman,
            "status_halal"=>$status_halal,
            "id_produk"=>$id_produk
        ];

            $this->db->insert('tb_komposisi', $data);  
            redirect('tabelkomposisi');
    }

    public function editDataKomposisi(){
        $data = [ 
            "id_komposisi"=>$this->input->post('id_komposisi', true),
            "nama_komposisi"=>$this->input->post('nama_komposisi', true),
            "deskripsi"=>$this->input->post('deskripsi', true),
            "fungsi"=>$this->input->post('fungsi', true),
            "efek"=>$this->input->post('efek', true),
            "keterangan"=>$this->input->post('keterangan', true),
            "status_aman"=>$this->input->post('status_aman', true),
            "status_halal"=>$this->input->post('status_halal', true),
            "id_produk"=>$this->input->post('id_produk', true)
        ];
        $this->db->where('id_komposisi', $this->input->post('id_komposisi'));
        $this->db->update('tb_komposisi', $data);  
    }

    public function getKomposisiByID($id){
        return $this->db->get_where('tb_komposisi',['id_komposisi'=> $id])->row_array();
    }

    public function hapusDataKomposisi($id){
        
        $this->db->where('id_komposisi', $id);
        $this->db->delete('tb_komposisi');
    }
}