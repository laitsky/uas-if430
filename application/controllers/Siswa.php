<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        auth_guard();
        siswa_guard();
        $this->load->model('Siswa_model', 'siswa');
    }

    public function index()
    {
        $id_siswa = $this->siswa->get_data_siswa($this->session->userdata('user_id'))['id_siswa'];
        $data['title'] = "Halaman Siswa";
        $data['mapel'] = $this->siswa->get_mapel_siswa($id_siswa);
        $this->load->view('templates/siswa_header', $data);
        $this->load->view('siswa/index', $data);
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

    public function detail_kelas($id_sgm)
    {
        $data['title'] = "Detail Kelas";
        $data['nilai'] = $this->siswa->get_nilai_siswa($id_sgm);
        
        $this->load->view('templates/siswa_header', $data);
        $this->load->view('siswa/detail_kelas', $data);
        $this->load->view('templates/siswa_footer');
    }

    public function peninjauan_nilai($id_sgm)
    {
        $data['title'] = "Peninjauan Nilai";
        $data['data'] = $this->siswa->get_sgm_data($id_sgm);
        
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/siswa_header', $data);
            $this->load->view('siswa/peninjauan_nilai', $data);
            $this->load->view('templates/siswa_footer');
        } else {
            $this->siswa->send_peninjauan_nilai();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan peninjauan nilai berhasil!</div>');
            redirect("siswa/detail_kelas/$id_sgm");
        }
    }
}
