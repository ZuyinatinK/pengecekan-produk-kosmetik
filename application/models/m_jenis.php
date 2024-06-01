<?php

/**
 * ============================
 * Model m_jenis
 * ============================
 *
 * Model ini berfungsi untuk mengelola data jenis produk dalam database.
 * 
 */

class m_jenis extends CI_Model
{
    // Mengambil semua data jenis produk
    public function getAllJenis(){
        return $this->db->get('tb_jenisproduk')->result_array();
    }

    // Menambahkan data jenis produk baru
    public function tambahDataJenis(){
        $data = [ 
            "nama_jenisproduk"=>$this->input->post('nama_jenisproduk', true)
        ];

        $this->db->insert('tb_jenisproduk', $data);  
        redirect('tabeljenis');
    }
    
    // Mengedit data jenis produk
    public function editDataJenis(){
        $data = [ 
            "id_jenisproduk"=>$this->input->post('id_jenisproduk', true),
            "nama_jenisproduk"=>$this->input->post('nama_jenisproduk', true)
        ];
        $this->db->where('id_jenisproduk', $this->input->post('id_jenisproduk'));
        $this->db->update('tb_jenisproduk', $data);  
    }

    // Mengambil data jenis produk berdasarkan ID
    public function getJenisByID($id){
        return $this->db->get_where('tb_jenisproduk',['id_jenisproduk'=> $id])->row_array();
    }

    // Menghapus data jenis produk
    public function hapusDataJenis($id){
        $this->db->where('id_jenisproduk', $id);
        $this->db->delete('tb_jenisproduk');
    }

}