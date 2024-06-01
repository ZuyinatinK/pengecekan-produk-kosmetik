<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * ============================
 * Controller Home
 * ============================
 *
 * Controller ini berfungsi untuk mengelola halaman utama dan detail produk.
 */
class Home extends CI_Controller 
{

    /**
     * Construct
     *
     * Memuat model m_chart dan m_produk yang akan digunakan dalam metode lain.
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('m_chart');
        $this->load->model('m_produk');
    }

    /**
     * Halaman Utama
     *
     * Menampilkan halaman utama dengan statistik jumlah jenis produk, produsen, dan produk.
     *
     * @return void
     */
	public function index()
	{
        $this->load->model('m_chart');

        $data['jmlhjenis'] = $this->m_chart->getJumlahJenis();
        $data['jmlhprodusen'] = $this->m_chart->getJumlahProdusen();
        $data['jmlhproduk'] = $this->m_chart->getJumlahProduk();
        
        $this->load->view('home', $data);
	}

    /**
     * Detail Produk
     *
     * Menampilkan detail produk berdasarkan ID yang diberikan.
     *
     * @param int $id ID produk
     * @return void
     */
	public function product_detail($id)
	{
		$this->load->model('m_produk');
        $data['detail'] = $this->m_produk->detailDataProduk($id);

        $this->load->view('product_detail', $data);
	}

    /**
     * Pencarian Produk
     *
     * Melakukan pencarian produk berdasarkan kata kunci yang dimasukkan oleh pengguna.
     *
     * @return void
     */
    public function search() {
        $this->load->model('m_chart');

        $data['jmlhjenis'] = $this->m_chart->getJumlahJenis();
        $data['jmlhprodusen'] = $this->m_chart->getJumlahProdusen();
        $data['jmlhproduk'] = $this->m_chart->getJumlahProduk();

        $keyword = $this->input->post('keyword');
        
        if (empty($keyword)) {
            // Jika keyword kosong, tampilkan peringatan
            $data['error'] = "Isikan data anda!";
            $data['scrollTo'] = true;
            $this->load->view('home', $data);

        } else {
            $data['products'] = $this->m_produk->searchProduct($keyword);
            
            if (empty($data['products'])) {
                // Jika tidak ada produk yang ditemukan
                $data['scrollTo'] = true;
                $data['message'] = "Tidak ada produk yang ditemukan.";
            }
            
            // Tampilkan hasil pencarian di halaman yang sama (home)
            $data['scrollTo'] = true;
            $this->load->view('home', $data);
        }
    }
    
}
