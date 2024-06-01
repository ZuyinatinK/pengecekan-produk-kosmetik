<?php

/**
 * ============================
 * Model m_komposisi
 * ============================
 *
 * Model ini berfungsi untuk mengelola data komposisi produk dalam database.
 * 
 */

class m_komposisi extends CI_Model
{
    // Mengambil semua data komposisi
    public function getAllKomposisi(){
        $this->db->select('tb_komposisi.*, tb_produk.nama_produk');
        $this->db->join('tb_produk', 'tb_produk.id_produk = tb_komposisi.id_produk');
        return $this->db->get('tb_komposisi')->result_array();
    }

    // Menambah data komposisi baru
    public function tambahDataKomposisi(){
        $nama_komposisi = $this->input->post('nama_komposisi', true);
        $id_produk = $this->input->post('id_produk', true);
        $deskripsi = $this->input->post('deskripsi', true);
        $fungsi = $this->input->post('fungsi', true);
        $efek = $this->input->post('efek', true);
        $keterangan = $this->input->post('keterangan', true);
        $status_aman = $this->input->post('status_aman');
        $status_halal = $this->input->post('status_halal');

        $data = [
            "nama_komposisi"=>$nama_komposisi,
            "id_produk"=>$id_produk,
            "deskripsi"=>$deskripsi, 
            "fungsi"=>$fungsi, 
            "efek"=>$efek, 
            "keterangan"=>$keterangan,
            "status_aman"=>$status_aman,
            "status_halal"=>$status_halal
        ];

            $this->db->insert('tb_komposisi', $data);  
            redirect('tabelkomposisi');
    }

    // Mengedit data komposisi
    public function editDataKomposisi(){
        $data = [ 
            "id_komposisi"=>$this->input->post('id_komposisi', true),
            "nama_komposisi"=>$this->input->post('nama_komposisi', true),
            "id_produk"=>$this->input->post('id_produk', true),
            "deskripsi"=>$this->input->post('deskripsi', true),
            "fungsi"=>$this->input->post('fungsi', true),
            "efek"=>$this->input->post('efek', true),
            "keterangan"=>$this->input->post('keterangan', true),
            "status_aman"=>$this->input->post('status_aman', true),
            "status_halal"=>$this->input->post('status_halal', true)
        ];
        $this->db->where('id_komposisi', $this->input->post('id_komposisi'));
        $this->db->update('tb_komposisi', $data);  
    }

    // Mengambil data komposisi berdasarkan ID
    public function getKomposisiByID($id){
        return $this->db->get_where('tb_komposisi',['id_komposisi'=> $id])->row_array();
    }

    // Menghapus data komposisi
    public function hapusDataKomposisi($id){
        
        $this->db->where('id_komposisi', $id);
        $this->db->delete('tb_komposisi');
    }

    // Mengambil detail data komposisi
    public function detailDataKomposisi($id = NULL) {
        $this->db->select('tb_komposisi.*, tb_produk.nama_produk, tb_produk.gambar');
        $this->db->from('tb_komposisi');
        $this->db->join('tb_produk', 'tb_produk.id_produk = tb_komposisi.id_produk');
        $this->db->where('tb_komposisi.id_komposisi', $id);

        return $this->db->get()->row_array();
    }
}