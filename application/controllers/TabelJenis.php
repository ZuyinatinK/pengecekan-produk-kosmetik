<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ============================
 * Controller TabelJenis
 * ============================
 *
 * Controller ini berfungsi untuk mengelola data jenis produk, termasuk menampilkan, menambah, mengedit, dan menghapus data jenis produk.
 */
class TabelJenis extends CI_Controller
{
    /**
     * Construct
     *
     * Memuat pustaka form_validation dan model m_jenis. Juga, memeriksa apakah pengguna sudah login.
     */
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('m_jenis');
    }

    /**
     * Halaman Utama
     *
     * Menampilkan halaman utama tabel jenis produk.
     *
     * @return void
     */
    public function index()
    {
        // Mendapatkan data pengguna yang sedang login
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
        $this->load->model('m_jenis');
        $data['jenis'] = $this->m_jenis->getAllJenis();
        
        $this->load->view('tabel_jenis', $data);
    }

    /**
     * Tambah Jenis Produk
     *
     * Menambah data jenis produk baru.
     *
     * @return void
     */
    public function tambah(){

        // Menentukan aturan validasi untuk nama jenis produk
        $this->form_validation->set_rules('nama_jenisproduk','Nama_jenisproduk','required|trim');

        // Memeriksa apakah validasi form berhasil
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, memuat ulang data jenis produk dan pengguna
            $this->load->model('m_jenis');
            $data['jenis'] = $this->m_jenis->getAllJenis();

            $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

            $this->load->view('tabel_jenis', $data);
            
        } else {
            // Jika validasi berhasil, menambahkan data jenis produk baru
            $this->load->model('m_jenis');
            $this->m_jenis->tambahDataJenis();
            if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil ditambah')</script>";
			}
				echo "<script>window.location='".site_url('tabeljenis')."'</script>";

        }
    } 

    /**
     * Edit Jenis Produk
     *
     * Mengedit data jenis produk berdasarkan ID.
     *
     * @param int $id ID jenis produk
     * @return void
     */
    public function edit($id){
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        // Mendapatkan data jenis produk yang akan diedit
        $this->load->model('m_jenis');
        $data['row'] = $this->m_jenis->getJenisByID($id);

        // Menentukan aturan validasi untuk nama jenis produk
        $this->form_validation->set_rules('nama_jenisproduk','Nama_jenisproduk','required|trim');

         // Memeriksa apakah validasi form berhasil
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, memuat ulang data jenis produk dan pengguna
            $this->load->model('m_jenis');
            $data['jenis'] = $this->m_jenis->getAllJenis();
            $this->load->view('update_jenis', $data);
            
        } else {
            // Jika validasi berhasil, memperbarui data jenis produk
            $this->load->model('m_jenis');
            $this->m_jenis->editDataJenis();
            redirect('tabeljenis');

        }
    }
    
    /**
     * Hapus Jenis Produk
     *
     * Menghapus data jenis produk berdasarkan ID.
     *
     * @param int $id ID jenis produk
     * @return void
     */
    public function hapus($id){
        
        $this->load->model('m_jenis');
        // Menghapus data jenis produk dari database
        $this->m_jenis->hapusDataJenis($id);
        $this->session->set_flashdata('flash', 'Dihapus');

         // Menampilkan pesan keberhasilan penghapusan
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data berhasil dihapus')</script>";
        }
            echo "<script>window.location='".site_url('tabeljenis')."'</script>";
    }
    
    
}