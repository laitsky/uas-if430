<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model {
    public function get_data_guru($id_user)
    {
        return $this->db->get_where('guru', ['id_user' => $id_user])->row_array();
    }
    
    public function req_ganti_data()
    {
        $data = [
            'id_guru' => $this->input->post('id'),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true)),
            'is_read' => 0,
            'is_accepted' => 0
        ];

        $this->db->insert('pengajuan_data_profil_guru', $data);
    }

    public function get_mapel_guru($id_guru) 
    {
        $q = "SELECT guru_mapel.id_guru_mapel, mata_pelajaran.nama_mapel, guru_mapel.kode_kelas
                FROM guru_mapel
                INNER JOIN mata_pelajaran ON mata_pelajaran.id_mapel = guru_mapel.id_mapel
                WHERE id_guru = $id_guru
                ORDER BY 1";

        return $this->db->query($q)->result_array();
    }

    public function get_nama_kelas($id_guru_mapel) 
    {
        $q = "SELECT CONCAT(mata_pelajaran.nama_mapel, ' ', guru_mapel.kode_kelas) as nama_kelas
                FROM mata_pelajaran
                INNER JOIN guru_mapel ON guru_mapel.id_mapel = mata_pelajaran.id_mapel
                WHERE guru_mapel.id_guru_mapel = $id_guru_mapel";

        return $this->db->query($q)->row_array();
    }
    public function get_detail_kelas($id_guru_mapel)
    {
        $q = "SELECT siswa.nama AS nama_siswa, siswa_guru_mapel.nilai_tugas, siswa_guru_mapel.nilai_uts, siswa_guru_mapel.nilai_uas ,siswa_guru_mapel.id_sgm  AS id_nilai_siswa
                FROM siswa_guru_mapel
                INNER JOIN siswa ON siswa.id_siswa = siswa_guru_mapel.id_siswa
                WHERE id_guru_mapel = $id_guru_mapel
                ORDER BY 1";

        return $this->db->query($q)->result_array();
    }

    public function get_nilai_siswa($id_sgm)
    {
        $q = "SELECT siswa.nama AS nama_siswa, CONCAT(mata_pelajaran.nama_mapel, ' ', guru_mapel.kode_kelas) AS nama_kelas, nilai_tugas, nilai_uts, nilai_uas
                FROM siswa_guru_mapel
                INNER JOIN siswa ON siswa.id_siswa = siswa_guru_mapel.id_siswa
                INNER JOIN guru_mapel ON siswa_guru_mapel.id_guru_mapel = guru_mapel.id_guru_mapel
                INNER JOIN mata_pelajaran ON  mata_pelajaran.id_mapel = guru_mapel.id_mapel
                WHERE id_sgm = $id_sgm";

        return $this->db->query($q)->row_array();
    }

    public function insert_nilai_siswa($id_sgm)
    {
        $data = [
            'nilai_tugas' => htmlspecialchars($this->input->post('nilai_tugas', true)),
            'nilai_uts' => htmlspecialchars($this->input->post('nilai_uts', true)),
            'nilai_uas' => htmlspecialchars($this->input->post('nilai_uas', true))
        ];
        
        $this->db->update('siswa_guru_mapel', $data, ['id_sgm' => $id_sgm]);
    }

    // pn adalah table peninjauan_nilai

    public function get_pn_unread_count($id_guru)
    {
        $q = "SELECT COUNT(`is_read`) AS `unread_count`
                FROM `peninjauan_nilai`
                WHERE `is_read` = 0
                AND `id_guru_mapel` IN (SELECT `guru_mapel`.`id_guru_mapel`
                                        FROM `guru_mapel`
                                        WHERE `id_guru` = $id_guru)";

        return $this->db->query($q)->row_array();
    }

    public function get_pn_list($id_guru)
    {
        $q = "SELECT pn.id, siswa.nama, CONCAT(mp.nama_mapel, ' ', guru_mapel.kode_kelas) AS nama_kelas, pn.is_read, pn.is_accepted, pn.tanggal_pengajuan
                FROM peninjauan_nilai AS pn
                INNER JOIN siswa ON siswa.id_siswa = pn.id_siswa
                INNER JOIN guru_mapel ON guru_mapel.id_guru_mapel = pn.id_guru_mapel
                INNER JOIN mata_pelajaran AS mp ON mp.id_mapel = guru_mapel.id_mapel
                WHERE pn.id_guru_mapel IN (SELECT guru_mapel.id_guru_mapel
                                            FROM guru_mapel
                                            WHERE guru_mapel.id_guru = $id_guru)
                ORDER BY pn.tanggal_pengajuan";

        return $this->db->query($q)->result_array();
    }

    public function get_pn_detail($id_pn)
    {
        $q = "SELECT pn.id, pn.id_sgm, siswa.nama, CONCAT(mp.nama_mapel, ' ', guru_mapel.kode_kelas) AS nama_kelas, pn.pesan, pn.is_read, pn.is_accepted
                FROM peninjauan_nilai AS pn
                INNER JOIN siswa ON siswa.id_siswa = pn.id_siswa
                INNER JOIN guru_mapel ON guru_mapel.id_guru_mapel = pn.id_guru_mapel
                INNER JOIN mata_pelajaran AS mp ON mp.id_mapel = guru_mapel.id_mapel
                WHERE pn.id = $id_pn";

        return $this->db->query($q)->row_array();
    }

    public function terima_pn($id_pn)
    {
        $this->db->where('id', $id_pn);
        $this->db->update('peninjauan_nilai', ['is_read' => 1, 'is_accepted' => 1]);
    }

    public function tolak_pn($id_pn)
    {
        $this->db->where('id', $id_pn);
        $this->db->update('peninjauan_nilai', ['is_read' => 1, 'is_accepted' => 0]);
    }

    public function cari_siswa($keyword, $id_guru)
    {
        $q = "SELECT id_sgm, siswa.nama, CONCAT(mp.nama_mapel, ' ', guru_mapel.kode_kelas) AS nama_kelas, nilai_tugas, nilai_uts, nilai_uas
                FROM siswa_guru_mapel
                INNER JOIN siswa ON siswa.id_siswa = siswa_guru_mapel.id_siswa
                INNER JOIN guru_mapel ON guru_mapel.id_guru_mapel = siswa_guru_mapel.id_guru_mapel
                INNER JOIN mata_pelajaran AS mp ON mp.id_mapel = guru_mapel.id_mapel
                WHERE siswa_guru_mapel.id_guru_mapel IN (SELECT guru_mapel.id_guru_mapel
                                                         FROM guru_mapel
                                                         WHERE guru_mapel.id_guru = $id_guru)
                AND siswa.nama LIKE '%$keyword%'
                ORDER BY siswa.nama";

        return $this->db->query($q)->result_array();
    }
}