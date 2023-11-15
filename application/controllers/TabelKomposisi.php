<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabelKomposisi extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');

    }

    public function index()
    {
        $this->load->model('m_komposisi');
        $data['komposisi'] = $this->m_komposisi->getAllKomposisi();
        $this->load->model('m_produk');
        $data['produk'] = $this->m_produk->getAllProduk();
        $this->load->view('tabel_komposisi', $data);
    }
    public function tambahkomposisi()
    {
        
        $this->load->model('m_komposisi');
        $data['komposisi'] = $this->m_komposisi->getAllKomposisi();
        $this->load->model('m_produk');
        $data['produk'] = $this->m_produk->getAllProduk();
        $this->load->view('form_komposisi', $data);
    }

    public function tambah(){
        $this->form_validation->set_rules('nama_komposisi','Nama_komposisi','required|trim');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required|trim');
        $this->form_validation->set_rules('fungsi','Fungsi','required|trim');
        $this->form_validation->set_rules('efek','Efek','required|trim');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim');
        $this->form_validation->set_rules('id_produk','Id_produk','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('m_komposisi');
            $data['komposisi'] = $this->m_komposisi->getAllKomposisi();
            $this->load->model('m_produk');
            $data['produk'] = $this->m_produk->getAllProduk();
            $this->load->view('form_komposisi', $data);
            
        } else {
            
            $this->load->model('m_komposisi');
            $this->m_komposisi->tambahDataKomposisi();
            redirect('form_komposisi');
        }

            // $this->load->model('m_komposisi');
            // $this->m_komposisi->tambahDataKomposisi();
            // redirect('form_komposisi');
        
    }

    public function edit($id){
        $this->load->model('m_komposisi');
        $data['row'] = $this->m_komposisi->getKomposisiByID($id);

        $this->form_validation->set_rules('id_komposisi','Id_komposisi','required|trim');
        $this->form_validation->set_rules('nama_komposisi','Nama_komposisi','required|trim');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required|trim');
        $this->form_validation->set_rules('fungsi','Fungsi','required|trim');
        $this->form_validation->set_rules('efek','Efek','required|trim');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim');
        $this->form_validation->set_rules('status_aman','Status_aman','required|trim');
        $this->form_validation->set_rules('status_halal','Status_halal','required|trim');
        $this->form_validation->set_rules('id_produk','Id_produk','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('m_komposisi');
            $data['komposisi'] = $this->m_komposisi->getAllKomposisi();
            $this->load->view('edit_komposisi', $data);
            
        } else {
            $this->load->model('m_komposisi');
            $this->m_komposisi->editDataKomposisi();
            redirect('tabelkomposisi');

        }
    }
    
    public function hapus($id){
        
        $this->load->model('m_komposisi');
        $this->m_komposisi->hapusDataKomposisi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('tabelkomposisi');

    }
    public function ubah($id){
        $data['komposisi'] = $this->m_komposisi->getKomposisiByID($id);
        $data = [
            "nama_komposisi" => $this->input->post('nama_komposisi', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "fungsi" => $this->input->post('fungsi', true),
            "efek" => $this->input->post('efek', true),
            "keterangan" => $this->input->post('keterangan', true),
            "status_aman" => $this->input->post('status_aman', true),
            "status_halal" => $this->input->post('status_halal', true),
            "id_produk" => $this->input->post('id_produk', true)
        ];
        $this->db->insert('tb_komposisi',$data);
    }
    
}