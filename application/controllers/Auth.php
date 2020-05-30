<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if (!($this->form_validation->run())) {
            $data['title'] = "Masuk";
            $this->load->view('templates/header', $data);
            $this->load->view('auth/index');
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nama' => $user['nama'],
                        'user_id' => $user['id'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } elseif ($user['role_id'] == 2) {
                        redirect('guru');
                    } elseif ($user['role_id'] == 3) {
                        redirect('siswa');
                    } else {
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert"><p class="font-bold">Perhatian</p><p>Password yang kamu masukkan salah!</p></div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert"><p class="font-bold">Perhatian</p><p>Akun kamu tidak terdaftar!</p></div>');
                redirect('auth');
            }
        }
    }

    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if (!($this->form_validation->run())) {
            $data['title'] = "Daftar";
            $this->load->view('templates/header', $data);
            $this->load->view('auth/daftar');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 1
            ];

            $this->db->insert('user', $data);
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert"><p class="font-bold">Perhatian</p><p>Kamu berhasil logout!</p></div>');
        redirect('auth');
    }
}
