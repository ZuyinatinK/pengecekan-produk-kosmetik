<?php

/**
 * ============================
 * Model m_produk
 * ============================
 *
 * Model ini berfungsi untuk mengelola data produk dalam database.
 * 
 */

class m_produk extends CI_Model
{
    /**
     * Mengambil semua data produk
     *
     * Method ini mengakses tabel 'tb_produk' dan menggabungkannya dengan tabel 'tb_jenisproduk' dan 'tb_produsen'
     * untuk mengambil nama jenis produk dan nama produsen yang terkait, kemudian mengembalikan semua data produk dalam bentuk array asosiatif.
     *
     * @return array Semua data produk dengan nama jenis produk dan nama produsen terkait
     */

    public function getAllProduk(){
        $this->db->select('tb_produk.*, tb_jenisproduk.nama_jenisproduk, tb_produsen.nama_produsen');
        $this->db->from('tb_produk');
        $this->db->join('tb_jenisproduk', 'tb_jenisproduk.id_jenisproduk = tb_produk.id_jenisproduk');
        $this->db->join('tb_produsen', 'tb_produsen.id_produsen = tb_produk.id_produsen');

        $this->db->order_by('id_produk', 'ASC');

        return $this->db->get()->result_array();    
    }

    // Menambahkan data produk baru
    public function tambahDataProduk(){
            $nama_produk = $this->input->post('nama_produk', true); 
            $gender = $this->input->post('gender', true);
            $sertifikasi_BPOM = $this->input->post('sertifikasi_BPOM');
            $sertifikasi_MUI = $this->input->post('sertifikasi_MUI');
            $id_jenisproduk = $this->input->post('id_jenisproduk', true);
            $id_produsen = $this->input->post('id_produsen', true);

            $data = [
                "nama_produk"=>$nama_produk,
                "gender"=>$gender,
                "sertifikasi_BPOM"=>$sertifikasi_BPOM, 
                "sertifikasi_MUI"=>$sertifikasi_MUI,
                "id_jenisproduk"=>$id_jenisproduk, 
                "id_produsen"=>$id_produsen
            ];

            $this->db->insert('tb_produk', $data);  
            redirect('tabelproduk');
    }

    // Mengedit data produk
    public function editDataProduk(){
        $data = [ 
            "id_produk"=>$this->input->post('id_produk', true),
            "nama_produk"=>$this->input->post('nama_produk', true),
            "gender"=>$this->input->post('gender', true),
            "sertifikasi_BPOM"=>$this->input->post('sertifikasi_BPOM', true),
            "sertifikasi_MUI"=>$this->input->post('sertifikasi_MUI', true),
            "id_jenisproduk"=>$this->input->post('id_jenisproduk', true),
            "id_produsen"=>$this->input->post('id_produsen', true)
        ];
        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->update('tb_produk', $data);  
    }

    // Mengambil data produk berdasarkan ID
    public function getProdukByID($id){
        return $this->db->get_where('tb_produk',['id_produk'=> $id])->row_array();
    }

    // Menghapus data produk
    public function hapusDataProduk($id){
        
        $this->db->where('id_produk', $id);
        $this->db->delete('tb_produk');
    }

    // Mengambil detail data produk
    public function detailDataProduk($id = NULL) {
        $this->db->select('tb_produk.*, tb_jenisproduk.nama_jenisproduk, tb_produsen.nama_produsen');
        $this->db->from('tb_produk');
        $this->db->join('tb_jenisproduk', 'tb_jenisproduk.id_jenisproduk = tb_produk.id_jenisproduk');
        $this->db->join('tb_produsen', 'tb_produsen.id_produsen = tb_produk.id_produsen');
        $this->db->where('tb_produk.id_produk', $id);
        return $this->db->get()->row_array();
    }

    // Mencari produk berdasarkan kata kunci
    public function searchProduct($keyword) {
        $this->db->select('*');
        $this->db->from('tb_produk');
        $this->db->like('nama_produk', $keyword);
        $this->db->or_like('gender', $keyword);
        $this->db->or_like('id_produk', $keyword);

        return $this->db->get()->result_array();
    }
}