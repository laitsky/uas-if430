<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        auth_guard();
        guru_guard();
        $this->load->model('Guru_model', 'guru');
    }
    public function index()
    {
        $id_guru = $this->guru->get_data_guru($this->session->userdata('user_id'))['id_guru'];
        $data['title'] = "Halaman Guru";
        $data['kelas'] = $this->guru->get_mapel_guru($id_guru);
        $data['unread_count'] = $this->guru->get_pn_unread_count($id_guru)['unread_count'];

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

    public function detail_kelas($id_guru_mapel)
    {
        $data['title'] = "Detail Kelas";
        $data['detail'] = $this->guru->get_detail_kelas($id_guru_mapel);
        $data['nama_kelas'] = $this->guru->get_nama_kelas($id_guru_mapel)['nama_kelas'];

        $this->load->view('templates/guru_header', $data);
        $this->load->view('guru/detail_kelas', $data);
        $this->load->view('templates/guru_footer');
    }

    public function nilai_siswa($id_sgm)
    {
        $data['title'] = "Nilai Siswa";
        $data['detail'] = $this->guru->get_nilai_siswa($id_sgm);
        $this->form_validation->set_rules('nilai_tugas', 'Nilai Tugas', 'trim|numeric|greater_than_equal_to[0]|less_than_equal_to[100]');
        $this->form_validation->set_rules('nilai_uts', 'Nilai UTS', 'trim|numeric|greater_than_equal_to[0]|less_than_equal_to[100]');
        $this->form_validation->set_rules('nilai_uas', 'Nilai UAS', 'trim|numeric|greater_than_equal_to[0]|less_than_equal_to[100]');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/guru_header', $data);
            $this->load->view('guru/nilai_siswa', $data);
            $this->load->view('templates/guru_footer');
        } else {
            $this->guru->insert_nilai_siswa($id_sgm);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil memasukkan nilai!</div>');
            redirect("guru/nilai_siswa/$id_sgm");
        }
    }

    public function daftar_pn()
    {
        $id_guru = $this->guru->get_data_guru($this->session->userdata('user_id'))['id_guru'];
        $data['title'] = "Daftar Peninjauan Nilai";
        $data['peninjauan_nilai'] = $this->guru->get_pn_list($id_guru);

        $this->load->view('templates/guru_header', $data);
        $this->load->view('guru/daftar_pn', $data);
        $this->load->view('templates/guru_footer');
    }

    public function detail_pn($id_pn)
    {
       $data['title'] = "Detail Peninjauan Nilai"; 
       $data['detail'] = $this->guru->get_pn_detail($id_pn);

       $this->load->view('templates/guru_header', $data);
       $this->load->view('guru/detail_pn', $data);
       $this->load->view('templates/guru_footer');
    }

    public function terima_pn($id_pn)
    {
        $this->guru->terima_pn($id_pn);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menerima peninjauan nilai!</div>');
        redirect("guru/daftar_pn");
    }

    public function tolak_pn($id_pn)
    {
        $this->guru->tolak_pn($id_pn);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil menolak peninjauan nilai!</div>');
        redirect("guru/daftar_pn");
    }

    public function cari_siswa()
    {
        $id_guru = $this->guru->get_data_guru($this->session->userdata('user_id'))['id_guru'];
        $keyword = htmlspecialchars($this->input->post('keyword', true));
        $data['title'] = "Cari Siswa Ajar";
        $data['siswa'] = $this->guru->cari_siswa($keyword, $id_guru);

        $this->load->view('templates/guru_header', $data);
        $this->load->view('guru/cari_siswa', $data);
        $this->load->view('templates/guru_footer');
    }
}
