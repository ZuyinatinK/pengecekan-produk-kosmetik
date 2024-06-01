<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ============================
 * Controller Admin
 * ============================
 *
 * Controller ini berfungsi untuk mengelola halaman admin, termasuk validasi sesi pengguna dan pemuatan data dashboard.
 */
class Admin extends CI_Controller
{
    /**
     * Construct
     *
     * construct ini memastikan bahwa pengguna telah masuk (session 'email' ada), jika tidak, pengguna akan dialihkan ke halaman 'auth'.
     */
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        
    }

    /**
     * Halaman Utama Dashboard Admin
     *
     * Metode ini memuat model 'm_chart' untuk mendapatkan jumlah jenis produk, produsen, dan produk.
     * Kemudian mengambil data pengguna dari tabel 'user' berdasarkan sesi 'email' yang aktif.
     * Data yang diperoleh akan ditampilkan pada halaman dashboard.
     *
     * @return void
     */
    public function index()
    {
        // Memuat model m_chart
        $this->load->model('m_chart');
        
        // Mengambil data pengguna berdasarkan sesi email
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
        // Mengambil jumlah jenis produk, produsen, dan produk
        $data['jmlhjenis'] = $this->m_chart->getJumlahJenis();
        $data['jmlhprodusen'] = $this->m_chart->getJumlahProdusen();
        $data['jmlhproduk'] = $this->m_chart->getJumlahProduk();

        // Memuat view dashboard dengan data yang telah dikumpulkan
        $this->load->view('dashboard' , $data);
    }
}