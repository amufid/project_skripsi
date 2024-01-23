<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_login');
        $this->load->model('m_user');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('data');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            //validation success
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->m_user->getDataUser($email, $password);

        if ($user) {
            // Jika email dan password cocok, buat session dan redirect ke halaman beranda
            $data = array(
                'user_id' => $user->id,
                'email' => $user->email,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            redirect('data');
        } else {
            // Jika email dan password tidak cocok, tampilkan pesan error
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau password salah! </div>');
            redirect('auth');
        }
    }
    public function registrasi()
    {
        // Validasi inputan
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        // |valid_email|is_unique[user.email]', ['is_unique' => 'Email telah terdaftar!']
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali halaman registrasi
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
            $this->load->view('auth/registrasi');
        } else {
            // Jika validasi berhasil, tambahkan user ke database
            $this->fungsi_registrasi();
            // echo "Berhasil";
        }
    }

    public function fungsi_registrasi()
    {
        $config['upload_path'] = './assets/foto/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal upload foto!</div>');
            $this->load->view('auth/registrasi');
        } else {
            $foto = $this->upload->data();
            $foto = $foto['file_name'];
            $nama = htmlspecialchars($this->input->post('nama', true));
            $email = htmlspecialchars($this->input->post('email', true));
            $password = $this->input->post('password', true);
            $data = [
                'nama' => $nama,
                'email' => $email,
                'foto' => $foto,
                'password' => $password
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda berhasil dibuat. Silahkan ulangi login!</div>');
            redirect('auth/profil');
        }
    }
    public function profil()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('auth/profil', $data);
        $this->load->view('template/footer');
    }
    public function tampil_registrasi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('auth/registrasi', $data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
    public function edit_profil()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $upload_image = $_FILES['foto'];
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $nama_file = $data['user']['id'] . '-' . $nama;

        $file = $_FILES['foto'];
        if ($file['name'] == '') {
            $data = array(
                'nama' => $nama
            );
        } else {
            $config['upload_path'] = './assets/foto/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $nama_file;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {

            } else {
                $nama_file = $this->upload->data('file_name');
                $data = array(
                    'nama' => $nama,
                    'foto' => $nama_file
                );


            }
        }
        $this->db->set($data);
        $this->db->where('email', $email);
        $this->db->update('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil telah diperbarui!</div>');
        redirect('auth/profil');
    }
    public function tampil_edit_profil()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('auth/edit_profil', $data);
        $this->load->view('template/footer');
    }
}