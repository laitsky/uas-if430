<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model', 'siswa');
    }

    public function index()
    {
        $data['title'] = "Halaman Siswa";
        $this->load->view('templates/siswa_header', $data);
        $this->load->view('siswa/index');
        $this->load->view('templates/siswa_footer');
    }


    public function profil()
    {
        $data['title'] = "Profil Saya";
        $data['siswa'] = $this->siswa->get_data_siswa($this->session->userdata('user_id'));
        $this->load->view('templates/siswa_header', $data);
        $this->load->view('siswa/profil', $data);
        $this->load->view('templates/siswa_footer');
    }

    public function sunting_profil()
    {
        $data['title'] = "Pengajuan Penggantian Data Profil";
        $data['siswa'] = $this->siswa->get_data_siswa($this->session->userdata('user_id'));

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
        $this->form_validation->set_rules('tahun_masuk', 'Tahun Masuk', 'trim|required');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/siswa_header', $data);
            $this->load->view('siswa/sunting_profil', $data);
            $this->load->view('templates/siswa_footer');
        } else {
            $this->siswa->req_ganti_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan penggantian data profil berhasil!</div>');
            redirect('siswa/profil');
        }
    }
}
