<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ============================
 * Controller TabelProdusen
 * ============================
 *
 * Controller ini berfungsi untuk mengelola data produsen, termasuk menampilkan, menambah, mengedit, dan menghapus data produsen.
 */
class TabelProdusen extends CI_Controller
{
    /**
     * Construct
     *
     * Memuat pustaka form_validation dan model m_produsen. Juga, memeriksa apakah pengguna sudah login.
     */
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('m_produsen');
    }

    /**
     * Halaman Utama
     *
     * Menampilkan halaman utama tabel produsen.
     *
     * @return void
     */
    public function index()
    {
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        $this->load->model('m_produsen');
        $data['produsen'] = $this->m_produsen->getAllProdusen();

        $this->load->view('tabel_produsen', $data);
    }

    /**
     * Tambah Produsen
     *
     * Menambah data produsen baru.
     *
     * @return void
     */
    public function tambah(){
        // Menentukan aturan validasi untuk setiap field
        $this->form_validation->set_rules('nama_produsen','Nama_produsen','required|trim');
        $this->form_validation->set_rules('alamat_produsen','Alamat_produsen','required|trim');
        $this->form_validation->set_rules('kontak_produsen','Kontak_produsen','required|trim');

        // Memeriksa apakah validasi form berhasil
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, memuat ulang data produsen
            $this->load->model('m_produsen');
            $data['produsen'] = $this->m_produsen->getAllProdusen();

            $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

            $this->load->view('tabel_produsen', $data);
            
        } else {
            // Jika validasi berhasil, menambah data produsen
            $this->load->model('m_produsen');
            $this->m_produsen->tambahDataProdusen();
            if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil ditambah')</script>";
			}
				echo "<script>window.location='".site_url('tabelprodusen')."'</script>";
        }
    }

    /**
     * Edit Produsen
     *
     * Mengedit data produsen berdasarkan ID.
     *
     * @param int $id ID produsen
     * @return void
     */
    public function edit($id){
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        $this->load->model('m_produsen');
        $data['row'] = $this->m_produsen->getProdusenByID($id);

        // Menentukan aturan validasi untuk setiap field
        $this->form_validation->set_rules('nama_produsen','Nama_produsen','required|trim');
        $this->form_validation->set_rules('alamat_produsen','Alamat_produsen','required|trim');
        $this->form_validation->set_rules('kontak_produsen','Kontak_produsen','required|trim');

        // Memeriksa apakah validasi form berhasil
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, memuat ulang data produsen
            $this->load->model('m_produsen');
            $data['produsen'] = $this->m_produsen->getAllProdusen();
            $this->load->view('update_produsen', $data);
            
        } else {
            // Jika validasi berhasil, memperbarui data produsen
            $this->load->model('m_produsen');
            $this->m_produsen->editDataProdusen();
            redirect('tabelprodusen');

        }
    }
    
    /**
     * Hapus Produsen
     *
     * Menghapus data produsen berdasarkan ID.
     *
     * @param int $id ID produsen
     * @return void
     */
    public function hapus($id){
        // Menghapus data produsen dari database
        $this->load->model('m_produsen');
        $this->m_produsen->hapusDataProdusen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data berhasil dihapus')</script>";
        }
            echo "<script>window.location='".site_url('tabelprodusen')."'</script>";
    }

    /**
     * Ubah Produsen
     *
     * Mengubah data produsen berdasarkan ID.
     *
     * @param int $id ID produsen
     * @return void
     */
    public function ubah($id){
        // Mendapatkan data produsen berdasarkan ID
        $data['produsen'] = $this->m_produsen->getProdusenByID($id);
        // Mengubah data produsen
        $data = [ 
            "nama_produsen"=>$this->input->post('nama_produsen', true),
            "alamat_produsen"=>$this->input->post('alamat_produsen', true),
            "kontak_produsen"=>$this->input->post('kontak_produsen', true)
        ];
        // Memasukkan data yang diubah ke dalam database
        $this->db->insert('tb_produsen',$data);
    }
}