<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        auth_guard();
        admin_guard();
        $this->load->model('Admin_model', 'admin');
        $this->load->model('Mapel_model', 'mapel');
    }

    public function index()
    {

        $data['title'] = "Halaman Admin";
        $data['unread_count'] = $this->admin->get_pdp_unread_count()['unread_count'];
        $this->load->view('templates/panel_header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/panel_footer');
    }

    public function tambah_guru()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

        if (!($this->form_validation->run())) {
            $data['title'] = "Tambah Guru";
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/tambah_guru');
            $this->load->view('templates/panel_footer');
        } else {
            $this->admin->tambah_guru();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah guru berhasil!</div>');
            redirect('admin/tambah_guru');
        }
    }

    public function tambah_siswa()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
        $this->form_validation->set_rules('tahun_masuk', 'Tahun Masuk', 'trim|required|exact_length[4]');

        if (!($this->form_validation->run())) {
            $data['title'] = "Tambah Siswa";
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/tambah_siswa');
            $this->load->view('templates/panel_footer');
        } else {
            $this->admin->tambah_siswa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah siswa berhasil!</div>');
            redirect('admin/tambah_siswa');
        }
    }

    public function daftar_guru()
    {
        $data['title'] = "Daftar Guru";
        $data['guru'] = $this->admin->get_daftar_guru();

        $this->load->view('templates/panel_header', $data);
        $this->load->view('admin/daftar_guru', $data);
        $this->load->view('templates/panel_footer');
    }

    public function daftar_siswa()
    {
        $data['title'] = "Daftar Siswa";
        $data['siswa'] = $this->admin->get_daftar_siswa();

        $this->load->view('templates/panel_header', $data);
        $this->load->view('admin/daftar_siswa', $data);
        $this->load->view('templates/panel_footer');
    }

    public function sunting_guru($id_guru)
    {
        $data['title'] = "Sunting Profil Guru";
        $data['guru'] = $this->admin->get_guru_by_id($id_guru);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/sunting_guru', $data);
            $this->load->view('templates/panel_footer');
        } else {
            $this->admin->update_guru();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update guru berhasil!</div>');
            redirect('admin/daftar_guru');
        }
    }

    public function hapus_guru($id_guru)
    {
        $this->admin->delete_guru($id_guru);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus guru berhasil!</div>');
        redirect('admin/daftar_guru');
    }

    public function sunting_siswa($id_siswa)
    {
        $data['title'] = "Sunting Profil Guru";
        $data['siswa'] = $this->admin->get_siswa_by_id($id_siswa);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
        $this->form_validation->set_rules('tahun_masuk', 'Tahun masuk', 'trim|required');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/sunting_siswa', $data);
            $this->load->view('templates/panel_footer');
        } else {
            $this->admin->update_siswa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update siswa berhasil!</div>');
            redirect('admin/daftar_siswa');
        }
    }

    public function hapus_siswa($id_siswa) 
    {
        $this->admin->delete_siswa($id_siswa);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus siswa berhasil!</div>');
        redirect('admin/daftar_siswa');
    }

    public function daftar_pdp()
    {
        $data['title'] = "Daftar Pengajuan Penggantian Data Profil";
        $data['uc_guru'] = $this->admin->get_pdp_uc_by_role("pengajuan_data_profil_guru")['unread_count'];
        $data['uc_siswa'] = $this->admin->get_pdp_uc_by_role("pengajuan_data_profil_siswa")['unread_count'];
        $data['pdp_data'] = $this->admin->get_pdp_list();

        $this->load->view('templates/panel_header', $data);
        $this->load->view('admin/daftar_pdp', $data);
        $this->load->view('templates/panel_footer');
    }

    public function detail_pdpg($pdp_id)
    {
        $data['title'] = "Detail Pengajuan Penggantian Data Profil";
        $data['pdp_data'] = $this->admin->get_detail_pdpg($pdp_id);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/detail_pdpg', $data);
            $this->load->view('templates/panel_footer');
        } else {
            $this->admin->terima_pdpg();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Penggantian Data Profil Diterima!</div>');
            redirect('admin/daftar_pdp');
        }
    }

    public function detail_pdps($pdp_id)
    {
        $data['title'] = "Detail Pengajuan Penggantian Data Profil";
        $data['pdp_data'] = $this->admin->get_detail_pdps($pdp_id);

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
        $this->form_validation->set_rules('tahun_masuk', 'Tahun Masuk', 'trim|required');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/detail_pdps', $data);
            $this->load->view('templates/panel_footer');
        } else {
            $this->admin->terima_pdps();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Penggantian Data Profil Diterima!</div>');
            redirect('admin/daftar_pdp');
        }
    }

    public function tolak_pdpg($pdpg_id)
    {
        $data = [
            'is_read' => 1
        ];

        $this->db->update('pengajuan_data_profil_guru', $data, ['id' => $pdpg_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pengajuan Penggantian Data Profil Ditolak!</div>');
        redirect('admin/daftar_pdp');
    }

    public function tolak_pdps($pdps_id)
    {
        $data = [
            'is_read' => 1
        ];

        $this->db->update('pengajuan_data_profil_siswa', $data, ['id' => $pdps_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pengajuan Penggantian Data Profil Ditolak!</div>');
        redirect('admin/daftar_pdp');
    }

    public function tambah_mapel()
    {
        $data['title'] = "Tambah Mata Pelajaran";
        $data['list_mapel'] = $this->mapel->get_mapel_list();

        $this->form_validation->set_rules('nama_mapel', 'Nama Mata Pelajaran', 'trim|required');
        if (!($this->form_validation->run())) {
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/tambah_mapel', $data);
            $this->load->view('templates/panel_footer');
        } else {
            $this->mapel->tambah_mapel();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Mata pelajaran berhasil ditambahkan!</div>');
            redirect('admin/tambah_mapel');
        }
    }

    public function daftar_mapel()
    {
        $data['title'] = "Daftar Mata Pelajaran";
        $data['mapel'] = $this->mapel->get_all_mapel();

        $this->load->view('templates/panel_header', $data);
        $this->load->view('admin/daftar_mapel', $data);
        $this->load->view('templates/panel_footer');
    }

    public function tambah_guru_mapel($id_guru)
    {
        $data['title'] = "Tambah Guru Mapel";
        $data['mapel'] = $this->mapel->get_mapel_list();

        $this->form_validation->set_rules('nama_mapel', 'Nama Mata Pelajaran', 'required');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/tambah_guru_mapel', $data);
            $this->load->view('templates/panel_footer');
        } else {
            $this->mapel->tambah_guru_mapel($id_guru);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengkaitkan guru dengan mapel!</div>');
            redirect('admin/daftar_guru');
        }
    }

    public function mapel($id_siswa)
    {
        $data['title'] = "Mata Pelajaran";
        $data['mapel'] = $this->mapel->get_guru_mapel();
        $data['siswa_mapel'] = $this->mapel->get_siswa_mapel($id_siswa);

        $this->form_validation->set_rules('nama_mapel', 'Nama Mata Pelajaran', 'required');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/mapel', $data);
            $this->load->view('templates/panel_footer');
        } else {
            $this->mapel->tambah_siswa_mapel($id_siswa);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambahkan mapel ke siswa!</div>');
            redirect('admin/daftar_siswa');
        }
    }

    public function detail_mapel($id_guru_mapel)
    {
        $data['title'] = "Detail Mata Pelajaran";
        $data['detail_mapel'] = $this->mapel->get_detail_mapel($id_guru_mapel);

        $this->load->view('templates/panel_header', $data);
        $this->load->view('admin/detail_mapel', $data);
        $this->load->view('templates/panel_footer');
    }

    public function sunting_mapel($id_mapel)
    {
        $data['title'] = "Sunting Mata Pelajaran";
        $data['mapel'] = $this->mapel->get_mapel_by_id($id_mapel);

        $this->form_validation->set_rules('nama_mapel', 'Nama Mata Pelajaran', 'required|trim');

        if (!$this->form_validation->run()) {
            $this->load->view('templates/panel_header', $data);
            $this->load->view('admin/sunting_mapel', $data);
            $this->load->view('templates/panel_footer');
        } else {
            $this->mapel->sunting_mapel();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah nama mapel!</div>');
            redirect('admin/tambah_mapel');
        }
    }

    public function hapus_mapel($id_mapel) 
    {
        $this->db->delete('mata_pelajaran', ['id_mapel' => $id_mapel]);
        $this->db->delete('guru_mapel', ['id_mapel' => $id_mapel]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil menghapus mata pelajaran!</div>');
        redirect('admin/tambah_mapel');
    }

    public function hapus_guru_mapel($id_guru_mapel)
    {
        $this->db->delete('guru_mapel', ['id_guru_mapel' => $id_guru_mapel]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil menghapus mata pelajaran dan guru!</div>');
        redirect('admin/daftar_mapel');
    }
    public function cari_siswa()
    {
        $data['title'] = "Cari Siswa";
        $keyword = htmlspecialchars($this->input->post('keyword', true));
        $data['siswa'] = $this->admin->cari_siswa($keyword);
        $this->load->view('templates/panel_header', $data);
        $this->load->view('admin/cari_siswa', $data);
        $this->load->view('templates/panel_footer');
    }
}