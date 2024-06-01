<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ============================
 * Controller TabelProduk
 * ============================
 *
 * Controller ini berfungsi untuk mengelola data produk, termasuk menampilkan, menambah, mengedit, menghapus, dan menampilkan detail data produk.
 */
class TabelProduk extends CI_Controller
{
    /**
     * Construct
     *
     * Memuat pustaka form_validation dan model m_produk. Juga, memeriksa apakah pengguna sudah login.
     */
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('m_produk');
    }

    /**
     * Halaman Utama
     *
     * Menampilkan halaman utama tabel produk.
     *
     * @return void
     */
    public function index()
    {
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        $this->load->model('m_produk');
        $data['produk'] = $this->m_produk->getAllProduk();

        $this->load->model('m_jenis');
        $data['jenis'] = $this->m_jenis->getAllJenis();

        $this->load->model('m_produsen');
        $data['produsen'] = $this->m_produsen->getAllProdusen();

        $this->load->view('tabel_produk', $data);
    }

    /**
     * Tambah Produk
     *
     * Menambah data produk baru.
     *
     * @return void
     */
    public function tambah() {
        // Konfigurasi untuk upload file gambar
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        // Memeriksa apakah upload file berhasil
        if ( ! $this->upload->do_upload('userfile'))
        {
            // Jika gagal, tampilkan pesan kesalahan
            $error = $this->upload->display_errors();
            echo "Gagal tambah: " . $error;
        }
        else
        {
            // Jika berhasil, simpan data produk ke database
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $nama_produk = $this->input->post('nama_produk', true); 
            $gender = $this->input->post('gender', true);
            $sertifikasi_BPOM = $this->input->post('sertifikasi_BPOM', true);
            $sertifikasi_MUI = $this->input->post('sertifikasi_MUI', true);
            $id_jenisproduk = $this->input->post('id_jenisproduk', true);
            $id_produsen = $this->input->post('id_produsen', true);

            $data = [
                "nama_produk"=>$nama_produk,
                "gender"=>$gender,
                "gambar"=>$gambar,
                "sertifikasi_BPOM"=>$sertifikasi_BPOM, 
                "sertifikasi_MUI"=>$sertifikasi_MUI,
                "id_jenisproduk"=>$id_jenisproduk, 
                "id_produsen"=>$id_produsen
            ];

            // Menyimpan data produk ke database
            $this->db->insert('tb_produk', $data);
            $this->session->set_flashdata('pesan', 
            '<div class="alert alert-success" role="alert">
                Data Berhasil Ditambahkan.
            </div>');
            redirect('tabelproduk');

        }
    }

    /**
     * Edit Produk
     *
     * Mengedit data produk berdasarkan ID.
     *
     * @param int $id ID produk
     * @return void
     */
    public function edit($id){
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        // Mendapatkan data produk yang akan diedit
        $this->load->model('m_produk');
        $data['row'] = $this->m_produk->getProdukByID($id);

        // Menentukan aturan validasi untuk setiap field
        $this->form_validation->set_rules('id_produk','Id_produk','required|trim');
        $this->form_validation->set_rules('nama_produk','Nama_produk','required|trim');
        $this->form_validation->set_rules('gender','Gender','required|trim');
        $this->form_validation->set_rules('sertifikasi_BPOM','Sertifikasi_BPOM','required|trim');
        $this->form_validation->set_rules('sertifikasi_MUI','Sertifikasi_MUI','required|trim');
        $this->form_validation->set_rules('id_jenisproduk','Id_jenisproduk','required|trim');
        $this->form_validation->set_rules('id_produsen','Id_produsen','required|trim');

        // Memeriksa apakah validasi form berhasil
        if ($this->form_validation->run() == false) {
             // Jika validasi gagal, memuat ulang data produk
            $this->load->model('m_produk');
            $data['produk'] = $this->m_produk->getAllProduk();
            $this->load->view('edit_produk', $data);
            
        } else {
            // Jika validasi berhasil, memperbarui data produk
            $this->load->model('m_produk');
            $this->m_produk->editDataProduk();
            redirect('tabelproduk');

        }
    }
    
    /**
     * Hapus Produk
     *
     * Menghapus data produk berdasarkan ID.
     *
     * @param int $id ID produk
     * @return void
     */
    public function hapus($id){
         // Menghapus data produk dari database
        $this->load->model('m_produk');
        $this->m_produk->hapusDataProduk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data berhasil dihapus')</script>";
        }
            echo "<script>window.location='".site_url('tabelproduk')."'</script>";
    }

    /**
     * Ubah Produk
     *
     * Mengubah data produk berdasarkan ID.
     *
     * @param int $id ID produk
     * @return void
     */
    public function ubah($id){
        // Mendapatkan data produk berdasarkan ID
        $data['produk'] = $this->m_produk->getProdukByID($id);
        // Mengubah data produk
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

    /**
     * Detail Produk
     *
     * Menampilkan detail data produk berdasarkan ID.
     *
     * @param int $id ID produk
     * @return void
     */
    public function detail($id){
        // Mendapatkan detail data produk berdasarkan ID
        $this->load->model('m_produk');
        $data['detail'] = $this->m_produk->detailDataProduk($id);

        $this->load->view('detail_produk', $data);
    }
    
}