<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabelProdusen extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('m_produsen');
        $data['produsen'] = $this->m_produsen->getAllProdusen();
        $this->load->view('tabel_produsen', $data);
    }

    public function tambahprodusen()
    {
        $this->load->view('form_produsen');
    }

    public function tambah(){

        $this->form_validation->set_rules('nama_produsen','Nama_produsen','required|trim');
        $this->form_validation->set_rules('alamat_produsen','Alamat_produsen','required|trim');
        $this->form_validation->set_rules('kontak_produsen','Kontak_produsen','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('m_produsen');
            $data['produsen'] = $this->m_produsen->getAllProdusen();
            $this->load->view('form_produsen', $data);
            
        } else {
            $this->load->model('m_produsen');
            $this->m_produsen->tambahDataProdusen();
            redirect('tabelprodusen');
        }
    }

    public function edit($id){
        $this->load->model('m_produsen');
        $data['row'] = $this->m_produsen->getProdusenByID($id);

        $this->form_validation->set_rules('nama_produsen','Nama_produsen','required|trim');
        $this->form_validation->set_rules('alamat_produsen','Alamat_produsen','required|trim');
        $this->form_validation->set_rules('kontak_produsen','Kontak_produsen','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('m_produsen');
            $data['produsen'] = $this->m_produsen->getAllProdusen();
            $this->load->view('edit_produsen', $data);
            
        } else {
            $this->load->model('m_produsen');
            $this->m_produsen->editDataProdusen();
            redirect('tabelprodusen');

        }
    }
    
    public function hapus($id){
        
        $this->load->model('m_produsen');
        $this->m_produsen->hapusDataProdusen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('tabelprodusen');
    }

    public function ubah($id){
        $data['produsen'] = $this->m_produsen->getProdusenByID($id);
        $data = [ 
            "nama_produsen"=>$this->input->post('nama_produsen', true),
            "alamat_produsen"=>$this->input->post('alamat_produsen', true),
            "kontak_produsen"=>$this->input->post('kontak_produsen', true)
        ];
        $this->db->insert('tb_produsen',$data);
    }
}