<?php

/**
 * ============================
 * Model m_produsen
 * ============================
 *
 * Model ini berfungsi untuk mengelola data produsen dalam database.
 * 
 */

class m_produsen extends CI_Model
{
    // Mengambil semua data produsen
    public function getAllProdusen(){
        return $this->db->get('tb_produsen')->result_array();
        
    }

    // Menambahkan data produsen baru
    public function tambahDataProdusen(){
            $data = [ 
                "nama_produsen"=>$this->input->post('nama_produsen', true),
                "alamat_produsen"=>$this->input->post('alamat_produsen', true),
                "kontak_produsen"=>$this->input->post('kontak_produsen', true)
            ];

            $this->db->insert('tb_produsen', $data);  
            redirect('tabelprodusen');
    }

    // Mengedit data produsen
    public function editDataProdusen(){
        $data = [ 
            "id_produsen"=>$this->input->post('id_produsen', true),
            "nama_produsen"=>$this->input->post('nama_produsen', true),
            "alamat_produsen"=>$this->input->post('alamat_produsen', true),
            "kontak_produsen"=>$this->input->post('kontak_produsen', true)
        ];
        $this->db->where('id_produsen', $this->input->post('id_produsen'));
        $this->db->update('tb_produsen', $data);  
    }

    // Mengambil data produsen berdasarkan ID
    public function getProdusenByID($id){
        return $this->db->get_where('tb_produsen',['id_produsen'=> $id])->row_array();
    }

    // Menghapus data produsen
    public function hapusDataProdusen($id){
        $this->db->where('id_produsen', $id);
        $this->db->delete('tb_produsen');
    }
    
}