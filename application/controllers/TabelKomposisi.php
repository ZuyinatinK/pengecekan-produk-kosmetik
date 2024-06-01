<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ============================
 * Controller TabelKomposisi
 * ============================
 *
 * Controller ini berfungsi untuk mengelola data komposisi produk, termasuk menampilkan, menambah, mengedit, menghapus, dan menampilkan detail data komposisi produk.
 */
class TabelKomposisi extends CI_Controller
{
    /**
     * Construct
     *
     * Memuat pustaka form_validation dan model m_komposisi. Juga, memeriksa apakah pengguna sudah login.
     */
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('m_komposisi');
    }

    /**
     * Halaman Utama
     *
     * Menampilkan halaman utama tabel komposisi produk.
     *
     * @return void
     */
    public function index()
    {
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        $this->load->model('m_komposisi');
        $data['komposisi'] = $this->m_komposisi->getAllKomposisi();

        $this->load->model('m_produk');
        $data['produk'] = $this->m_produk->getAllProduk();

        $this->load->view('tabel_komposisi', $data);
    }

    /**
     * Tambah Komposisi Produk
     *
     * Menambah data komposisi produk baru.
     *
     * @return void
     */
    public function tambah(){
        // Menentukan aturan validasi untuk setiap field
        $this->form_validation->set_rules('nama_komposisi','Nama_komposisi','required|trim');
        $this->form_validation->set_rules('id_produk','Id_produk','required|trim');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required|trim');
        $this->form_validation->set_rules('fungsi','Fungsi','required|trim');
        $this->form_validation->set_rules('efek','Efek','required|trim');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim');

        // Memeriksa apakah validasi form berhasil
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, memuat ulang data komposisi, produk, dan pengguna
            $this->load->model('m_komposisi');
            $data['komposisi'] = $this->m_komposisi->getAllKomposisi();
            $this->load->model('m_produk');
            $data['produk'] = $this->m_produk->getAllProduk();

            $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

            $this->load->view('tabel_komposisi', $data);
            
        } else {
            // Jika validasi berhasil, menambahkan data komposisi produk baru
            $this->load->model('m_komposisi');
            $this->m_komposisi->tambahDataKomposisi();
            if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil ditambah')</script>";
			}
				echo "<script>window.location='".site_url('tabelkomposisi')."'</script>";
        }
    }

    /**
     * Edit Komposisi Produk
     *
     * Mengedit data komposisi produk berdasarkan ID.
     *
     * @param int $id ID komposisi produk
     * @return void
     */
    public function edit($id){
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        // Mendapatkan data komposisi produk yang akan diedit
        $this->load->model('m_komposisi');
        $data['row'] = $this->m_komposisi->getKomposisiByID($id);

        // Menentukan aturan validasi untuk setiap field
        $this->form_validation->set_rules('id_komposisi','Id_komposisi','required|trim');
        $this->form_validation->set_rules('nama_komposisi','Nama_komposisi','required|trim');
        $this->form_validation->set_rules('id_produk','Id_produk','required|trim');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required|trim');
        $this->form_validation->set_rules('fungsi','Fungsi','required|trim');
        $this->form_validation->set_rules('efek','Efek','required|trim');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim');
        $this->form_validation->set_rules('status_aman','Status_aman','required|trim');
        $this->form_validation->set_rules('status_halal','Status_halal','required|trim');

        // Memeriksa apakah validasi form berhasil
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, memuat ulang data komposisi
            $this->load->model('m_komposisi');
            $data['komposisi'] = $this->m_komposisi->getAllKomposisi();
            $this->load->view('update_komposisi', $data);
            
        } else {
            // Jika validasi berhasil, memperbarui data komposisi produk
            $this->load->model('m_komposisi');
            $this->m_komposisi->editDataKomposisi();
            redirect('tabelkomposisi');

        }
    }
    
    /**
     * Hapus Komposisi Produk
     *
     * Menghapus data komposisi produk berdasarkan ID.
     *
     * @param int $id ID komposisi produk
     * @return void
     */
    public function hapus($id){
        // Menghapus data komposisi produk dari database
        $this->load->model('m_komposisi');
        $this->m_komposisi->hapusDataKomposisi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data berhasil dihapus')</script>";
        }
            echo "<script>window.location='".site_url('tabelkomposisi')."'</script>";
    }

    /**
     * Ubah Komposisi Produk
     *
     * Mengubah data komposisi produk berdasarkan ID.
     *
     * @param int $id ID komposisi produk
     * @return void
     */
    public function ubah($id){
        // Mendapatkan data komposisi produk berdasarkan ID
        $data['komposisi'] = $this->m_komposisi->getKomposisiByID($id);
        // Mengubah data komposisi produk
        $data = [
            "nama_komposisi" => $this->input->post('nama_komposisi', true),
            "id_produk" => $this->input->post('id_produk', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "fungsi" => $this->input->post('fungsi', true),
            "efek" => $this->input->post('efek', true),
            "keterangan" => $this->input->post('keterangan', true),
            "status_aman" => $this->input->post('status_aman', true),
            "status_halal" => $this->input->post('status_halal', true)
        ];

        $this->db->insert('tb_komposisi',$data);
    }

    /**
     * Detail Komposisi Produk
     *
     * Menampilkan detail data komposisi produk berdasarkan ID.
     *
     * @param int $id ID komposisi produk
     * @return void
     */
    public function detail($id) {
         // Mendapatkan detail data komposisi produk berdasarkan ID
        $this->load->model('m_komposisi');
        $data['detail'] = $this->m_komposisi->detailDataKomposisi($id);

        $this->load->view('detail_komposisi', $data);
    }
    
}