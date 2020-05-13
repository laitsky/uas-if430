<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model', 'guru');
    }
    public function index()
    {
        $data['title'] = "Halaman Guru";
        $this->load->view('templates/guru_header', $data);
        $this->load->view('guru/index');
        $this->load->view('templates/guru_footer');
    }

    public function profil()
    {
        $data['title'] = "Profil Saya";
        $data['guru'] = $this->guru->get_data_guru($this->session->userdata('user_id'));
        $this->load->view('templates/guru_header', $data);
        $this->load->view('guru/profil', $data);
        $this->load->view('templates/guru_footer');
    }

    public function sunting_profil()
    {
        $data['title'] = "Pengajuan Penggantian Data Profil";
        $data['guru'] = $this->guru->get_data_guru($this->session->userdata('user_id'));

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/guru_header', $data);
            $this->load->view('guru/sunting_profil', $data);
            $this->load->view('templates/guru_footer');
        } else {
            $this->guru->req_ganti_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan penggantian data profil berhasil!</div>');
            redirect('guru/profil');
        }
    }
}
