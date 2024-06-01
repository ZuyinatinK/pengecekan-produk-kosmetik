<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ============================
 * Controller Dashboard
 * ============================
 *
 * Controller ini berfungsi untuk mengelola halaman dashboard. Pengguna harus login untuk mengakses halaman ini.
 */
class Dashboard extends CI_Controller
{
    /**
     * Construct
     *
     * Memeriksa apakah pengguna telah login. Jika belum, pengguna akan diarahkan ke halaman login.
     */
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        
    }
    
    /**
     * Halaman Utama Dashboard
     *
     * Menampilkan halaman dashboard dengan informasi pengguna dan statistik dari berbagai model.
     *
     * @return void
     */
    public function index()
    {
        // Mendapatkan data pengguna dari sesi
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        // Memuat model m_chart
        $this->load->model('m_chart');

        // Mengambil data statistik dari model m_chart
        $data['jmlhjenis'] = $this->m_chart->getJumlahJenis();
        $data['jmlhprodusen'] = $this->m_chart->getJumlahProdusen();
        $data['jmlhproduk'] = $this->m_chart->getJumlahProduk();
        
        // Memuat view dashboard dengan data yang telah diambil
        $this->load->view('dashboard', $data);
    }
}