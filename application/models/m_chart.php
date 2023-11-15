<?php
class m_chart extends CI_Model
{
    public function getJumlahProdusen(){
        return $this->db->get('tb_produsen')->num_rows();
    }
    
    //ELEKTRONIK
    public function getJumlahProduk(){
        return $this->db->get('tb_produk')->num_rows();
        
    }
}
?>