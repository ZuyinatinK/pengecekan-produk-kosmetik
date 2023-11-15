<?php
class m_produk extends CI_Model
{
    public function getAllProduk(){
        return $this->db->get('tb_produk')->result_array();    
    }

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

    public function getProdukByID($id){
        return $this->db->get_where('tb_produk',['id_produk'=> $id])->row_array();
    }

    public function hapusDataProduk($id){
        
        $this->db->where('id_produk', $id);
        $this->db->delete('tb_produk');
    }
}