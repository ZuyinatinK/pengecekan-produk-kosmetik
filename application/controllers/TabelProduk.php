<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabelProduk extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');

    }

    public function index()
    {
        $this->load->model('m_produk');
        $data['produk'] = $this->m_produk->getAllProduk();
        $this->load->model('m_jenis');
        $data['jenis'] = $this->m_jenis->getAllJenis();
        $this->load->model('m_produsen');
        $data['produsen'] = $this->m_produsen->getAllProdusen();
        $this->load->view('tabel_produk', $data);
    }
    public function tambahproduk()
    {
        
        $this->load->model('m_produk');
        $data['produk'] = $this->m_produk->getAllProduk();
        $this->load->model('m_jenis');
        $data['jenis'] = $this->m_jenis->getAllJenis();
        $this->load->model('m_produsen');
        $data['produsen'] = $this->m_produsen->getAllProdusen();
        $this->load->view('form_produk', $data);
    }
    public function tambah(){


        $this->form_validation->set_rules('nama_produk','Nama_produk','required|trim');
        $this->form_validation->set_rules('gender','Gender','required|trim');
        $this->form_validation->set_rules('id_jenisproduk','Id_jenisproduk','required|trim');
        $this->form_validation->set_rules('id_produsen','Id_produsen','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('m_produk');
            $data['produk'] = $this->m_produk->getAllProduk();
            $this->load->model('m_jenis');
            $data['jenis'] = $this->m_jenis->getAllJenis();
            $this->load->model('m_produsen');
            $data['produsen'] = $this->m_produsen->getAllProdusen();
            $this->load->view('form_produk', $data);
            
        } else {
            
            $this->load->model('m_produk');
            $this->m_produk->tambahDataProduk();
            redirect('form_produk');
        }
        
    }

    public function do_upload()
        {
                $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png|PNG';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        echo "Gagal tambah";
                }
                else
                {
                        $gambar = $this->upload->data();
                        $gambar = $gambar['file_name'];

                }
        }

    public function edit($id){
        $this->load->model('m_produk');
        $data['row'] = $this->m_produk->getProdukByID($id);

        $this->form_validation->set_rules('id_produk','Id_produk','required|trim');
        $this->form_validation->set_rules('nama_produk','Nama_produk','required|trim');
        $this->form_validation->set_rules('gender','Gender','required|trim');
        $this->form_validation->set_rules('sertifikasi_BPOM','Sertifikasi_BPOM','required|trim');
        $this->form_validation->set_rules('sertifikasi_MUI','Sertifikasi_MUI','required|trim');
        $this->form_validation->set_rules('id_jenisproduk','Id_jenisproduk','required|trim');
        $this->form_validation->set_rules('id_produsen','Id_produsen','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('m_produk');
            $data['produk'] = $this->m_produk->getAllProduk();
            $this->load->view('edit_produk', $data);
            
        } else {
            $this->load->model('m_produk');
            $this->m_produk->editDataProduk();
            redirect('tabelproduk');

        }
    }
    
    public function hapus($id){
        
        $this->load->model('m_produk');
        $this->m_produk->hapusDataProduk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('tabelproduk');

    }
    public function ubah($id){
        $data['produk'] = $this->m_produk->getProdukByID($id);
        $data = [
            "nama_produk" =>$this->input->post('nama_produk', true), 
            "gender"=>$this->input->post('gender', true), 
            "gambar"=>$this->input->post('gambar'),
            "sertifikasi_BPOM" => $this->input->post('sertifikasi_BPOM', true),
            "sertifikasi_MUI"=>$this->input->post('sertifikasi_MUI', true), 
            "id_jenisproduk"=>$this->input->post('id_jenisproduk', true),
            "id_produsen"=>$this->input->post('id_produsen', true)
        ];
        $this->db->insert('tb_produk',$data);
    }
    
}