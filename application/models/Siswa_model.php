<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public function get_data_siswa($id_user)
    {
        return $this->db->get_where('siswa', ['id_user' => $id_user])->row_array();
    }

    public function req_ganti_data()
    {
        $data = [
            'id_siswa' => $this->input->post('id'),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true)),
            'tahun_masuk' => htmlspecialchars($this->input->post('tahun_masuk', true)),
            'is_read' => 0,
            'is_accepted' => 0
        ];

        $this->db->insert('pengajuan_data_profil_siswa', $data);
    }

    public function get_mapel_siswa($id_siswa)
    {
        $q = "SELECT siswa_guru_mapel.id_sgm, mata_pelajaran.nama_mapel, guru_mapel.kode_kelas
                FROM siswa_guru_mapel
                INNER JOIN guru_mapel ON guru_mapel.id_guru_mapel = siswa_guru_mapel.id_guru_mapel
                INNER JOIN mata_pelajaran ON mata_pelajaran.id_mapel = guru_mapel.id_mapel
                WHERE id_siswa = " . $id_siswa;

        return $this->db->query($q)->result_array();
    }

    public function get_nilai_siswa($id_sgm)
    {
        $q = "SELECT guru.nama AS nama_guru, mata_pelajaran.nama_mapel, nilai_tugas, nilai_uts, nilai_uas
                FROM siswa_guru_mapel
                INNER JOIN guru_mapel ON guru_mapel.id_guru_mapel = siswa_guru_mapel.id_guru_mapel
                INNER JOIN guru ON guru.id_guru = guru_mapel.id_guru
                INNER JOIN mata_pelajaran ON mata_pelajaran.id_mapel = guru_mapel.id_mapel
                WHERE id_sgm = " . $id_sgm;

        return $this->db->query($q)->row_array();
    }

    public function get_sgm_data($id_sgm)
    {
        $this->db->select('id_sgm, id_siswa, id_guru_mapel');
        return $this->db->get_where('siswa_guru_mapel', ['id_sgm' => $id_sgm])->row_array();
    }

    public function send_peninjauan_nilai()
    {
        $data = [
            'id_sgm' => htmlspecialchars($this->input->post('id_sgm', true)),
            'id_siswa' => htmlspecialchars($this->input->post('id_siswa', true)),
            'id_guru_mapel' => htmlspecialchars($this->input->post('id_guru_mapel', true)),
            'pesan' => htmlspecialchars($this->input->post('pesan', true))
        ];

        $this->db->insert('peninjauan_nilai', $data);
    }
}
