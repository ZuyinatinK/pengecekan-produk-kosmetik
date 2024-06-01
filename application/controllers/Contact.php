<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * ============================
 * Controller Contact
 * ============================
 *
 * Controller ini berfungsi untuk mengelola halaman kontak. Pengguna harus login untuk mengakses halaman ini.
 */
class Contact extends CI_Controller {
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
     * Halaman Kontak
     *
     * Menampilkan halaman kontak kepada pengguna yang telah login.
     *
     * @return void
     */
    public function index()
	{
		$this->load->view('contact');
	}
}
