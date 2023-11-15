<?php
class m_jenis extends CI_Model
{
    public function getAllJenis(){
        return $this->db->get('tb_jenisproduk')->result_array();
    }

    public function tambahDataJenis(){
        $data = [ 
            "nama_jenisproduk"=>$this->input->post('nama_jenisproduk', true)
        ];

        $this->db->insert('tb_jenisproduk', $data);  
        redirect('tabeljenis');
    }
    
    public function editDataJenis(){
        $data = [ 
            "id_jenisproduk"=>$this->input->post('id_jenisproduk', true),
            "nama_jenisproduk"=>$this->input->post('nama_jenisproduk', true)
        ];
        $this->db->where('id_jenisproduk', $this->input->post('id_jenisproduk'));
        $this->db->update('tb_jenisproduk', $data);  
    }

    public function getJenisByID($id){
        return $this->db->get_where('tb_jenisproduk',['id_jenisproduk'=> $id])->row_array();
    }

    public function hapusDataJenis($id){
        $this->db->where('id_jenisproduk', $id);
        $this->db->delete('tb_jenisproduk');
    }

}