<?php

/**
 * ============================
 * Model m_chart
 * ============================
 *
 * Model ini berfungsi untuk mengambil jumlah data dari tabel-tabel tertentu
 * dalam database.
 * 
 */

class m_chart extends CI_Model
{
    // Mengambil Jumlah Jenis Produk
    public function getJumlahJenis(){
        return $this->db->get('tb_jenisproduk')->num_rows();
    }
    
    // Mengambil Jumlah Produsen
    public function getJumlahProdusen(){
        return $this->db->get('tb_produsen')->num_rows();
    }
    
    // Mengambil Jumlah Produk
    public function getJumlahProduk(){
        return $this->db->get('tb_produk')->num_rows();
        
    }
}
?>