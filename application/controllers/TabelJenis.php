<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabelJenis extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('m_jenis');
        $data['jenis'] = $this->m_jenis->getAllJenis();
        $this->load->view('tabel_jenis', $data);
    }

    public function tambahjenis()
    {
        $this->load->view('form_jenis');
    }

    public function tambah(){

        $this->form_validation->set_rules('nama_jenisproduk','Nama_jenisproduk','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('m_jenis');
            $data['jenis'] = $this->m_jenis->getAllJenis();
            $this->load->view('form_jenis', $data);
            
        } else {
            $this->load->model('m_jenis');
            $this->m_jenis->tambahDataJenis();
            redirect('tabeljenis');

        }
    } 
    public function edit($id){
        $this->load->model('m_jenis');
        $data['row'] = $this->m_jenis->getJenisByID($id);

        $this->form_validation->set_rules('nama_jenisproduk','Nama_jenisproduk','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('m_jenis');
            $data['jenis'] = $this->m_jenis->getAllJenis();
            $this->load->view('edit_jenis', $data);
            
        } else {
            $this->load->model('m_jenis');
            $this->m_jenis->editDataJenis();
            redirect('tabeljenis');

        }
    }
    
    public function hapus($id){
        
        $this->load->model('m_jenis');
        $this->m_jenis->hapusDataJenis($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('tabeljenis');

    }
    
    
}