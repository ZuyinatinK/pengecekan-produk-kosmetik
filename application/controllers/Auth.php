<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ============================
 * Controller Auth
 * ============================
 *
 * Controller ini berfungsi untuk mengelola proses otentikasi pengguna, termasuk login, registrasi, dan logout.
 */
class Auth extends CI_Controller
{
    /**
     * Construct
     *
     * Memuat library form_validation untuk validasi form.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    /**
     * Halaman Login
     *
     * Menampilkan form login dan memvalidasi input. Jika validasi berhasil, panggil metode _login.
     *
     * @return void
     */
    public function index()
    {
        // Aturan validasi untuk email dan password
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            // Menampilkan halaman login jika validasi gagal
            $this->load->view('auth/login');
        }else {
            // Memanggil metode _login jika validasi berhasil
            $this->_login();
        }
    }
    
    /**
     * Proses Login
     *
     * Method private untuk menangani proses login pengguna.
     *
     * @return void
     */
    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Mengambil data pengguna berdasarkan email
        $user = $this->db->get_where('user',['email'=> $email])->row_array();
        
        if ($user) {
            // Memeriksa apakah akun aktif
            if ($user['is_active'] == 1) {
                // Memeriksa password
                if (password_verify($password, $user['password'])) {
                    // Menyimpan data sesi
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    // Mengarahkan pengguna berdasarkan role_id
                    if ($user['role_id'] == 0) {
                        redirect('auth');
                    } else if ($user['role_id'] == 1){
                        redirect('dashboard');
                    }else{
                        redirect('auth');
                    }
                    
                    redirect('dashboard');
                } else {
                    // Jika password salah
                    $this->session->set_flashdata('message', 
                    '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('auth');
                }

            } else {
                // Jika akun belum diaktifkan
                $this->session->set_flashdata('message', 
                '<div class="alert alert-danger" role="alert">Email Belum Mendapat Persetujuan!</div>');
                redirect('auth');
            }
            
        } else {
            // Jika email tidak terdaftar
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar!</div>');
            redirect('auth');
        }
        
    }

    /**
     * Halaman Registrasi
     *
     * Menampilkan form registrasi dan memvalidasi input. Jika validasi berhasil, simpan data pengguna baru.
     *
     * @return void
     */
    public function registrasi()
    {
        // Aturan validasi untuk nama, email, dan password
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email ini sudah mempunyai akun yang terdaftar!'
        ]);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
            'maches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
        
        
        if($this->form_validation->run() == false){
            // Menampilkan halaman registrasi jika validasi gagal
            $data['title'] = 'Registrasi';
            $this->load->view('auth/registrasi', $data);
        }else{
            // Menyimpan data pengguna baru jika validasi berhasil
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), 
                PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible alert-alt solid fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button><strong>Success!</strong> Akun Sudah Didaftarkan</div>');
            redirect('auth/registrasi');
        }

    }

    /**
     * Logout
     *
     * Menghapus data sesi pengguna dan mengarahkan kembali ke halaman login.
     *
     * @return void
     */
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible alert-alt solid fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button><strong>Success!</strong> Akun Berhasil Logout!</div>');
        redirect('auth');
    }

    /**
     * Menampilkan Detail Pengguna
     *
     * Memuat model pengguna dan mengambil detail pengguna berdasarkan ID.
     *
     * @param int $id ID pengguna
     * @return void
     */
    public function detailUser($id){
        
        $this->load->model('m_user');
        $this->User_model->getUserByID($id);

    }
}